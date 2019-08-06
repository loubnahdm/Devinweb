<template>
      <section class="devin-candidat-space  container mt-5 pt-5 ">
        <div class="row ml-3 mr-1">
        <div class=" candidat-space  col-lg-12">
        <img src="https://myflow.ca/wp-content/uploads/2018/11/img_candidats.png"  alt="" />
        <div class="row">
        <div class="col-md-12 ">
            <h1 class="">ECPACE CANDIDAT</h1>
            <h3 class=""> Développez vos compétences <br>qui correspondent à nos attentes</h3>
        </div>
        <div class=" aligner col-md-12  mt-5 ">
            <div class="row"> 
           <nuxt-link to="Offres" class="aligner-item mx-auto col-md-3 "> <div class=" item1 pt-5 "><span>Nos offres</span></div></nuxt-link>
            <nuxt-link to="" class="aligner-item mx-auto col-md-3"> <div class=" item2 pt-4 "><span >Créez votre <br>Espace Candidat</span></div></nuxt-link>
           <nuxt-link to="" class=" aligner-item mx-auto col-md-3 ">  <div class="item3 "> <span >Candidature <br>Spontanée</span></div></nuxt-link>
            </div>
        </div>
        </div>
        </div>
        </div>
      </section>
</template>

<script>
export default {

}
</script>

<style>

.candidat-space{
  background: #c5c5c5;
  border-radius: 40px;
  border: 1px solid #807d7d ;
  height: 400px;
 
}

.candidat-space img{
  width: 200px;
  height: 170px;
  float: left;
  margin-left: -65px;	
  margin-top: -60px;
}
.aligner-item{
    background: #f1f5f8;
    border: 3px solid #b4b5b6;
     border-radius: 100%;
      height: 140px;
      max-width: 140px;
     
}

.aligner-item span{
  font-size: 1.1rem;
  text-align: center!important;
 
}
.item3{
  padding-top: 41px;
}

.aligner-item:hover{
  border-color:#00B4CC;
  text-decoration-line: none;
}




</style>
