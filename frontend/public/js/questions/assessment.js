arr = [];
$('.assessment-btn').click(function(){
    var sel = $("input[name='selector']"); 

    for (let i = 0; i < sel.length; i++) {
        if(sel[i].checked == true){
            $.each(sel[i], ()=>{
                arr.push(sel[i].id);
            })
        }
    }   

    const result = [...new Set(arr)];
    
    $.ajax({
        beforeSend: ()=>{
            $('.container-modal').fadeIn();
            $('#content-modal').append("<h1>Analisando sua resposta...</h1>");                
        },
        url: '/api/assessment/response',
        method: 'post',
        dataType: 'json',
        data: {
            "result" : result,
            "course_name" : $('#course_name').text(),
            "user" : $('#user').text()
        },
    }).done((data)=>{
        if(data.accredited == true){
            generateCertified(data);
            setTimeout(() => {             
                $('#notify').append("<div class='status-bar'><div class='bar-progress' style='background-color: rgb(48, 214, 48); width: "+Number(data.status * 2)+"0%'></div></div>  <h3><strong>Parabéns<strong/> você alcançou nota minima para concluir a prova. <br> Seu certificado esta sendo gerado aguarde...<h3/> <br> <a style='font-size: 20px;' href='/'><i class='fa-solid fa-house-chimney'></i> Voltar para o inicio</a>");
            }, 2500);
            setTimeout(()=>{
                window.location.href = 'http://certificados.wolftechti.com.br/certifications/create_pdf.php';
            }, 5500);
        }else{
            setTimeout(() => {
                $('#notify').append("<div class='status-bar'><div class='bar-progress' style='background-color: rgb(255, 30, 30); width: "+Number(data.status * 2)+"0%'></div></div>  <h3>Infelizmente você não não alcançou a pontuação minima de 8 pontos para concluir a prova. <br> Reveja as video aulas e tente novamente.<h3/> <br> <a style='font-size: 20px;' href='/'><i class='fa-solid fa-house-chimney'></i> Voltar para o inicio</a>");
            }, 2500);
        }
    });

    return false;

});      

function generateCertified(data)
{
    var day = new Date;
    var dia = String(day.getDate()).padStart(2, '0');
    var mes = String(day.getMonth() + 1).padStart(2, '0');
    var ano = day.getFullYear();
    var dia = dia+'/'+mes+'/'+ano;

    $.ajax({
        url: 'http://certificados.wolftechti.com.br/certifications/',
        method: 'post',
        dataType: 'json',
        data: {
            "acao" : "cadastrar",
            "name_studant" : data.name_studant,
            "cpf_studant" : data.cpf_studant,
            "nr_type" : data.nr_number,
            "local_date" : "Adrianópolis/PR, "+dia,
            "content" : data.content,
        }
    });
}


