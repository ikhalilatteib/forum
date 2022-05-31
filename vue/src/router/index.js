import { createRouter, createWebHistory } from "vue-router";
import Dashboard from "../views/Dashboard.vue";
import Login from "../views/Login.vue";
import Register from "../views/Register.vue";
import AuthLayout from "../components/AuthLayout.vue";
import DefaultLayout from "../components/DefaultLayout.vue";
import store from '../store';
import AddQuestion from '../views/AddQuestion.vue'
import ShowQuestion from '../views/ShowQuestion.vue'
import QuestionPerTag from '../views/QuestionPerTag.vue'
import Profile from '../views/Profile.vue'
import AllQuestionForAuthUser from '../views/AllQuestionForAuthUser.vue'

const routes = [
    {
        path: '/', redirect: '/dashboard', component: DefaultLayout, children: [
            {
                path: '/dashboard', name: 'Dashboard', component: Dashboard,
            }, {
                path: '/question/create', name: 'AddQuestion', component: AddQuestion, meta: { requiresAuth: true }
            }, {
                path: '/question/edit/:slug', name: 'EditQuestion', component: AddQuestion, meta: { requiresAuth: true }
            }, {
                path: '/question/:slug', name: 'ShowQuestion', component: ShowQuestion
            }, {
                path: '/tags/:slug', name: 'QuestionPerTag', component: QuestionPerTag
            }, {
                path: '/profile', name: 'Profile', component: Profile, meta: { requiresAuth: true }
            },
            {
                path: '/my-questions', name: 'MyQuestion', component: AllQuestionForAuthUser, meta: { requiresAuth: true }
            },
        ]
    },
    {
        path: '/auth', redirect: '/login', component: AuthLayout, children: [{
            path: '/login', name: 'Login', component: Login
        }, {
            path: '/register', name: 'Register', component: Register
        }]
    },
];

const router = createRouter({
    history: createWebHistory(), routes,
})

router.beforeEach((to, from, next) => {
    if (to.meta.requiresAuth && !store.state.user.token) {
        next({ name: 'Login' })
    } else if (store.state.user.token && (to.name === 'Register' || to.name === 'Login')) {
        next({ name: 'Dashboard' });
    } else {
        next();
    }
})

export default router;
