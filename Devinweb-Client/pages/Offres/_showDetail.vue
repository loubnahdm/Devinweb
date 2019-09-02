<template>
<b-container class="bv-example-row bv-example-row-flex-cols mt-5">
   <b-row>
    <b-col cols="7" class="container mb-5">
        <h1 class="grid_12 text-left offer-title" role="heading">{{$store.state.Projets.projet.title}}</h1>
    </b-col>
   
    <b-col cols="2">
     <b-button variant="outline-primary" @click="fichPostuler" :to="{path:'/Offres/:showDetail',hash:'ancre_fich'}">Postuler</b-button>
 
    </b-col>
    <b-col cols="3">
        <nuxt-link to="/Offres">
           <b-button variant="secondary">Retour/Toutes les offres</b-button>
       </nuxt-link>
    </b-col>
   </b-row>
    <b-row >
       <b-col cols="12" md="8">
        <b-card  border-variant="primary">
          <b-row>
             <b-media class="media-detail my-3 mx-5">
                <b-img slot="aside" src="~/assets/IMG/news.png" width="80" alt="Contexte image"></b-img>
              
              <h2 class="mt-0 media-title">Contexte</h2>
              <b-row class="media-data">
               <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rem voluptatibus est totam ipsa et sint eligendi sit quod 
                 incidunt nulla tempora, cumque quidem, illo harum nihil ipsum ex tempore? Ea!</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Qui iure sint veritatis excepturi expedita deleniti a et consectetur,
                   eum sunt tempore minus magni dolorem dolore quam enim perspiciatis cumque ratione?</p> 
              </b-row>
             </b-media>
          </b-row>
          <b-row>   
                  <b-media class="media-detail my-3 mx-5">
                    <b-img slot="aside" src="~/assets/IMG/profil.png" width="90" alt="Contexte image"></b-img>
                    
                    <h2 class="mt-0 media-title">Profil requis</h2>
                    <b-row class="media-data">
                     <p>
                        {{$store.state.Projets.projet.description}}
                     </p>
                     </b-row>
                   </b-media>
          </b-row>
        </b-card>
       </b-col>
       <b-col cols="6" md="4">
         <b-card bg-variant="dark" text-variant="white"  border-variant="primary">
           <ul class="list-unstyled">
              <b-media tag="li"  class="my-3">
                 <h5 class="mt-0 mb-1  text-left">Cantact :</h5>
                 <p class="mb-0"> Diaa Alhak EL Fallous </p>
              </b-media>
              <b-media tag="li" class="my-4">
                 <h5 class="mt-0 mb-1  text-left">Lieux de travail :</h5>
                 <p class="mb-0"> TETOUAN </p>
              </b-media>
              <b-media tag="li"  class="my-4">
                 <h5 class="mt-0 mb-1  text-left">Salaire :</h5>
                 <p class="mb-0"> {{$store.state.Projets.projet.salary}} </p>
              </b-media>
              <b-media tag="li"  class="my-4">
                 <h5 class="mt-0 mb-1  text-left">Niveau d’étude :</h5>
                 <p class="mb-0"> {{$store.state.Projets.projet.studylevel}} </p>
              </b-media>
              <b-media tag="li"  class="my-4">
                 <h5 class="mt-0 mb-1  text-left">Experience :</h5>
                 <p class="mb-0"> {{$store.state.Projets.projet.experience}} </p>
              </b-media>
              <b-media tag="li"  class="my-4">
                 <h5 class="mt-0 mb-1  text-left">Publié le :</h5>
                 <p class="mb-0"> {{$store.state.Projets.projet.created_at}} </p>
              </b-media>
           </ul>
         </b-card>

       </b-col>
  </b-row>
  <b-row id="ancre_fich">
   <Postuler  v-show="show" />
  </b-row>
</b-container>
</template>

<script>
import Postuler from '~/components/Postuler';
export default {
  components:{
    Postuler,
  },
  data(){
     return{
        show:false,
      
     }
  },
  methods:{
     fichPostuler: function(){
        this.show=!this.show;
        if(this.show==false){
           window.location.hash='';
        }
     }
  },
   //  mounted(){
   //   this.$bus.$on('show_Detail',name=>{
   //       console.log(name);       
   //        });
   //       }

}
</script>

<style>
.media-title{
  text-align: left;
 
}
.media-data p{
  text-align: left;
}
</style>