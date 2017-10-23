import Vue from 'vue'
import Router from 'vue-router'
import Home from '@/components/Home'
import LoginForm from '@/components/LoginForm'
import Register from '@/components/Register'
import ListProjects from '@/components/ListProjects'
import ProjectDetails from '@/components/ProjectDetails'
import 'bootstrap/dist/css/bootstrap.css'

Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/',
      name: 'Home',
      component: Home
    },
    {
      path: '/login',
      name: 'Login',
      component: LoginForm
    },
    {
      path: '/register',
      name: 'Register',
      component: Register
    },
    {
      path: '/list-projects',
      name: 'ListProjects',
      component: ListProjects
    },
    {
      path: '/projects/:id',
      name: 'ProjectDetails',
      component: ProjectDetails,
      props: true
    }
  ]
})
