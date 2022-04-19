<script setup>
import Button from 'primevue/button';
</script>
<template>
  <main class="h-full flex align-items-center justify-content-center">
    <iframe title="p5.js demo" :src="'/iframe/posts/' + $route.params.id" class="h-full w-full" frameborder="0">
    </iframe>
    <footer>
      <div>
        <router-link to="/posts" class="no-underline">
          <Button class="p-button-text">
            <i class="fa-solid fa-angle-left fa-lg"></i>
          </Button>
        </router-link>
      </div>
      <div>
        <span class="text-primary font-bold">BICPEMA</span>
      </div>
      <div>
        <Button class="p-button-text">
          <i class="fa-solid fa-circle-info fa-lg"></i>
        </Button>
      </div>
    </footer>
  </main>
</template>

<script>
</script>

<style scoped>
main {
  padding-bottom: var(--navbar-height);
}
footer {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: space-between;
  width: 100%;
  height: var(--navbar-height);
  position: fixed;
  bottom: 0;
  left: 0;
  z-index: 99;
  padding: 0 0.5rem;
  background: var(--surface-card);
  box-shadow: 0 0.125rem 0.25rem 0.25rem rgba(0, 0, 0, 0.075);
}
</style>