<!DOCTYPE html>
<html lang="en">

@include('video.shared.head')

<body>
  @include('video.shared.header')

  @section('main')

  @show
  @include('video.shared.channel')
  @include('video.shared.footer')

  <script>
    $(".nav .dropdown").hover(function() {
      $(this).find(".dropdown-toggle").dropdown("toggle");
    });
  </script>
  @section('scripts')
  @show
  <!-- MODAL -->
  <div id="enquirypopup" class="modal fade in " role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content row">
        <div class="modal-header custom-modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h2 class="icon"><i class="fa fa-television" aria-hidden="true"></i>free access</h2>
        </div>
        <div class="modal-body">
          <form name="info_form" class="form-inline" action="#" method="post">
            <div class="form-group col-sm-12">
              <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name">
            </div>
            <div class="form-group col-sm-12">
              <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email">
            </div>
            <div class="form-group col-sm-12">
              <button class="subscribe-btn pull-right" type="submit" title="Subscribe">Subscribe</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <style>
    .copyrights {
      text-indent: -9999px;
      height: 0;
      line-height: 0;
      font-size: 0;
      overflow: hidden;
    }
  </style>
  <div class="copyrights" id="links20210126">
    Collect from <a href="http://www.cssmoban.com/" title="网站模板">模板之家</a>
    <a href="http://cooco.net.cn/" title="组卷网">组卷网</a>
  </div>
</body>

</html>
