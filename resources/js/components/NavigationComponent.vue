<script setup>
import Button from 'primevue/button';
</script>
<template>
  <nav class="nav-bar shadow">
    <div>
      <Button class="p-button-text" @click="toggleSidebar()">
        <i class="fa-solid fa-bars fa-lg"></i>
      </Button>
    </div>
    <div>
      <span class="text-primary font-bold">BICPEMA</span>
    </div>
    <div>
      <Button class="p-button-text"> <i class="fa-solid fa-user-large fa-lg"></i> </Button>
    </div>
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
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: space-between;
  width: 100%;
  height: var(--navbar-height);
  position: fixed;
  top: 0;
  left: 0;
  z-index: 99;
  padding: 0 0.5rem;
  background: var(--surface-card);
  box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075) !important;
}
</style>

