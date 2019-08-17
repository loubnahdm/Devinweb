<template>
    <header >

        <div class="row navbar-rec mx-auto ">
            <div class="col-sm-7 col-lg-7 col-md-7 col-xs-12 ">
                <div class="row ml-5  ">
                    <div class="devin-logo col-sm-5  col-lg-3  col-md-5 mt-2">
                         <nuxt-link  to="/"     class="navbar-brand"> 
                                   <img  src="http://d2wwknes1cy3mz.cloudfront.net/public/logo-b.png" alt="Card image">
                       </nuxt-link>
                    </div>
                     <div class="searchBox col-sm-7 col-lg-8 col-md-7 mt-3">

                    <input class="searchInput" type="text" name="" placeholder="Search">
                    <button class="searchButton" href="#">
                       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"  width="24" height="24"><path class="heroicon-ui" d="M16.32 14.9l5.39 5.4a1 1 0 0 1-1.42 1.4l-5.38-5.38a8 8 0 1 1 1.41-1.41zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z"/></svg>
        
                    </button>
                   </div>
                </div>
            </div>
            <div class="ligne_verticale col-sm-2 col-lg-2 col-md-2  mx-auto " ></div>
            <div class=" col-sm-3 col-lg-3 col-md-3 mx-auto  ">
                
                <div class="row pl-4">
                    <div class="col-sm-2  col-xs-4 col-md-2 col-lg-2 mt-4 mr-4">
                        <!-- <a >
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="30" height="30"><path class="heroicon-ui" d="M15 19a3 3 0 0 1-6 0H4a1 1 0 0 1 0-2h1v-6a7 7 0 0 1 4.02-6.34 3 3 0 0 1 5.96 0A7 7 0 0 1 19 11v6h1a1 1 0 0 1 0 2h-5zm-4 0a1 1 0 0 0 2 0h-2zm0-12.9A5 5 0 0 0 7 11v6h10v-6a5 5 0 0 0-4-4.9V5a1 1 0 0 0-2 0v1.1z"/>
                        </svg>
                        </a> -->
                        <notification-bell iconColor='#007bff' />
                    </div>
                    <div class="col-sm-8  col-xs-4 col-lg-8 col-md-8">
                        <div class="row mt-3 ">
                            <p class=" mr-1">Bonjour <br> Devinweb</p>
                            <!-- <a  @click="afficherBar" >  
                            <svg  class="mt-1"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="30" height="30"><path class="heroicon-ui "  d="M19 10h2a1 1 0 0 1 0 2h-2v2a1 1 0 0 1-2 0v-2h-2a1 1 0 0 1 0-2h2V8a1 1 0 0 1 2 0v2zM9 12A5 5 0 1 1 9 2a5 5 0 0 1 0 10zm0-2a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm8 11a1 1 0 0 1-2 0v-2a3 3 0 0 0-3-3H7a3 3 0 0 0-3 3v2a1 1 0 0 1-2 0v-2a5 5 0 0 1 5-5h5a5 5 0 0 1 5 5v2z"/>
                            </svg>
                            </a> -->
                            <div  @click.prevent="afficherBar" >
                                <a class="btn-user-plus " href="#"  >       
                                    <font-awesome-icon :icon="['fas', 'user-plus']" />
                                </a>
