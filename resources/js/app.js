
require('./bootstrap');
import Vue from 'vue'
import VueSwal from 'vue-sweetalert2';
import AttributeValues from './components/AttributeValues'
import 'sweetalert2/dist/sweetalert2.min.css';
Vue.use(VueSwal);

const app = new Vue({
    el: '#app',
    components: {
        AttributeValues
    }
});
