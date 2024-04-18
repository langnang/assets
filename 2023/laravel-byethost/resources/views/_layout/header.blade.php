{{-- 顶部导航栏 --}}
{{-- @include('_shared.navbar') --}}

@php
  $name = $name ?? 'header';
  $id = $id ?? $name . '-' . (string) Str::uuid();
  $props = [
      'ico' => 'ico',
      'label' => 'label',
      'children' => 'children',
  ];
  $data = $data ?? [];
@endphp

<header class="@if (!($data['visible'] ?? true)) sr-only @endif" style="height: 56px;">
  <div class="navbar navbar-expand-lg navbar-light bg-light" data-role="header">
    <a class="navbar-brand" href="/">
      <img src="/public/favicon.ico" width="30" height="30" class="d-inline-block align-top" alt="">
      Langnang </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        @foreach ($data['navs'] ?? [] as $item)
          <li class="nav-item">
            <a class="nav-link @if ('/' . request()->path() === ($item['url'] ?? '')) active @endif" href="{{ $item['url'] ?? '' }}"> <i
                class="{{ $item['ico'] ?? '' }}"></i>
              {{ $item['name'] ?? '' }} </a>
          </li>
        @endforeach
      </ul>
      <form class="form-inline my-2 my-lg-0 sr-only">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="/"><i class="bi bi-house-door"></i> 首页</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/webstack"><i class="bi bi-stack"></i> 导航 </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/article"><i class="bi bi-layout-text-window"></i> 博客 </a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="/forum"><i class="bi bi-star"></i> 论坛 </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
            aria-expanded="false">
            <i class="bi bi-star"></i>
            工具
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="/module"><i class="bi bi-grid-fill"></i> 模块</a>
            <a class="dropdown-item" href="/icon"><i class="bi bi-star"></i> 徽标</a>
            <a class="dropdown-item" href="/software"><i class="bi bi-star"></i> 应用</a>
            <a class="dropdown-item" href="/soft-installer"><i class="bi bi-star"></i> 应用安装器</a>
            <a class="dropdown-item" href="/spider"><i class="bi bi-bug"></i> 爬虫</a>
            <a class="dropdown-item" href="/toolkit"><i class="bi bi-tools"></i> 辅助</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
            aria-expanded="false">
            <i class="bi bi-mortarboard"></i>
            学院
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="/book"><i class="bi bi-book"></i> 书册</a>
            <a class="dropdown-item" href="/question"><i class="bi bi-patch-question"></i> 试题</a>
            <a class="dropdown-item" href="/snippet"><i class="bi bi-code"></i> 片段</a>
            <a class="dropdown-item" href="/awesome"><i class="bi bi-star"></i> 拓展库</a>
            <a class="dropdown-item" href="/cheatsheet"><i class="bi bi-star"></i> 速查表</a>
            <a class="dropdown-item" href="/openai"><i class="bi bi-star"></i> 公共接口</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
            aria-expanded="false">
            <i class="bi bi-star"></i>
            生活
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="/news"> <i class="bi bi-newspaper"></i> 资讯</a>
            <a class="dropdown-item" href="/story"> <i class="bi bi-star"></i> 故事</a>
            <a class="dropdown-item" href="/quote"> <i class="bi bi-star"></i> 语录</a>
            <a class="dropdown-item" href="/law"> <i class="bi bi-star"></i> 律法</a>
            <a class="dropdown-item" href="/dictionary"> <i class="bi bi-star"></i> 词典</a>
            <a class="dropdown-item" href="/diet"> <i class="bi bi-star"></i> 饮食</a>
            <a class="dropdown-item" href="/novel"> <i class="bi bi-star"></i> 小说</a>
            <a class="dropdown-item" href="/image"> <i class="bi bi-star"></i> 图片</a>
            <a class="dropdown-item" href="/audio"> <i class="bi bi-cassette"></i> 音频</a>
            <a class="dropdown-item" href="/video"> <i class="bi bi-camera-video"></i> 视频</a>
            <a class="dropdown-item" href="/game"> <i class="bi bi-joystick"></i> 游戏</a>
            <a class="dropdown-item" href="/shop"> <i class="bi bi-star"></i> 购物</a>
            <a class="dropdown-item" href="/chat"> <i class="bi bi-star"></i> 聊天</a>
            <a class="dropdown-item" href="/resource"> <i class="bi bi-star"></i> 资源</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
            aria-expanded="false">
            <i class="bi bi-three-dots"></i>
            其它
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" target="_blank" href="http://storage-mount.22web.org">
              <i class="bi bi-star"></i> 云盘</a>
          </div>
        </li>
        <li class="nav-item">
          @auth
          @else
            <a class="nav-link" href="/admin">
              <i class="bi bi-person-circle"></i>
              Login
            </a>
          @endauth
        </li>
      </ul>
    </div>
  </div>
</header>
