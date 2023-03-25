import { createRouter, createWebHistory } from 'vue-router';

const router = createRouter({
    history: createWebHistory(),
    routes: [
        {
            path: '/',
            component: () => import('./pages/Login.vue')
        },

        {
            path: '/register',
            component: () => import('./pages/Register.vue')
        },
        {
            path: '/home',
            component: () => import('./pages/Home.vue')
        },
        {
            path: '/changeother',
            ccomponent: () => import('./pages/Register.vue')
        }
    ],
})
router.beforeEach((to, from, next) => {
    if (to.path !== '/' && to.path !== '/register' && !isAuthenticated()) {
        return next({ path: '/' })
    }
    else {
        return next()
    }
})

function isAuthenticated() {
    return Boolean(localStorage.getItem('TOKEN'))
}

export default router;