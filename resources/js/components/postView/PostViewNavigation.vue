<script setup>
import NavigationButton from '../NavigationButtonComponent.vue';
import isFullscreen from '../../functions/IsFullscreen';
</script>
<template>
  <nav class="back-button">
    <router-link to="/posts" class="no-underline">
      <NavigationButton icon="fa-solid fa-angle-left" />
    </router-link>
  </nav>
  <nav class="fullscreen-button">
    <NavigationButton v-show="!fullscreen" icon="fa-solid fa-expand" @click="toggleScreen()" />
    <NavigationButton v-show="fullscreen" icon="fa-solid fa-compress" @click="toggleScreen()" />
  </nav>
</template>
<script>
export default {
    data() {
        return {
            fullscreen: false,
        };
    },
    methods: {
        toggleScreen() {
            if (!isFullscreen()) {
                document.body.requestFullscreen();
                this.fullscreen = true;
            } else {
                document.exitFullscreen();
                this.fullscreen = false;
            }
        },
    },
};
</script>

<style scoped>
.back-button,
.fullscreen-button {
  width: fit-content;
  position: fixed;
  z-index: 99;
  padding: 0.5rem;
}
.back-button {
  top: 0;
  left: 0;
}
.fullscreen-button {
  bottom: 0;
  right: 0;
}
</style>