import VueRouter from "vue-router";
import Welcome from "../views/Welcome";
import Login from "../views/pages/Login";
import TheContainer from "../containers/TheContainer";
import Dashboard from "../views/Dashboard";
import Users from "../views/users/Users";
import Cabins from "../views/cabins/Cabins";

const routes = [
    {
        path: '/admin',
        redirect: {name: 'admin-login'},
        name: 'admin',
    },
    {
        path: '/admin/login',
        name: 'admin-login',
        component: Login
    },
    {
        path: '/admin',
        name: 'admin',
        component: TheContainer,
        children: [
            {
                path: 'dashboard',
                name: 'dashboard',
                component: Dashboard
            },
            {
                path: 'cabins',
                name: 'cabins',
                component: Cabins,
            },
            {
                path: 'clients',
                name: 'clients',
                component: Users,
            },
            {
                path: 'calendar',
                name: 'calendar',
                component: Users,
            },
            {
                path: 'rentals',
                name: 'rentals',
                component: Users,
            }
        ]
    }
];

const router = new VueRouter({
    mode: 'history',
    routes
});

export default router;
