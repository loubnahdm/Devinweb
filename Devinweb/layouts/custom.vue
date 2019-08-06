<template>
<div>
    <HeaderRec/>
    <div class="container-fluid" id="main-rec">
        <Recruteur/>
    </div>
    <FooterRec/>
</div>
</template>

<script>
import HeaderRec from '~/components/headerRecruteur';
import FooterRec from '~/components/footerRecruteur';
import Recruteur from '~/pages/Espace-Recruteur';
export default {
components:{
    HeaderRec,
    FooterRec ,
    Recruteur

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
