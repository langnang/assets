<template>
  <el-form :inline="true" size="small">
    <el-form-item style="width: 48px;">
      {{ query.$active.label }}
      <el-button type="text" icon="el-icon-setting" @click="handleSetting"></el-button>
    </el-form-item>
    <el-form-item>
      <el-select v-model="meta[0].value" v-loading="meta[0].loading" filterable clearable :placeholder="'一级目录/' + meta[0].options.length" @change="getMetaCategoryList(1)">
        <el-option v-for="item in meta[0].options" :key="item.mid" :label="item.name" :value="item.mid">
          <span style="float: left">
            <i :class="item.ico"></i>
            {{ item.name }}
          </span>
          <span style="float: right;">
            <el-button type="text" icon="el-icon-edit" style="color:#E6A23C;" @click="handleUpdate(item, 0)"></el-button>
            <el-button type="text" icon="el-icon-link" style="color:#909399;" @click="handleLink(item, 0)"></el-button>
            <el-button type="text" icon="el-icon-remove" style="color: #F56C6C;" @click="handleDelete(item, 0)"></el-button>
          </span>
        </el-option>
        <template slot="empty">
          <p class="el-select-dropdown__empty">无数据</p>
          <el-button size="mini" type="default" icon="el-icon-plus" style="width: 100%;" @click="handleCreate(0)"></el-button>
        </template>
      </el-select>
    </el-form-item>
    <el-form-item>
      <el-select v-model="meta[1].value" v-loading="meta[1].loading" filterable clearable :placeholder="'二级目录/' + meta[1].options.length" :disabled="!meta[0].value" @change="getMetaCategoryList(2)">
        <el-option v-for="item in meta[1].options" :key="item.mid" :label="item.name" :value="item.mid">
          <span style="float: left">
            {{ item.name }}
          </span>
          <span style="float: right;">
            <el-button type="text" icon="el-icon-edit" style="color:#E6A23C;" @click="handleUpdate(item, 1)"></el-button>
            <el-button type="text" icon="el-icon-link" style="color:#909399;" @click="handleLink(item, 1)"></el-button>
            <el-button type="text" icon="el-icon-remove" style="color: #F56C6C;" @click="handleDelete(item, 1)"></el-button>
          </span></el-option>
        <template slot="empty">
          <p class="el-select-dropdown__empty">无数据</p>
          <el-button size="mini" type="default" icon="el-icon-plus" :disabled="!meta[0].value" style="width: 100%;" @click="handleCreate(1)"></el-button>
        </template></el-select>
    </el-form-item>
    <el-form-item>
      <el-select v-model="meta[2].value" v-loading="meta[2].loading" filterable clearable :placeholder="'三级目录/' + meta[2].options.length" :disabled="!meta[1].value" @change="getMetaCategoryList(3)">
        <el-option v-for="item in meta[2].options" :key="item.mid" :label="item.name" :value="item.mid">
          <span style="float: left">
            {{ item.name }}
          </span>
          <span style="float: right;">
            <el-button type="text" icon="el-icon-edit" style="color:#E6A23C;" @click="handleUpdate(item, 2)"></el-button>
            <el-button type="text" icon="el-icon-link" style="color:#909399;" @click="handleLink(item, 2)"></el-button>
            <el-button type="text" icon="el-icon-remove" style="color: #F56C6C;" @click="handleDelete(item, 2)"></el-button>
          </span></el-option>
        <template slot="empty">
          <p class="el-select-dropdown__empty">无数据</p>
          <el-button size="mini" type="default" icon="el-icon-plus" :disabled="!meta[1].value" style="width: 100%;" @click="handleCreate(2)"></el-button>
        </template></el-select>
    </el-form-item>
    <el-form-item>
      <el-select v-model="meta[3].value" v-loading="meta[3].loading" filterable clearable :placeholder="'四级目录/' + meta[3].options.length" :disabled="!meta[2].value" @change="handleChangeSelect()">
        <el-option v-for="item in meta[3].options" :key="item.mid" :label="item.name" :value="item.mid">
          <span style="float: left">
            {{ item.name }}
          </span>
          <span style="float: right;">
            <el-button type="text" icon="el-icon-edit" style="color:#E6A23C;" @click="handleUpdate(item, 3)"></el-button>
            <el-button type="text" icon="el-icon-link" style="color:#909399;" @click="handleLink(item, 3)"></el-button>
            <el-button type="text" icon="el-icon-remove" style="color: #F56C6C;" @click="handleDelete(item, 3)"></el-button>
          </span></el-option>
        <template slot="empty">
          <p class="el-select-dropdown__empty">无数据</p>
          <el-button size="mini" type="default" icon="el-icon-plus" :disabled="!meta[2].value" style="width: 100%;" @click="handleCreate(3)"></el-button>
        </template></el-select>
    </el-form-item>
    <el-form-item v-if="false">
      <el-cascader v-bind="cascader" clearable>
        <!-- <template slot-scope="{ node, data }">
          <Ico :class="data.ico" />
          <span>{{ node.label }}</span>
          <span v-if="!node.isLeaf"> ({{ data.children.length }}) </span>
          <span style="float: right;">
            <el-button type="text" icon="el-icon-edit" style="color:#E6A23C;" @click="handleUpdate(data, 4)"></el-button>
            <el-button type="text" icon="el-icon-link" style="color:#909399;" @click="handleLink(data, 4)"></el-button>
            <el-button type="text" icon="el-icon-remove" style="color: #F56C6C;" @click="handleDelete(data, 4)"></el-button>
          </span>
        </template> -->
      </el-cascader>
    </el-form-item>
    <el-form-item>
      <el-select v-model="meta[4].value" v-loading="meta[4].loading" filterable clearable :placeholder="'其它/' + meta[4].options.length" @change="handleChangeSelect()">
        <el-option-group v-for="group in meta.slice(4)" :key="group.type" :label="group.label">
          <el-option v-for="item in group.options" :key="item.mid" :label="item.name" :value="item.mid">
            <span style="float: left">
              {{ item.name }}
            </span>
            <span style="float: right;">
              <el-button type="text" icon="el-icon-edit" style="color:#E6A23C;" @click="handleUpdate(item, 4)"></el-button>
              <el-button type="text" icon="el-icon-link" style="color:#909399;" @click="handleLink(item, 4)"></el-button>
              <el-button type="text" icon="el-icon-remove" style="color: #F56C6C;" @click="handleDelete(item, 4)"></el-button>
            </span>
          </el-option>
        </el-option-group>

        <template slot="empty">
          <p class="el-select-dropdown__empty">无数据</p>
          <el-button size="mini" type="default" icon="el-icon-plus" style="width: 100%;" @click="handleCreate(4)"></el-button>
        </template></el-select>
    </el-form-item>

  </el-form>
