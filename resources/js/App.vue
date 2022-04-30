<script setup>
import Navigation from './components/NavigationComponent.vue';
</script>
<template>
  <Navigation></Navigation>
  <router-view></router-view>
</template>
<script>
import { api as fullscreen } from 'vue-fullscreen';
export default {
    provide() {
        return {
            isFullscreen: () => this.isFullscreen,
            toggleScreen: () => {
                this.isFullscreen = !this.isFullscreen;
            },
        };
    },
    data() {
        return {
            isFullscreen: fullscreen.isFullscreen,
        };
    },
};
</script>
