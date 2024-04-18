@extends('_layout.auto')
@section('content')
  <div class="container" data-role="content">
    <style>
      * {
        margin: 0;
        padding: 0;
      }

      body {
        font-family: "Microsoft YaHei", 微软雅黑;
      }

      .box {
        width: 600px;
        height: 600px;
        background-color: #ff9615;
        padding: 20px;
        border-radius: 50%;
        border: 2px solid #ffd50e;
        position: relative;
        margin: 100px auto;
      }

      .turntable {
        width: 600px;
        height: 600px;
        background-color: red;
        border-radius: 50%;
        position: relative;
        box-shadow: 0 0 10px #000;
        line-height: 95px;
      }

      .little-circle {
        width: 10px;
        height: 10px;
        border-radius: 50%;
        border: 1px solid black;
        position: absolute;
        left: 50%;
        margin-left: -5px;
        margin-top: 5px;

      }

      .little-circle:nth-child(even) {
        background-color: #f1c96c;
      }

      .little-circle:nth-child(odd) {
        background-color: #fff6db;
      }

      .prize-zone {
        width: 556px;
        height: 556px;
        border-radius: 50%;
        position: absolute;

        left: 50%;
        margin-left: -278px;
        top: 50%;
        margin-top: -278px;
        overflow: hidden;
      }

      .prize {
        width: 278px;
        height: 278px;
        position: absolute;
        left: 0;
        top: 0;
      }

      .prize:nth-child(odd) {
        background-color: #f1c96c;
      }

      .prize:nth-child(even) {
        background-color: #fff6db;
      }

      .btn {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        position: absolute;
        left: 50%;
        margin-left: -50px;
        top: 50%;
        margin-top: -50px;
        background-color: #ff7609;
        color: white;
        font-size: 30px;
        font-weight: bolder;
        text-align: center;
        vertical-align: middle;
        cursor: pointer;
      }

      .pointer {
        width: 0;
        height: 0;
        position: absolute;
        left: 50%;
        margin-left: -25px;
        top: 50%;
        margin-top: -100px;
        border-bottom: 100px solid #ff9615;
        border-left: 25px solid transparent;
        border-right: 25px solid transparent;
      }

      .content {
        width: 200px;
        height: 250px;
        position: absolute;
        right: 0;
        bottom: 0;
        text-align: center;
      }

      .content .thanks {
        width: 34px;
        height: 150px;
        font-size: 30px;
        font-weight: bolder;
        color: #ff6e37;
        margin: 0 auto;
        line-height: 34px;
        padding-top: 20px;
      }

      .content .img {
        width: 10px;
        height: 10px;
        position: absolute;
        left: 50%;
        margin-left: -40px;
        top: 5%;
      }

      .content img {
        width: 80px;
        height: 100px;
        position: absolute;
      }

      .txt {
        width: 100px;
        height: 50px;
        font-size: 20px;
        line-height: 32px;
        margin: 0 auto;
        padding-top: 120px;
        color: #ff6e37;
        font-weight: bolder;
      }
    </style>
    <div class="box">
      <div class="turntable">
        <div class="little-circle"></div>
        <div class="little-circle"></div>
        <div class="little-circle"></div>
        <div class="little-circle"></div>
        <div class="little-circle"></div>
        <div class="little-circle"></div>
        <div class="little-circle"></div>
        <div class="little-circle"></div>

        <div class="prize-zone">
          <div class="prize">
            <div class="content">
              <div class="thanks">谢谢参与</div>
            </div>
          </div>
          <div class="prize">
            <div class="content">
              <div class="img">
                <img src="prize/router.jpg" />
              </div>
              <div class="txt">
                <p>四等奖</p>
                <p>路由器</p>
              </div>
            </div>
          </div>
          <div class="prize">
            <div class="content">
              <div class="thanks">谢谢参与</div>
            </div>
          </div>
          <div class="prize">
            <div class="content">
              <div class="img">
                <img src="prize/bicycle.jpg" />
              </div>
              <div class="txt">
                <p>一等奖</p>
                <p>自行车</p>
              </div>
            </div>
          </div>
          <div class="prize">
            <div class="content">
              <div class="thanks">谢谢参与</div>
            </div>
          </div>
          <div class="prize">
            <div class="content">
              <div class="img">
                <img src="prize/glass.jpg" />
              </div>
              <div class="txt">
                <p>二等奖</p>
                <p>3D眼镜</p>
              </div>
            </div>
          </div>
          <div class="prize">
            <div class="content">
              <div class="thanks">谢谢参与</div>
            </div>
          </div>
          <div class="prize">
            <div class="content">
              <div class="img">
                <img src="prize/kindle.jpg" />
              </div>
              <div class="txt">
                <p>三等奖</p>
                <p>kindle</p>
              </div>
            </div>
          </div>
        </div>
        <div class="pointer"></div>
        <div id="btn" class="btn">抽奖</div>
      </div>

    </div>
    <script>
      // 小圆圈的旋转变换
      let circleList = document.querySelectorAll('.little-circle');
      let len = circleList.length;
      let rotateStep = 360 / len;
      let halfOfRotateStep = rotateStep / 2;
      circleList.forEach(function(item, index) {
        let deg = rotateStep * index + halfOfRotateStep;
        item.style.transform = "rotate(" + deg + "deg)";
        item.style.transformOrigin = "5px 295px";
      });
      // 每一个奖品的变换
      let prizeList = document.querySelectorAll('.prize');
      let pLen = prizeList.length;
      let pRotateStep = 360 / pLen;
      let halfOfPRotateStep = pRotateStep / 2;
      prizeList.forEach(function(item, index) {
        item.style.transform = "rotate(" + (pRotateStep * index) + "deg" + ") skewY(" + pRotateStep + "deg)";
        item.style.transformOrigin = "right bottom";
      });
      // 奖品的内容变换
      let contentList = document.querySelectorAll('.content');
      contentList.forEach(function(item) {
        // 反向变换，用于抵消div.prize的变形 这里的translate值，其实可以用三角函数算出来，但是太复杂，我就用肉眼观测取了7px 100px这么个值
        item.style.transform = "skewY(-" + pRotateStep + "deg) rotate(-" + halfOfPRotateStep +
          "deg) translate(7px, 100px)";
        item.style.transformOrigin = "center center";
      });
      let retry = false;
      // 抽奖按钮的点击事件
      document.querySelector('#btn').onclick = function() {
        if (retry) {
          retry = false;
          clear();
          document.querySelector('#btn').innerText = "抽奖";
          return;
        }
        // 计算一个随机的度数，转起来，先转上十圈然后再转一圈内的随机度数
        document.querySelector('#btn').style.cursor = "wait";

        let deg1 = 360 * 10;
        let deg2 = (Math.floor(Math.random() * 8) + 1) * 45 + 22.5;
        let deg = deg1 + deg2;
        console.log(deg);
        let truntable = document.querySelector('.prize-zone');
        truntable.style.transition = "all 10s ease";
        truntable.style.transform = "rotate(" + deg + "deg)";
      };
      // 监听动画完成事件
      document.querySelector('.prize-zone').addEventListener('transitionend', function() {
        document.querySelector('#btn').style.cursor = "pointer";
        retry = true;
        document.querySelector('#btn').innerText = "重置";
      });

      function clear() {
        let truntable = document.querySelector('.prize-zone');
        truntable.style.transition = "none";
        truntable.style.transform = "none";
      }
    </script>
  </div>
@endsection
