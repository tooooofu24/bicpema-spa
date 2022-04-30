<script setup>
import PostViewNavigation from '../components/postView/PostViewNavigation.vue';
</script>
<template>
  <main class="h-full flex align-items-center justify-content-center">
    <iframe
      v-if="!isVertical()"
      title="p5.js demo"
      :src="'/iframe/posts/' + $route.params.id"
      class="h-full w-full"
      frameborder="0"
    >
    </iframe>
    <footer>
      <PostViewNavigation></PostViewNavigation>
    </footer>
    <div v-if="isVertical()" class="resize-popup">
      <i class="fa-solid fa-mobile-screen-button rotate"></i>
      <div class="mt-5">横画面でお楽しみください</div>
    </div>
  </main>
</template>
<script>
export default {
    inject: ['isVertical'],
};
</script>
<style scoped>
.resize-popup {
  width: fit-content;
  text-align: center;
  position: fixed;
  z-index: 100;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: var(--primary-color);
}
.rotate {
  font-size: 10rem;
  animation: 2s ease-in-out infinite rotation;
}
@keyframes rotation {
  0% {
    transform: rotateZ(0);
  }
  15% {
    transform: rotateZ(0);
  }
  85% {
    transform: rotateZ(90deg);
  }
  100% {
    transform: rotateZ(90deg);
  }
}
</style>
