<template>
  <div >
    <SectionHeader/>
    <SectionCarousel/>
    <SectionEspaceCandidat/>
    <SectionContact/>
  </div>
</template>

<script>
import SectionHeader from '~/components/main/section-header'
import SectionCarousel from '~/components/main/section-carousel'
import SectionEspaceCandidat from '~/components/main/section-Espace-Candidat'
import SectionContact from '~/components/main/section-contact'
export default {
  components: {
   SectionHeader,
   SectionCarousel,
   SectionEspaceCandidat,
   SectionContact,
  }
}
</script>

<style>




</style>
