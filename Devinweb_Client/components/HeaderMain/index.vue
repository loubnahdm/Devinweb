<template>
   <b-navbar  toggleable="lg" type="light" class="navbar" variant="faded">
     <b-container>
    <b-navbar-brand href="/">
      <!-- <nuxt-link  to="/"     class="navbar-brand">  -->
             <img  src="http://d2wwknes1cy3mz.cloudfront.net/public/logo-b.png" alt="Card image">
         <!-- </nuxt-link> -->
    </b-navbar-brand>

    <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>

    <b-collapse id="nav-collapse" is-nav>
      <b-navbar-nav>
         <b-nav-form class="navbar-form  navbar-right d-none d-lg-block" action="/action_page.php">
        <div class="input-group">
          <b-form-input type="text" class="form-control-header-1" placeholder="Rechercher"/>
          <div class="input-group-header-btn ">
            <b-button class="btn btn-default " type="search">
              <svg xmlns="http://www.w3.org/2000/svg" class="mb-4" viewBox="0 0 24 24"  width="24" height="24"><path class="heroicon-ui" d="M16.32 14.9l5.39 5.4a1 1 0 0 1-1.42 1.4l-5.38-5.38a8 8 0 1 1 1.41-1.41zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z"/></svg>
        
            </b-button>
          </div>
        </div>
    </b-nav-form>
      </b-navbar-nav>
      <!-- Right aligned nav items -->
          <b-navbar-nav class="ml-auto">
            <b-navbar-nav right class="nav navbar-nav row">
                <b-nav-item class="nav-link-1 " :to="{path:'/',hash:'ancre'}"> 
                      <span >ESPACE CANDIDAT</span>
                </b-nav-item>
                <b-nav-item class="nav-link-2 " to="Login_recruteur" >
                      <span >ESPACE RECRUTEUR</span>
                </b-nav-item>
              </b-navbar-nav>
          </b-navbar-nav>
    </b-collapse>
     </b-container>
  </b-navbar>
</template>

<script>
export default {

}
</script>

<style>
.navbar{
  
  background:#fafafa;
  position: fixed;
  width: 100%;
  top: 0;
  color: #fff;
  box-shadow: 0 2px 5px rgba(0,0,0,0);
  border-bottom: 1px solid #dae1e7;
  z-index: 9999;
  
    

}

.form-control-header-1{
   
  border: 3px solid #00B4CC !important;
  background: #f1f5f8;
  border-right: none;
  padding: 5px;
  height: 42px;
  border-radius: 5px 0 0 5px;
  outline: none;
  color: #9DBFAF;
}
.form-control-header-1:focus{
  color: #00B4CC;
}

.navbar-form{
  
  width: 300px;
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
.nav-link-1{

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
</style>