<template>
   <div>
   <Header/>
  <div class="container-fluid " id="main">
    
    <nuxt />
    
  </div>
  <Footer/>
   </div>
</template>
<script>

import Header from '~/components/header-main'
import Footer from '~/components/footer-main'
export default {

  components:{
    Header,
    Footer,
  }
}
</script>

<style>
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
#main {
  margin: 0 auto;
  min-height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
  /* background:  cadetblue;   */
  background: #f6f6f6;
  padding-top: 60px;
  padding-bottom: 80px;
}
</style>
