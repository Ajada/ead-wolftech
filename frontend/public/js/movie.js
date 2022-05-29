var tag = document.createElement('script');
var firstScriptTag = document.getElementsByTagName('script')[0];

tag.src = 'https://www.youtube.com/iframe_api';
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

var playerDiv = $('#player');
var player = null;
var videoDuration = 0;
var videoTime = 0;
var interval = null;
var fireAt = 180;

function onYouTubeIframeAPIReady() {
    player = new YT.Player('player', {
        height: 450, 
        width: 800,
        videoId: $(playerDiv).attr('data-vide-id'),
        playerVars: { 
            rel: 0, 
            showinfo: 0, 
            autoplay: 1, 
            controls: 1
        },
        events: {
            'onReady' : onPlayerReady
        }
    });
}

function onPlayerReady(){
    videoDuration = parseInt(player.getDuration()); //pega a duração total do video
    interval = setInterval(discoverTime, 1100);
}

function discoverTime(){    
    if(player && player.getCurrentTime()){
        videoTime = parseInt(player.getCurrentTime());
    }

    // if(videoTime < videoDuration && videoTime === fireAt){
    //     player.pauseVideo();
    //     $('.container-modal').fadeIn()
    // }

    if(videoTime == videoDuration - 30){
        $('.container-modal').fadeIn()
        player.pauseVideo();
    }

    if(videoTime == videoDuration - 5){
        $('.final_assessment').css({'display':'block'})
        $('.toogle').fadeIn();
    }

    if(videoTime > videoDuration){
        clearInterval(interval);
    }
}

$('.btn0').click(function(){
    const _response = $(this).text();
    const name = $('#user').text();
    const classLink = $('#player').attr('data-vide-id');

    $.ajax({
        url: '/api/questions_response',
        method: 'post',
        dataType: 'json',
        data: {
            "name" : name,
            "class_score" : {"class_link" : classLink, "response" : _response}
        }
    }).done((data)=>{
        // if(data.create == true || data.exist == true || data.updated == true){
        player.playVideo();
        // }
        $('.container-modal').fadeOut() 
    }); 
    
    return false
});

