<template >
      <section  class="devin-candidat-space  container mt-5 pt-5 ">
        <div class="row ml-3 mr-1">
        <div class=" candidat-space  col-lg-12">
         <img src="https://www.glowbl.com/wp-content/uploads/2018/06/chat-ent.png"  alt="" />   <!--  https://myflow.ca/wp-content/uploads/2018/11/img_candidats.png -->
        <div class="row center-xs">
        <div class="title col-md-12 mt-3  ">
            <h2 >ECPACE CANDIDAT</h2>
            <h4 class="mt-3"> Développez vos compétences qui correspondent à nos attentes</h4>
        </div>
        <div class="col-lg-12">
        <div class=" aligner  row   ">
            <div class="aligner-item col-xs-12 col-sm-12 col-md-12 col-lg-4 mb-5">
              <div class="mt-5"> 
                   <nuxt-link to="Offres" class="ful-rounded"> <span class=" item1 mt-5 pt-2">Nos offres</span></nuxt-link>
              </div>
            </div>
           <div class="aligner-item col-xs-12 col-sm-12 col-md-12 col-lg-4 mb-5 ">
              <div class="mt-5"> 
                <nuxt-link to="EspaceCandidat" class="ful-rounded"> <span class=" item2 mt-5 ">Créez votre <br>Espace Candidat</span></nuxt-link>
              </div>
           </div>
           <div  class=" aligner-item  col-xs-12 col-sm-12 col-md-12 col-lg-4 mb-5">
              <div class="mt-5" > 
                <nuxt-link to="CandidatureSpontanee" class="ful-rounded">   <span class="item3 mt-5 ">Candidature <br>Spontanée</span></nuxt-link>
              </div>
           </div>
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
  border: 5px solid #ffffff ;
 
}

.candidat-space img{
  width: 300px;
  height: 300px;
  float: left;
  margin-left: -60px;	
  margin-top: -110px;
  border-radius: 100%;
  box-shadow: 0 15px 15px 0 rgba(0,0,0,.18), 0 4px 15px 0 rgba(0,0,0,.15);
 /* mask-image: linear-gradient(to bottom, white, transparent); */

}
.aligner-item{
  justify-content: center;
  display: flex;
}
.ful-rounded{
  height: 150px;
    width: 150px;
    border-radius: 100%;
    background-color: #f1f5f8;
    display: flex;
    justify-content: center;
    border: 2px solid #b4b5b6;
}
.ful-rounded:hover{
  border-color:#00B4CC ;
  text-decoration-line: none;
}
</style>
