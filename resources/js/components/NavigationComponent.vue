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
  padding: 0 28px;
  background: var(--surface-card);
  box-shadow: rgb(0 0 0 / 3%) 0px 4px 10px, rgb(0 0 0 / 6%) 0px 0px 2px, rgb(0 0 0 / 12%) 0px 2px 6px;
}
</style>

