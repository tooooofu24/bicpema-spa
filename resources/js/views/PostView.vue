<template>
  <main class="h-full">
    <div class="iframe-wrap w-full h-full">
      <iframe title="p5.js demo" src="http://127.0.0.1:8000/iframe/posts/1"> </iframe>
    </div>
    <div id="post-script" class="hidden"></div>
  </main>
</template>

<script>
</script>

<style scoped>
.iframe-wrap {
  position: relative;
}

.iframe-wrap iframe {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}
</style>