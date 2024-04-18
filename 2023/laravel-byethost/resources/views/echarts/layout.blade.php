<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>

<body>
  <div id="main" style="width: 800px;height:800px;"></div>
  <script src="/node_modules/echarts/dist/echarts.min.js"></script>
  <script src="/node_modules/jquery/dist/jquery.min.js"></script>
  <script type="text/javascript">
    $.get('/public/images/echarts/car-311712.svg', function(svg) {
      console.log(svg);
      var myChart = echarts.init(document.getElementById('main'));

      echarts.registerMap('Beef_cuts_France', {
        svg: svg
      });
      option = {
        tooltip: {},
        series: [{
          name: 'French Beef Cuts',
          type: 'map',
          map: 'Beef_cuts_France',
          roam: true,
          selectedMode: false,
        }]
      };
      myChart.setOption(option);
      myChart.on('mouseover', {
        seriesIndex: 0
      }, function(event) {
        myChart.dispatchAction({
          type: 'highlight',
          geoIndex: 0,
          name: event.name
        });
      });
      myChart.on('mouseout', {
        seriesIndex: 0
      }, function(event) {
        myChart.dispatchAction({
          type: 'downplay',
          geoIndex: 0,
          name: event.name
        });
      });
      myChart.on('mousedown', {
        seriesIndex: 0
      }, function(event) {
        // alert(event.name)
      });
    })
    // https://echarts.apache.org/examples/data/asset/geo/Beef_cuts_France.svg
  </script>
</body>

</html>
