<template>
<header>

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container ">
    <div class="col-lg-7">
    <div class="row">
    <div class="navbar-header col-lg-3 col-md-3">
      <nuxt-link   to="/"   class="navbar-brand"> 
               <img  src="http://d2wwknes1cy3mz.cloudfront.net/public/logo-b.png" alt="Card image">
    </nuxt-link>
    </div>
    <form class="navbar-form  col-lg-6 col-md-6 navbar-right d-none d-lg-block" action="/action_page.php">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Rechercher">
          <div class="input-group-btn ">
            <button class="btn btn-default " type="search">
              <svg xmlns="http://www.w3.org/2000/svg" class="mb-4" viewBox="0 0 24 24"  width="24" height="24"><path class="heroicon-ui" d="M16.32 14.9l5.39 5.4a1 1 0 0 1-1.42 1.4l-5.38-5.38a8 8 0 1 1 1.41-1.41zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z"/></svg>
        
            </button>
          </div>
        </div>
    </form>
    </div>
    </div>
   <div class="col-lg-5">
    <ul class="nav navbar-nav row">
      <li class="active">
              <nuxt-link class="nav-link-1 " :to="{path:'/',hash:'ancre'}" >
                 <span >ESPACE CANDIDAT</span>
              </nuxt-link>  </li>     
      <li>
              <nuxt-link class="nav-link-2 " to="Login_recruteur">
                  <span >ESPACE RECRUTEUR</span>
              </nuxt-link>
      </li>
    </ul>
   </div>
  </div>
</nav>


 





</header>

</template>

<script>

export default {

}
</script>

<style>

@import url(https://fonts.googleapis.com/css?family=Open+Sans);



.navbar{
  
  display: block;
  background:#fafafa;
  position: fixed;
  width: 100%;
  top: 0;
  color: #fff;
  box-shadow: 0 2px 5px rgba(0,0,0,0);
  border-bottom: 1px solid #dae1e7;
  z-index: 9999;
  
    

}


/* .row{
  display: flex;
  margin-left: 7%;
} */

.navbar-header .navbar-brand img{
   height: auto;
    max-width: 130px;
    cursor: pointer;
    display:flex;
}
/*
.container-fluid{
  background: springgreen;
  

}*/
.navbar-nav {
 flex-direction: row;
 /* margin-right: 9%; */

  
}
 .navbar-nav li  {
 display: block;
 text-align: center;
}
li a {
  display: inline;
  color:black;
  text-decoration: none; 
}
.nav-link-1{
 height: 32px;
 display: inline-block;
 padding:0.2em 1.45em;
 margin:0.2em;
 border:0.15em solid   #f1f5f8 ;
 box-sizing: border-box;
 text-decoration:none;
 font-family:'Segoe UI','Roboto',sans-serif;
 font-weight:400;
 color:#000000;
 text-align:center;
}
.nav-link-1:hover{
  border-color:#00B4CC;
  text-decoration-line: none;
}
.nav-link-1:active{
  background-color:#00B4CC;
}
@media all and (max-width:30em){
 .nav-link-1{
  display:block;
  margin:0.2em auto;
  }
}
.nav-link-2{
 display:inline-block;
 padding:0.2em 1.45em;
 border:0.15em solid  #00B4CC;
 margin:0.2em;
 border-radius:0.12em;
 box-sizing: border-box;
 text-decoration:none;
 font-family:'Segoe UI','Roboto',sans-serif;
 font-weight:400;
 color:#FFFFFF;
 text-align:center;
 transition: all 0.2s;
 background:  #00B4CC;
 height:32px;
 
}
.nav-link-2:hover{
 color:#000000;
 background-color:#FFFFFF;
  text-decoration-line:none;
}
@media all and (max-width:30em){
 .nav-link-2{
  display:block;
  margin:0.2em auto;
}
}
.navbar-form{
  padding-top: 1.25%;
  width: 500px;
  margin-left: 0%;
}

.navbar-form .input-group .btn-default{
  height: 42px;  
  border: 1px solid #00B4CC;
  background: #00B4CC;
  text-align: center;
  color: #fff;
  border-radius: 0 5px 5px 0;
  cursor: pointer;
  font-size: 20px;
  
}
.form-control{
   
  border: 3px solid #00B4CC;
  background: #f1f5f8;
  border-right: none;
  padding: 5px;
  height: 42px;
  border-radius: 5px 0 0 5px;
  outline: none;
  color: #9DBFAF;
}
.form-control:focus{
  color: #00B4CC;
}





</style>
