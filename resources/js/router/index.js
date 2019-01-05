//noinspection JSAnnotator
import Vue from 'vue';
import Router from 'vue-router';

import Home from '../views/Home';
import WdRegister from '../views/Register';
import ListPost from '../views/ListPost';
import CreatePost from '../views/CreatePost';
import EditPost from '../views/EditPost';

Vue.use(Router);

export default new Router({
    routes: [
        { path: '/', name: 'home', component: Home },
        { path: '/register', name: 'register', component: WdRegister },
        { path: '/list-post', name: 'list-post', component: ListPost },
        { path: '/create-post', name: 'create-post', component: CreatePost },
        { path: '/edit-post', name: 'edit-post', component: EditPost}
    ]
});