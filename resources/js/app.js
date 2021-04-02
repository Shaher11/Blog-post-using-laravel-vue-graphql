import Vue from "vue";
import VueRouter from "vue-router";
import VueResource from "vue-router";
import "./bootstrap";
// import { routes } from "./routes";
import PostList from "./PostList";
import Post from "./Post";

window.Vue = Vue;
Vue.use(VueRouter);

const routes = [
    { path: "/", name: "index", component: PostList },
    { path: "/post/:id", name: "post", component: Post }
    // { path: "*", redirect: "/" }
];

const router = new VueRouter({
    mode: "history",
    routes
});

const app = new Vue({
    el: "#app",
    router
});
