# Vue - TypeScript Awesome

## 安装依赖

## 对照写法

### 组件注册

```html
<script>
	export default {
		components: {
			ComponentName,
		},
	};
</script>
```

```html
<script lang="ts">
	export default class ClassName extends Vue {
	    created() {},
	    mounted() {},
	};
</script>
```

### 生命周期

```html
<script>
	export default {
		created() {},
		mounted() {},
	};
</script>
```

```html
<script lang="ts">
	export default class ClassName extends Vue {
	    created() {},
	    mounted() {},
	};
</script>
```

### 方法

```html
<script>
	export default {
		methods: {
			methodName() {},
		},
	};
</script>
```

```html
<script lang="ts">
	export default class ClassName extends Vue {
		methodName() {},
	};
</script>
```

### 侦听器

```html
<script>
	export default {
		computed: {
			methodName() {},
		},
	};
</script>
```

```html
<script lang="ts">
	export default class ClassName extends Vue {
		get computedName() {},
	};
</script>
```
