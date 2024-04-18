  <div class="container-fluid standard-bg">
    <div class="row home-mega-menu ">
      <div class="col-md-12">
        <nav class="navbar navbar-default">
          <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
          <div class="collapse navbar-collapse js-navbar-collapse megabg dropshd ">
            <ul class="nav navbar-nav">
              <li><a href="/video">首页</a></li>
              <li><a href="{{ $prefix }}/search">搜索</a></li>
              <li><a href="#">发现</a></li>
              <li><a href="#">分类</a></li>
              <li><a href="/video/vodplay">Video Post</a></li>
              <li><a href="single-page.html">Single Page - Basic</a></li>
              <li><a href="single-page-with-img.html">Single Page - with Image</a></li>
              <li><a href="gallery-video-boxed.html">Gallery</a></li>
            </ul>
            <ul class="pull-right nav navbar-nav">
              <li><a href="login.html">Login</a></li>
              <li><a href="contact.html">Contact</a></li>
            </ul>
            <div class="search-block">
              <form action="{{ $prefix }}/search">
                <input type="search" placeholder="Search" name="keyword">
              </form>
            </div>
          </div>
          <!-- /.nav-collapse -->
        </nav>
      </div>
    </div>
  </div>
