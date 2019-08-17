<template>
  <div  >
    <SectionHeader/>
    <SectionCarousel />
    <SectionEspaceCandidat  id="ancre"/>
    <SectionContact/>
    <!-- <SectionComments/> -->
  </div>
</template>

<script>
import SectionHeader from '~/components/main/section-header'
import SectionCarousel from '~/components/main/section-carousel'
import SectionEspaceCandidat from '~/components/main/section-Espace-Candidat'
import SectionContact from '~/components/main/section-contact'
// import SectionComments from'~/components/main/section-comments'
export default {
  components: {
   SectionHeader,
   SectionCarousel,
   SectionEspaceCandidat,
   SectionContact,
  //  SectionComments,
  }
}
</script>

<style>


</style>
