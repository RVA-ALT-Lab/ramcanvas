<template>
<div class="container-fluid">
  <div id="app">
    <navigation-bar></navigation-bar>
    <router-view/>
  </div>
</div>
</template>

<script>
import NavigationBar from './components/NavigationBar'
export default {
  name: 'app',
  components: {
    NavigationBar
  }
}
</script>

<style>
#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  margin-top: 60px;
}
</style>
