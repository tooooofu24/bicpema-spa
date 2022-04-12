<script setup>
import Navigation from './components/NavigationComponent.vue';
import SidebarComponent from './components/SidebarComponent.vue';
</script>
<template>
  <Navigation @toggle-sidebar="showSidebar = !showSidebar"></Navigation>
  <SidebarComponent v-show="showSidebar"></SidebarComponent>
  <router-view :class="{ 'router-view': true, 'full-size': !showSidebar }"></router-view>
</template>
<script>
export default {
    data() {
        return {
            showSidebar: true,
        };
    },
    created() {
        if (window.innerHeight < 900) {
            this.showSidebar = false;
        }
    },
};
</script>

<style scoped>
.router-view {
  margin-top: var(--navbar-height);
  margin-left: var(--sidebar-width);
}
.router-view.full-size {
  margin-left: 0;
}
</style>