# Login & Logout

> 登录 & 登出

## 验证页面是否已登陆

- 是否有 Cookie?
  - 是否进入登录页面?跳转至主页:...
  - 进入的页面是否需要跳转?跳转至登录页:...

```js
// src/permission.js
import Cookies from "js-cookie";
const whiteList = ["/login", "/auth-redirect"]; // no redirect whitelist

router.beforeEach(async (to, from, next) => {
  const hasToken = Cookies.get("Admin-Token");
  if (hasToken) {
    if (to.path === "/login") {
      // if is logged in, redirect to the home page
      next({ path: "/" });
    } else {
      //...
    }
  } else {
    /* has no token*/

    if (whiteList.indexOf(to.path) !== -1) {
      // in the free login whitelist, go directly
      next();
    } else {
      // other pages that do not have permission to access are redirected to the login page.
      next(`/login?redirect=${to.path}`);
    }
  }
});
```

## 登录操作

- 校验账号密码填写是否规范
- 调用 API 验证登录信息
  - 跳转至主页，保存至 Cookie

```js
// src/views/login/index.vue
this.$store
  .dispatch("user/login", this.loginForm)
  .then(() => {
    this.$router.push({ path: this.redirect || "/", query: this.otherQuery });
    this.loading = false;
  })
  .catch(() => {
    this.loading = false;
  });
```

```js
// src/store/modules/user.js
login({ commit }, userInfo) {
    const { username, password } = userInfo
    return new Promise((resolve, reject) => {
      login({ username: username.trim(), password: password }).then(response => {
        const { data } = response
        commit('SET_TOKEN', data.token)
        setToken(data.token)
        resolve()
      }).catch(error => {
        reject(error)
      })
    })
  },
```

## 登出操作

- 调用后台登出 API
- 清除用户信息
- 清除 Cookie
- 清除访问记录&缓存
- 跳转至登录页

```js
// src/layout/components/Navbar.vue
    async logout() {
      // 调用 Actions
      await this.$store.dispatch('user/logout')
      // 跳转至登录页
      this.$router.push(`/login?redirect=${this.$route.fullPath}`)
    }
```

```js
// src/store/modules/user.js
logout({ commit, state, dispatch }) {
    return new Promise((resolve, reject) => {
      logout(state.token).then(() => {
        commit('SET_TOKEN', '')
        commit('SET_ROLES', [])
        // 移除Cookie
        removeToken()
        resetRouter()
        // 重设已访问视图和缓存
        dispatch('tagsView/delAllViews', null, { root: true })
        resolve()
      }).catch(error => {
        reject(error)
      })
    })
```
