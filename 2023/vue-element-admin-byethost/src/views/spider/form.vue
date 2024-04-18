<template>
  <div class="app-container spider spider-form">
    <form>

      <el-row :gutter="20">
        <el-col :span="12">
          <el-card>
            <div slot="header" class="clearfix">
              <span class="el-card-header__title">基本</span>
              <span class="el-card-header__operate">
                <el-button size="mini" icon="el-icon-search" circle></el-button>
              </span>
            </div>
          </el-card>
          <el-card>
            <div slot="header" class="clearfix">
              <span class="el-card-header__title">搜索</span>
              <span class="el-card-header__operate">
                <el-button size="mini" icon="el-icon-search" circle></el-button>
              </span>
            </div>
          </el-card>
          <el-card>
            <div slot="header" class="clearfix">
              <span class="el-card-header__title">目录</span>
              <span class="el-card-header__operate">
                <el-button size="mini" icon="el-icon-search" circle></el-button>
              </span>
            </div>
          </el-card>
          <el-card>
            <div slot="header" class="clearfix">
              <span class="el-card-header__title">详情</span>
              <span class="el-card-header__operate">
                <el-button size="mini" icon="el-icon-search" circle></el-button>
              </span>
            </div>
          </el-card>
          <el-card>
            <div slot="header" class="clearfix">
              <span class="el-card-header__title">内容</span>
              <span class="el-card-header__operate">
                <el-button size="mini" icon="el-icon-search" circle></el-button>
              </span>
            </div>
          </el-card>
          <el-card>
            <div slot="header" class="clearfix">
              <span class="el-card-header__title">下载</span>
              <span class="el-card-header__operate">
                <el-button size="mini" icon="el-icon-search" circle></el-button>
              </span>
            </div>
          </el-card>
        </el-col>
        <el-col :span="12">
          <el-card>
            <div slot="header" class="clearfix">
              <span class="el-card-header__title">发现</span>
              <span class="el-card-header__operate">
                <el-button size="mini" icon="el-icon-search" circle></el-button>
              </span>
            </div>
          </el-card>
        </el-col>
      </el-row>
      <el-form-item>
        <el-button>提交</el-button>
      </el-form-item>
    </form>
  </div>
</template>

<script>
export default {
  name: 'SpiderForm',

}
</script>

<style></style>
