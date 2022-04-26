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
    <NavigationButton v-show="!isFull" icon="fa-solid fa-expand" @click="toggle()" />
    <NavigationButton v-show="isFull" icon="fa-solid fa-compress" @click="toggle()" />
  </nav>
</template>
<script>
import { api as fullscreen } from 'vue-fullscreen';
export default {
    data() {
        return {
            isFull: false,
        };
    },
    methods: {
        async toggle() {
            await fullscreen.toggle(document.body, {
                teleport: true,
                callback: (isFullscreen) => {
                    this.isFull = isFullscreen;
                },
            });
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