<template>
  <el-card>
    <div slot="header">
      <span class="el-card-header__title">密码修改</span>
      <span class="el-card-header__operate">
        <el-button size="mini" round type="primary" icon="el-icon-check" @click="onSubmit"></el-button>
      </span>
    </div>
    <el-form ref="form" :model="form">
      <el-form-item label="旧密码">
        <el-input v-model="form.oldPassword" disabled />
      </el-form-item>
      <el-form-item label="新密码">
        <el-input v-model="form.newPassword" />
      </el-form-item>
      <el-form-item label="重复新密码">
        <el-input v-model="form.repeatNewPassword" disabled />
      </el-form-item>
    </el-form>
  </el-card>
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
      this.$store.dispatch('user/updatePassword')
      console.log('submit!')
    }
  }
}
</script>
