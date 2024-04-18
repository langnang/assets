<template>
  <div class="app-container user">
    <el-row :gutter="10">
      <el-col :span="12">
        <UserBasic />
      </el-col>
      <el-col :span="12">
        <UserPassword />
      </el-col>
      <el-col :span="12">
        <UserResume />
      </el-col>
    </el-row>
  </div>
</template>

<script>
import UserBasic from './components/basic'
import UserPassword from './components/password'
import UserResume from './components/resume'
export default {
  name: 'User',
  components: {
    UserBasic,
    UserPassword,
    UserResume
  },
  data() {
    return {}
  }
}
</script>

<style></style>
