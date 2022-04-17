<script setup>
import PostListTile from '../components/posts/PostListTile.vue';
import InfiniteLoading from 'vue-infinite-loading';
</script>

<template>
  <main class="px-3">
    <div class="grid wrap pt-4">
      <PostListTile
        v-for="post in posts"
        :key="post.id"
        class="col-12 md:col-6 lg:col-4 p-3"
        :post="post"
      ></PostListTile>
    </div>
    <InfiniteLoading class="w-full" @infinite="infiniteHandler">
      <template #no-more><span></span></template>
      <template #no-results><span></span></template>
    </InfiniteLoading>
  </main>
</template>

<script>
export default {
    data() {
        return {
            posts: [],
            page: 1,
        };
    },
    methods: {
        infiniteHandler($state) {
            this.axios
                .get('/api/posts', {
                    params: {
                        page: this.page,
                    },
                })
                .then((response) => {
                    this.posts = this.posts.concat(response.data.data);
                    const lastPage = response.data.meta.last_page;
                    if (lastPage > this.page) {
                        this.page += 1;
                        $state.loaded();
                    } else {
                        $state.complete();
                    }
                });
        },
    },
};
</script>

<style scoped>
.wrap {
  max-width: 1300px;
  margin: 0 auto;
}
</style>