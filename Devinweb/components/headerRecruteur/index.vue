<template>
    <header >

        <div class="row navbar-rec mx-auto ">
            <div class="col-lg-8">
                <div class="row ml-5  ">
                    <div class="devin-logo col-lg-3 mt-2">
                         <nuxt-link  to="/"     class="navbar-brand"> 
                                   <img  src="http://d2wwknes1cy3mz.cloudfront.net/public/logo-b.png" alt="Card image">
                       </nuxt-link>
                    </div>
                     <div class="searchBox col-lg-8 mt-3">

                    <input class="searchInput" type="text" name="" placeholder="Search">
                    <button class="searchButton" href="#">
                       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"  width="24" height="24"><path class="heroicon-ui" d="M16.32 14.9l5.39 5.4a1 1 0 0 1-1.42 1.4l-5.38-5.38a8 8 0 1 1 1.41-1.41zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z"/></svg>
        
                    </button>
                   </div>
                </div>
            </div>
           <div class="ligne_verticale col-lg-1 " ></div>
            <div class="col-lg-3 pl-4 ">
                
                <div class="row ml-2 ">
                    <div class="col-lg-2 mt-4 mr-4">
                        <!-- <a >
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="30" height="30"><path class="heroicon-ui" d="M15 19a3 3 0 0 1-6 0H4a1 1 0 0 1 0-2h1v-6a7 7 0 0 1 4.02-6.34 3 3 0 0 1 5.96 0A7 7 0 0 1 19 11v6h1a1 1 0 0 1 0 2h-5zm-4 0a1 1 0 0 0 2 0h-2zm0-12.9A5 5 0 0 0 7 11v6h10v-6a5 5 0 0 0-4-4.9V5a1 1 0 0 0-2 0v1.1z"/>
                        </svg>
                        </a> -->
                        <notification-bell iconColor='#007bff' />
                    </div>
                    <div class="col-lg-5">
                        <div class="row mt-3 ">
                        <p class="mr-1">Bonjour <br> Devinweb</p>
                         <!-- <a  @click="afficherBar" >  
                        <svg  class="mt-1"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="30" height="30"><path class="heroicon-ui "  d="M19 10h2a1 1 0 0 1 0 2h-2v2a1 1 0 0 1-2 0v-2h-2a1 1 0 0 1 0-2h2V8a1 1 0 0 1 2 0v2zM9 12A5 5 0 1 1 9 2a5 5 0 0 1 0 10zm0-2a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm8 11a1 1 0 0 1-2 0v-2a3 3 0 0 0-3-3H7a3 3 0 0 0-3 3v2a1 1 0 0 1-2 0v-2a5 5 0 0 1 5-5h5a5 5 0 0 1 5 5v2z"/>
                        </svg>
                        </a> -->
                        <a class="btn-user-plus " href="#"   @click.prevent="afficherBar" >       
                            <font-awesome-icon :icon="['fas', 'user-plus']" />
                        </a>
                        </div>
                    </div>
                </div>
            </div>
 <!-- ------------------------------------------------------------------------------------------------------ -->
            <div   role='dialog' v-show="show" v-bind:style='styleobjet1' id='bar' >
                <div class="beeperNub"></div>
                <div class="annuler pt-2">
                     <span  class="p-icon">
                   <a type="" class="btn-floating-rec btn-annuler  " href="#" @click.prevent="supprimer1">
                   <font-awesome-icon :icon="['fas', 'times']"/>
                  </a>
                 </span>
                </div>
                 <div class="mb-3">
                 <span  class="p-icon">
                   <a type="" class="btn-floating-rec btn-briefcase pr-2 " href="#">
                   <font-awesome-icon :icon="['fas', 'briefcase']"/>
                  </a>
                 </span>
                 <span>Mission de Recrutement</span></div>
                 <hr class="rgba-white-light" style="margin: 0 1%;">
                 <div class="mb-3 mt-3" >
                    <span class="p-icon" @click="changerMDP">
                   <a type="" class="btn-floating-rec btn-edit pr-2 " href="#">
                   <font-awesome-icon :icon="['fas', 'edit']"/>
                  </a>
                 </span>
                     <span>Changer le mot de passe</span></div>
                 <hr class="rgba-white-light" style="margin: 0 1%;">
                 <div class="mb-3 mt-3">
                     <span  class="p-icon">
                   <a type="" class="btn-floating-rec btn-external-link-alt pr-2" href="#">
                   <font-awesome-icon :icon="['fas', 'external-link-alt']"/>
                  </a>
                  
                 </span>
                     <span>Déconexion</span></div>
            </div>
