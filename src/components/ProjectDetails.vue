<template>
  <div class="">
    <h1>Project Details</h1>
    <div class="container">
        This project is {{id}}
    </div>
  </div>
</template>

<script>
export default {
  name: 'ListProjects',
  props: ['id'],
  data () {
    return {
      msg: 'This is a string message'
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
</style>
