<template>
  <nav class="navbar navbar-default">
      <div class="container-fluid">
          <ul class="nav navbar-nav">
              <router-link v-for="link in links" :key="link.name" :to="link.path">{{link.name}}</router-link>
          </ul>
      </div>
  </nav>
</template>

<script>
export default {
  name: 'NavigationBar',
  data () {
    return {
      links: [
        {
          name: 'Home',
          path: '/'
        },
        {
          name: 'Login',
          path: '/login'
        }
      ]
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>

</style>
