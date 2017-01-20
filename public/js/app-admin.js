define([
	'vue',
	'vue-router'
	], function(
	 Vue,
	 VueRouter,
	 Foo
	 ){
	Vue.use(VueRouter);

	var init = function(){	
		var self = this;
		
		const Bar = { template: '<div>bar</div>' }
		const routes = [
		  { 
		  	path: '/Foo', 
		  	name: 'emps',
		 	component(resolve){
		 		require(['components/sample_component'], resolve);
		 	}
		},
		  { path: '/Bar', component: Bar },
		  // { path: '/bar', component: Bar }
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

	};
	return { init: init };
});

