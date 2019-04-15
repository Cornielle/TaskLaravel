import axios from 'axios';
import Datepicker from 'vuejs-datepicker';
window.Vue = require('vue');
window.axios = axios;
require('./bootstrap');
Vue.component('task-list', require('./components/Task-list.vue').default);

//Define new Vue instances
const app = new Vue({
    el: '#app'
});

const date_picker = new  Vue({
    el: '#date_picker',
    components:{
        Datepicker
    },
    data:{
        date: new Date()
    }
})

