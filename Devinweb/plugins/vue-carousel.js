import Vue from 'vue'
import VCarousel from 'vue-carousel'
import { Carousel, Slide } from 'vue-carousel';

const VueCarousel = {
  install(Vue, options) {
    Vue.component('v-carousel', VCarousel)
    Vue.component('carousel', Carousel)
    Vue.component('slide', Slide)
  }
};
Vue.use(VueCarousel);
export default VueCarousel;