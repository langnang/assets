@extends('video.layout')


@section('main')
  <div class="container-fluid">
    <!-- HOME 1 -->
    <!-- CORE -->
    <div class="row">
      <!-- SIDEBAR -->
      <div class="col-lg-2 col-md-4 hidden-sm hidden-xs">
        <aside class="dark-bg">
          <article>
            <h2 class="icon"><i class="fa fa-bolt" aria-hidden="true"></i>trending</h2>
            <ul class="sidebar-links">
              <li class="fa fa-chevron-right"><a href="#">featured videos</a><span>4.000</span></li>
              <li class="fa fa-chevron-right"><a href="#">most viewed</a><span>2.000</span></li>
              <li class="fa fa-chevron-right"><a href="#">editor's choice</a><span>650</span></li>
              <li class="fa fa-chevron-right"><a href="#">all video</a><span>4.000</span></li>
              <li class="fa fa-chevron-right"><a href="#">full hd</a><span>7.800</span></li>
              <li class="fa fa-chevron-right"><a href="#">premium</a><span>200</span></li>
              <li class="fa fa-chevron-right"><a href="#">movies</a><span>15</span></li>
            </ul>
          </article>
          <div class="clearfix spacer"></div>
          <article>
            <h2 class="icon"><i class="fa fa-gears" aria-hidden="true"></i>categories</h2>
            <ul class="sidebar-links">
              <li class="fa fa-chevron-right"><a href="#">Lifestyle</a><span>4.000</span></li>
              <li class="fa fa-chevron-right"><a href="#">World News</a><span>2.000</span></li>
              <li class="fa fa-chevron-right"><a href="#">Funny videos</a><span>650</span></li>
              <li class="fa fa-chevron-right"><a href="#">Hot Stories</a><span>4.000</span></li>
              <li class="fa fa-chevron-right"><a href="#">Music Clips</a><span>7.800</span></li>
              <li class="fa fa-chevron-right"><a href="#">Premier Trailers</a><span>200</span></li>
            </ul>
          </article>
          <div class="clearfix spacer"></div>
        </aside>
      </div>
      <!-- HOME MAIN POSTS -->
      <div class="col-lg-10 col-md-8">
        <section id="home-main">
          <h2 class="icon"><i class="fa fa-television" aria-hidden="true"></i>popular videos</h2>
          <div class="row">
            <!-- ARTICLES -->
            <div class="col-lg-12 col-md-12 col-sm-12">
              <div class="row auto-clear">
                @isset($paginate)
                  @foreach ($paginate as $item)
                    <article class="col-lg-2 col-md-4 col-sm-6">
                      <!-- POST L size -->
                      <div class="post post-medium">
                        <div class="thumbr">
                          <a class="afterglow post-thumb" href="" data-lity>
                            <span class="play-btn-border" title="Play">
                              <i class="fa fa-play-circle headline-round" aria-hidden="true"></i></span>
                            <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                            <img class="img-responsive" src="{{ $item->poster }}" alt="#">
                          </a>
                        </div>
                        <div class="infor">
                          <h4>
                            <a class="title" href="/video/detail/{{ $item->cid }}">{{ $item->title }}</a>
                          </h4>
                          <span class="posts-txt" title="Posts from Channel"><i class="fa fa-thumbs-up"
                              aria-hidden="true"></i>20.895</span>
                          <div class="ratings">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-half-o" aria-hidden="true"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-half"></i>
                          </div>
                        </div>
                      </div>
                    </article>
                  @endforeach
                @endisset


                <article class="col-lg-3 col-md-6 col-sm-4">
                  <!-- POST L size -->
                  <div class="post post-medium">
                    <div class="thumbr">
                      <a class="afterglow post-thumb" href="" data-lity>
                        <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round"
                            aria-hidden="true"></i></span>
                        <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                        <img class="img-responsive" src="/public/images/video/thumbs/thumb-s.jpg" alt="#">
                      </a>
                    </div>
                    <div class="infor">
                      <h4>
                        <a class="title" href="#">Video Lightbox Test</a>
                      </h4>
                      <span class="posts-txt" title="Posts from Channel"><i class="fa fa-thumbs-up"
                          aria-hidden="true"></i>20.895</span>
                      <div class="ratings">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-half"></i>
                      </div>
                    </div>
                  </div>
                </article>
                <article class="col-lg-3 col-md-6 col-sm-4">
                  <!-- POST L size -->
                  <div class="post post-medium">
                    <div class="thumbr">
                      <a class="post-thumb" href="" data-lity>
                        <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round"
                            aria-hidden="true"></i></span>
                        <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                        <img class="img-responsive" src="/public/images/video/thumbs/thumb-s2.jpg" alt="#">
                      </a>
                    </div>
                    <div class="infor">
                      <h4>
                        <a class="title" href="#">I graduated from the university of Selfies</a>
                      </h4>
                      <span class="posts-txt" title="Posts from Channel"><i class="fa fa-thumbs-up"
                          aria-hidden="true"></i>20.895</span>
                      <div class="ratings">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-half"></i>
                      </div>
                    </div>
                  </div>
                </article>
                <article class="col-lg-3 col-md-6 col-sm-4">
                  <!-- POST L size -->
                  <div class="post post-medium">
                    <div class="thumbr">
                      <a class="post-thumb" href="" data-lity>
                        <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round"
                            aria-hidden="true"></i></span>
                        <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                        <img class="img-responsive" src="/public/images/video/thumbs/thumb-s3.jpg" alt="#">
                      </a>
                    </div>
                    <div class="infor">
                      <h4>
                        <a class="title" href="#">I don’t always surf the internet, but when I do, Eyebrows</a>
                      </h4>
                      <span class="posts-txt" title="Posts from Channel"><i class="fa fa-thumbs-up"
                          aria-hidden="true"></i>20.895</span>
                      <div class="ratings">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-half"></i>
                      </div>
                    </div>
                  </div>
                </article>
                <article class="col-lg-3 col-md-6 col-sm-4">
                  <!-- POST L size -->
                  <div class="post post-medium">
                    <div class="thumbr">
                      <a class="post-thumb" href="" data-lity>
                        <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round"
                            aria-hidden="true"></i></span>
                        <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                        <img class="img-responsive" src="/public/images/video/thumbs/thumb-s4.jpg" alt="#">
                      </a>
                    </div>
                    <div class="infor">
                      <h4>
                        <a class="title" href="#">A selfie a day keeps the friends away</a>
                      </h4>
                      <span class="posts-txt" title="Posts from Channel"><i class="fa fa-thumbs-up"
                          aria-hidden="true"></i>20.895</span>
                      <div class="ratings">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-half"></i>
                      </div>
                    </div>
                  </div>
                </article>
                <article class="col-lg-3 col-md-6 col-sm-4">
                  <!-- POST L size -->
                  <div class="post post-medium">
                    <div class="thumbr">
                      <a class="post-thumb" href="" data-lity>
                        <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round"
                            aria-hidden="true"></i></span>
                        <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                        <img class="img-responsive" src="/public/images/video/thumbs/thumb-s5.jpg" alt="#">
                      </a>
                    </div>
                    <div class="infor">
                      <h4>
                        <a class="title" href="#">Proof that I can do selfies better than you</a>
                      </h4>
                      <span class="posts-txt" title="Posts from Channel"><i class="fa fa-thumbs-up"
                          aria-hidden="true"></i>20.895</span>
                      <div class="ratings">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-half"></i>
                      </div>
                    </div>
                  </div>
                </article>
                <article class="col-lg-3 col-md-6 col-sm-4">
                  <!-- POST L size -->
                  <div class="post post-medium">
                    <div class="thumbr">
                      <a class="post-thumb" href="" data-lity>
                        <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round"
                            aria-hidden="true"></i></span>
                        <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                        <img class="img-responsive" src="/public/images/video/thumbs/thumb-s6.jpg" alt="#">
                      </a>
                    </div>
                    <div class="infor">
                      <h4>
                        <a class="title" href="#">I’m so fly right now</a>
                      </h4>
                      <span class="posts-txt" title="Posts from Channel"><i class="fa fa-thumbs-up"
                          aria-hidden="true"></i>20.895</span>
                      <div class="ratings">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-half"></i>
                      </div>
                    </div>
                  </div>
                </article>
                <article class="col-lg-3 col-md-6 col-sm-4">
                  <!-- POST L size -->
                  <div class="post post-medium">
                    <div class="thumbr">
                      <a class="post-thumb" href="" data-lity>
                        <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round"
                            aria-hidden="true"></i></span>
                        <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                        <img class="img-responsive" src="/public/images/video/thumbs/thumb-s7.jpg" alt="#">
                      </a>
                    </div>
                    <div class="infor">
                      <h4>
                        <a class="title" href="#">Help me! my duck face is stuck</a>
                      </h4>
                      <span class="posts-txt" title="Posts from Channel"><i class="fa fa-thumbs-up"
                          aria-hidden="true"></i>20.895</span>
                      <div class="ratings">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-half"></i>
                      </div>
                    </div>
                  </div>
                </article>
                <article class="col-lg-3 col-md-6 col-sm-4">
                  <!-- POST L size -->
                  <div class="post post-medium">
                    <div class="thumbr">
                      <a class="post-thumb" href="" data-lity>
                        <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round"
                            aria-hidden="true"></i></span>
                        <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                        <img class="img-responsive" src="/public/images/video/thumbs/thumb-s8.jpg" alt="#">
                      </a>
                    </div>
                    <div class="infor">
                      <h4>
                        <a class="title" href="#">Does this selfie make me look fat</a>
                      </h4>
                      <span class="posts-txt" title="Posts from Channel"><i class="fa fa-thumbs-up"
                          aria-hidden="true"></i>20.895</span>
                      <div class="ratings">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-half"></i>
                      </div>
                    </div>
                  </div>
                </article>
              </div>
              <div class="clearfix spacer"></div>
            </div>
          </div>
        </section>
      </div>
    </div>
    <!-- TABS -->
    <div id="tabs" class="container-fluid featured-bg">
      <div class="container-fluid">
        <div class="col-md-12">
          <!-- BOOTSTRAP TABS -->
          <div class="head-section">
            <ul class="nav nav-tabs text-center">
              <li class="active">
                <a data-toggle="tab" href="#tab1">
                  <h2 class="title">latest</h2>
                </a>
              </li>
              <li>
                <a data-toggle="tab" href="#tab2">
                  <h2 class="title">top rated</h2>
                </a>
              </li>
              <li>
                <a data-toggle="tab" href="#tab3">
                  <h2 class="title">most viewed</h2>
                </a>
              </li>
            </ul>
          </div>
          <div class="row auto-clear">
            <!-- TAB CONTENTS -->
            <div class="tab-content">
              <div id="tab1" class="tab-pane fade in active">
                <!-- POST L size -->
                <article class="col-lg-2 col-md-4 col-sm-4 post post-medium">
                  <div class="thumbr">
                    <a class="post-thumb" href="" data-lity>
                      <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round"
                          aria-hidden="true"></i></span>
                      <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                      <img class="img-responsive" src="/public/images/video/thumbs/thumb-tab.jpg" alt="#">
                    </a>
                  </div>
                  <div class="infor">
                    <h4>
                      <a class="title" href="#">With You, I forget all my problems. With You, Time Stands
                        Still.</a>
                    </h4>
                    <span class="posts-txt" title="Posts from Channel"><i class="fa fa-thumbs-up"
                        aria-hidden="true"></i>20.895</span>
                    <div class="ratings">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-half-o" aria-hidden="true"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-half"></i>
                    </div>
                  </div>
                </article>
                <!-- POST L size -->
                <article class="col-lg-2 col-md-4 col-sm-4 post post-medium">
                  <div class="thumbr">
                    <a class="post-thumb" href="" data-lity>
                      <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round"
                          aria-hidden="true"></i></span>
                      <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                      <img class="img-responsive" src="/public/images/video/thumbs/thumb-tab2.jpg" alt="#">
                    </a>
                  </div>
                  <div class="infor">
                    <h4>
                      <a class="title" href="#">I’m not perfect but I am Loyal</a>
                    </h4>
                    <span class="posts-txt" title="Posts from Channel"><i class="fa fa-thumbs-up"
                        aria-hidden="true"></i>20.895</span>
                    <div class="ratings">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-half-o" aria-hidden="true"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-half"></i>
                    </div>
                  </div>
                </article>
                <!-- POST L size -->
                <article class="col-lg-2 col-md-4 col-sm-4 post post-medium">
                  <div class="thumbr">
                    <a class="post-thumb" href="" data-lity>
                      <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round"
                          aria-hidden="true"></i></span>
                      <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                      <img class="img-responsive" src="/public/images/video/thumbs/thumb-tab3.jpg" alt="#">
                    </a>
                  </div>
                  <div class="infor">
                    <h4>
                      <a class="title" href="#">When I fell for you, I fell Hard</a>
                    </h4>
                    <span class="posts-txt" title="Posts from Channel"><i class="fa fa-thumbs-up"
                        aria-hidden="true"></i>20.895</span>
                    <div class="ratings">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-half-o" aria-hidden="true"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-half"></i>
                    </div>
                  </div>
                </article>
                <!-- POST L size -->
                <article class="col-lg-2 col-md-4 col-sm-4 post post-medium">
                  <div class="thumbr">
                    <a class="post-thumb" href="" data-lity>
                      <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round"
                          aria-hidden="true"></i></span>
                      <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                      <img class="img-responsive" src="/public/images/video/thumbs/thumb-tab4.jpg" alt="#">
                    </a>
                  </div>
                  <div class="infor">
                    <h4>
                      <a class="title" href="#">If you are Mine, You are Mine. I don’t like Sharing</a>
                    </h4>
                    <span class="posts-txt" title="Posts from Channel"><i class="fa fa-thumbs-up"
                        aria-hidden="true"></i>20.895</span>
                    <div class="ratings">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-half-o" aria-hidden="true"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-half"></i>
                    </div>
                  </div>
                </article>
                <!-- POST L size -->
                <article class="col-lg-2 col-md-4 col-sm-4 post post-medium">
                  <div class="thumbr">
                    <a class="post-thumb" href="" data-lity>
                      <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round"
                          aria-hidden="true"></i></span>
                      <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                      <img class="img-responsive" src="/public/images/video/thumbs/thumb-tab5.jpg" alt="#">
                    </a>
                  </div>
                  <div class="infor">
                    <h4>
                      <a class="title" href="#">I love you. That’s all I know</a>
                    </h4>
                    <span class="posts-txt" title="Posts from Channel"><i class="fa fa-thumbs-up"
                        aria-hidden="true"></i>20.895</span>
                    <div class="ratings">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-half-o" aria-hidden="true"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-half"></i>
                    </div>
                  </div>
                </article>
                <!-- POST L size -->
                <article class="col-lg-2 col-md-4 col-sm-4 post post-medium">
                  <div class="thumbr">
                    <a class="post-thumb" href="" data-lity>
                      <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round"
                          aria-hidden="true"></i></span>
                      <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                      <img class="img-responsive" src="/public/images/video/thumbs/thumb-tab6.jpg" alt="#">
                    </a>
                  </div>
                  <div class="infor">
                    <h4>
                      <a class="title" href="#">It will be Always YOU</a>
                    </h4>
                    <span class="posts-txt" title="Posts from Channel"><i class="fa fa-thumbs-up"
                        aria-hidden="true"></i>20.895</span>
                    <div class="ratings">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-half-o" aria-hidden="true"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-half"></i>
                    </div>
                  </div>
                </article>
              </div>
              <div id="tab2" class="tab-pane fade">
                <!-- POST L size -->
                <article class="col-lg-2 col-md-4 col-sm-4 post post-medium">
                  <div class="thumbr">
                    <a class="post-thumb" href="" data-lity>
                      <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round"
                          aria-hidden="true"></i></span>
                      <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                      <img class="img-responsive" src="/public/images/video/thumbs/thumb-tab.jpg" alt="#">
                    </a>
                  </div>
                  <div class="infor">
                    <h4>
                      <a class="title" href="#">With You, I forget all my problems. With You, Time Stands
                        Still.</a>
                    </h4>
                    <span class="posts-txt" title="Posts from Channel"><i class="fa fa-thumbs-up"
                        aria-hidden="true"></i>20.895</span>
                    <div class="ratings">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-half-o" aria-hidden="true"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-half"></i>
                    </div>
                  </div>
                </article>
                <!-- POST L size -->
                <article class="col-lg-2 col-md-4 col-sm-4 post post-medium">
                  <div class="thumbr">
                    <a class="post-thumb" href="" data-lity>
                      <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round"
                          aria-hidden="true"></i></span>
                      <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                      <img class="img-responsive" src="/public/images/video/thumbs/thumb-tab2.jpg" alt="#">
                    </a>
                  </div>
                  <div class="infor">
                    <h4>
                      <a class="title" href="#">I’m not perfect but I am Loyal</a>
                    </h4>
                    <span class="posts-txt" title="Posts from Channel"><i class="fa fa-thumbs-up"
                        aria-hidden="true"></i>20.895</span>
                    <div class="ratings">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-half-o" aria-hidden="true"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-half"></i>
                    </div>
                  </div>
                </article>
                <!-- POST L size -->
                <article class="col-lg-2 col-md-4 col-sm-4 post post-medium">
                  <div class="thumbr">
                    <a class="post-thumb" href="" data-lity>
                      <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round"
                          aria-hidden="true"></i></span>
                      <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                      <img class="img-responsive" src="/public/images/video/thumbs/thumb-tab3.jpg" alt="#">
                    </a>
                  </div>
                  <div class="infor">
                    <h4>
                      <a class="title" href="#">When I fell for you, I fell Hard</a>
                    </h4>
                    <span class="posts-txt" title="Posts from Channel"><i class="fa fa-thumbs-up"
                        aria-hidden="true"></i>20.895</span>
                    <div class="ratings">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-half-o" aria-hidden="true"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-half"></i>
                    </div>
                  </div>
                </article>
                <!-- POST L size -->
                <article class="col-lg-2 col-md-4 col-sm-4 post post-medium">
                  <div class="thumbr">
                    <a class="post-thumb" href="" data-lity>
                      <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round"
                          aria-hidden="true"></i></span>
                      <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                      <img class="img-responsive" src="/public/images/video/thumbs/thumb-tab4.jpg" alt="#">
                    </a>
                  </div>
                  <div class="infor">
                    <h4>
                      <a class="title" href="#">If you are Mine, You are Mine. I don’t like Sharing</a>
                    </h4>
                    <span class="posts-txt" title="Posts from Channel"><i class="fa fa-thumbs-up"
                        aria-hidden="true"></i>20.895</span>
                    <div class="ratings">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-half-o" aria-hidden="true"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-half"></i>
                    </div>
                  </div>
                </article>
                <!-- POST L size -->
                <article class="col-lg-2 col-md-4 col-sm-4 post post-medium">
                  <div class="thumbr">
                    <a class="post-thumb" href="" data-lity>
                      <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round"
                          aria-hidden="true"></i></span>
                      <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                      <img class="img-responsive" src="/public/images/video/thumbs/thumb-tab5.jpg" alt="#">
                    </a>
                  </div>
                  <div class="infor">
                    <h4>
                      <a class="title" href="#">I love you. That’s all I know</a>
                    </h4>
                    <span class="posts-txt" title="Posts from Channel"><i class="fa fa-thumbs-up"
                        aria-hidden="true"></i>20.895</span>
                    <div class="ratings">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-half-o" aria-hidden="true"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-half"></i>
                    </div>
                  </div>
                </article>
                <!-- POST L size -->
                <article class="col-lg-2 col-md-4 col-sm-4 post post-medium">
                  <div class="thumbr">
                    <a class="post-thumb" href="" data-lity>
                      <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round"
                          aria-hidden="true"></i></span>
                      <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                      <img class="img-responsive" src="/public/images/video/thumbs/thumb-tab6.jpg" alt="#">
                    </a>
                  </div>
                  <div class="infor">
                    <h4>
                      <a class="title" href="#">It will be Always YOU</a>
                    </h4>
                    <span class="posts-txt" title="Posts from Channel"><i class="fa fa-thumbs-up"
                        aria-hidden="true"></i>20.895</span>
                    <div class="ratings">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-half-o" aria-hidden="true"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-half"></i>
                    </div>
                  </div>
                </article>
              </div>
              <div id="tab3" class="tab-pane fade">
                <!-- POST L size -->
                <article class="col-lg-2 col-md-4 col-sm-4 post post-medium">
                  <div class="thumbr">
                    <a class="post-thumb" href="" data-lity>
                      <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round"
                          aria-hidden="true"></i></span>
                      <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                      <img class="img-responsive" src="/public/images/video/thumbs/thumb-tab.jpg" alt="#">
                    </a>
                  </div>
                  <div class="infor">
                    <h4>
                      <a class="title" href="#">With You, I forget all my problems. With You, Time Stands
                        Still.</a>
                    </h4>
                    <span class="posts-txt" title="Posts from Channel"><i class="fa fa-thumbs-up"
                        aria-hidden="true"></i>20.895</span>
                    <div class="ratings">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-half-o" aria-hidden="true"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-half"></i>
                    </div>
                  </div>
                </article>
                <!-- POST L size -->
                <article class="col-lg-2 col-md-4 col-sm-4 post post-medium">
                  <div class="thumbr">
                    <a class="post-thumb" href="" data-lity>
                      <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round"
                          aria-hidden="true"></i></span>
                      <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                      <img class="img-responsive" src="/public/images/video/thumbs/thumb-tab2.jpg" alt="#">
                    </a>
                  </div>
                  <div class="infor">
                    <h4>
                      <a class="title" href="#">I’m not perfect but I am Loyal</a>
                    </h4>
                    <span class="posts-txt" title="Posts from Channel"><i class="fa fa-thumbs-up"
                        aria-hidden="true"></i>20.895</span>
                    <div class="ratings">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-half-o" aria-hidden="true"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-half"></i>
                    </div>
                  </div>
                </article>
                <!-- POST L size -->
                <article class="col-lg-2 col-md-4 col-sm-4 post post-medium">
                  <div class="thumbr">
                    <a class="post-thumb" href="" data-lity>
                      <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round"
                          aria-hidden="true"></i></span>
                      <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                      <img class="img-responsive" src="/public/images/video/thumbs/thumb-tab3.jpg" alt="#">
                    </a>
                  </div>
                  <div class="infor">
                    <h4>
                      <a class="title" href="#">When I fell for you, I fell Hard</a>
                    </h4>
                    <span class="posts-txt" title="Posts from Channel"><i class="fa fa-thumbs-up"
                        aria-hidden="true"></i>20.895</span>
                    <div class="ratings">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-half-o" aria-hidden="true"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-half"></i>
                    </div>
                  </div>
                </article>
                <!-- POST L size -->
                <article class="col-lg-2 col-md-4 col-sm-4 post post-medium">
                  <div class="thumbr">
                    <a class="post-thumb" href="" data-lity>
                      <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round"
                          aria-hidden="true"></i></span>
                      <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                      <img class="img-responsive" src="/public/images/video/thumbs/thumb-tab4.jpg" alt="#">
                    </a>
                  </div>
                  <div class="infor">
                    <h4>
                      <a class="title" href="#">If you are Mine, You are Mine. I don’t like Sharing</a>
                    </h4>
                    <span class="posts-txt" title="Posts from Channel"><i class="fa fa-thumbs-up"
                        aria-hidden="true"></i>20.895</span>
                    <div class="ratings">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-half-o" aria-hidden="true"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-half"></i>
                    </div>
                  </div>
                </article>
                <!-- POST L size -->
                <article class="col-lg-2 col-md-4 col-sm-4 post post-medium">
                  <div class="thumbr">
                    <a class="post-thumb" href="" data-lity>
                      <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round"
                          aria-hidden="true"></i></span>
                      <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                      <img class="img-responsive" src="/public/images/video/thumbs/thumb-tab5.jpg" alt="#">
                    </a>
                  </div>
                  <div class="infor">
                    <h4>
                      <a class="title" href="#">I love you. That’s all I know</a>
                    </h4>
                    <span class="posts-txt" title="Posts from Channel"><i class="fa fa-thumbs-up"
                        aria-hidden="true"></i>20.895</span>
                    <div class="ratings">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-half-o" aria-hidden="true"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-half"></i>
                    </div>
                  </div>
                </article>
                <!-- POST L size -->
                <article class="col-lg-2 col-md-4 col-sm-4 post post-medium">
                  <div class="thumbr">
                    <a class="post-thumb" href="" data-lity>
                      <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round"
                          aria-hidden="true"></i></span>
                      <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                      <img class="img-responsive" src="/public/images/video/thumbs/thumb-tab6.jpg" alt="#">
                    </a>
                  </div>
                  <div class="infor">
                    <h4>
                      <a class="title" href="#">It will be Always YOU</a>
                    </h4>
                    <span class="posts-txt" title="Posts from Channel"><i class="fa fa-thumbs-up"
                        aria-hidden="true"></i>20.895</span>
                    <div class="ratings">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-half-o" aria-hidden="true"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-half"></i>
                    </div>
                  </div>
                </article>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- MAIN -->
    <div id="main" class="container-fluid">
      <div class="container-fluid">
        <!-- SIDEBAR -->
        <div class="col-lg-2 hidden-md hidden-sm hidden-xs">
          <aside class="dark-bg sidebar">
            <h2 class="icon"><i class="fa fa-flag" aria-hidden="true"></i>featured</h2>
            <article class="col-md-12 post post-medium">
              <div class="row">
                <div class="col-md-12 thumbr">
                  <div class="flag flag1"><i class="fa fa-star"></i></div>
                  <a class="post-thumb" href="" data-lity>
                    <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round"
                        aria-hidden="true"></i></span>
                    <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                    <img class="img-responsive" src="/public/images/video/thumbs/thumb-s.jpg" alt="#">
                  </a>
                </div>
                <div class="col-md-12 infor">
                  <h4>
                    <a class="title" href="#">It always seems impossible until it’s done.</a>
                  </h4>
                  <span class="posts-txt" title="Posts from Channel"><i class="fa fa-thumbs-up"
                      aria-hidden="true"></i>20.895</span>
                  <div class="ratings">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-half"></i>
                  </div>
                </div>
              </div>
            </article>
            <div class="clearfix spacer"></div>
            <article>
              <h2 class="icon"><i class="fa fa-hashtag" aria-hidden="true"></i>rankings</h2>
              <ul class="sidebar-links">
                <li class="fa fa-chevron-right"><a href="#">best rated videos</a></li>
                <li class="fa fa-chevron-right"><a href="#">highly viewed</a></li>
                <li class="fa fa-chevron-right"><a href="#">most commented</a></li>
                <li class="fa fa-chevron-right"><a href="#">videos of month</a></li>
                <li class="fa fa-chevron-right"><a href="#">popular all time</a></li>
              </ul>
            </article>
            <div class="clearfix spacer"></div>
            <article>
              <h2 class="icon"><i class="fa fa-tag" aria-hidden="true"></i>tags</h2>
              <ul class="footer-tags">
                <li><a href="#">videos</a></li>
                <li><a href="#">premium</a></li>
                <li><a href="#">hair</a></li>
                <li><a href="#">beauty</a></li>
                <li><a href="#">ranking</a></li>
                <li><a href="#">lifestyle</a></li>
                <li><a href="#">sport</a></li>
                <li><a href="#">money</a></li>
                <li><a href="#">comments</a></li>
              </ul>
            </article>
            <div class="clearfix spacer"></div>
            <article class="reviews">
              <h2 class="icon"><i class="fa fa-star" aria-hidden="true"></i>top review</h2>
              <!-- POST L size -->
              <div class="post post-medium">
                <a class="thumbr post-thumb" href="#">
                  <span class="review-number">4.8</span>
                  <img src="/public/images/video/thumbs/thumb-review7.jpg" class="review img-responsive"
                    alt="Review">
                </a>
                <div class="infor">
                  <h4>
                    <a class="title" href="#">Lazy Betty B*tch</a>
                  </h4>
                  <div class="ratings">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-half"></i>
                  </div>
                </div>
              </div>
            </article>
            <div class="clearfix spacer"></div>
            <!-- SIDEBAR ADVERTISE BOX -->
            <a href="" class="banner-l">
              <img src="/public/images/video/banners/banner-l.jpg" class="img-responsive"
                alt="Buy Now Muvee Reviews Bootstrap HTML5 Template"
                title="Buy Now Muvee Reviews Bootstrap HTML5 Template">
            </a>
          </aside>
        </div>
        <!-- MAIN CONTENT -->
        <div class="col-lg-10 col-md-12">
          <!-- EDITORS CHOICE -->
          <section id="editor-choice">
            <h2 class="icon"><i class="fa fa-trophy" aria-hidden="true"></i>editor’s choice</h2>
            <div class="row auto-clear">
              <!-- MAIN POST -->
              <div class="col-lg-6 col-md-12 col-sm-12">
                <!-- POST L size -->
                <article class="post post-medium main-large-post">
                  <div class="thumbr">
                    <div class="flag flag1"><i class="fa fa-star"></i></div>
                    <a class="post-thumb" href="" data-lity>
                      <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round"
                          aria-hidden="true"></i></span>
                      <img class="img-responsive" src="/public/images/video/thumbs/editors-large.jpg" alt="#">
                    </a>
                    <div class="infor">
                      <h4>
                        <a class="title" href="#">Kiss me if I’m wrong but Dinosaurs still exist? Right?</a>
                      </h4>
                      <span class="posts-txt" title="Posts from Channel"><i class="fa fa-thumbs-up"
                          aria-hidden="true"></i>20.895</span>
                      <div class="ratings">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-half"></i>
                      </div>
                      <div class="vid-time-block">
                        <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                      </div>
                    </div>
                  </div>
                </article>
              </div>
              <!-- SMALL POSTS -->
              <div class="col-lg-6 col-md-12 col-sm-12 editor-choice-small">
                <div class="row 3-right-posts">
                  <article class="col-sm-6 post post-medium small-post">
                    <div class="thumbr">
                      <div class="flag flag1"><i class="fa fa-star"></i></div>
                      <a class="post-thumb" href="" data-lity>
                        <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round"
                            aria-hidden="true"></i></span>
                        <img class="img-responsive" src="/public/images/video/thumbs/thumb-s.jpg" alt="#">
                      </a>
                      <div class="infor">
                        <h4>
                          <a class="title" href="#">Kiss me if I’m wrong but Dinosaurs still exist? Right?</a>
                        </h4>
                        <div class="vid-time-block home-small-posts">
                          <span class="posts-txt" title="Posts from Channel"><i class="fa fa-thumbs-up"
                              aria-hidden="true"></i>20.895</span>
                          <div class="ratings">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-half-o" aria-hidden="true"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-half"></i>
                          </div>
                          <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                        </div>
                      </div>
                    </div>
                  </article>
                  <article class="col-sm-6 post post-medium small-post">
                    <div class="thumbr">
                      <div class="flag flag1"><i class="fa fa-star"></i></div>
                      <a class="post-thumb" href="" data-lity>
                        <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round"
                            aria-hidden="true"></i></span>
                        <img class="img-responsive" src="/public/images/video/thumbs/thumb-s2.jpg" alt="#">
                      </a>
                      <div class="infor">
                        <h4>
                          <a class="title" href="#">Kiss me if I’m wrong but Dinosaurs still exist? Right?</a>
                        </h4>
                        <div class="vid-time-block home-small-posts">
                          <span class="posts-txt" title="Posts from Channel"><i class="fa fa-thumbs-up"
                              aria-hidden="true"></i>20.895</span>
                          <div class="ratings">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-half-o" aria-hidden="true"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-half"></i>
                          </div>
                          <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                        </div>
                      </div>
                    </div>
                  </article>
                  <article class="col-sm-6 post post-medium small-post">
                    <div class="thumbr">
                      <div class="flag flag1"><i class="fa fa-star"></i></div>
                      <a class="post-thumb" href="" data-lity>
                        <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round"
                            aria-hidden="true"></i></span>
                        <img class="img-responsive" src="/public/images/video/thumbs/thumb-s3.jpg" alt="#">
                      </a>
                      <div class="infor">
                        <h4>
                          <a class="title" href="#">Kiss me if I’m wrong but Dinosaurs still exist? Right?</a>
                        </h4>
                        <div class="vid-time-block home-small-posts">
                          <span class="posts-txt" title="Posts from Channel"><i class="fa fa-thumbs-up"
                              aria-hidden="true"></i>20.895</span>
                          <div class="ratings">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-half-o" aria-hidden="true"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-half"></i>
                          </div>
                          <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                        </div>
                      </div>
                    </div>
                  </article>
                  <article class="col-sm-6 post post-medium small-post">
                    <div class="thumbr">
                      <div class="flag flag1"><i class="fa fa-star"></i></div>
                      <a class="post-thumb" href="" data-lity>
                        <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round"
                            aria-hidden="true"></i></span>
                        <img class="img-responsive" src="/public/images/video/thumbs/thumb-s4.jpg" alt="#">
                      </a>
                      <div class="infor">
                        <h4>
                          <a class="title" href="#">Kiss me if I’m wrong but Dinosaurs still exist? Right?</a>
                        </h4>
                        <div class="vid-time-block home-small-posts">
                          <span class="posts-txt" title="Posts from Channel"><i class="fa fa-thumbs-up"
                              aria-hidden="true"></i>20.895</span>
                          <div class="ratings">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-half-o" aria-hidden="true"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-half"></i>
                          </div>
                          <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                        </div>
                      </div>
                    </div>
                  </article>
                </div>
              </div>
            </div>
          </section>
          <div class="clearfix"></div>
          <!-- MAIN ROLL ADVERTISE BOX -->
          <a href="" class="banner-md">
            <img src="/public/images/video/banners/banner-xl.jpg" class="img-responsive"
              alt="Buy Now Muvee Reviews Bootstrap HTML5 Template"
              title="Buy Now Muvee Reviews Bootstrap HTML5 Template">
          </a>
          <!-- CURRENTLY VIEWING -->
          <section id="cur-view">
            <h2 class="icon"><i class="fa fa-eye" aria-hidden="true"></i>currently viewing</h2>
            <div class="row auto-clear">
              <!-- POST L size -->
              <article class="col-lg-2 col-md-4 col-sm-6 post post-medium">
                <div class="thumbr">
                  <a class="post-thumb" href="" data-lity>
                    <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round"
                        aria-hidden="true"></i></span>
                    <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                    <img class="img-responsive" src="/public/images/video/thumbs/thumb-s3.jpg" alt="#">
                  </a>
                </div>
                <div class="infor">
                  <h4>
                    <a class="title" href="#">You play Call of Duty? That’s cute</a>
                  </h4>
                  <span class="posts-txt" title="Posts from Channel"><i class="fa fa-thumbs-up"
                      aria-hidden="true"></i>20.895</span>
                  <div class="ratings">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-half"></i>
                  </div>
                </div>
              </article>
              <!-- POST L size -->
              <article class="col-lg-2 col-md-4 col-sm-6 post post-medium">
                <div class="thumbr">
                  <a class="post-thumb" href="" data-lity>
                    <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round"
                        aria-hidden="true"></i></span>
                    <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                    <img class="img-responsive" src="/public/images/video/thumbs/thumb-s6.jpg" alt="#">
                  </a>
                </div>
                <div class="infor">
                  <h4>
                    <a class="title" href="#">Stay strong, the weekend is coming</a>
                  </h4>
                  <span class="posts-txt" title="Posts from Channel"><i class="fa fa-thumbs-up"
                      aria-hidden="true"></i>20.895</span>
                  <div class="ratings">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-half"></i>
                  </div>
                </div>
              </article>
              <!-- POST L size -->
              <article class="col-lg-2 col-md-4 col-sm-6 post post-medium">
                <div class="thumbr">
                  <a class="post-thumb" href="" data-lity>
                    <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round"
                        aria-hidden="true"></i></span>
                    <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                    <img class="img-responsive" src="/public/images/video/thumbs/thumb-s4.jpg" alt="#">
                  </a>
                </div>
                <div class="infor">
                  <h4>
                    <a class="title" href="#">Be who and what you want, period</a>
                  </h4>
                  <span class="posts-txt" title="Posts from Channel"><i class="fa fa-thumbs-up"
                      aria-hidden="true"></i>20.895</span>
                  <div class="ratings">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-half"></i>
                  </div>
                </div>
              </article>
              <!-- POST L size -->
              <article class="col-lg-2 col-md-4 col-sm-6 post post-medium">
                <div class="thumbr">
                  <a class="post-thumb" href="" data-lity>
                    <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round"
                        aria-hidden="true"></i></span>
                    <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                    <img class="img-responsive" src="/public/images/video/thumbs/thumb-s2.jpg" alt="#">
                  </a>
                </div>
                <div class="infor">
                  <h4>
                    <a class="title" href="#">Don’t let anyone tell you that you’re not strong enough</a>
                  </h4>
                  <span class="posts-txt" title="Posts from Channel"><i class="fa fa-thumbs-up"
                      aria-hidden="true"></i>20.895</span>
                  <div class="ratings">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-half"></i>
                  </div>
                </div>
              </article>
              <!-- POST L size -->
              <article class="col-lg-2 col-md-4 col-sm-6 post post-medium">
                <div class="thumbr">
                  <a class="post-thumb" href="" data-lity>
                    <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round"
                        aria-hidden="true"></i></span>
                    <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                    <img class="img-responsive" src="/public/images/video/thumbs/thumb-s5.jpg" alt="#">
                  </a>
                </div>
                <div class="infor">
                  <h4>
                    <a class="title" href="#">Weekend, please don’t leave me</a>
                  </h4>
                  <span class="posts-txt" title="Posts from Channel"><i class="fa fa-thumbs-up"
                      aria-hidden="true"></i>20.895</span>
                  <div class="ratings">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-half"></i>
                  </div>
                </div>
              </article>
              <!-- POST L size -->
              <article class="col-lg-2 col-md-4 col-sm-6 post post-medium">
                <div class="thumbr">
                  <a class="post-thumb" href="" data-lity>
                    <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round"
                        aria-hidden="true"></i></span>
                    <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                    <img class="img-responsive" src="/public/images/video/thumbs/thumb-s.jpg" alt="#">
                  </a>
                </div>
                <div class="infor">
                  <h4>
                    <a class="title" href="#">You think this is a game?</a>
                  </h4>
                  <span class="posts-txt" title="Posts from Channel"><i class="fa fa-thumbs-up"
                      aria-hidden="true"></i>20.895</span>
                  <div class="ratings">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-half"></i>
                  </div>
                </div>
              </article>
            </div>
          </section>
          <div class="clearfix spacer"></div>
          <!-- REVIEWS -->
          <section id="main-reviews">
            <div id="myCarousel2" class="carousel slide" data-ride="carousel">
              <h2 class="icon"><i class="fa fa-star" aria-hidden="true"></i>top reviews</h2>
              <div class="carousel-control-box">
                <a class="left carousel-control" href="#myCarousel2" role="button" data-slide="prev"><i
                    class="fa fa-chevron-left" aria-hidden="true"></i></a>
                <a class="right carousel-control" href="#myCarousel2" role="button" data-slide="next"><i
                    class="fa fa-chevron-right" aria-hidden="true"></i></a>
              </div>
              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                <div class="item active">
                  <div class="row auto-clear">
                    <article class="reviews col-lg-2 col-md-4 col-sm-4">
                      <!-- POST L size -->
                      <div class="post post-medium">
                        <a class="thumbr post-thumb" href="#">
                          <span class="review-number">4.5</span>
                          <img src="/public/images/video/thumbs/thumb-review.jpg" class="review img-responsive"
                            alt="Client">
                        </a>
                        <div class="infor">
                          <h4>
                            <a class="title" href="#">Little Miss Piggy</a>
                          </h4>
                          <div class="ratings">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-half-o" aria-hidden="true"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-half"></i>
                          </div>
                        </div>
                      </div>
                    </article>
                    <article class="reviews col-lg-2 col-md-4 col-sm-4">
                      <!-- POST L size -->
                      <div class="post post-medium">
                        <a class="thumbr post-thumb" href="#">
                          <span class="review-number">4.5</span>
                          <img src="/public/images/video/thumbs/thumb-review2.jpg" class="review img-responsive"
                            alt="Client">
                        </a>
                        <div class="infor">
                          <h4>
                            <a class="title" href="#">Dimples Little Miss Cupcake</a>
                          </h4>
                          <div class="ratings">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-half-o" aria-hidden="true"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-half"></i>
                          </div>
                        </div>
                      </div>
                    </article>
                    <article class="reviews col-lg-2 col-md-4 col-sm-4">
                      <!-- POST L size -->
                      <div class="post post-medium">
                        <a class="thumbr post-thumb" href="#">
                          <span class="review-number">4.5</span>
                          <img src="/public/images/video/thumbs/thumb-review3.jpg" class="review img-responsive"
                            alt="Client">
                        </a>
                        <div class="infor">
                          <h4>
                            <a class="title" href="#">Angel Snowflakes</a>
                          </h4>
                          <div class="ratings">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-half-o" aria-hidden="true"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-half"></i>
                          </div>
                        </div>
                      </div>
                    </article>
                    <article class="reviews col-lg-2 col-md-4 col-sm-4">
                      <!-- POST L size -->
                      <div class="post post-medium">
                        <a class="thumbr post-thumb" href="#">
                          <span class="review-number">4.5</span>
                          <img src="/public/images/video/thumbs/thumb-review4.jpg" class="review img-responsive"
                            alt="Client">
                        </a>
                        <div class="infor">
                          <h4>
                            <a class="title" href="#">Brutal Lovely Lights</a>
                          </h4>
                          <div class="ratings">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-half-o" aria-hidden="true"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-half"></i>
                          </div>
                        </div>
                      </div>
                    </article>
                    <article class="reviews col-lg-2 col-md-4 col-sm-4">
                      <!-- POST L size -->
                      <div class="post post-medium">
                        <a class="thumbr post-thumb" href="#">
                          <span class="review-number">4.5</span>
                          <img src="/public/images/video/thumbs/thumb-review5.jpg" class="review img-responsive"
                            alt="Client">
                        </a>
                        <div class="infor">
                          <h4>
                            <a class="title" href="#">Snerus Dear sweetie</a>
                          </h4>
                          <div class="ratings">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-half-o" aria-hidden="true"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-half"></i>
                          </div>
                        </div>
                      </div>
                    </article>
                    <article class="reviews col-lg-2 col-md-4 col-sm-4">
                      <!-- POST L size -->
                      <div class="post post-medium">
                        <a class="thumbr post-thumb" href="#">
                          <span class="review-number">4.5</span>
                          <img src="/public/images/video/thumbs/thumb-review6.jpg" class="review img-responsive"
                            alt="Client">
                        </a>
                        <div class="infor">
                          <h4>
                            <a class="title" href="#">Fruity Touch</a>
                          </h4>
                          <div class="ratings">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-half-o" aria-hidden="true"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-half"></i>
                          </div>
                        </div>
                      </div>
                    </article>
                  </div>
                </div>
                <div class="item">
                  <div class="row auto-clear">
                    <article class="reviews col-lg-2 col-md-4 col-sm-4">
                      <!-- POST L size -->
                      <div class="post post-medium">
                        <a class="thumbr post-thumb" href="#">
                          <span class="review-number">4.5</span>
                          <img src="/public/images/video/thumbs/thumb-review.jpg" class="review img-responsive"
                            alt="Client">
                        </a>
                        <div class="infor">
                          <h4>
                            <a class="title" href="#">Little Miss Piggy</a>
                          </h4>
                          <div class="ratings">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-half-o" aria-hidden="true"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-half"></i>
                          </div>
                        </div>
                      </div>
                    </article>
                    <article class="reviews col-lg-2 col-md-4 col-sm-4">
                      <!-- POST L size -->
                      <div class="post post-medium">
                        <a class="thumbr post-thumb" href="#">
                          <span class="review-number">4.5</span>
                          <img src="/public/images/video/thumbs/thumb-review2.jpg" class="review img-responsive"
                            alt="Client">
                        </a>
                        <div class="infor">
                          <h4>
                            <a class="title" href="#">Dimples Little Miss Cupcake</a>
                          </h4>
                          <div class="ratings">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-half-o" aria-hidden="true"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-half"></i>
                          </div>
                        </div>
                      </div>
                    </article>
                    <article class="reviews col-lg-2 col-md-4 col-sm-4">
                      <!-- POST L size -->
                      <div class="post post-medium">
                        <a class="thumbr post-thumb" href="#">
                          <span class="review-number">4.5</span>
                          <img src="/public/images/video/thumbs/thumb-review3.jpg" class="review img-responsive"
                            alt="Client">
                        </a>
                        <div class="infor">
                          <h4>
                            <a class="title" href="#">Angel Snowflakes</a>
                          </h4>
                          <div class="ratings">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-half-o" aria-hidden="true"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-half"></i>
                          </div>
                        </div>
                      </div>
                    </article>
                    <article class="reviews col-lg-2 col-md-4 col-sm-4">
                      <!-- POST L size -->
                      <div class="post post-medium">
                        <a class="thumbr post-thumb" href="#">
                          <span class="review-number">4.5</span>
                          <img src="/public/images/video/thumbs/thumb-review4.jpg" class="review img-responsive"
                            alt="Client">
                        </a>
                        <div class="infor">
                          <h4>
                            <a class="title" href="#">Brutal Lovely Lights</a>
                          </h4>
                          <div class="ratings">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-half-o" aria-hidden="true"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-half"></i>
                          </div>
                        </div>
                      </div>
                    </article>
                    <article class="reviews col-lg-2 col-md-4 col-sm-4">
                      <!-- POST L size -->
                      <div class="post post-medium">
                        <a class="thumbr post-thumb" href="#">
                          <span class="review-number">4.5</span>
                          <img src="/public/images/video/thumbs/thumb-review5.jpg" class="review img-responsive"
                            alt="Client">
                        </a>
                        <div class="infor">
                          <h4>
                            <a class="title" href="#">Snerus Dear sweetie</a>
                          </h4>
                          <div class="ratings">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-half-o" aria-hidden="true"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-half"></i>
                          </div>
                        </div>
                      </div>
                    </article>
                    <article class="reviews col-lg-2 col-md-4 col-sm-4">
                      <!-- POST L size -->
                      <div class="post post-medium">
                        <a class="thumbr post-thumb" href="#">
                          <span class="review-number">4.5</span>
                          <img src="/public/images/video/thumbs/thumb-review6.jpg" class="review img-responsive"
                            alt="Client">
                        </a>
                        <div class="infor">
                          <h4>
                            <a class="title" href="#">Fruity Touch</a>
                          </h4>
                          <div class="ratings">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-half-o" aria-hidden="true"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-half"></i>
                          </div>
                        </div>
                      </div>
                    </article>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
@endsection
