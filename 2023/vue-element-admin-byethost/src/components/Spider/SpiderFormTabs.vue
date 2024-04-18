<template>
  <el-form :rules="rules" :model="form.data" size="small">
    <el-tabs type="border-card" stretch>
      <el-tab-pane>
        <span slot="label">
          <i class="el-icon-date"></i> 基本
        </span>
        <el-form-item label="源 URL: source_url">
          <el-input></el-input>
        </el-form-item>
        <el-form-item label="源名称: source_name">
          <el-input></el-input>
        </el-form-item>
        <el-form-item label="源分组: source_group">
          <el-input></el-input>
        </el-form-item>
        <el-form-item label="源注释: source_comment">
          <el-input></el-input>
        </el-form-item>
      </el-tab-pane>
      <el-tab-pane label="搜索: Search">
        <el-form-item label="搜索地址: url">
          <el-input></el-input>
        </el-form-item>
        <el-form-item label="校验关键字: check_key_word">
          <el-input></el-input>
        </el-form-item>
        <el-form-item label="书籍列表规则: book_list">
          <el-input></el-input>
        </el-form-item>
        <el-form-item label="书名规则: name">
          <el-input></el-input>
        </el-form-item>
        <el-form-item label="作者规则: author">
          <el-input></el-input>
        </el-form-item>
        <el-form-item label="分类规则: type">
          <el-input></el-input>
        </el-form-item>
        <el-form-item label="字数规则: word_count">
          <el-input></el-input>
        </el-form-item>
        <el-form-item label="最新正文规则: latest_content">
          <el-input></el-input>
        </el-form-item>
        <el-form-item label="简介规则: intro">
          <el-input></el-input>
        </el-form-item>
        <el-form-item label="封面规则: cover_url">
          <el-input></el-input>
        </el-form-item>
        <el-form-item label="目录页URL规则: category_url">
          <el-input></el-input>
        </el-form-item>
        <el-form-item label="详情页URL规则: detail_url">
          <el-input></el-input>
        </el-form-item>
        <el-form-item label="下载页URL规则: download_url">
          <el-input></el-input>
        </el-form-item>
      </el-tab-pane>
      <el-tab-pane label="发现: Discover">
        <el-form-item label="搜索地址规则: url">
          <el-input v-model="form.data.discover.url" type="textarea" :rows="2" placeholder="请输入内容"></el-input>
        </el-form-item>
        <el-form-item label="书籍列表规则: book_list">
          <el-input></el-input>
        </el-form-item>
        <el-form-item label="书名规则: name">
          <el-input></el-input>
        </el-form-item>
        <el-form-item label="作者规则: author">
          <el-input></el-input>
        </el-form-item>
        <el-form-item label="分类规则: type">
          <el-input></el-input>
        </el-form-item>
        <el-form-item label="字数规则: word_count">
          <el-input></el-input>
        </el-form-item>
        <el-form-item label="最新正文规则: latest_content">
          <el-input></el-input>
        </el-form-item>
        <el-form-item label="简介规则: intro">
          <el-input></el-input>
        </el-form-item>
        <el-form-item label="封面规则: cover_url">
          <el-input></el-input>
        </el-form-item>
        <el-form-item label="目录页URL规则: category_url">
          <el-input></el-input>
        </el-form-item>
        <el-form-item label="详情页URL规则: detail_url">
          <el-input></el-input>
        </el-form-item>
        <el-form-item label="下载页URL规则: download_url">
          <el-input></el-input>
        </el-form-item>
      </el-tab-pane>
      <el-tab-pane label="详情: Detail">
        <el-form-item label="预处理规则: bookInfoInit">
          <el-input></el-input>
        </el-form-item>
        <el-form-item label="书名规则: name">
          <el-input></el-input>
        </el-form-item>
        <el-form-item label="作者规则: author">
          <el-input></el-input>
        </el-form-item>
        <el-form-item label="分类规则: type">
          <el-input></el-input>
        </el-form-item>
        <el-form-item label="字数规则: word_count">
          <el-input></el-input>
        </el-form-item>
        <el-form-item label="最新正文规则: latest_content">
          <el-input></el-input>
        </el-form-item>
        <el-form-item label="简介规则: intro">
          <el-input></el-input>
        </el-form-item>
        <el-form-item label="封面规则: cover_url">
          <el-input></el-input>
        </el-form-item>
        <el-form-item label="目录URL规则: category_url">
          <el-input></el-input>
        </el-form-item>
        <el-form-item label="下载URL规则: download_url">
          <el-input></el-input>
        </el-form-item>
      </el-tab-pane>
      <el-tab-pane label="目录: Category">
        <el-form-item label="目录分组规则: content_group">
          <el-input></el-input>
        </el-form-item>
        <el-form-item label="目录列表规则: content_list">
          <el-input></el-input>
        </el-form-item>
        <el-form-item label="正文名称规则: content_name">
          <el-input></el-input>
        </el-form-item>
        <el-form-item label="正文URL规则: content_url">
          <el-input></el-input>
        </el-form-item>
        <el-form-item label="更新时间: updated_at">
          <el-input></el-input>
        </el-form-item>
        <el-form-item label="目录下一页URL规则: name">
          <el-input></el-input>
        </el-form-item>
      </el-tab-pane>
      <el-tab-pane label="正文: Content">
        <el-table :data="form.data.content" size="mini">
          <el-table-column show-overflow-tooltip align="center" prop="name" label="名称">
          </el-table-column>
          <el-table-column show-overflow-tooltip align="center" prop="label" label="说明">
          </el-table-column>
          <el-table-column show-overflow-tooltip align="center" prop="selector" label="抽取规则" width="180px">
            <template slot-scope="{row}">
              <el-form-item>
                <el-input v-model="row.value.selector" size="mini"></el-input>
              </el-form-item>
            </template></el-table-column>
          <el-table-column show-overflow-tooltip align="center" prop="selector_type" label="规则类型" width="180px">
            <template slot-scope="{row}">
              <el-form-item>
                <el-input v-model="row.value.selector_type" size="mini"></el-input>
              </el-form-item>
            </template></el-table-column>
          <el-table-column show-overflow-tooltip align="center" prop="required" label="必需" width="62px">
            <template slot-scope="{row}">
              <el-form-item>
                <el-switch v-model="row.value.required"> </el-switch>
              </el-form-item>
            </template>
          </el-table-column>
          <el-table-column show-overflow-tooltip align="center" prop="repeated" label="重复" width="62px">
            <template slot-scope="{row}">
              <el-form-item>
                <el-switch v-model="row.value.repeated"> </el-switch>
              </el-form-item>
            </template>
          </el-table-column>
          <el-table-column show-overflow-tooltip align="center" prop="source_type" label="数据源" width="180px">
            <template slot-scope="{row}">
              <el-form-item>
                <el-input v-model="row.value.source_type" size="mini"></el-input>
              </el-form-item>
            </template>
          </el-table-column>
          <el-table-column show-overflow-tooltip align="center" prop="filter" label="过滤器" width="180px">
            <template slot-scope="{row}">
              <el-form-item>
                <el-input v-model="row.value.filter" size="mini"></el-input>
              </el-form-item>
            </template>
          </el-table-column>
        </el-table>
        <el-form-item label="正文规则: title">
          <el-input></el-input>
        </el-form-item>
        <el-form-item label="正文上一页规则: prev_url">
          <el-input></el-input>
        </el-form-item>
        <el-form-item label="正文下一页规则: next_url">
          <el-input></el-input>
        </el-form-item>
        <el-form-item label="资源正则: source_regex">
          <el-input></el-input>
        </el-form-item>
        <el-form-item label="替换规则: replace_regex">
          <el-input></el-input>
        </el-form-item>
        <el-form-item label="图片样式: image_style">
          <el-input></el-input>
        </el-form-item>
      </el-tab-pane>
      <el-tab-pane label="下载: Download">
        <el-form-item label="目录URL规则: category_url">
          <el-input></el-input>
        </el-form-item>
        <el-form-item label="详情页URL规则: detail_url">
          <el-input></el-input>
        </el-form-item>
      </el-tab-pane>
    </el-tabs>
  </el-form>
</template>

<script>
export default {
  name: "SpiderFormTabs",
  props: {
    value: {
      type: Object,
      default: () => ({})
    }
  },
  data() {
    return {
      form: {
        data: {
          basic: {},
          search: {},
          discover: {
            url: "",
          },
          detail: {},
          category: {},
          content: [{ value: { label: '标题', name: 'title' }}],
          download: {},
        },
        rules: {},
      },
    }
  }

}
</script>

<style lang="scss" scoped>
.el-form-item__content .el-tabs {
  margin-top: 25px;
}
</style>
