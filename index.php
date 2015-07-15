<!DOCTYPE html>
<html>
  <head>
    <title>This is your tester template</title>

    <!-- CDN Libraries -->
    <!-- jQuery -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    <!-- Bootstrap -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    
    <!-- Greensock -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>

    <!-- Tester styles -->
    <link type="text/css" rel="stylesheet" href="css/styles.css" />    
    <!-- Tester javascript -->
    <script src="js/tester.js"></script>

  </head>
  <body>
    <div class="mask"></div>
    <div class=" wrapper">
      <div class="upper slide-panel">
        <div class="click-wrap">
          <a href="#clickme" class="click-me"><i class="icon-gift"></i></a>
        </div>
        <div class="channel"></div>
      </div>
      <div class="lower slide-panel">
        <div class="channel"></div>
        <div class="click-wrap"><a></a></div>
      </div>
      <div class="behind">
        <div class="video-wrapper">
          <div class="embed-responsive embed-responsive-16by9">
          <!-- <iframe  class="embed-responsive-item" src="https://www.youtube.com/embed/ztoSUhbNntQ?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe> -->
          <div id="player"></div>

        </div>
      </div>
    </div>
  <body>
</html>
