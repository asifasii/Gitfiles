<template>
  <div id="app">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" 
        href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" 
        integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" 
        crossorigin="anonymous">
    <configTable :apiUrl="apiUrl" :sortList="sortList" :tableHeaders="tableHeaders" :pagination="pagination"/>
  </div>
</template>
<script>
import configTable from "./components/configTable.vue";

export default {
  name: "App",
  components: {
    configTable
  },
 data() {
   return {
      apiUrl:"https://jsonplaceholder.typicode.com/users",
      pagination:true,
      tableHeaders:[
         {label:'Name',value:''},
         {label:'E-mail',value:''},
         {label:'Company Name',value:''},
         {label:'City',value:''},
         {label:'Website',value:''}
      ],
      sortList:[
        ['name'],
        ['email'],
        ['company']
      ]
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
