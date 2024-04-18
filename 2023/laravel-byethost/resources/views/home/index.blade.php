@extends('_layout.auto')

@section('content')
  <div class="container-fluid">
    {{-- 搜索组件 --}}
    @include('home._shared.search')
    
    <div class="card sr-only">
      <div class="card-body">
        @include('home._shared.tophub', ['slug' => $slug, 'data' => $tophub])
      </div>
    </div>
    {{-- toplist --}}
    @if (false)
      <div class="row mb-3">
        <div class="col-md-4">
          <div class="card card-default">
            <!-- Default panel contents -->
            <div class="card-header">
              <a class="card-title" href="/article" style="line-height: 30px;">合集</a>
              <ul class="nav nav-tabs card-header-tabs" role="tablist" style="float: right;">
                <li class="nav-item">
                  <a class="nav-link active" aria-controls="collection-toplist" role="tab" data-toggle="tab"
                    href="#collection-toplist">排行</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" aria-controls="collection-latest" role="tab" data-toggle="tab"
                    href="#collection-latest">最新</a>
                </li>
              </ul>
            </div>
            <!-- List group -->

            <!-- Nav tabs -->

            <!-- Tab panes -->
            <div class="tab-content list-group-flush" style="height: 300px;overflow: auto;">
              <ul role="tabpanel" class="tab-pane fade show list-group list-group-sm list-group-flush active"
                id="collection-toplist">
                <li class="list-group-item">Cras justo odio</li>
              </ul>
              <ul role="tabpanel" class="tab-pane fade list-group list-group-sm list-group-flush" id="collection-latest">
                <li class="list-group-item">Cras justo odio</li>
                <li class="list-group-item">Dapibus ac facilisis in</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-default">
            <!-- Default panel contents -->
            <div class="card-header">
              <a class="card-title" href="/article" style="line-height: 30px;">文章</a>
              <ul class="nav nav-tabs card-header-tabs" role="tablist" style="float: right;">
                <li class="nav-item">
                  <a class="nav-link active" aria-controls="article-toplist" role="tab" data-toggle="tab"
                    href="#article-toplist">排行</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" aria-controls="article-latest" role="tab" data-toggle="tab"
                    href="#article-latest">最新</a>
                </li>
              </ul>
            </div>
            <!-- List group -->

            <!-- Nav tabs -->

            <!-- Tab panes -->
            <div class="tab-content list-group-flush" style="height: 300px;overflow: auto;">
              <ul role="tabpanel" class="tab-pane fade show list-group list-group-sm list-group-flush active"
                id="article-toplist">
                @foreach ($article['toplist'] as $item)
                  <li class="list-group-item">{{ $item->title }}</li>
                @endforeach
              </ul>
              <ul role="tabpanel" class="tab-pane fade list-group list-group-sm list-group-flush" id="article-latest">
                @foreach ($article['latest'] as $item)
                  <li class="list-group-item">{{ $item->title }}</li>
                @endforeach
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-default">
            <!-- Default panel contents -->
            <div class="card-header">
              <a class="card-title" href="/article" style="line-height: 30px;">导航</a>
              <ul class="nav nav-tabs card-header-tabs" role="tablist" style="float: right;">
                <li class="nav-item">
                  <a class="nav-link active" aria-controls="webstack-toplist" role="tab" data-toggle="tab"
                    href="#webstack-toplist">排行</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" aria-controls="webstack-latest" role="tab" data-toggle="tab"
                    href="#webstack-latest">最新</a>
                </li>
              </ul>
            </div>
            <!-- List group -->

            <!-- Nav tabs -->

            <!-- Tab panes -->
            <div class="tab-content list-group-flush" style="height: 300px;overflow: auto;">
              <ul role="tabpanel" class="tab-pane fade show list-group list-group-sm list-group-flush active"
                id="webstack-toplist">
                @foreach ($webstack['toplist'] as $item)
                  <li class="list-group-item">{{ $item->title }}</li>
                @endforeach
              </ul>
              <ul role="tabpanel" class="tab-pane fade list-group list-group-sm list-group-flush" id="webstack-latest">
                @foreach ($webstack['latest'] as $item)
                  <li class="list-group-item">{{ $item->title }}</li>
                @endforeach
              </ul>
            </div>
          </div>
        </div>

      </div>
    @endif

    @if (false)
      <div class="row" style="display: flex; justify-content: space-between;">
        <div class="col-sm-3 col-md-2">
          <div class="thumbnail">
            <img data-src="holder.js/100x200" alt="100%x200" style="height: 200px; width: 100%; display: block;"
              data-holder-rendered="true">
            <div class="caption">
              <h3>Thumbnail label</h3>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta
                gravida at eget
                metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p>
                <a href="#" class="btn btn-primary" role="button">Button</a>
                <a href="#" class="btn btn-default" role="button">Button</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    @endif

    @if (Route::has('/api/user/login'))
      <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
        @auth
          <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
        @else
          <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

          @if (Route::has('register'))
            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
          @endif
        @endauth
      </div>
    @endif
    @if (false)
      <div class="row">
        <div class="col-md-4">
          <svg viewBox="0 0 651 192" fill="none" xmlns="http://www.w3.org/2000/svg"
            class="h-16 w-auto text-gray-700 sm:h-20">
            <g clip-path="url(#clip0)" fill="#EF3B2D">
              <path
                d="M248.032 44.676h-16.466v100.23h47.394v-14.748h-30.928V44.676zM337.091 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.431 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162-.001 2.863-.479 5.584-1.432 8.161zM463.954 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.432 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162 0 2.863-.479 5.584-1.432 8.161zM650.772 44.676h-15.606v100.23h15.606V44.676zM365.013 144.906h15.607V93.538h26.776V78.182h-42.383v66.724zM542.133 78.182l-19.616 51.096-19.616-51.096h-15.808l25.617 66.724h19.614l25.617-66.724h-15.808zM591.98 76.466c-19.112 0-34.239 15.706-34.239 35.079 0 21.416 14.641 35.079 36.239 35.079 12.088 0 19.806-4.622 29.234-14.688l-10.544-8.158c-.006.008-7.958 10.449-19.832 10.449-13.802 0-19.612-11.127-19.612-16.884h51.777c2.72-22.043-11.772-40.877-33.023-40.877zm-18.713 29.28c.12-1.284 1.917-16.884 18.589-16.884 16.671 0 18.697 15.598 18.813 16.884h-37.402zM184.068 43.892c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002-35.648-20.524a2.971 2.971 0 00-2.964 0l-35.647 20.522-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v38.979l-29.706 17.103V24.493a3 3 0 00-.103-.776c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002L40.098 1.396a2.971 2.971 0 00-2.964 0L1.487 21.919l-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v122.09c0 1.063.568 2.044 1.489 2.575l71.293 41.045c.156.089.324.143.49.202.078.028.15.074.23.095a2.98 2.98 0 001.524 0c.069-.018.132-.059.2-.083.176-.061.354-.119.519-.214l71.293-41.045a2.971 2.971 0 001.489-2.575v-38.979l34.158-19.666a2.971 2.971 0 001.489-2.575V44.666a3.075 3.075 0 00-.106-.774zM74.255 143.167l-29.648-16.779 31.136-17.926.001-.001 34.164-19.669 29.674 17.084-21.772 12.428-43.555 24.863zm68.329-76.259v33.841l-12.475-7.182-17.231-9.92V49.806l12.475 7.182 17.231 9.92zm2.97-39.335l29.693 17.095-29.693 17.095-29.693-17.095 29.693-17.095zM54.06 114.089l-12.475 7.182V46.733l17.231-9.92 12.475-7.182v74.537l-17.231 9.921zM38.614 7.398l29.693 17.095-29.693 17.095L8.921 24.493 38.614 7.398zM5.938 29.632l12.475 7.182 17.231 9.92v79.676l.001.005-.001.006c0 .114.032.221.045.333.017.146.021.294.059.434l.002.007c.032.117.094.222.14.334.051.124.088.255.156.371a.036.036 0 00.004.009c.061.105.149.191.222.288.081.105.149.22.244.314l.008.01c.084.083.19.142.284.215.106.083.202.178.32.247l.013.005.011.008 34.139 19.321v34.175L5.939 144.867V29.632h-.001zm136.646 115.235l-65.352 37.625V148.31l48.399-27.628 16.953-9.677v33.862zm35.646-61.22l-29.706 17.102V66.908l17.231-9.92 12.475-7.182v33.841z" />
            </g>
          </svg>
        </div>

      </div>
    @endif
    @if (false)
      <div class="card">
        <div class="card-body">
          @include('_shared.carousel', ['controls' => true])
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="card">
            <div class="card-body">
              <div class="media">
                <div class="media-left">
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="2" viewBox="0 0 24 24" width="72px">
                    <path
                      d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                    </path>
                  </svg>
                </div>
                <div class="media-body">
                  <h2 class="media-heading">
                    <a href="https://laravel.com/docs" class="underline text-gray-900 dark:text-white">Documentation</a>
                  </h2>
                  <p>
                    Laravel has wonderful, thorough documentation covering every aspect of the
                    framework. Whether you
                    are
                    new to the framework or have previous experience with Laravel, we recommend reading
                    all of the
                    documentation from beginning to end.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="card">
            <div class="card-body">
              <div class="media">
                <div class="media-left">
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="2" viewBox="0 0 24 24" width="72px">
                    <path
                      d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z">
                    </path>
                    <path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path>
                  </svg>
                </div>
                <div class="media-body">
                  <h2 class="media-heading">
                    <a href="https://laracasts.com" class="underline text-gray-900 dark:text-white">Laracasts</a>
                  </h2>
                  <p>
                    Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript
                    development. Check
                    them
                    out, see for yourself, and massively level up your development skills in the
                    process.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="card">
            <div class="card-body">
              <div class="media">
                <div class="media-left">
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="2" viewBox="0 0 24 24" width="72px">
                    <path
                      d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z">
                    </path>
                  </svg>

                </div>

                <div class="media-body">
                  <h2 class="media-heading">
                    <a href="https://laravel-news.com/" class="underline text-gray-900 dark:text-white">Laravel
                      News</a>
                  </h2>
                  <p>
                    Laravel News is a community driven portal and newsletter aggregating all of the
                    latest and most
                    important news in the Laravel ecosystem, including new package releases and
                    tutorials.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card">
            <div class="card-body">
              <div class="media">
                <div class="media-left">
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="2" viewBox="0 0 24 24" width="72px">
                    <path
                      d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                    </path>
                  </svg>
                </div>

                <div class="media-body">
                  <h2 class="media-heading">Vibrant Ecosystem</h2>
                  <p>
                    Laravel's robust library of first-party tools and libraries, such as <a
                      href="https://forge.laravel.com" class="underline">Forge</a>, <a href="https://vapor.laravel.com"
                      class="underline">Vapor</a>, <a href="https://nova.laravel.com" class="underline">Nova</a>, and
                    <a href="https://envoyer.io" class="underline">Envoyer</a> help you take your
                    projects to the next
                    level. Pair them with powerful
                    open source libraries like <a href="https://laravel.com/docs/billing" class="underline">Cashier</a>,
                    <a href="https://laravel.com/docs/dusk" class="underline">Dusk</a>, <a
                      href="https://laravel.com/docs/broadcasting" class="underline">Echo</a>, <a
                      href="https://laravel.com/docs/horizon" class="underline">Horizon</a>, <a
                      href="https://laravel.com/docs/sanctum" class="underline">Sanctum</a>, <a
                      href="https://laravel.com/docs/telescope" class="underline">Telescope</a>, and
                    more.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="card card-default">
        <div class="card-header">关联链接</div>
        <div class="card-body">
          <ul class="list-inline" style="margin-bottom: 0;">
            <li class="list-inline-item"><a target="_blank" class="label label-default"
                href="https://github.com/">Github</a></li>
            <li class="list-inline-item"><a target="_blank" class="label label-default"
                href="https://leetcode.cn/">LeetCode</a></li>
            <li class="list-inline-item"><a target="_blank" class="label label-default"
                href="https://juejin.cn/">掘金</a>
            </li>
            <li class="list-inline-item"><a target="_blank" class="label label-default"
                href="https://www.zhihu.com/">知乎</a></li>
            <li class="list-inline-item"><a target="_blank" class="label label-default"
                href="https://stackoverflow.com/">Stack
                Overflow</a></li>
            <li class="list-inline-item"><a target="_blank" class="label label-default"
                href="https://www.npmjs.com/">NPM</a></li>
            <li class="list-inline-item"><a target="_blank" class="label label-default"
                href="http://packagist.p2hp.com/">Packagist</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="">
        <div class="pull-right">
          Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
        </div>
      </div>
    @endif
  </div>
