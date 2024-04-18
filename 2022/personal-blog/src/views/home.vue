<template>
  <div class="home-container">
    <!-- Begin Intro -->
    <div class="intro">
      Nulla vitae elit libero, a pharetra augue. Vivamus sagittis lacus augue
      laoreet rutrum faucibus dolor auctor. Cras mattis consectetur purus sit
      amet fermentum, Vestibulum id ligula porta.
    </div>
    <ul class="social">
      <li><a class="rss" href="#"></a></li>
      <li><a class="facebook" href="#"></a></li>
      <li><a class="twitter" href="#"></a></li>
      <li><a class="pinterest" href="#"></a></li>
      <li><a class="dribbble" href="#"></a></li>
      <li><a class="flickr" href="#"></a></li>
      <li><a class="linkedin" href="#"></a></li>
    </ul>
    <!-- End Intro -->

    <el-row class="masonry-2">
      <el-col class="masonry-item">
        <el-card>
          <div slot="header">
            <img src="@/assets/art/post1.jpg" alt="" />
          </div>
          <h2 class="title">
            <router-link to="/blog/1">Morning Glory</router-link>
          </h2>
          <p>
            A wonderful serenity has taken possession of my entire soul, like
            these sweet mornings of autumn which I enjoy with my whole heart.
          </p>
          <div class="footer">
            <span class="icon-image"><a href="#">September 26, 2012</a></span>
          </div>
        </el-card>
      </el-col>
      <el-col class="masonry-item">
        <el-card>
          <blockquote>
            Scissors cuts paper, paper covers rock, rock crushes lizard, lizard
            poisons Spock, Spock smashes scissors, scissors decapitates lizard,
            lizard eats paper, paper disproves Spock, Spock vaporizes rock, and
            as it always has, rock crushes scissors.<cite>Sheldon Cooper</cite>
          </blockquote>
          <div class="footer">
            <span class="icon-quote"><a href="#">September 21, 2012</a></span>
          </div>
        </el-card>
      </el-col>
      <el-col class="masonry-item">
        <el-card>
          <div slot="header" class="video frame">
            <iframe
              src="http://sc.chinaz.com"
              width="100%"
              height="281"
              frameborder="0"
              webkitallowfullscreen=""
              mozallowfullscreen=""
              allowfullscreen=""
            ></iframe>
          </div>
          <h2 class="title"><a href="post.html">Fragments of Iceland</a></h2>
          <p>
            The Big Oxmox advised her not to do so, because there were thousands
            of bad Commas, wild Question Marks and devious Semikoli, but the
            Little Blind Text didn’t listen. She packed her seven versalia, put
            her initial into the belt and made herself on the way.
          </p>

          <div class="footer">
            <span class="icon-video"><a href="#">September 13, 2012</a></span>
          </div>
        </el-card>
      </el-col>
      <el-col class="masonry-item">
        <el-card>
          <div class="audio-wrapper">
            <div class="vinyl">
              <dl>
                <dt class="art">
                  <img class="highlight" src="@/assets/vinyl.png" />
                  <img src="@/assets/art/artwork.png" alt="" />
                </dt>
                <dd class="song">
                  <div class="icon-song"></div>
                  Om Du Möter Varg
                </dd>
                <dd class="artist">
                  <div class="icon-artist"></div>
                  Detektivbyrån
                </dd>
                <dd class="album">
                  <div class="icon-album"></div>
                  Wermland
                </dd>
              </dl>
            </div>
            <div class="clear"></div>
            <div class="audio">
              <div
                id="mep_0"
                class="mejs-container mejs-audio"
                style="width: 100%; height: 30px;"
              >
                <div class="mejs-inner">
                  <div class="mejs-mediaelement">
                    <div class="me-cannotplay">
                      <a
                        href="file:///E:/Documents/Langnang/Develop/%E5%8D%8A%E9%80%8F%E6%98%8Ehtml5%E5%8D%9A%E5%AE%A2%E4%B8%BB%E9%A2%98/index.html"
                        ><span>Download File</span></a
                      >
                    </div>
                    <audio preload="none" src="" style="display: none;"></audio>
                  </div>
                  <div class="mejs-layers"></div>
                  <div class="mejs-controls" style="display: none;"></div>
                  <div class="mejs-clear"></div>
                </div>
              </div>
            </div>
          </div>
          <p>
            <strong>Detektivbyrån</strong> (“The Detective Agency”) was a
            Swedish electronica and folk music trio from Gothenburg. The group
            consisted of Anders “Flanders” Molin (accordion, music box), Martin
            “MacGyver” Molin (glockenspiel, traktofon, toy piano, Theremin) and
            Jon Nils Emanuel Ekström drums, sound box, small bells.
          </p>

          <div class="footer">
            <span class="icon-audio"><a href="#">September 7, 2012</a></span>
          </div>
        </el-card>
      </el-col>
      <el-col class="masonry-item">
        <el-card>
          <h2 class="title"><a href="post.html">The Meridian Sun</a></h2>
          <p>
            When, while the lovely valley teems with vapour around me, and the
            meridian sun strikes the upper surface of the impenetrable foliage
            of my trees, and but a few stray gleams steal into the inner
            sanctuary, I throw myself down among the tall grass by the trickling
            stream; and, as I lie close to the earth, a thousand unknown plants
            are noticed by me: when I hear the buzz of the little world among
            the stalks, and grow familiar with the countless indescribable forms
            of the insects and flies.
          </p>
          <p>
            Then I feel the presence of the Almighty, who formed us in his own
            image, and the breath of that universal love which bears and
            sustains us, as it floats around us in an eternity of bliss; and
            then, my friend, when darkness overspreads my eyes, and heaven and
            earth seem to dwell in my soul and absorb its power, like the form
            of a beloved mistress, then I often think with longing, Oh, would I
            could describe these conceptions, could impress upon paper all that
            is living so full and warm within me, that it might be the mirror of
            my soul, as my soul is the mirror of the infinite God!
          </p>

          <div class="footer">
            <span class="icon-standard"><a href="#">August 13, 2012</a></span>
          </div>
        </el-card>
      </el-col>
      <el-col class="masonry-item">
        <el-card>
          <h2 class="title">
            The Italic Mountains<span class="arrow">→</span>
          </h2>
          <p>
            When she reached the first hills of the Italic Mountains, she had a
            last view back on the skyline of her hometown Bookmarksgrove, the
            headline of Alphabet Village and the subline of her own road, the
            Line Lane. Pityful a rethoric question ran over her cheek, then she
            continued her way. On her way she met a copy.
          </p>

          <div class="footer">
            <span class="icon-link"><a href="#">July 13, 2012</a></span>
          </div>
        </el-card>
      </el-col>
      <el-col class="masonry-item">
        <el-card>
          <h2 class="title"><a href="post.html">Two Best Friends</a></h2>
          <ul>
            <li>
              <strong>Barney:</strong> Stop pining over Marshall and Lily! Have
              some self respect. Now put this fiver in your mouth so that
              stripper with the lazy eye can vacuum it up with…
            </li>
            <li>
              <strong>Ted:</strong> Barney! I’m allowed to miss them alright?
              They’re my two best friends.
            </li>
            <li><strong>Barney:</strong> I’m your two best friends!</li>
          </ul>

          <div class="footer">
            <span class="icon-chat"><a href="#">June 13, 2012</a></span>
          </div>
        </el-card>
      </el-col>
    </el-row>

    <el-pagination
      :current-page="4"
      :page-sizes="[100, 200, 300, 400]"
      :page-size="100"
      layout="total, prev, pager, next"
      :total="1000"
    >
    </el-pagination>
  </div>
</template>
<script>
export default {
  data() {
    return {
      list: [],
    };
  },
  mounted() {
    console.log(this);
  },
};
</script>
<style lang="scss"></style>
