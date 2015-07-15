var player;
function onYouTubeIframeAPIReady() {
  player = new YT.Player('player', {
    height: '390',
    width: '640',
    videoId: 'ztoSUhbNntQ',
    playerVars: {'autoplay':0,'controls':0,rel:0},
    events: {
      'onReady': onPlayerReady,
      'onStateChange': onPlayerStateChange
    }
  });
}

function onPlayerReady(event) {
  // Do some stuff here to fade in the button?
  TweenLite.to($('.mask'),3,{opacity:0,ease:Linear.easeNone,onComplete:function() {
    $('.mask').hide();
  }})
  $(window).on('resize',centerFrame).trigger('resize');
}

var done = false;
function onPlayerStateChange(event) {
  
}

function playVideo() {
  player.playVideo();
}

function stopVideo() {
  player.stopVideo();
}

// Vertical centering for iframe
function centerFrame() {
  $('.video-wrapper').css({
    'margin-top': Math.round(($(window).height() - $('#player').height())/2)+'px'
  })
}


(function($) {
  $(function() {
    $('.click-me').on('click',function(e) {
      e.preventDefault();

      $(this).addClass('active');

      var button = $('.click-wrap');
      var upper = $('.upper');
      var lower = $('.lower');
      var timeline = new TimelineMax({paused:true});

      var t = 5;

      timeline
        .to(button,t,{rotation:180},0)
        .to(upper,t,{yPercent:-150},t)
        .to(lower,t,{yPercent:150},t)
        .addCallback(playVideo,t)
        .play();
    })



    // Youtube API
    var tag = document.createElement('script');
    tag.src = "https://www.youtube.com/iframe_api";
    var firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

  });




})(jQuery)