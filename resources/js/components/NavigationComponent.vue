<script setup>
import Button from 'primevue/button';
import Sidebar from 'primevue/sidebar';
import NavigationButton from './NavigationButtonComponent.vue';
</script>
<template>
  <nav v-show="!isFull" class="nav-bar">
    <NavigationButton icon="fa-solid fa-bars" @click="visible = true" />
  </nav>
  <Sidebar v-model:visible="visible" position="right">
    <ul class="sidebar-content">
      <li>
        <router-link to="/" class="no-underline">
          <Button class="p-button-text w-full" @click="visible = false">
            <i class="fa-solid fa-house"></i> Home
          </Button>
        </router-link>
      </li>
      <li>
        <router-link to="/posts" class="no-underline">
          <Button class="p-button-text w-full" @click="visible = false">
            <i class="fa-solid fa-flask"></i> Posts
          </Button>
        </router-link>
      </li>
    </ul>
  </Sidebar>
</template>
<script>
import { api as fullscreen } from 'vue-fullscreen';
export default {
    data() {
        return {
            visible: false,
            isFull: fullscreen.isFullscreen,
        };
    },
    created: function () {
        window.addEventListener('resize', () => {
            setTimeout(() => {
                this.isFull = fullscreen.isFullscreen;
            }, 150);
        });
    },
};
</script>

<style scoped>
.nav-bar {
  width: fit-content;
  position: fixed;
  top: 0;
  right: 0;
  z-index: 99;
  padding: 0.5rem;
}

.sidebar-content {
  padding: 0.5rem;
  overflow-y: auto;
  margin: 0;
  height: 100%;
  list-style: none;
}

.sidebar-content svg {
  width: 2.5rem;
}
</style>
