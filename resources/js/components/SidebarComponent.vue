<script setup>
import Button from 'primevue/button';
import Sidebar from 'primevue/sidebar';
</script>

<template>
  <Sidebar v-model:visible="visible" position="right">
    <ul class="sidebar-content">
      <li>
        <router-link to="/" class="no-underline">
          <Button class="p-button-text w-full"> <i class="fa-solid fa-house"></i> Home </Button>
        </router-link>
      </li>
      <li>
        <router-link to="/posts" class="no-underline">
          <Button class="p-button-text w-full"> <i class="fa-solid fa-flask"></i> Posts </Button>
        </router-link>
      </li>
    </ul>
  </Sidebar>
</template>
<script>
export default {
    data() {
        return {
            visible: false,
        };
    },
    watch: {
        visible(visible) {
            console.log(visible);
        },
    },
    methods: {
        showSidebar() {
            this.visible = true;
        },
    },
};
</script>

<style scoped>
.sidebar-content {
  padding: 0.5rem;
  overflow-y: auto;
  margin: 0;
  height: 100%;
  list-style: none;
}

svg {
  width: 2.5rem;
}
</style>