<template>
  <div class="layout-footer__container">
    <div id="footer" class="four" v-if="false">
      <div id="first" class="widget-area">
        <div class="widget widget_search">
          <h3 class="widget-title">Search</h3>
          <form class="searchform" method="get" action="#">
            <input
              type="text"
              name="s"
              value="type and hit enter"
              onfocus="this.value=''"
              onblur="this.value='type and hit enter'"
            />
          </form>
        </div>
        <div class="widget widget_archive">
          <h3 class="widget-title">Archives</h3>
          <ul>
            <li><a href="#">September 2012</a> (6)</li>
            <li><a href="#">August 2012</a> (2)</li>
            <li><a href="#">July 2012</a> (2)</li>
            <li><a href="#">June 2012</a> (4)</li>
            <li><a href="#">May 2012</a> (3)</li>
            <li><a href="#">January 2012</a> (1)</li>
          </ul>
        </div>
      </div>
      <!-- #first .widget-area -->

      <div id="second" class="widget-area">
        <div id="twitter-2" class="widget widget_twitter">
          <h3 class="widget-title">Twitter</h3>

          <div id="twitter-wrapper">
            <div id="twitter"></div>
            <span class="username"
              ><a href="http://twitter.com/elemisdesign"
                >→ Follow @elemisdesign</a
              ></span
            >
          </div>
        </div>
      </div>
      <!-- #second .widget-area -->

      <div id="third" class="widget-area">
        <div id="example-widget-3" class="widget example">
          <h3 class="widget-title">Popular Posts</h3>
          <ul class="post-list">
            <li>
              <div class="frame">
                <a href="#"
                  ><span class="more"></span><img src="style/images/art/s1.jpg"
                /></a>
              </div>
              <div class="meta">
                <h6><a href="#">Charming Winter</a></h6>
                <em>28th Sep 2012</em>
              </div>
            </li>
            <li>
              <div class="frame">
                <a href="#"
                  ><span class="more" style="display: none;"></span
                  ><img src="style/images/art/s2.jpg"
                /></a>
              </div>
              <div class="meta">
                <h6><a href="#">Trickling Stream</a></h6>
                <em>5th Sep 2012</em>
              </div>
            </li>
            <li>
              <div class="frame">
                <a href="#"
                  ><span class="more" style="display: none;"></span
                  ><img src="style/images/art/s3.jpg"
                /></a>
              </div>
              <div class="meta">
                <h6><a href="#">Morning Glory</a></h6>
                <em>26th Sep 2012</em>
              </div>
            </li>
          </ul>
        </div>
      </div>
      <!-- #third .widget-area -->

      <div id="fourth" class="widget-area">
        <div class="widget">
          <h3 class="widget-title">Flickr</h3>
          <ul class="flickr-feed"></ul>
        </div>
      </div>
      <!-- #fourth .widget-area -->
    </div>
    <div class="site-generator-wrapper">
      <div class="site-generator">
        Copyright langnang 2020. All rights reserved.
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "LayoutFooter",
};
</script>

<style scoped></style>
