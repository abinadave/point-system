

/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */
let VueRouter = require('./vue-router');
require('./bootstrap');

Vue.use(VueRouter);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the body of the page. From here, you may begin adding components to
 * the application, or feel free to tweak this setup for your needs.
 */
// Vue.component('example', require('./components/Example.vue'));
const routes = [
  	{ 
	  	path: '/Employees', 
	  	name: 'emps',
	 	component: require('./components/employee/employee.vue')
	},
	{
		path: '/Jobs',
		name: 'jobs',
		component: require('./components/job/job.vue')
	}
]

	// 3. Create the router instance and pass the `routes` option
	// You can pass in additional options here, but let's
	// keep it simple for now.
	router = new VueRouter({
	  routes // short for routes: routes
	});


// 4. Create and mount the root instance.
// Make sure to inject the router with the router option to make the
// whole app router-aware.
const app = new Vue({
  	router
}).$mount('#app');

