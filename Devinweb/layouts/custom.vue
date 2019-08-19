<template>
<div>
    <HeaderRec/>
    <div class="container-fluid" id="main-rec">
        <nuxt/>
    </div>
    <FooterRec/>
</div>
</template>

<script>
import HeaderRec from '~/components/HeaderRec';
import FooterRec from '~/components/footerRecruteur';
import Recruteur from '~/pages/Espace-Recruteur';
export default {
components:{
    HeaderRec,
    FooterRec ,
    Recruteur

},
mounted(){
this.$bus.$on('i-got-clicked',SHW=>{
    console.log(`Oh, that's nice. It's gotten ${SHW} clicks! :)`);
    document.getElementById('main-rec').style.filter ="blur(3px)";
});
this.$bus.$on('i-got-delete',annuler=> {
  document.getElementById('main-rec').style.filter ="blur(0px)";
})

}
}
</script>

<style>
#main-rec{
 margin: 0 auto;
  min-height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
  padding-top: 100px;
  padding-bottom: 100px;
  background: #e6e6e6;

}

html {
  font-family: 'Source Sans Pro', -apple-system, BlinkMacSystemFont, 'Segoe UI',
    Roboto, 'Helvetica Neue', Arial, sans-serif;
  font-size: 16px;
  word-spacing: 1px;
  -ms-text-size-adjust: 100%;
  -webkit-text-size-adjust: 100%;
  -moz-osx-font-smoothing: grayscale;
  -webkit-font-smoothing: antialiased;
  box-sizing: border-box;
}
</style>
