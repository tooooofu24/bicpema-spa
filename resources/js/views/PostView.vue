<template>
  <main class="px-3">
    <div id="canvas" style="height: 10rem; width: 20rem"></div>
    <div id="gist"></div>
  </main>
</template>

<script>
import postscribe from 'postscribe';
export default {
    mounted: function () {
        postscribe('#gist', `<script defer src="https://dl.dropboxusercontent.com/s/18p99gcdef6wifn/doppler.js"><\/script>`);
    },
};
</script>

<style scoped>
</style>