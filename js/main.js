// components will go here
import homeComponent from './components/homeComponent.js'; // this is like doing a php include 
import signupComponent from './components/signupComponent.js';   

const routes = [
    { path: '/', redirect: { name: "home"} },
    { path: "/home", name: "home", component: homeComponent },
    { path: "/signup", name: "signup", component: signupComponent }
];

const router = new VueRouter({

    routes

});

const vm = new Vue({

    router: router
    
}).$mount("#app");

