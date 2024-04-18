# Permission Authentication

> 权限验证：通过获取当前用户的权限去比对路由表，生成当前用户具的权限可访问的路由表，通过 router.addRoutes 动态挂载到 router 上

## 指令权限

- 验证指令权限
  - 存在即显示
  - 不存在即清除

```html
<template>
  <!-- Admin can see this -->
  <el-tag v-permission="['admin']">admin</el-tag>

  <!-- Editor can see this -->
  <el-tag v-permission="['editor']">editor</el-tag>

  <!-- Editor can see this -->
  <el-tag v-permission="['admin','editor']"
    >Both admin or editor can see this</el-tag
  >
</template>

<script>
  // 当然你也可以为了方便使用，将它注册到全局
  import permission from "@/directive/permission/index.js"; // 权限判断指令
  export default {
    directives: { permission },
  };
</script>
```

```js
// src/directive/permission/index.js
import permission from "./permission";

const install = function (Vue) {
  Vue.directive("permission", permission);
};

if (window.Vue) {
  window["permission"] = permission;
  Vue.use(install); // eslint-disable-line
}

permission.install = install;
export default permission;
```

```js
// src/directive/permission/permission.js
import store from "@/store";

function checkPermission(el, binding) {
  const { value } = binding;
  const roles = store.getters && store.getters.roles;

  if (value && value instanceof Array) {
    if (value.length > 0) {
      const permissionRoles = value;

      const hasPermission = roles.some((role) => {
        return permissionRoles.includes(role);
      });

      if (!hasPermission) {
        el.parentNode && el.parentNode.removeChild(el);
      }
    }
  } else {
    throw new Error(`need roles! Like v-permission="['admin','editor']"`);
  }
}

export default {
  inserted(el, binding) {
    checkPermission(el, binding);
  },
  update(el, binding) {
    checkPermission(el, binding);
  },
};
```

## 页面权限

```js
// src/permission.js
const hasRoles = store.getters.roles && store.getters.roles.length > 0;
if (hasRoles) {
  next();
} else {
  try {
    // get user info
    // note: roles must be a object array! such as: ['admin'] or ,['developer','editor']
    const { roles } = await store.dispatch("user/getInfo");

    // generate accessible routes map based on roles
    const accessRoutes = await store.dispatch(
      "permission/generateRoutes",
      roles
    );

    // dynamically add accessible routes
    router.addRoutes(accessRoutes);

    // hack method to ensure that addRoutes is complete
    // set the replace: true, so the navigation will not leave a history record
    next({ ...to, replace: true });
  } catch (error) {
    // remove token and go to login page to re-login
    await store.dispatch("user/resetToken");
    Message.error(error || "Has Error");
    next(`/login?redirect=${to.path}`);
    NProgress.done();
  }
}
```

## 权限配置

- 后端数据
- 路由元数据中配置

## 二步登录

- 账号密码验证+第三方平台验证

```js
```
