@extends('_layout.auto')

@section('main')
  <div class="container">
    <div class="jumbotron">
      <h1>Article</h1>
      <p>...</p>
      <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
    </div>
    <div class="row">
      <div class="col-md-9">
        @foreach ($contents as $index => $content)
          @if ($index === '_logs')
            @continue
          @endif
          <div class="panel panel-default">
            <div class="panel-heading">{{ $content->title }}</div>
            <div class="panel-body">
              {{ $content->text }}
            </div>
            <div class="panel-footer">
              {{ $content->updated_at }}
              <a href="/article/content/{{ $content->cid }}" class="pull-right">
                更多内容>>
              </a>
            </div>
          </div>
        @endforeach
      </div>
      <div class="col-md-3">
        <div class="page-header">
          <h3>Example page header</h3>
        </div>
        <ul class="nav nav-pills nav-stacked">
          @foreach ($categories as $category)
            <li role="presentation">
              <a href="?category={{ $category->name }}" style="padding:0 15px;">
                {{ $category->name }}
              </a>
              <ul class="nav nav-pills nav-stacked">
                @foreach ($category->children as $category_1)
                  <li role="presentation">
                    <a href="?category={{ $category_1->name }}" style="padding:0 15px;">{{ $category_1->name }}</a>
                  </li>
                @endforeach
              </ul>
            </li>
          @endforeach
        </ul>
        <div class="page-header">
          <h3>Example page header</h3>
        </div>
        @foreach ($tags as $tag)
          <a href="?tag={{ $tag->name }}" class="label label-primary">{{ $tag->name }}</a>
        @endforeach
      </div>
    </div>
    @empty($pager)
    @else
      <nav aria-label="...">
        <ul class="pager">
          <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
          <li><a href="#">Previous</a></li>
          <li><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">5</a></li>
          <li><a href="#">Next</a></li>
        </ul>
      </nav>
    @endempty
  </div>
@endsection
