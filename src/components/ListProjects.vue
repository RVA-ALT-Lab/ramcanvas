<template>
  <div class="">
    <h1>List Projects</h1>
    <div class="container">
        <ul>
            <li v-for="project in projects" :key="project.name">{{project.name}}</li>
        </ul>
    </div>
  </div>
</template>

<script>
export default {
  name: 'ListProjects',
  data () {
    return {
      projects: [
        {
          'name': 'Project 1'
        },
        {
          'name': 'Project 2'
        },
        {
          'name': 'Project 3'
        }
      ]
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
</style>
