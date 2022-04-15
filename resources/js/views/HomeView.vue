<script setup>
import Button from 'primevue/button';
</script>
<template>
  <main class="flex align-items-center justify-content-center">
    <div>
      <router-link to="/posts" class="no-underline">
        <Button class="p-button-lg p-button-raised">Get Started</Button>
      </router-link>
    </div>
  </main>
</template>

<style scoped>
main {
  background-image: url('/images/top-page.jpg');
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
  height: 100%;
}
</style>
