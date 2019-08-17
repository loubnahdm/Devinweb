<template>
<div>
    
<div class="container ">
    <section  class="row top-tof-profil pl-0 pr-5">

        <div class="div-tof  col-lg-10  mt-5">
            <div id="tof" ></div>
        </div>
    
       <div class="row top-header-profil ">
           <div  class="col-lg-3">
               <img src="~assets/IMG/logo.jpg"   alt="card image"/>
           </div>
           <div class="devin-name col-lg-5 mt-3 pl-5">
               <span>Devinweb</span>
               <div class="pl-3"><p>Agence de Développement Logiciels, Web, Mobile</p></div>
           </div>
           <div class="devin-top-icon col-lg-4 ">
               <div class="mt-4">
                <a type="button" class="btn-modif-rec btn-pen mt-3 " href="#">
                    
                    <font-awesome-icon :icon="['fas', 'pen']"/>
                  </a>
               </div>
               <div class="mt-4">
                    <a type="button" class="btn-modif-rec btn-address-card  mt-5 " href="#">
                    
                    <font-awesome-icon :icon="['fas', 'address-card']"/>
                  </a>
                  <span>Voir les candidatures</span>
               </div>
           </div>
       </div>
     
    </section>
    <section  class="row pl-5" >
        <div class="col-lg-lg-10  devin-TB">
            <span> Votre Tableau de bord </span>
            <div class="col-lg-12 devin-result">
                <div class="row">
                <div class="col-md-4">
                    <div></div>
                    <div>candidatures reçues</div>
                </div>
                <div class="col-md-4">
                    <div></div>
                    <div> Candidatures refusées</div>
                </div>
                <div class="col-md-4">
                    <div></div>
                    <div>candidatures acceptées</div>
                </div>
                </div>
            </div>
            <span>Dernière connexion:</span>
            <span></span>

        </div>
    </section>
    
</div>
   
</div>  
</template>

<script>

export default {
layout:'custom',
// data(){return{
//     showbar:false,
// }},
// created(){
// this.$bus.$on('i-got-clicked',SHW=>{
//     console.log(`Oh, that's nice. It's gotten ${SHW} clicks! :)`);
//     // this.showbar=show;
//     document.getElementById()
// });
// }
}

</script>

<style>
.M-rec{
    min-height: 150vh;
}

 .div-tof #tof{
    background-image: linear-gradient( rgba(255, 255, 0, 0.4),rgba(0, 0, 255, 0.3)),url('https://pbs.twimg.com/media/D1iivLUXQAAQVEm.jpg');
    background-size: 120% 140%;
    background-position-y: bottom;
    border-radius: 100px;
    width: 1060px;
    height: 600px;
    z-index: -1;
    box-shadow: 0px 4px 50px rgba(0, 0, 0, 0.25);
	-moz-box-shadow: 0px 4px 50px rgba(0, 0, 0, 0.25);
	-webkit-box-shadow: 0px 4px 50px rgba(0, 0, 0, 0.25);

}
@media all and (min-width:1000px) {
    

.top-header-profil{
    background-color: #ffffff;
    padding-left: 110px;
    margin-left: -110px;
    padding-right: 170px;
    margin-right: -180px;
    margin-top: -200px;
    padding-top: 200px;
    margin-bottom: -50px;
    padding-bottom: 50px;
    border-top: #dbdbdb solid 1px;
     border-bottom: #dbdbdb solid 1px;
}}
.top-header-profil img{
width: 192px;
height: 186px;
margin-top: -80px;
margin-left: 80px;
border-radius: 50%;
box-shadow: 0px 4px 50px rgba(0, 0, 0, 0.25);
-moz-box-shadow: 0px 4px 50px rgba(0, 0, 0, 0.25);
-webkit-box-shadow: 0px 4px 50px rgba(0, 0, 0, 0.25);
}
.devin-name{
    display: block;
    text-align: left;
   
}
.devin-name span{
   
    font: 1.7em sans-serif;
  
    
}


 .btn-pen {
    display:flex;
    font-size: 1.25rem;
   -webkit-appearance: none;
   overflow: hidden;
   margin-left: 145px;
  
}
.btn-address-card {
    font-size: 1.55rem;
    -webkit-appearance: none;
    overflow: hidden;
    margin-left: 140px;
   
}


.devin-TB{
    padding: 2%;
    margin-top: 10%;
    margin-left: 13%;
    background-color: aliceblue;
    border: 1px gray solid;
    font-size: 1.25rem;
     border-right: 2px gray solid ;
}
.devin-result{
    background-color: #e6e6e6;
    /* height: 100px; */
    border:1px gray solid;
   
}
.devin-result .row .col-md-4{
    border-right: 1px gray solid ;

}
</style>
