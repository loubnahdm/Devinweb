<template>
     <section class="container ">
          <div class="devinEquipe row ml-3 mr-1">
            <div class="devin-cantact col-md-12 mt-5 pt-4 mb-5 pb-5">
                <div class="devin-cantact-content mt-5 ml-5 mr-5">
                <h1 class="mt-5">Vous avez besoin d’aide?</h1>
                <h3 class="mt-5">L’équipe de Devinweb est à votre service</h3>
                <center>
                <div class="devin-watsap mt-5 mb-5 ">
                   <a type="" class="btn-floating btn-wtsp" href="#" >
                   <font-awesome-icon :icon="['fab', 'whatsapp']" />
                  </a>
                  <span >+212539966760</span></div>
                  </center>
                </div>
                
            </div>
            
          </div>

      </section>  
</template>

<script>
// $(document).ready({
// })

export default {
  
}
</script>

<style>


.devinEquipe .devin-cantact{
  background-image: url('https://www.we-are-digital.co.uk/wp-content/uploads/2019/06/WAD_funding_newsimage-1024x512.jpg');
  background-size: 100% 100%;
   /* object-fit: fill;   */
  border-radius: 20px;
  box-shadow: 0 15px 15px 0 rgba(0,0,0,.18), 0 4px 15px 0 rgba(0,0,0,.15);
}


.devin-cantact-content{
  /* background-color:transparent; */
  background: rgb(173, 221, 219);
  opacity: 0.7;
  
  border: #444343 solid 2px;
  /* height: 300px; */
  border-radius: 20px;
  

}
.devin-cantact-content h1, h3, span{
   font-weight: bold;

  color: #000000;
 
}

.devin-watsap{
  background-color: aqua;
  border: rgb(8, 206, 206) 1px solid;
  border-radius: 20px;
  width: 200px;
  height: 30px;
  text-align: center;
  /* margin-left: 40%; */
  font-size: 1.2rem;
}
</style>
