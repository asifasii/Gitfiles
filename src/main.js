import '@babel/polyfill'
import 'mutationobserver-shim'
import Vue from 'vue'
import './plugins/bootstrap-vue'
import App from './App.vue'
import 'bootstrap'; 
import 'bootstrap/dist/css/bootstrap.min.css';


// Missing this line \/\/

import Paginate from 'vue-paginate'
Vue.component('paginate', Paginate);

import { NavbarPlugin } from 'bootstrap-vue'
Vue.use(NavbarPlugin)
Vue.config.productionTip = false

new Vue({
  render: h => h(App),
}).$mount('#app')
