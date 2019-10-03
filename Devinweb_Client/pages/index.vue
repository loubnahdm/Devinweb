<template>
  <div  >
    <SectionHeader/>
    <SectionCarousel />
    <SectionEspaceCandidat  id="ancre"/>
    <SectionContact/>
    <SectionComments/>
    <!-- <button @click="$store.dispatch('Projets/getIP')">afficher</button>
    <div class="mt-5 pt-5">{{ $store.state.Projets.projets }}</div> -->
  </div>
</template>

<script>
import SectionHeader from '~/components/main/section-header'
import SectionCarousel from '~/components/main/section-carousel'
import SectionEspaceCandidat from '~/components/main/section-Espace-Candidat'
import SectionContact from '~/components/main/section-contact'
import SectionComments from'~/components/main/section-comments'
export default {
  data(){
    return{
    
    }
  },
  components: {
   SectionHeader,
   SectionCarousel,
   SectionEspaceCandidat,
   SectionContact,
   SectionComments,
  },
  
// async asyncData({ $axios }) {
//   const ip = await $axios.$get('http://127.0.0.1:8000/api/projs')
//   // return { ip }
//   console.log(ip);
  
// }
 
}
</script>

<style>


</style>
 