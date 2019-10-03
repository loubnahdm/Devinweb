<template>
<div class="container offres-conteur mt-5" >
 <h1>Nos offres pour vous</h1>  
  
<section >
  

    <b-card no-body border-variant="info" >
     <b-tabs content-class="mt-5 " align="center"  class="nav-tabs " card pills fill
     active-nav-item-class="font-weight-bold text-uppercase text-danger"  v-model="myIndex" @input="change()">
    <b-tab   class="nav-item" active>
        <template slot="title">
         <strong>Emplois</strong>
      </template>
      <section >

     <b-card-group columns  >
         <div v-for="projet in $store.state.Projets.projets" :key="projet.id" >
        <b-card  :title="projet.title" v-if="projet.etat =='emploi'" border-variant="primary">
            <b-card-text style="text-align:left; margin-top:15px;" >
                Nous cherchons des candidats {{projet.studylevel}},expérience souhaitable (min: {{projet.experience}} ans) 
                en {{projet.fonction}} .<br>
                Profil le ...
               
            </b-card-text>
            <div slot="footer"><small class="text-muted">
            <nuxt-link to="/Offres/:showDetail">
                   <b-button variant="primary" size="sm" class="float-left" @click="$store.dispatch('Projets/getProjet_By_ID',projet.id)" >
                          En savoir plus
                    </b-button> 
             </nuxt-link>
            <span class="float-right mb-4">Publiée le {{projet.created_at}}</span>
            </small></div>
        </b-card>
         </div>
    </b-card-group>
    
    <template>
  <div class="overflow-auto">
    <b-pagination-nav :link-gen="linkGen" :number-of-pages="10" use-router></b-pagination-nav>
  </div>
</template>
</section>
      </b-tab>
    <b-tab  class="nav-item">
        <template slot="title">
         <strong>Stages </strong>
      </template>
                  
                  
    <section >  
            <b-card-group columns  :current-page="currentPage"   :per-page="perPage"   id='card_projet'>
                    <div v-for="projet in $store.state.Projets.projets" :key="projet.id"  >
                    <b-card      :title="projet.title" v-if="projet.etat =='stage'"border-variant="primary">
                        <b-card-text style="text-align:left; margin-top:15px;" >
                            Nous cherchons des candidats {{projet.studylevel}},expérience souhaitable (min: {{projet.experience}} ans) 
                            en {{projet.fonction}} .<br>
                            Profil le ...
                        
                        </b-card-text>
                        <div slot="footer"><small class="text-muted">
                        <nuxt-link to="/Offres/:showDetail">
                        <b-button variant="primary" size="sm" class="float-left" @click="$store.dispatch('Projets/getProjet_By_ID',projet.id)">
                            En savoir plus
                        </b-button>
                        </nuxt-link>
                        <span class="float-right mb-4">Publiée le {{projet.created_at}}</span>
                        </small></div>
                    </b-card>
                    </div>
                </b-card-group>

                    <template>
                        <div class="overflow-auto">
                            <!-- <b-pagination-nav  v-model="currentPage" :link-gen="linkGen" :total-rows=" $store.state.Projets.projets.length" :per-page="perPage" use-router   aria-controls='card'></b-pagination-nav> -->
                          <b-pagination :total-rows="$store.state.Projets.projets.length" :per-page="perPage" v-model="currentPage"   aria-controls="card_projet" class="my-0" />
                     </div>
                    </template>
            </section>
        
        </b-tab>
   
  </b-tabs>
</b-card>    
</section>


</div>
</template>

<script>




export default {
    data(){
        return{
           
           myIndex:0, 
           ID:'',
           perPage: 3,
           currentPage: 1,
        
        
        }
    }
    ,
    methods:{
       
        linkGen(pageNum) {
        return  pageNum === 1 ? '?' : `?page=${pageNum}`
      },
       change () {
                // Save the current tab in url
                if(this.myIndex == 0){
                window.location.hash ='Emplois';
                 
                }else{
                window.location.hash = 'Stages';

                }
                
                
            },

            
       
    },
    
 mounted () {
    this.$nextTick(() => {
      this.$nuxt.$loading.start()

      setTimeout(() => this.$nuxt.$loading.finish(), 500);
      // Get the previous tab from the url
            this.myIndex = parseInt(window.location.hash.replace('#',''), 10);
    });
  
   
    
    
  },
  
  
 async fetch({store}) {
  await store.dispatch("Projets/getProjets")
  
},



 
}
</script>

<style>
.offres-conteur{
    margin-top: -150px;
}


 .nav-link:hover , a:hover {
 text-decoration: none;
 color: #ec0c0c;
}

.nav-pills .nav-link {
    border-radius: 100px;
    border:#007bff solid 2px;
}
.nav-pills .nav-link:hover {
    border:#007bff solid 2px;
    background: #007bff;
}
 
</style>
