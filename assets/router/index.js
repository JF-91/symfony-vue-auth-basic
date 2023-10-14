import {  createRouter, createWebHistory } from 'vue-router'

const routes = [
    {
        path: '/',
        name: 'home',
        component: () => import('../pages/HomePage.vue')
    },
    {
        path: '/about',
        name: 'about',
        component: () => import('../pages/AboutPage.vue')
    },
    {
        path: '/registration',
        name: 'registration',
        component: () => import('../pages/RegistrationPage.vue'),

    },
    {
        path: '/sigin',
        name: 'signin',
        component: () => import('../pages/SigninPage.vue'),
    }
]

const router = createRouter({
    history: createWebHistory(),
    routes
})

export default router