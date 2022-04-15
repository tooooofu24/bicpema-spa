import { createRouter, createWebHistory } from 'vue-router';
import HomeView from './views/HomeView.vue';
import PostListView from './views/PostListView.vue';
import PostView from './views/PostView.vue';

const routes = [
    {
        path: '/',
        name: 'Home',
        component: HomeView
    },
    {
        path: '/posts',
        name: 'PostList',
        component: PostListView
    },
    {
        path: '/test',
        name: 'Post',
        component: PostView
    }
];

const router = createRouter({
    history: createWebHistory(process.env.BASE_URL),
    routes
});

export default router;