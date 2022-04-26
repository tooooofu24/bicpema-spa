<script setup>
import Button from 'primevue/button';
</script>
<template>
  <nav class="nav-bar">
    <Button
      class="p-button p-button-secondary p-button-text p-button-raised p-button-xl"
      icon="fa-solid fa-bars"
      @click="toggleSidebar()"
    />
  </nav>
</template>
<script>
export default {
    emits: ['toggle-sidebar'],
    methods: {
        toggleSidebar() {
            this.$emit('toggle-sidebar');
        },
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
  padding: 0.4rem;
}

.p-button-xl {
  font-size: 1.25rem;
  height: 3.5rem;
  width: 3.5rem;
  border-radius: 50%;
}
</style>

