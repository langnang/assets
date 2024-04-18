<div class="book-summary">
  <div class="book-search">
    <input type="text" placeholder="Type to search" class="form-control" />
  </div>
  <ul class="summary">
    <li>
      <a href="javascript:if(confirm('http://www.duxcms.com/  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?'))window.location='http://www.duxcms.com/'"
        tppabs="http://www.duxcms.com/" target="blank" class="custom-link">{{ $book->title }}</a>
    </li>
    <li class="divider"></li>
    @isset($book->text)
      <li class="chapter" data-level="0" data-path="/book/{{ $book->cid }}">
        <a href="/book/{{ $book->cid }}" tppabs="http://doc.duxcms.com/index.html">
          <i class="fa fa-check"></i> {{ $book->title }}
        </a>
      </li>
    @endisset
    @foreach ($book->children as $item)
      <li class="chapter <?if($item->cid == $row->cid) echo 'active'; ?>" data-level="{{ $loop->index + 1 }}"
        data-path="/book/{{ $book->cid }}/{{ $item->cid }}">
        <a href="/book/{{ $book->cid }}/{{ $item->cid }}" tppabs="http://doc.duxcms.com/index.html">
          <i class="fa fa-check"></i> <b>{{ $loop->index + 1 }}.</b> {{ $item->title }}
        </a>
        @if (count($item->children) > 0)
          <ul class="articles">
            @foreach ($item->children as $subItem)
              <li class="chapter <?if($subItem->cid == $row->cid) echo 'active'; ?>"
                data-level="{{ $loop->parent->index + 1 }}.{{ $loop->index + 1 }}" data-path="tplbase/structure.html">
                <a href="/book/{{ $book->cid }}/{{ $subItem->cid }}"
                  tppabs="http://doc.duxcms.com/tplbase/structure.html">
                  <i class="fa fa-check"></i> <b>{{ $loop->parent->index + 1 }}.{{ $loop->index + 1 }}.</b>
                  {{ $subItem->title }}
                </a>
              </li>
            @endforeach
          </ul>
        @endif
      </li>
    @endforeach
    <li class="divider"></li>
    {{-- <li>
      <a href="javascript:if(confirm('http://git.oschina.net/duxcms/DuxCms-2.0  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?'))window.location='http://git.oschina.net/duxcms/DuxCms-2.0'"
        tppabs="http://git.oschina.net/duxcms/DuxCms-2.0" target="_blank" class="custom-link">DuxCms GIT</a>
    </li> --}}
  </ul>
</div>
