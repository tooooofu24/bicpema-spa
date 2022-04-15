<template>
  <div>
    <router-link to="/test" class="no-underline" @mouseover="active = true" @mouseleave="active = false">
      <div class="post-tile">
        <img :src="post.thumbnail_url" :alt="post.title" :class="['post-thumbnail', { active: active }]" />
      </div>
      <div
        :class="[
          'font-bold text-overflow-ellipsis white-space-nowrap overflow-hidden mt-1 post-description',
          { active: active },
        ]"
      >
        {{ post.title }}
      </div>
    </router-link>
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
    data() {
        return {
            active: false,
        };
    },
};
</script>

<style scoped>
.post-tile {
  background-color: #3a302d;
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
.post-thumbnail.active {
  transform: translate(-0.5rem, -0.5rem);
}
.post-description {
  color: var(--surface-800);
}
.post-description.active {
  color: var(--primary-color);
}
</style>