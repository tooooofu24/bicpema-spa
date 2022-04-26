<script setup>
import Navigation from './components/NavigationComponent.vue';
import SidebarComponent from './components/SidebarComponent.vue';
</script>
<template>
  <Navigation @toggle-sidebar="showSidebar = !showSidebar"></Navigation>
  <SidebarComponent ref="sidebar" @toggle-sidebar="showSidebar = !showSidebar"></SidebarComponent>
  <router-view></router-view>
</template>
<script>
export default {
    data() {
        return {
            showSidebar: false,
        };
    },
    mounted() {
        console.log(this.$refs.sidebar.showSidebar);
    },
};
</script>