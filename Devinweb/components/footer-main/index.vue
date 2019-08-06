<template>
   
            <!-- Footer -->
          <footer class="page-footer font-small mdb-color lighten-3 pt-4">

            <!-- Footer Links -->
            <div class="container text-center text-md-left">

              <!-- Grid row -->
              <div class="row">

                <!-- Grid column -->
                <div class="devin-about col-md-4 col-lg-3 mr-auto my-md-4 my-0 mt-4 mb-1">

                  <!-- Content -->
                  <h5 class="font-weight-bold text-uppercase mb-4">ABOUT US</h5>
                  <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eum pariatur.</p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit amet numquam iure provident voluptate
                    esse
                    quasi, veritatis totam voluptas nostrum.</p>

                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none">


               

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 mx-auto my-md-4 my-0 mt-4 mb-1">

                  <!-- Contact details -->
                  <h5 class="font-weight-bold text-uppercase mb-4">Address</h5>

                  <ul class="list-unstyled listmain ">
                    <li>
                      <p>
                           <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M5.64 16.36a9 9 0 1 1 12.72 0l-5.65 5.66a1 1 0 0 1-1.42 0l-5.65-5.66zm11.31-1.41a7 7 0 1 0-9.9 0L12 19.9l4.95-4.95zM12 14a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm0-2a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/></svg>
                           Av. Ali Yaeta, Centre Commerciale Wilaya Center, étage 3, n31 - Maroc - TETOUAN
                      </p>
                    </li>
                    <li>
                      <p>
                           <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M4 4h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6c0-1.1.9-2 2-2zm16 3.38V6H4v1.38l8 4 8-4zm0 2.24l-7.55 3.77a1 1 0 0 1-.9 0L4 9.62V18h16V9.62z"/></svg>
                           contact@devinweb.com
                      </p>
                    </li>
                    <li>
                      <p>
                           <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M13.04 14.69l1.07-2.14a1 1 0 0 1 1.2-.5l6 2A1 1 0 0 1 22 15v5a2 2 0 0 1-2 2h-2A16 16 0 0 1 2 6V4c0-1.1.9-2 2-2h5a1 1 0 0 1 .95.68l2 6a1 1 0 0 1-.5 1.21L9.3 10.96a10.05 10.05 0 0 0 3.73 3.73zM8.28 4H4v2a14 14 0 0 0 14 14h2v-4.28l-4.5-1.5-1.12 2.26a1 1 0 0 1-1.3.46 12.04 12.04 0 0 1-6.02-6.01 1 1 0 0 1 .46-1.3l2.26-1.14L8.28 4z"/></svg>
                           (+212)0539966760
                      </p>
                    </li>
                  </ul>

                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none">

                <!-- Grid column -->
                <div class="social-link col-md-2 col-lg-2 text-center mx-auto my-4">

                  <!-- Social buttons -->
                  <h5 class="font-weight-bold text-uppercase mb-4">Follow Us</h5>

                  <!-- Facebook -->
                  <a type="button" class="btn-floating btn-fb" href="https://web.facebook.com/Devinweb.sarl?_rdc=1&_rdr">
                   <font-awesome-icon :icon="['fab', 'facebook']"/>
                  </a>
                  <!-- Twitter -->
                  <a type="button" class="btn-floating btn-tw" href="https://twitter.com/Devinweb_sarl">
                    <font-awesome-icon :icon="['fab', 'twitter']"/>
                  </a>
                  <!-- Google +-->
                  <a type="button" class="btn-floating btn-gplus" href="http://google.com/plus">
                    
                    <font-awesome-icon :icon="['fab', 'google-plus-g']"/>
                  </a>

                </div>
                <!-- Grid column -->

              </div>
              <!-- Grid row -->

            </div>
            <!-- Footer Links -->

            <!-- Copyright -->
            <div class="footer-copyright text-center py-3">© 2019 Copyright:
              <a href="https://devinweb.com"> Devinweb.com</a>
            </div>
            <!-- Copyright -->

          </footer>
          <!-- Footer -->

   

</template>

<script>
export default {

}
</script>

<style >

.page-footer {
  background:#929fba!important;
  border-top: 1px solid #76819b ;
  bottom: 0px;
  width: 100%;
}
.mx-auto {
    margin-left:0 !important;
}
.footer-copyright{
  background: #53545a;
}
.listmain li{
  display: list-item;
  padding-top:10px;
  font-size: 1rem;
  float: left;
}
.devin-about p{
    font-size: 1rem;
}
.social-link  .btn-floating {
    display: block;
    width: 47px;
    height: 47px;
    overflow: hidden;
    z-index: 1;
     -webkit-appearance: none;
    transition: all .2s ease-in-out;
    border-radius: 50%;
    position: relative;
    margin: 15px;
    padding-top: 6px;
    cursor: pointer;
    box-shadow: 0 5px 11px 0 rgba(0,0,0,.18), 0 4px 15px 0 rgba(0,0,0,.15);
    font-size: 1.5rem;

}


.col-md-2{
   align-items: center;
}



</style>
