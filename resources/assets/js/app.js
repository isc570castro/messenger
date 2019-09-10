require('./bootstrap');

import Vue from 'vue';
import BootstrapVue from 'bootstrap-vue'
import store from './store'
import VueRouter from 'vue-router'
import MessengerComponent from './components/MessengerComponent.vue'
import ExampleComponent from './components/ExampleComponent.vue'


window.eventBus = new Vue();

Vue.use(BootstrapVue);
Vue.use(VueRouter);

Vue.component('contact-form-component', 
    require('./components/ContactFormComponent.vue'));

Vue.component('profile-component', 
    require('./components/ProfileFormComponent.vue'));

Vue.component('status-component', 
    require('./components/StatusComponent.vue'));

Vue.component('contact-component', 
	require('./components/ContactComponent.vue'));

Vue.component('contact-list-component', 
	require('./components/ContactListComponent.vue'));

Vue.component('active-conversation-component', 
	require('./components/ActiveConversationComponent.vue'));

Vue.component('message-conversation-component', 
	require('./components/MessageConversationComponent.vue'));

/*Vue.component('messeger-component', 
    require('./components/MessengerComponent.vue'));*/


const routes = [
    { path: '/chat', component: MessengerComponent },
    { path: '/chat/:conversationId', component: MessengerComponent },
    { path: '/example', component: ExampleComponent }
]

const router = new VueRouter({
  routes,
  mode:'history'
})


const app = new Vue({
    el: '#app',
    store,
    router,
    methods: {
    	logout(){
    		document.getElementById('logout-form').submit();
    	}
    }
});
