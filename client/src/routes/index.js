import Vue from 'vue';
import Router from 'vue-router';
import Home from '../components/Home'
import AddUser from '../components/AddUser'
import EditProfile from '../components/EditProfile'
Vue.use(Router);

export const router = new Router({
  mode: 'history',
  routes: [
    {
    path: '/',
    component: () => import('../components/Index'),
    children: [
    { path: '', component: Home, name: "Home" },
    { path: '/add-user', component: AddUser, name: 'Add User', props: true 
    },
    { path: '/edit-profile', component: EditProfile, name: 'Edit Profile',
    props: true 
    }]
}]
});