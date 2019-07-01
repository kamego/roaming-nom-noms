require('./bootstrap');

window.Vue = require('vue');

export const bus = new Vue();

Vue.component('food-truck-update-form', require('./components/forms/FoodTruckUpdate.vue').default);
Vue.component('food-truck-menu', require('./components/FoodTruckMenu.vue').default);
Vue.component('food-truck-menus', require('./components/forms/FoodTruckMenus.vue').default);
Vue.component('food-truck-menu-create-form', require('./components/forms/FoodTruckMenuCreate.vue').default);

const app = new Vue({
    el: '#app',
});