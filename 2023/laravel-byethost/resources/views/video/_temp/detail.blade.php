@extends('video.layout')


@section('main')
  <div class="row">
    @include('video.shared.aside')
    <!-- SINGLE PAGE -->
    <div id="single-page-wrapper" class="col-lg-10 col-md-8">
      <div class="row">
        <div class="col-lg-4">
          <img src="{{ $row->poster }}" alt="">
        </div>
        <!-- SINGLE PAGE -->
        <div class="col-lg-8 col-md-12 col-sm-12">
          <!-- PAGE -->
          <article class="page">
            <h2 class="title main-head-title">{{ $row->title }}</h2>
            <!-- PAGE INFO -->
            <div class="page-info">
              <div class="metabox">
                <span class="meta-i">
                  <i class="fa fa-thumbs-up" aria-hidden="true"></i>20.895
                </span>
                <span class="meta-i">
                  <i class="fa fa-thumbs-down" aria-hidden="true"></i>3.981
                </span>
                <span class="meta-i">
                  <i class="fa fa-user"></i><a href="#" class="author" title="John Doe">John Doe</a>
                </span>
                <span class="meta-i">
                  <i class="fa fa-clock-o"></i>March 16. 2020
                </span>
                <span class="meta-i">
                  <i class="fa fa-eye"></i>1,347,912 views
                </span>
                <div class="ratings">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star-half-o" aria-hidden="true"></i>
                  <i class="fa fa-star-o"></i>
                  <i class="fa fa-star-half"></i>
                </div>
              </div>
              <ul class="social">
                <li class="social-facebook"><a href="#" class="fa fa-facebook social-icons"></a></li>
                <li class="social-google-plus"><a href="#" class="fa fa-google-plus social-icons"></a></li>
                <li class="social-twitter"><a href="#" class="fa fa-twitter social-icons"></a></li>
                <li class="social-youtube"><a href="#" class="fa fa-youtube social-icons"></a></li>
                <li class="social-rss"><a href="#" class="fa fa-rss social-icons"></a></li>
              </ul>
            </div>
            <div class="clearfix spacer"></div>
          </article>
        </div>
      </div>
      <div class="row auto-clear">
        <h2 class="title main-head-title">Page content</h2>
        @foreach ($row->episodes as $ep)
          <article class="col-lg-2 col-md-3 col-sm-4" style="margin-bottom: 20px;">
            <!-- POST L size -->
            <a class="title" href="/video/play/{{ $row->cid }}/{{ $ep->id }}">
              <div class="post post-medium">
                <div class="infor label label-default">
                  <h4>
                    {{ $ep->name }}
                  </h4>
                </div>
              </div>
            </a>
          </article>
        @endforeach
      </div>
      <div class="clearfix spacer"></div>
    </div>

  </div>
@endsection
