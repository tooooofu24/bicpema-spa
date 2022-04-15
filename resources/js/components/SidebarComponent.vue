<script setup>
import Button from 'primevue/button';
</script>

<template>
  <div class="sidebar">
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
  </div>
</template>

<style scoped>
.sidebar {
  position: fixed;
  width: var(--sidebar-width);
  height: 100%;
  top: var(--navbar-height);
  left: 0;
  z-index: 98;
  background-color: var(--surface-card);
  border-right: 1px solid var(--surface-border);
  transition: transform 0.4s cubic-bezier(0.05, 0.74, 0.2, 0.99);
}

.sidebar-content {
  overflow-y: auto;
  margin: 0;
  height: 100%;
  padding: 1rem;
  list-style: none;
  padding-bottom: 120px;
}

svg {
  width: 2.5rem;
}
</style>