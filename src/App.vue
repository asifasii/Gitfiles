<template>
  <div id="app">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" 
        href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" 
        integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" 
        crossorigin="anonymous">
        
    <!-- <img alt="Vue logo" src="./assets/logo.png"> -->
    <!-- <HelloWorld msg="Welcome to Your Vue.js App"/> 
    url : url,
    api-url="https://jsonplaceholder.typicode.com/users"
    :apiUrl="apiUrl"
    -->
    <tableview :apiUrl="apiUrl" :sorting="name"/>
  </div>
</template>

<script>
import tableview from "./components/table-view.vue";
export default {
  name: "App",
  components: {
    tableview
  },

 data() {
   return {
      apiUrl:"https://jsonplaceholder.typicode.com/users",
      name:'name',
   }
 }
  
};
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
