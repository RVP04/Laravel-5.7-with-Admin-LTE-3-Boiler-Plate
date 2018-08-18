
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('admin-lte/plugins/jquery/jquery.min.js');
require('admin-lte/plugins/jQueryUI/jquery-ui.min.js');
require('./bootstrap');
require('admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js');
require('./raphael');
require('admin-lte/plugins/morris/morris.min.js');
require('admin-lte/plugins/sparkline/jquery.sparkline.min.js');
require('admin-lte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js');
require('admin-lte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js');
require('admin-lte/plugins/knob/jquery.knob.js');
require('moment/moment.js');
require('admin-lte/plugins/daterangepicker/daterangepicker.js');
require('admin-lte/plugins/datepicker/bootstrap-datepicker.js');
require('admin-lte/plugins/slimScroll/jquery.slimscroll.min.js');
require('admin-lte/plugins/fastclick/fastclick.js');



require('admin-lte/dist/js/adminlte.js');
require('admin-lte/dist/js/pages/dashboard.js');


window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app'
});


