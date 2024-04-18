{{-- 分页 --}}

{{-- 为您的网站或应用提供带有展示页码的分页组件，或者可以使用简单的翻页组件。 --}}
@php
  // $pagination = $pagination ?? new \Illuminate\Pagination\LengthAwarePaginator();
  $current_page = $current_page ?? 1;
  $last_page = $last_page ?? 1;
  $query = $query ?? [];
@endphp
<nav class="mb-3" aria-label="...">
  <ul class="pagination justify-content-center">
    <li class="page-item" title="首页">
      <a class="page-link" style="padding: 0.63rem 0.6rem;" href="?page=1&{{ Arr::query($query) }}">
        <i class="bi bi-chevron-bar-left"></i>
      </a>
    </li>
    <li class="page-item" title="上一页">
      <a class="page-link" style="padding: 0.63rem 0.6rem;"
        href="?page={{ $current_page - 1 < 1 ? 1 : $current_page - 1 }}&{{ Arr::query($query) }}">
        <i class="bi bi-chevron-double-left"></i>
      </a>
    </li>
    @for ($i = $current_page - 3; $i < $current_page; $i++)
      @if ($i > 0)
        <li class="page-item" aria-current="page">
          <a class="page-link" href="?page={{ $i }}&{{ Arr::query($query) }}">{{ $i }}</a>
        </li>
      @endif
    @endfor
    <li class="page-item active"><a class="page-link" href="#">{{ $current_page }}</a></li>
    @for ($i = $current_page + 1; $i < $current_page + 4; $i++)
      @if ($i < $last_page + 1)
        <li class="page-item" aria-current="page">
          <a class="page-link" href="?page={{ $i }}&{{ Arr::query($query) }}">{{ $i }}</a>
        </li>
      @endif
    @endfor
    <li class="page-item" title="下一页">
      <a class="page-link" style="padding: 0.63rem 0.6rem;"
        href="?page={{ $current_page + 1 > $last_page ? $last_page : $current_page + 1 }}&{{ Arr::query($query) }}">
        <i class="bi bi-chevron-double-right"></i>
      </a>
    </li>
    <li class="page-item" title="尾页">
      <a class="page-link" style="padding: 0.63rem 0.6rem;" href="?page={{ $last_page }}&{{ Arr::query($query) }}">
        <i class="bi bi-chevron-bar-right"></i>
      </a>
    </li>
  </ul>
</nav>