@endsection

@section('scripts')
  <script>
    $(document).ready(function() {
      console.log(123);
      $('#tophubTab .nav-link').on('click', function(event) {
        // event.preventDefault()
        // console.log($(this).text());
        // $(this).tab('show')
        $("[data-role=search-ico] img").css('display', 'none');
        $("[data-role=search-ico] span").text($(this).text().trim());
      })
      $('#tophubTabContent .media').on('click', function(event) {
        // event.preventDefault()
        const ico = $(this).find('img').attr('src');
        const text = $(this).text().trim().replace(/\s+/i, '/');
        const link = $(this).find('a').attr('href');
        console.log({
          _this: this,
          ico,
          text,
          link,
        });
        // console.log($(this).text());
        // $(this).tab('show')
        // $("[data-role=search-ico]").text('(全)' + $(this).text());
        $("[data-role=search-ico] img").css('display', 'inline').attr('src', ico);
        $("[data-role=search-ico] span").text(text);

      })
      //
      $('.bi.bi-list,.bi.bi-grid-fill').on('click', function(event) {

        console.log(this);
        console.log($(this));
        console.log($(this).closest('.row'));
        //
        $(this).siblings().removeClass('btn-primary').addClass('btn-light');
        //
        $(this).removeClass('btn-light').addClass('btn-primary');
        //
        if ($(this).hasClass('bi-grid-fill')) {
          $(this).closest('.row').find('.card').addClass('open')
        }
        //
        if ($(this).hasClass('bi-list')) {
          $(this).closest('.row').find('.card').removeClass('open')
        }
        // $(this).siblings().addClass('btn-light');
      })
    })
  </script>
  <script>
    $(document).ready(function() {
      $('#tophubTabContent .list-group-flush').each(function(index, element) {
        new PerfectScrollbar(element, {
          wheelSpeed: 2,
          wheelPropagation: true,
          minScrollbarLenghth: 20,
        });
      })
    })
  </script>
@endsection
