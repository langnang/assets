<template>
  <el-card v-loading="loading">
    <div slot="header">
      <span class="el-card-header__title">基本信息</span>
      <span class="el-card-header__operate">
        <el-button size="mini" round type="primary" @click="onSubmit">
          <font-awesome-icon :icon="['fas', 'floppy-disk']" />
        </el-button>
      </span>
    </div>
    <el-form ref="form" :model="user">
      <el-form-item label="名称">
        <el-input v-model="user.name" disabled />
      </el-form-item>
      <el-form-item label="标识">
        <el-input v-model="user.slug" />
      </el-form-item>
      <el-form-item label="邮箱">
        <el-input v-model="user.email" disabled />
      </el-form-item>
    </el-form>
  </el-card>
</template>
<script>
import { mapState } from 'vuex'
export default {
  data() {
    return {
      loading: false,
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
      this.loading = true
      this.$store.dispatch('user/updateInfo').finally(() => {
        this.loading = false
      })
      console.log('submit!')
    }
  }
}
</script>

