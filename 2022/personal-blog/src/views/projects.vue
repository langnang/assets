<template>
  <div class="projects-container">
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
    <h1 class="projects-group__title">Advantech</h1>
    <el-divider></el-divider>
    <el-row class="projects-group masonry-3">
      <el-col
        class="projects-item masonry-item"
        v-for="item in Advantech"
        :key="item.id"
      >
        <el-card>
          <a :href="item.url" v-if="item.logo" target="_blank">
            <img class="projects-item__logo" :src="item.logo" alt="" />
          </a>
          <h1 class="title">
            <a :href="item.url" target="_blank">{{ item.name }}</a>
          </h1>
          <p class="projects-item__desc">{{ item.description }}</p>
          <div class="footer">
            <p>
              <span class="icon-standard">
                {{ $moment(item.updated_at).format("MMMM DD, YYYY") }}
              </span>
            </p>
          </div>
        </el-card>
      </el-col>
    </el-row>
    <h1 class="projects-group">Langnang</h1>
    <el-divider></el-divider>
    <el-row class="masonry-3">
      <el-col class="masonry-item" v-for="item in Langnang" :key="item.id">
        <el-card>
          <h1 class="title">
            <a :href="item.home || item.repo" target="_blank">
              {{ item.name }}
            </a>
          </h1>
          <p>{{ item.description }}</p>
          <div class="footer">
            <span class="icon-standard">
              {{ $moment(item.updated_at).format("MMMM DD, YYYY") }}
            </span>
          </div>
        </el-card>
      </el-col>
    </el-row>
  </div>
</template>
<script>
export default {
  data() {
    return {
      Advantech: [
        {
          name: "Ushop+",
          url: "https://portals.ushop-plus.com/",
          logo: "https://portals.ushop-plus.com/img/UShop_Logo.png",
          feature: [],
          description: "  ",
        },
        {
          name: "StoreViu",
          url: "https://portals.storeviu.com/",
          logo: "https://portals.storeviu.com/dist/img/login/logo.png",
          description: "  ",
        },
        {
          name: "StoreVue",
          url: "https://portals.storevue.com/",
          logo: "https://portals.storevue.com/dist/img/login/logo.png",
          description: "  ",
        },
        {
          name: "ServerMonitor",
          url: "https://sm-dev-02.ushop-plus.com/",
          logo: "https://sm-dev-02.ushop-plus.com/logo.png",
          description: "  ",
        },
        {
          name: "licenseServer",
          url: "https://license.ushop-plus.com/",
          description: "  ",
        },
        {
          name: "ChungTai",
          description: "中台禅寺Web，可视化，管理程序，工具",
        },
        {
          name: "Grafana",
          description:
            "ChungTai,ColdChain,DaWei,iHospital,RCC,SRP,StoreViu,StoreVue,UShop+,YunKeDa",
        },
      ],
      Langnang: [
        {
          name: "Advantech-Q3Books",
          description: "研华科技，福委第三季度图书选购活动",
          repo: "https://github.com/langnang/Advantech-Q3Books",
        },
        {
          name: "AudioPlayer",
          description: "音频播放器",
          repo: "https://github.com/langnang/AudioPlayer",
          home: "https://langnang.github.io/AudioPlayer/",
        },
        {
          name: "vue-audio-player",
          description: "Vue 音频播放器组件",
          repo: "https://github.com/langnang/vue-audio-player",
          home: "https://langnang.github.io/vue-audio-player/",
        },
      ],
    };
  },
  computed: {},
  mounted() {},
};
</script>

<style lang="scss">
.projects__container {
}
.projects-group {
  .projects-item__name {
  }
  .projects-item__logo {
    margin: 0 auto;
    height: 70px;
  }
  .projects-item__desc {
    word-break: break-all;
  }
}
</style>
