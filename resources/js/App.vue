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
            isVertical: () => this.isVertical,
            isFullscreen: () => this.isFullscreen,
            toggleScreen: () => {
                this.isFullscreen = !this.isFullscreen;
            },
        };
    },
    data() {
        return {
            isFullscreen: fullscreen.isFullscreen,
            isVertical: window.innerWidth < window.innerHeight,
        };
    },
    created() {
        window.addEventListener('resize', this.resizeWindow);
    },
    beforeUnmount() {
        window.removeEventListener('resize', this.resizeWindow);
    },
    methods: {
        resizeWindow(e) {
            this.isVertical = window.innerWidth < window.innerHeight;
        },
    },
};
</script>
