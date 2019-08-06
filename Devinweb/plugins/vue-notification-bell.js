import Vue from 'vue'
import NotificationBell from 'vue-notification-bell'



const VueNotificationBell = {
  install(Vue, options) {
    Vue.component('notification-bell', NotificationBell)
   
  }
};
Vue.use( VueNotificationBell);
export default  VueNotificationBell;