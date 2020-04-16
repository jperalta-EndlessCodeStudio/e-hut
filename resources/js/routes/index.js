import VueRouter from "vue-router";
import Welcome from "../views/Welcome";
import Login from "../views/pages/Login";
import TheContainer from "../containers/TheContainer";
import Dashboard from "../views/Dashboard";
import Users from "../views/users/Users";
import CabinsList from "../views/cabins/List";
import CabinsEdit from "../views/cabins/Edit";
import store from "../store/index";

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
                component: CabinsList,
            },
            {
                path: 'cabins/:id',
                name: 'cabins-edit',
                component: CabinsEdit,
                props: true,
                beforeEnter(routeTo, routeFrom, next) {
                    store.dispatch('cabins/fetchCabin', routeTo.params.id).then((cabin) => {
                        routeTo.params.cabin = cabin

                        next()
                    })


                },
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
