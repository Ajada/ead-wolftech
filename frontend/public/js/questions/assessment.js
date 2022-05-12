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

    let result = [...new Set(arr)];

    $.ajax({
        // beforeSend: ()=>{
            
        // },
        url: '/api/assessment/response',
        method: 'post',
        dataType: 'json',
        data: {
            "result" : result,
            "course_name" : $('#course_name').text(),
            "user" : $('#user').text()
        },
    }).done((data)=>{
        alert('Tentativa finalizada com sucesso !');
        if(data.success){
            window.location.href = '/';
        }
    });

    return false;

});      
