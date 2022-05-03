// $('.form-btn').click(function(){
//     const response = $(this).text();
//     const name = $('#user').text();
//     const class_link = $('#player').attr('data-vide-id');

//     $.ajax({
//         url: '/api/questions_response',
//         method: 'post',
//         dataType: 'json',
//         data: {
//             "name" : name,
//             "class_score" : {
//                 "class_link" : class_link,
//                 "response" : response
//             }
//         }
//     }).done((data)=>{
//         if(data.success == true)
//             $('.container-modal').fadeOut();
//     }); 
    

//     return false

// })