</template>

<script>
import * as requests from '@/api/base'
export default {
  name: 'MetaInlineForm',
  props: {
    target: {
      type: String,
      default: '',
    },
    query: {
      type: Object,
      default: () => ({}),
    },
  },
  data() {
    return {
      meta: [
        { loading: false, value: '', placeholder: '一级目录', type: 'category', options: [], },
        { loading: false, value: '', type: 'category', options: [], },
        { loading: false, value: '', type: 'category', options: [], },
        { loading: false, value: '', type: 'category', options: [], },
        { loading: false, value: '', type: 'tag', label: "标签", options: [], },
      ],
      form: {},
      rules: [],
      requests,
      cascader: {
        props: {
          value: 'mid',
          label: 'name',
        },
        options: [],
      },
    }
  },
  created() {
    this.getMetaCategoryList(0)
    this.getMetaTagList(4)
    this.getMetaCategoryTree()
  },
  methods: {
    getMetaCategoryList($index) {
      for (let i = $index; i < 4; i++) {
        this.meta[i].value = ''
        this.meta[i].options = []
      }
      let parent = 0
      if ($index > 0) {
        parent = this.meta[$index - 1].value
        if (parent === 0) return
      }
      // console.log("🚀 ~ file: index.vue:135 ~ getCategoryList ~ index:", { $index, parent });
      this.meta[$index].loading = true
      this.requests.select_meta_list(this.target, { type: 'category', parent }).then(res => {
        // console.log("🚀 ~ file: index.vue:132 ~ select_meta_list ~ res:", { res });
        const { data } = res
        this.meta[$index].options = data.data
      }).finally(() => {
        this.meta[$index].loading = false
      })
      this.handleChangeSelect()
    },
    getMetaCategoryTree() {
      this.requests.select_meta_tree(this.target, { type: 'category', parent: 0 }).then(res => {
        console.log("🚀 ~ file: MetaInlineForm.vue:159 ~ this.requests.select_meta_list ~ res:", res);
        const { data } = res
        this.cascader.options = data
        // this.meta[$index].options = data.data
      }).finally(() => {
        // this.meta[$index].loading = false
      })
    },
    getMetaTagList($index) {
      this.meta[$index].loading = true
      this.requests.select_meta_list(this.target, { type: 'tag' }).then(res => {
        // console.log("🚀 ~ file: index.vue:132 ~ select_meta_list ~ res:", { res });
        const { data } = res
        this.meta[$index].options = data.data
      }).finally(() => {
        this.meta[$index].loading = false
      })
      this.handleChangeSelect()
    },
    handleChangeSelect() {
      console.log('🚀 ~ file: MetaInlineForm.vue:150 ~ handleChangeSelect ~ handleChangeSelect:',)
      this.$emit('change', this.getValue())
    },
    getValue(type = 'mids') {
      const tag = this.meta[4].value
      const category = this.meta[3].value || this.meta[2].value || this.meta[1].value || this.meta[0].value
      if (type === 'tag') return tag
      if (type === 'category') return category
      if (type === 'mids') return [tag, category].filter(v => v)
    },
    handleCreate($index) {
      this.$emit('create', { parent: [0, 4].includes($index) ? 0 : this.meta[$index - 1].value, type: $index === 4 ? 'tag' : 'category' })
    },
    handleUpdate(row, $index) {
      this.$emit('update', { row, $index })
    },
    handleDelete(row, $index) {
      this.$emit('delete', { row, $index })
    },
    handleLink(row, $index) {

    },
    handleSetting() {
      this.$emit('setting')
    },
  }
}
</script>

<style></style>
