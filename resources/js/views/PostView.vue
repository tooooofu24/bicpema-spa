<template>
  <main class="h-full">
    <div class="h-full flex align-items-center justify-content-center">
      <iframe id="canvas" title="p5.js demo" src="http://127.0.0.1:8000/iframe/posts/1"> </iframe>
    </div>
    <div id="post-script" class="hidden"></div>
  </main>
</template>

<script>
import postscribe from 'postscribe';
export default {
    mounted() {
    // postscribe(
    //     '#post-script',
    //     `<script defer src="https://dl.dropboxusercontent.com/s/18p99gcdef6wifn/doppler.js"><\/script>`,
    // );
    },
};
</script>

<style scoped>
#canvas {
  height: 100%;
  width: 100%;
}
</style>