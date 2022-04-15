<template>
  <div>
    <div class="post-card">
      <img :src="post.thumbnail_url" :alt="post.title" class="post-thumbnail" />
    </div>
    <div class="font-bold text-overflow-ellipsis white-space-nowrap overflow-hidden text-800 mt-1">
      {{ post.title }}
    </div>
  </div>
</template>
<script>
export default {
    props: {
        post: {
            type: Object,
            required: true,
        },
    },
};
</script>

<style scoped>
.post-card {
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