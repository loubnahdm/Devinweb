<template>
<div class="container offres-conteur" >
 <h1>Nos offres pour vous</h1>   
<section class="row ">
    
    <ul class="nav nav-tabs nav-advance theme-bg col-lg-6  " id="items" role="tablist">
                    <li class="nav-item  " @click="deplacer">
                        <a class="nav-link" href="#">
                            <i class="ti-user"></i> Stages</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">
                            <i class="ti-user"></i> Emplois</a>
                    </li>
     </ul>
    
</section>
<section>
    
</section>
<section>
<div class="row">
<div class="col-xs-12 col-md-12  margin-top-30">
 <h2 class="element-invisible">Pages</h2>
 <div class="item-list">
     
<ul class="pager" id="pagers">
<li class="pager-first first"><a title="Aller à la première page" href="#">«&nbsp;premier</a></li>
<li class="pager-previous"><a title="Aller à la page précédente" href="#">‹&nbsp;précédent</a></li>
<li class="pager-item "><a title="Aller à la page 1" href="#">1</a></li>
<li class="pager-current"><a title="Aller à la page 2" href="#">2</a></li>
<!-- <li class="pager-item" ><a title="Aller à la page 3" href="#">3</a></li>
<li class="pager-item" ><a title="Aller à la page 4" href="#">4</a></li>
<li class="pager-item" ><a title="Aller à la page 5" href="#">5</a></li>
<li class="pager-item" ><a title="Aller à la page 6" href="#">6</a></li>
<li class="pager-item" ><a title="Aller à la page 7" href="#">7</a></li> -->
<li class="pager-next" ><a title="Aller à la page suivante" href="#">suivant&nbsp;›</a></li>
<li class="pager-last last"><a title="Aller à la dernière page" href="#">dernier&nbsp;»</a></li>
</ul>



</div>                      </div>
                  </div>
</section>
</div>
</template>

<script>




export default {
    methods:{
        deplacer: function(){
            $("#items li").removeClass("active");
	       $(this).parent().addClass("active");
		   return false;
        },
       
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







.element-invisible {
    display: none;
}
.pager {
    padding-left: 0;
    margin: 20px 0;
    text-align: center;
    list-style: none;
}
.pager li {
    display: inline;
}
.pager li>a, .pager li>span {
    display: inline-block;
    padding: 5px 14px;
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 15px;
}
a, a:active, a:focus, a:hover {
    color: #334e6f;
    outline: none;
    text-decoration: none;
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    -ms-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}
</style>
