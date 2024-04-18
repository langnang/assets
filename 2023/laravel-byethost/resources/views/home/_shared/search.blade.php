{{-- 搜索 --}}
@php
  $name = $name ?? 'search';
  $id = $id ?? $name . '-' . (string) Str::uuid();
  // $data = $data ?? [[], [], [], []];
  $props = $props ?? [];
  $data = [
      [
          'name' => '综合',
          'children' => [
              [
                  'slug' => 'https://www.baidu.com/s',
                  'key' => 'wd',
                  'ico' => 'https://www.baidu.com/favicon.ico',
                  'title' => '百度',
              ],
              ['slug' => 'https://www.baidu.com/s', 'key' => 'wd', 'ico' => 'https://www.google.cn/chrome/static/images/favicons/favicon-16x16.png', 'title' => 'Google'],
          ],
      ],
      ['name' => '学术', 'children' => []],
      ['name' => '百科', 'children' => []],
      ['name' => '资讯', 'children' => []],
      [
          'name' => '其它',
          'children' => [
              [
                  'slug' => 'https://www.baidu.com/s',
                  'key' => 'wd',
                  'ico' => 'https://github.com/favicon.ico',
                  'title' => 'GitHub',
              ],
              ['slug' => 'https://www.baidu.com/s', 'key' => 'wd', 'ico' => 'https://gitee.com/assets/favicon_message.ico', 'title' => 'Gitee'],
              ['slug' => 'http://www.vpansou.com/query', 'key' => 'wd', 'ico' => 'http://www.vpansou.com/favicon.ico', 'title' => 'V盘搜'],
          ],
      ],
  ];
@endphp
<div class="row justify-content-md-center mb-3" style="padding: 2rem 0;">
  <div class="col-sm-12 col-md-6 align-self-center mb-3">
    <form action="https://www.baidu.com/s" id="{{ $id }}" name="{{ $name }}" data-role="search">
      <div class="input-group input-group-lg">
        <div class="input-group-prepend">
          <button class="btn btn-outline-secondary" type="button" data-role="search-ico">
            <div class="media">
              <img src="https://www.baidu.com/favicon.ico" class="align-self-center mr-1" width="24" alt="">
              <div class="media-body" style="line-height: 1;">
                <p class="mt-0 mb-0"> 百度 </p>
              </div>
            </div>
          </button>
        </div><!-- /btn-group -->
        <input type="text" class="form-control" name="wd" aria-label="...">
        <span class="input-group-append">
          <button class="btn btn-outline-secondary" type="submit">Go!</button>
        </span>
      </div><!-- /input-group -->
    </form>
  </div>
  <div class="col-sm-12">
    @foreach ($data as $item)
      <div class="card card-sm mb-3">
        <div class="card-header">{{ $item['name'] }} </div>
        <div class="card-body row row-cols-1 row-cols-sm-2 row-cols-md-4">
          @foreach ($item['children'] ?? [] as $child)
            @empty($child['title'])
            @else
              <div class="col pl-1 pr-1 mb-1">
                <div class="card">
                  <div class="card-body">
                    <div class="media" data-href="{{ $child['slug'] }}" data-key="{{ $child['key'] }}">
                      <img src="{{ $child['ico'] }}" class="align-self-center mr-1" width="20" alt="">
                      <div class="media-body" style="line-height: 1;">
                        <h5 class="mt-0 mb-0"> {{ $child['title'] }} </h5>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            @endempty
          @endforeach
        </div>
      </div>
    @endforeach
  </div>
</div>



@php
  return $id;
@endphp
