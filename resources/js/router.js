import { createRouter, createWebHistory } from 'vue-router';
import HomeView from './views/HomeView.vue';
import PostListView from './views/PostListView.vue';

const routes = [
    {
        path: '/',
        name: 'Home',
        component: HomeView
    },
    {
        path: '/posts',
        name: 'Posts',
        component: PostListView
    }
];

const router = createRouter({
    history: createWebHistory(process.env.BASE_URL),
    routes
});

export default router;