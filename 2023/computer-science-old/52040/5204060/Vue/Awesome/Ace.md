# Ace

## Install

```powershell
npm install --save-dev vue2-ace-editor
```

## Attributes

| 参数			| 说明				| 类型					| 可选值| 默认值		|
| -------------	| --------			| ---------------------	| ---	| -------------	|
| id			| ID				| String				| --	| AceEditor-xxx	|
| width			| 编辑器宽度		| String/Number			| --	| 100%			|
| height		| 编辑器高度		| String/Number			| --	| 300			|
| value/v-model	| 绑定值			| String/Number/Boolean	| --	| --			|
| lang			| 编辑器语言		| String				| --	| text			|
| theme			| 编辑器主题		| String				| --	| chrome		|
| show-save-btn	| 是否显示保存按钮	| Boolean				| --	| true			|

## Events

| 事件名称          | 说明            | 回调参数  | 返回值类型   |
| ------------- | ------------- | ----- | ------- |
| before-save   | 编辑器内容保存前触发的事件 | value | Boolean |
| save          | 编辑器内容保存时触发的事件 | value | --      |
| before-change | 编辑器内容修改前触发的事件 | value | Boolean |
| change        | 编辑器内容修改时触发的事件 | value | --      |

## Code

```html
<template>
    <div :id="id" class="ace-editor-container">
        <el-button-group class="ace-editor-btn-group">
            <el-button
                class="ace-edito-btn"
                type="primary"
                icon="el-icon-check"
                size="mini"
                v-if="showSaveBtn"
                @click="_save"
            ></el-button>
        </el-button-group>
        <editor
            v-model="__value"
            @init="init"
            :lang="lang"
            :theme="theme"
            :height="height"
            :width="width"
        ></editor>
        <slot></slot>
    </div>
</template>
<script>
import editor from "vue2-ace-editor";
export default {
    name: "AceEditor",
    model: {
        prop: "value",
        event: "change"
    },
    props: {
        id: {
            type: String,
            required: false,
            default() {
                return (
                    "AceEditor-" +
                    +new Date() +
                    ((Math.random() * 1000).toFixed(0) + "")
                );
            }
        },
        lang: {
            type: String,
            default: "text"
        },
        theme: {
            type: String,
            default: "chrome"
        },
        width: {
            type: [String, Number],
            default: "100%"
        },
        height: {
            type: Number,
            default: 300
        },
        value: {
            type: String,
            description: "绑定值",
            default: ""
        },
        autoSave: {
            type: Boolean,
            description: "是否开启自动保存",
            default: false
        },
        showSaveBtn: {
            type: Boolean,
            default: true
        }
    },
    components: {
        editor
    },
    data() {
        return {
            data: ""
        };
    },
    methods: {
        init: function() {
            require("brace/ext/language_tools"); //language extension prerequsite...
            require(`brace/mode/${this.lang}`);
            require(`brace/theme/${this.theme}`);
            require(`brace/snippets/${this.lang}`); //snippet
        },
        _save: function() {
            console.group("AceEditor-->before-save");
            this.$emit("before-save", this.__value);
            console.groupEnd();
            console.group("AceEditor-->save");
            this.$emit("save", this.__value);
            console.groupEnd();
        },
        _get: function() {
            console.group("AceEditor-->get");
            this.$emit("get", this.__value);
            console.groupEnd();
        }
    },
    watch: {},
    computed: {
        __value: {
            get: function() {
                return this.value;
            },
            set: function(value) {
                if (value == this.__value) {
                    return;
                }
                console.group("AceEditor-->before-change");
                this.$emit("before-change", value);
                console.groupEnd();
                console.group("AceEditor-->change");
                this.$emit("change", value);
                console.groupEnd();
                this.data = value;
            }
        }
    }
};
</script>

<style lang="scss" scoped>
.ace-editor-container {
    position: relative;
    .ace-editor-btn-group {
        position: absolute;
        top: 0;
        right: 20px;
        z-index: 1;
    }
}
</style>
```
