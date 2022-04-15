<template>
  <main class="px-3">
    <div class="grid wrap py-4">
      <div v-for="i of 10" :key="i" class="col-12 md:col-6 lg:col-4 p-3">
        <div class="post-card">
          <img src="/images/top-page.jpg" alt="a" class="post-thumbnail" />
        </div>
        <div class="font-bold text-overflow-ellipsis white-space-nowrap overflow-hidden text-800 mt-1">
          タイトルです長い長いタイトルですあああああああああああああああああああああああ
        </div>
      </div>
    </div>
  </main>
</template>
<style scoped>
.wrap {
  max-width: 1300px;
  margin: 0 auto;
}
.post-card {
  background-color: #ccc;
  aspect-ratio: 16 / 9;
  position: relative;
  width: 100%;
}
.post-thumbnail {
  object-fit: cover;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}
</style>