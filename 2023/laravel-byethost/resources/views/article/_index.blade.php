@extends($prefix . '.layout')

@section('content')
  <div class="container" data-role="content">
    <div class="row">
      <div class="col-9">
      @section('article')
        @empty($contents)
        @else
          @if ($meta->mid)
            <div class="jumbotron">
              <h3>
                {{ $meta->name }}
                <span class="badge badge-secondary">{{ $meta->type }}</span>
              </h3>
            </div>
          @endif
          @foreach ($contents as $index => $content)
            @if ($index === '_logs')
              @continue
            @endif
            <div class="card mb-3">
              <div class="card-header">{{ $content->title }}</div>
              <div class="card-body" style="max-height: 110px;overflow: hidden;">
                {{ $content->description }}
              </div>
              <div class="card-footer small">
                {{ $content->release_at ?? '0000-00-00 00:00:00' }}
                <a href="/article/content/{{ $content->cid }}" class="float-right">
                  more
                  <i class="bi bi-three-dots"></i>
                </a>
              </div>
            </div>
          @endforeach
          @php
            // var_dump($contents->toArray());
            // var_dump($contents->getOptions());
          @endphp
          <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
              <li class="page-item @if ($contents->onFirstPage()) disabled @endif">
                <a class="page-link" href="{{ $contents->previousPageUrl() }}">Previous</a>
              </li>
              {{-- <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li> --}}
              <li class="page-item">
                <a class="page-link" href="{{ $contents->nextPageUrl() }}">Next</a>
              </li>
            </ul>
          </nav>
        @endempty
      @show
    </div>
    <div class="col-3">
      <div class="card mb-3">
        <div class="card-header">
          排行文章
        </div>
        <div class="card-body"></div>
      </div>
      <div class="card mb-3">
        <div class="card-header">
          最新文章
        </div>
        <div class="card-body"></div>
      </div>
      <div class="card mb-3">
        <div class="card-header">
          分类
        </div>
        <div class="card-body" style="padding: 0.75rem 0.25rem;">
          <ul class="nav flex-column nav-pills small">
            @foreach ($categories as $category)
              <li class="nav-item" role="presentation">
                <a class="nav-link text-dark text-decoration-none @if (request()->input('meta') == $category->mid) active @endif"
                  href="/article?meta={{ $category->mid }}" style="padding: 0 0.5rem;">
                  {{ $category->name }}
                </a>
                <ul class="nav flex-column nav-pills">
                  @foreach ($category->children as $category_1)
                    <li class="nav-item" role="presentation">
                      <a class="nav-link text-dark text-decoration-none @if (request()->input('meta') == $category_1->mid) active @endif"
                        href="/article?meta={{ $category_1->mid }}"
                        style="padding: 0 0.5rem;">{{ $category_1->name }}</a>
                    </li>
                  @endforeach
                </ul>
              </li>
            @endforeach
          </ul>
        </div>
      </div>
      <div class="card mb-3">
        <div class="card-header">
          标签
        </div>
        <div class="card-body">
          @foreach ($tags as $tag)
            <a href="/article?meta={{ $tag['mid'] }}"
              class="badge badge-pill badge-default @if (request()->input('meta') == $tag->mid) badge-primary @endif">{{ $tag->name }}</a>
          @endforeach
        </div>
      </div>
      <div class="card mb-3">
        <div class="card-header">
          其它
        </div>
        <div class="card-body"></div>
      </div>
    </div>
  </div>
</div>
@endsection
