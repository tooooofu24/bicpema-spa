<script setup>
import PostViewNavigation from '../components/postView/PostViewNavigation.vue';
</script>
<template>
  <main class="h-full flex align-items-center justify-content-center">
    <iframe title="p5.js demo" :src="'/iframe/posts/' + $route.params.id" class="h-full w-full" frameborder="0">
    </iframe>
    <footer>
      <PostViewNavigation></PostViewNavigation>
    </footer>
  </main>
</template>
