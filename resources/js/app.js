require('./bootstrap');

window.Vue = require('vue');


Vue.component('pensamiento-form',require('./components/PensamientoForm.vue').default);
Vue.component('pensamiento-guardado',require('./components/PensamientoGuardado.vue').default);
Vue.component('pensamiento-master',require('./components/PensamientoMaster.vue').default);

Vue.component('db_pensamiento-form',require('./components/DBPensamientoForm.vue').default);
Vue.component('db_pensamiento-guardado',require('./components/DBPensamientoGuardado.vue').default);
Vue.component('db_pensamiento-master',require('./components/DBPensamientoMaster.vue').default);

const app = new Vue({
 el:"#app"
});
