@extends('video.layout')

@section('styles')
  <link href="/public/vendor/video.js/video-js.min.css" rel="stylesheet">
@endsection

@section('content')
  <div class="container" data-md5={{ $content['_md5'] }}>

    <div class="row row-cols-1">
      <div class="col mb-3">
        <div class="alert alert-secondary mb-0" role="alert">
          <h4 class="alert-heading">{{ $content['content_title'] ?? '' }}</h4>
        </div>
      </div>
      <div class="col mb-3">
        <video id="my-player" class="video-js vjs-default-skin vjs-big-play-centered vjs-16-9" preload="auto" controls
          data-setup='{"fluid": true}'>
          <source src="{{ $content['content_text'] }}" type="application/x-mpegURL">
        </video>
      </div>


    </div>
  </div>
  <div class="container">

  </div>
@endsection
@section('scripts')
  <script src="/public/vendor/video.js/video.min.js"></script>
  {{-- <script src="/public/vendor/videojs-contrib-hls/videojs-contrib-hls.min.js"></script> --}}
  <script>
    var player = videojs('my-player', {
      autoplay: true
    }, function onPlayerReady() {
      videojs.log('Your player is ready!');

      // In this context, `this` is the player that was created by Video.js.
      this.play();

      // How about an event listener?
      this.on('ended', function() {
        videojs.log('Awww...over so soon?!');
      });
    });
    //reurn false 禁止函数内部执行其他的事件或者方法
    var vol = 0.1;
    //1代表100%音量，每次增减0.1
    var time = 10;
    //单位秒，每次增减10秒
    var videoElement = document.getElementById("my-player");
    console.log(videoElement.paused);
    document.onkeyup = function(event) {
      //键盘事件
      console.log()
      console.log("keyCode:" + event.keyCode);
      var e = event || window.event || arguments.callee.caller.arguments[0];
      //鼠标上下键控制视频音量
      if (e && e.keyCode === 38) {
        // 按 向上键
        videoElement.volume !== 1 ? videoElement.volume += vol : 1;
        return false;
      } else if (e && e.keyCode === 40) {
        // 按 向下键
        videoElement.volume !== 0 ? videoElement.volume -= vol : 1;
        return false;
      } else if (e && e.keyCode === 37) {
        // 按 向左键
        player.currentTime(player.currentTime() - 3)
        // videoElement.currentTime !== 0 ? videoElement.currentTime -= time : 1;
        return false;
      } else if (e && e.keyCode === 39) {
        // 按 向右键
        player.currentTime(player.currentTime() + 3)
        // videoElement.volume !== videoElement.duration ? videoElement.currentTime += time : 1;
        return false;
      } else if (e && e.keyCode === 32) {
        // 按空格键 判断当前是否暂停
        videoElement.paused === true ? videoElement.play() : videoElement.pause();
        return false;
      }
    };
  </script>
@endsection
