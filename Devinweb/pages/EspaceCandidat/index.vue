<template>
    <article class="container grid_12 registration-cab mt-5 " role="main">
   

                <section class="registration-section mb-5 pb-4">

                    <!--<a class="" href="/login-page.html">Accéder à mon profil</a>-->


                    <!---->

                    <!--<div class="clearfix"></div>-->
                    <img src="https://myflow.ca/wp-content/uploads/2018/11/img_candidats.png" />
                    
                    <h2 class="pt-5">Créez votre espace personnel</h2>
                    <p>Prenez quelques instants&nbsp;pour vous inscrire. Ces informations vous permettront d'accéder à votre compte par la suite.&nbsp;Les champs obligatoires sont identifiés par un astérisque.</p>
                   
                </section>

            <hr style="border:solid 1px gray; ">

                <section class="grid_10 prefix_1 suffix_1 container pr-5 pl-5 mt-4">
                    <!--{$ membership:registration:free:auto:profile:me:default:custom-fields=Poste recherché|Poste recherché,Status|Status,Lieux géographique souhaité|Lieux géographique souhaité,International|International,Salaire souhaité|Salaire souhaité,Contrat|Contrat}-->

                     <form id="membership-registration-form" enctype="application/x-www-form-urlencoded" action="https://www.eotim.com/plugin/membership/run/register/" method="post">
                        <p>
                            <label for="membershipFirstName" class="required"> First name:</label>             
                            <input type="text" name="membershipFirstName" id="membershipFirstName" value="" class="required">          
                        </p>
                        <p>
                            <label for="membershipLastName" class="required"> Last name:</label>          
                            <input type="text" name="membershipLastName" id="membershipLastName" value="" class="required">    
                        </p>
                        <p>
                            <label for="membershipEmail" class="required"> Email:</label>
                            <input type="text" name="membershipEmail" id="membershipEmail" value="" class="required">   
                        </p>
                        <p>
                            <label for="membershipPassword" class="required"> Mot de passe:</label>
                            <input type="password" name="membershipPassword" id="membershipPassword" value="">       
                        </p>
                        <p>
                            <label for="membershipPassConfirm" class="required"> Confirmer le mot de passe:</label>
                            <input type="password" name="membershipPassConfirm" id="membershipPassConfirm" value="">  
                        </p>
                        <p>
                            <label for="membershipMobile" class="required"> Mobile:</label>
                            <input type="text" name="membershipMobile" id="membershipMobile" value="" class="required"> 
                        </p>
                        <input type="hidden" class="membership-secure-code" name="membership-secure-code" value="3a2b6f74cac30f4042a47b59985e18a0">
                
                        <p class="clearfix">
                            <span class="fl-left">
                                <input type="checkbox" required="">
                            </span>
                            <span class="grid_11">En cochant cette case, j’accepte que mes coordonnées, mon CV, mes critères de recherche et les autres informations que je communique soient traitées et conservées par Devinweb, dans le but de me proposer des offres d’emploi et de stage correspondant à mes critères de recherche</span>
                        </p>
                        <input type="submit" name="saveMembership" id="saveMembership" value="S'enregistrer" >
                    </form>



                </section>


                
                <section>
                    <h2></h2>
                    
                    
                </section>
                
            </article>
