<script setup>
import Navigation from './components/NavigationComponent.vue';
import SidebarComponent from './components/SidebarComponent.vue';
</script>
<template>
  <Navigation></Navigation>
  <SidebarComponent></SidebarComponent>
  <router-view class="router-view"></router-view>
</template>
<style scoped>
.router-view {
  padding: 0 0 0 200px;
}
</style>