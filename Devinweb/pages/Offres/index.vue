<template>
<div class="container offres-conteur" >
 <h1>Nos offres pour vous</h1>   
<section class="row ">
    
    <ul class="nav nav-tabs nav-advance theme-bg col-lg-6  " id="items" role="tablist">
                    <li class="nav-item  " @click="deplacer">
                        <b-link class="nav-link" to="/Offres/#Stages" v-bind:show="show1"  >
                            Stages</b-link>
                    </li>
                    <li class="nav-item active" @click="deplacer">
                        <b-link class="nav-link" to="/Offres/#Emplois"  v-bind:show="show2"  >
                            Emplois</b-link>
                    </li>
     </ul>
    
</section>
<section v-show="show1">
    <template>
  <div class="overflow-auto">
    <b-pagination-nav :link-gen="linkGen" :number-of-pages="10" use-router></b-pagination-nav>
  </div>
</template>
</section>
<section v-show="show2">
    <h1>bhkdcsdkjcsdojcsdj</h1>
        <template>
            <div class="overflow-auto">
                <b-pagination-nav :link-gen="linkGen" :number-of-pages="10" use-router></b-pagination-nav>
            </div>
        </template>
</section>
</div>
</template>

<script>




export default {
    data(){
        return{
            show1:true,
            show2:false,
          
        }
    }
    ,
    methods:{
        deplacer: function(){
            $("#items li").removeClass("active");
           $(this).parent().addClass("active");
           this.show1=this.show2;
           this.show2=!this.show1;
           
		   return false;
        },
        linkGen(pageNum) {
        return  pageNum === 1 ? '?' : `?page=${pageNum}`
      }
    }

}
</script>

<style>
.offres-conteur{
    margin-top: -150px;
}
.nav.nav-tabs.nav-advance {
    background: #00B4CC;
    border-radius: 50px;
    padding: 8px 4px;
    max-width: 600px;
    margin: 10px auto 50px auto;
}

.nav-tabs.nav-advance>li {
    width: 50%;
    text-align: center;
    padding: 0 4px;
     
}



.nav-tabs.nav-advance>li.active>a, .nav-tabs.nav-advance>li>a:hover, .nav-tabs.nav-advance>li>a:focus {
    background: #f1f5f8 !important;
    color: #ec0c0c !important;
     border-radius: 50px;
}
.nav-tabs.nav-advance>li.active>a, .nav-tabs.nav-advance>li>a:hover, .nav-tabs.nav-advance>li>a:focus {
    color: #ec0c0c !important;
}






</style>
