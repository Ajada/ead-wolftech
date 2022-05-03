$('.btn-login').click(()=>{

    let request = {
        user: $('#user').val(),
        password: $('#pass').val(),
        _token: $('input[name="_token"]').val()
    }

    $.ajax({
        beforeSend: ()=>{
            $('.loading').toggle();
        },
        url: '/login',
        method: 'post',
        dataType: 'json',
        data: request
    }).done((data)=>{
        if(data.success)
            window.location.href = '/home';
        else
            alert(data.menssage);

        $('.loading').toggle();
    });

    return false;
});
