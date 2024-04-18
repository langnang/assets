<template>
  <div>
    <el-card class="box-card">
      <div slot="header" class="clearfix">
        <span>教育背景</span>
      </div>
      <el-table :data="user.educations" border>
        <el-table-column prop="timerange" label="时间"></el-table-column>
        <el-table-column prop="education" label="学历"></el-table-column>
        <el-table-column prop="university" label="学校"></el-table-column>
        <el-table-column prop="college" label="学院"></el-table-column>
        <el-table-column prop="profession" label="专业"></el-table-column>
      </el-table>
    </el-card>
    <el-card class="box-card">
      <div slot="header" class="clearfix">
        <span>知识技能</span>
      </div>
    </el-card>
    <el-card class="box-card">
      <div slot="header" class="clearfix">
        <span>工作经历</span>
      </div>
    </el-card>
    <el-card class="box-card">
      <div slot="header" class="clearfix">
        <span>项目经验</span>
      </div>
    </el-card>
    <el-card class="box-card">
      <div slot="header" class="clearfix">
        <span>获证证书</span>
      </div>
    </el-card>
  </div>
</template>
<script>
import { mapState } from 'vuex'
export default {
  data() {
    return {
      form: {
        name: '',
        slug: '',
        email: '',
        region: '',
        date1: '',
        date2: '',
        delivery: false,
        type: [],
        resource: '',
        desc: ''
      }
    }
  },
  computed: {
    ...mapState({
      user: state => state.user.info
    })
  },
  methods: {
    onSubmit() {
      this.$store.dispatch('user/updateInfo')
      console.log('submit!')
    }
  }
}
</script>
<style lang="scss">
.user-resume {
  .el-card+.el-card {
    margin-top: 20px;
  }
}
</style>