</template>
<script>
export default {
    
}
// <script type="text/javascript">
//     $(function () {
//         $('#membership-registration-form').on('submit', function (e) {
//             e.preventDefault();
//             var $form = $('#membership-registration-form'),
//                 error = false;
//             $.each($form.find('input'), function () {
//                 if ($(this).hasClass('error')) {
//                     error = true;
//                 }
//             });
//             if (error) {
//                 showMessage('Vous avez des erreurs', true, 5000);
//                 return false;
//             }
//             $.ajax({
//                 'url': 'https://www.eotim.com/plugin/membership/run/register/',
//                 'type': 'POST',
//                 'dataType': 'json',
//                 'data': $form.serialize()
//             }).done(function (response) {
//                 console.log(response);
//                 if (response.error === 1) {
//                     $.each(response.responseText.errors, function (errorName) {
//                         $("input[name=" + errorName + "]").toggleClass('error');
//                     });
//                     showMessage('Vous avez des erreurs', true, 5000);
//                 } else {
//                     if(response.responseText.verify == 1) {
//                         if(typeof response.responseText.msg !== 'undefined') {
//                             showMessage(response.responseText.msg, false, 5000);
//                         } else {
//                             showMessage('Congratulations. You can login in system after Admin approves your information.', false, 5000);
//                         }
//                     } else if(typeof response.responseText.thankyouMemberPage !== 'undefined') {
//                         showMessage(response.responseText.msg, false, 5000);
//                         window.location.href = response.responseText.thankyouMemberPage;
//                     } else {
//                         window.location.href = response.responseText.redirectUrl;
//                     }
//                 }
//             });
//         }).on('keyup', 'input', function (e) {
//             $(this).removeClass('error');
//         });
//     });
// </script>
</script>
<style>

 @media all and (min-width: 1200px){
.registration-section img{
 width: 450px;
 height: 330px;
 margin-top: -65px;
 margin-left: -130px;
 float: left;
}
.registration-section{
background-image: url('https://ccivr.com/wp-content/uploads/2017/07/ciel-%C3%A9toil%C3%A9.jpg'); 
 background-size: 120% 140%;
border-radius: 10px;  
margin-left: 15%; 
margin-top: 5%;
 }
}
@media all and (max-width: 1200px) and (min-width: 990px){
.registration-section img{
 width: 400px;
 height: 310px;
 margin-top: -60px;
 margin-left: -130px;
 float: left;
}
.registration-section{
background-image: url('https://ccivr.com/wp-content/uploads/2017/07/ciel-%C3%A9toil%C3%A9.jpg'); 
 background-size: 120% 140%;
border-radius: 10px;  
margin-left: 15%; 
margin-top: 8%;
 }
}
@media all and (max-width:990px){
.registration-section img{
 width: 200px;
 height: 150px;
 margin-top: -30px;
 margin-left: -80px;
 float: left;
}
.registration-section{
background-image: url('https://ccivr.com/wp-content/uploads/2017/07/ciel-%C3%A9toil%C3%A9.jpg'); 
background-size: 120% 140%;
border-radius: 10px;  
margin-left: 15%; 
margin-top: 15%;
 }
}
.registration-section h2{
    color: #fff;
}
.registration-section p{
    color: #bbb;
    line-height: 1.5;
    font-size: 1em;
    text-align: left;
    margin-top: 3%;
}
#membership-registration-form p {
   padding-top: 0;
   padding-bottom: 40px;
}
.grid_10 #membership-registration-form p label{
    display: block;
    margin-bottom: .25em;
    width: 30%;
    float: left;
    font-weight: bold;
    text-align: left;
}
label.required:after {
    color: #f65314;
    content: ' *';
}
.grid_10 form p input{
    border-width: 2px;
    border-style: solid;
    border-color: #bbb;
    padding: 0 .5em;
    height: 2.3em;
    line-height: 1.3em;
    width: 70%;
    float: left;
    font-family: Helvetica,"Helvetica Neue",Arial,sans-serif;
    background-color: #fff;
    color: #2f2f2f;
    will-change: auto;
    transition: all .3s ease;
    max-width: 100%;
}

.fl-left {
    float: left !important;
}
.clearfix input[type="checkbox"]{
    box-sizing: border-box;
    padding: 0;
    border: 0;
    height: 25px;
    width:15px;
    
}
#saveMembership{
    float: right;
    background: #6bacc5;
    font-family: 'Open Sans',sans-serif;
    border-width: 0;
    font-size: 1.5em;
    font-weight: lighter;
    will-change: auto;
    border-bottom: 3px solid #397991;
    border-radius: 5px;
    text-align: center;
    color: #fff;
}
#saveMembership:hover{
    color: #2c333a;
    border-color: #116d74;
    background-color: #46e4f0;
}
</style>