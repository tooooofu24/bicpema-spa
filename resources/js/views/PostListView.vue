<script setup>
import PostListTile from '../components/posts/PostListTile.vue';
</script>

<template>
  <main class="px-3">
    <div class="grid wrap py-4">
      <PostListTile
        v-for="post in posts"
        :key="post.id"
        class="col-12 md:col-6 lg:col-4 p-3"
        :post="post"
      ></PostListTile>
    </div>
  </main>
</template>

<script>
export default {
    data() {
        return {
            posts: [],
        };
    },
    mounted() {
        this.axios.get('/api/posts').then((response) => {
            this.posts = response.data.data;
        });
    },
};
</script>

<style scoped>
.wrap {
  max-width: 1300px;
  margin: 0 auto;
}
</style>