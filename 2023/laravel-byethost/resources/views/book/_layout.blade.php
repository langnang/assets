<!DOCTYPE HTML>
<html lang="en-US">

@include('book.shared.head')

<body>






  <div class="book" data-level="0" data-basepath="." data-revision="1424779651902">

    @include('book.shared.summary')


    <div class="book-body">
      <div class="body-inner">
        <div class="book-header clearfix">
          <!-- Actions Left -->
          <a href="#" class="btn pull-left toggle-summary" aria-label="Toggle summary"><i
              class="fa fa-align-justify"></i></a>
          <a href="#" class="btn pull-left toggle-search" aria-label="Toggle search"><i
              class="fa fa-search"></i></a>

          <div id="font-settings-wrapper" class="dropdown pull-left">
            <a href="#" class="btn toggle-dropdown" aria-label="Toggle font settings"><i class="fa fa-font"></i>
            </a>
            <div class="dropdown-menu font-settings">
              <div class="dropdown-caret">
                <span class="caret-outer"></span>
                <span class="caret-inner"></span>
              </div>

              <div class="buttons">
                <button type="button" id="reduce-font-size" class="button size-2">A</button>
                <button type="button" id="enlarge-font-size" class="button size-2">A</button>
              </div>

              <div class="buttons font-family-list">
                <button type="button" data-font="0" class="button">Serif</button>
                <button type="button" data-font="1" class="button">Sans</button>
              </div>

              <div class="buttons color-theme-list">
                <button type="button" id="color-theme-preview-0" class="button size-3" data-theme="0">White</button>
                <button type="button" id="color-theme-preview-1" class="button size-3" data-theme="1">Sepia</button>
                <button type="button" id="color-theme-preview-2" class="button size-3" data-theme="2">Night</button>
              </div>
            </div>

          </div>

          <!-- Actions Right -->

          <div class="dropdown pull-right">
            <a href="#" class="btn toggle-dropdown" aria-label="Toggle share dropdown"><i
                class="fa fa-share-alt"></i>
            </a>
            <div class="dropdown-menu font-settings dropdown-left">
              <div class="dropdown-caret">
                <span class="caret-outer"></span>
                <span class="caret-inner"></span>
              </div>
              <div class="buttons">
                <button type="button" data-sharing="instapaper" class="button">Instapaper</button>
              </div>
            </div>
          </div>






          <a href="#" target="_blank" class="btn pull-right weibo-sharing-link sharing-link" data-sharing="weibo"
            aria-label="Share on Weibo"><i class="fa fa-weibo"></i></a>


          <a href="#" target="_blank" class="btn pull-right qq-sharing-link sharing-link" data-sharing="qq"
            aria-label="Share on QQ"><i class="fa fa-qq"></i></a>


          <div class="dropdown pull-right">
            <a href="#" class="btn qrcode-toggle-dropdown qrcode-sharing-link sharing-link" data-sharing="qrcode"
              aria-label="Share on QRCode"><i class="fa fa-qrcode"></i></a>
            <div class="dropdown-menu font-settings dropdown-left" id="dropdown-qrcode">
              <div class="dropdown-caret">
                <span class="caret-outer"></span>
                <span class="caret-inner"></span>
              </div>
              <div class="qrcode" id="qrcode">
                <input type="hidden" name="last_url" id="last_url" value="" />
              </div>
            </div>
          </div>


          <!-- Title -->
          <h1>
            <i class="fa fa-circle-o-notch fa-spin"></i>
            <a href="index.htm" tppabs="http://doc.duxcms.com/">{{ $book->title }}</a>
          </h1>
        </div>

        <div class="page-wrapper" tabindex="-1">
          <div class="page-inner">


            <section class="normal" id="section-gitbook_1">
              @php
                echo $content;
              @endphp
            </section>
          </div>
        </div>
      </div>



      <a href="function.html" tppabs="http://doc.duxcms.com/function.html"
        class="navigation navigation-next navigation-unique" aria-label="Next page: 安装与环境"><i
          class="fa fa-angle-right"></i></a>

    </div>
  </div>





  <style>
    .copyrights {
      text-indent: -9999px;
      height: 0;
      line-height: 0;
      font-size: 0;
      overflow: hidden;
    }
  </style>
  <div class="copyrights" id="links20210126">
    Collect from <a href="http://www.cssmoban.com/" title="网站模板">模板之家</a>
    <a href="https://www.chazidian.com/" title="查字典">查字典</a>
  </div>
</body>

</html>
