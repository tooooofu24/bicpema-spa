<script setup>
import Button from 'primevue/button';
</script>
<template>
  <nav class="nav-bar shadow">
    <div>
      <Button icon="pi pi-bars" class="p-button-text" />
    </div>
    <div>
      <span class="text-primary font-bold">BICPEMA</span>
    </div>
    <div>
      <Button icon="pi pi-user" class="p-button-text" />
    </div>
  </nav>
</template>
<style scoped>
.nav-bar {
  position: relative;
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: space-between;
  padding: 0.8rem;
}
</style>

