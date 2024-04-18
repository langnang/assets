# Adapter - Ace

## Vue

```powershell
npm install --save-dev vue2-ace-editor
```

```html
<template>
    <div>
        <editor
            v-model="content"
            @init="editorInit"
            lang="html"
            theme="chrome"
            width="600"
            height="300"
        ></editor>
    </div>
</template>
<script>
import editor from "vue2-ace-editor";
export default {
    name: "AceEditor",
    components: {
        editor
    },
    data() {
        return {
            content: ""
        };
    },
    methods: {
        editorInit: function() {
            require("brace/ext/language_tools"); //language extension prerequsite...
            require("brace/mode/html");
            require("brace/mode/javascript"); //language
            require("brace/mode/less");
            require("brace/theme/chrome");
            require("brace/snippets/javascript"); //snippet
        }
    }
};
</script>
```