<!-- ----------------------------------------------------------------------------------------------------------------- -->
                                <ul   role='dialog' v-show="show"  id='bar' class="options" >
                                     <!-- <div class="triangle-up"></div> -->
                                   
                                    <li class="topcard-profil ">
                                                <a data-control-name="view_profile" href="/Espace-Recruteur" class="view-profile-Devinweb">      
                                                <div class="settingBlock">
                                                        <div class="photo-container">
                                                            <img src="https://media.licdn.com/dms/image/C4E0BAQHvIw1TBFd2SQ/company-logo_200_200/0?e=2159024400&v=beta&t=w100VtQAv8Ku3pamEAPTXGWGnVrgZqRocZYPLOI03Zs" class="nav-photo EntityPhoto-circle-4" alt="Devinweb" height="70" width="70">
                                                        </div>

                                                        <div class="info-container">
                                                        <h3 class="name t-16 t-black t-bold">
                                                            Devinweb
                                                            </h3>
                                                            <h4 class="occupation t-14 t-black--light t-normal">
                                                            Agence de Développement Logiciels, Web, Mobile
                                                            </h4>
                                                        </div>
                                                        </div>

                                                        <div class="settingBlock">
                                                        <span class="artdeco-button ">
                                                            Voir le profil
                                                        </span>
                                                        </div>
                                                </a>   
                                    </li>
                                   <hr>
                                    <li class="topcard-options">
                                        
                                    <ul class="topcard-options-list">
            
                                            <li class="topcard-options-MDR mb-3">
                                                <span  class="p-icon">
                                                    <a type="" class="btn-floating-rec btn-briefcase pr-2 " href="#">
                                                        <font-awesome-icon :icon="['fas', 'briefcase']"/>
                                                        <span>Mission de Recrutement</span>
                                                    </a>
                                                </span>
                                                
                                            </li>
                                            <hr class="rgba-white-light" style="margin: 0 1%;">
                                            <li class="topcard-options-MDP mb-3 mt-3" >
                                                <span class="p-icon" @click="changerMDP">
                                                    <a type="" class="btn-floating-rec btn-edit pr-2 " href="#">
                                                        <font-awesome-icon :icon="['fas', 'edit']"/>
                                                        <span>Changer le mot de passe</span>
                                                    </a>
                                            
                                                </span>
                                                
                                            </li>
                                        
                                            <li class="topcard-options-Logout ">
                                                <span  class="p-icon">
                                                    <a type="" class="btn-floating-rec btn-external-link-alt pr-2" href="#">
                                                        <font-awesome-icon :icon="['fas', 'external-link-alt']"/>
                                                     <span>Déconnexion</span> 
                                                    </a>  
                                                     
                                                </span>
                                               
                                            </li>
                                    </ul>
                                    </li>
                                </ul>
<!-- ----------------------------------------------------------------------------------------------------------------- -->
                    
                            </div>
                        </div>
                     </div>
                </div>
        </div>
 <!-- ------------------------------------------------------------------------------------------------------ -->
          <div v-show="SHW" v-bind:style='styleobjet2' id="changer_M_D_P">
                                                 <span>
                                                        <a type="" class="btn-floating-rec btn-annuler  " href="#" v-bind="annuler" @click.prevent="supprimer2">
                                                            <font-awesome-icon :icon="['fas', 'times']"/>
                                                        </a>
                                                 </span>
                                                 <ChangerPassword/>
                                             </div>
           <!-- ---------------------------------------------------------------------------------- -->
        </div>
        
    </header>
</template>

<script>

import ChangerPassword from '~/components/changerPassword';
export default {
components:{
   ChangerPassword,
},
data(){
    return{
     show:false,
     SHW:false,
     annuler:false,
     styleobjet2:{
         position:'absolute',
         backgroundColor:'#c5c5c5',
         right:'19%',
         top:'90%',
         width:'500px',
         height:'450px',
         border:'1px solid #fff',
         borderRadius:'10px',
         paddingTop:'10px',
     }
   
    }
},

methods:{
    afficherBar:function(){
        this.show=!this.show;
        console.log('hello');
        
    },
    changerMDP: function(){
      this.SHW=!this.SHW;
      this.$bus.$emit('i-got-clicked',this.SHW);
   
   

    },
     
    supprimer2:function(){
    
    //  document.getElementById('changer_M_D_P').remove();
    // document.getElementById('changer_M_D_P').style.display='none';
    var test = document.getElementById('changer_M_D_P').style.display;
			if (test == "block") 
			{
                document.getElementById('changer_M_D_P').style.display = "none";
                this.annuler=!this.annuler;
                this.$bus.$emit('i-got-delete',this.annuler);
			}
			else 
			{
				document.getElementById('changer_M_D_P').style.display = "block";
			}
    
    },
//    afficherBar: function(){
//         this.show=!this.show;
//         this.$bus.$emit('i-got-clicked',this.show);
//    }
}





}
</script>

<style src="~/assets/CSS/Header.css">


</style>
