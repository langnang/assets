<template>
  <div class="layout-header__container">
    <div class="header">
      <!-- Begin Logo -->
      <div class="logo">
        <router-link to="/">
          <img src="~@/assets/logo.png" alt="" height="40" />
        </router-link>
      </div>
      <!-- End Logo -->
      <!-- Begin Menu -->
      <div id="menu-wrapper">
        <div id="menu" class="menu">
          <ul id="tiny">
            <li>
              <router-link to="/projects">Projects</router-link>
            </li>
            <li>
              <router-link to="/resume">Resume</router-link>
            </li>
            <li>
              <router-link to="/contact">Contact</router-link>
            </li>
          </ul>
        </div>
      </div>
      <div class="clear"></div>
      <!-- End Menu -->
    </div>
  </div>
</template>

<script>
export default {
  name: "LayoutHeader",
};
</script>

<style lang="scss" scoped></style>