<!-- ------------------------------------------------------------------------------------------------------ -->
            <div v-show="SHW" v-bind:style='styleobjet2' id="changer_M_D_P">
                <span>
                    <a type="" class="btn-floating-rec btn-annuler  " href="#" @click.prevent="supprimer2">
                        <font-awesome-icon :icon="['fas', 'times']"/>
                    </a>
                </span>
               <ChangerPassword/>
            </div>
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
     styleobjet1:{
         position:'absolute',
         backgroundColor:'#c5c5c5', 
         width:'300px',
         height:'200px',
        //  marginLeft:'77%',
         marginTop:'6%',
         borderRadius:'5px',
         padding:'20px',
        right:'0',
        borderStyle:'solid double ',
        borderColor:'#858282',
         
        
     },styleobjet2:{
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
    document.getElementById("bar").style.filter ="blur(3px)";

    },
     supprimer1: function(){
        // document.getElementById('bar').remove();
        //  document.getElementById('bar').innerHTML='';
        document.getElementById('bar').style.display='none';
        // $('#Bar').hide();
          },
    supprimer2:function(){
    //  document.getElementById('changer_M_D_P').remove();
    document.getElementById('changer_M_D_P').style.display='none';
    document.getElementById("bar").style.filter ="blur(0px)";

    },
   
}





}
</script>

<style>
.navbar-rec{
    /* display: block;
  top: 0;
  color: #fff;
  box-shadow: 0 2px 5px rgba(0,0,0,0); */
 position: fixed;
 width: 100%;
  background:#fafafa;
  border-bottom: 1px solid #dae1e7;
  z-index:1;
  
    
}
.devin-logo .navbar-brand img{
     height: auto;
    max-width: 130px;
    cursor: pointer;
    display:block;
}
.ligne_verticale
{
    width:5px;
    border-right:1px solid gray;
    max-height: 200px;
   
}



.btn-user-plus{
  font-size: 1.7rem;
}



.searchBox:hover > .searchInput {
    width: 240px;
    padding: 0 6px;
}
.searchBox:hover > .searchButton {
  background: white;
  color : #2f3640;
}
.searchButton {
    color: white;
    /* float: right; */
    background: #e6e6e6;
     width: 40px;
    height: 40px;
    border-radius: 50%;
    display: inline-block;
    justify-content: center;
    align-items: center;
     transition: 0.4s;
}
.searchInput {
    border:none;
    background: #e6e6e6;
    outline:none;
    float:left;
    padding: 0;
    color: white;
    font-size: 16px;
    transition: 0.4s;
    line-height: 40px;
    width: 0px;
    border-radius: 50px;

}
@media screen and (max-width: 620px) {
.searchBox:hover > .searchInput {
    width: 150px;
    padding: 0 6px;
}
}



 /* .beeperNub {
    right: 37px;
}
.beeperNub {
    background-image: url(/rsrc.php/v3/yS/r/v_BCN1X0uyo.png);
    background-repeat: no-repeat;
    background-size: auto;
    background-position: -167px -251px;
    height: 11px;
    position: absolute;
    top: -11px;
    width: 20px;
} */

.annuler{
    margin-left: 95%;
    margin-top: -10%;
}
.p-icon{
    font-size: 1.1rem;
}
.btn-annuler{
    margin-left:93%;
}
</style>
