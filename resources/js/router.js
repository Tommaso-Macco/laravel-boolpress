import Vue from "vue";
import VueRouter from "vue-router";
import Home from "./pages/Home.vue";
// import Contacts from "./pages/Contacts.Vue"

Vue.use(VueRouter);

const router = new VueRouter({
    mode: "history",
    routes: [
        { path: "/", 
        component: Home,
        name: "home.index",
        meta : {title: "Home Page", linkText: "Home"} 
        },
        

        // { 
        // path: "/contacts", 
        // component: Contacts, 
        // name: "contacts.index", 
        // meta : {title: "Contacts Page", linkText: "Contacts"} 
        // },


        // { 
        //     path: "/posts/:post", 
        //     component: PostShow, 
        //     name: "posts.show", 
        //     meta : {title: "Post Info", linkText: "Post Info"} 
        //     }
    ],
});

// router.beforeEach((to, from, next) => {
//     document.title = to.meta.title

//     next();
// });

export default router;