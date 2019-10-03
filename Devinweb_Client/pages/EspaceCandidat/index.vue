<template>
    <article class="container grid_12 registration-cab mt-5 " role="main">
             <b-card no-body class="overflow-hidden" >
                <b-row no-gutters>
                <b-col md="12" style="background-color: #1696b6;">
                    <b-card-img src="https://myflow.ca/wp-content/uploads/2018/11/img_candidats.png" class="rounded-0 float-left mb-3" style="width:300px; hight:300px;"></b-card-img>
                    <b-card-text class="mt-5 pt-4 slogan-candidat" ><strong>  Espace Candidat </strong></b-card-text>
                </b-col>
                <b-col md="12">
                    <!-- <b-card-body title="Espace Candidat"> -->
                     <div>
                            <b-tabs content-class="mt-3" active-nav-item-class="font-weight-bold text-uppercase text-danger">
                                <b-tab title="Créer Votre Compte" active>
                                    <RegisterCandidat/>
                                </b-tab>
                                <b-tab title="Se Connecter">
                                    <Seconnecter/>
                                </b-tab>
                                
                            </b-tabs>
                     </div>
                    <!-- </b-card-body> -->
                </b-col>
                </b-row>
            </b-card>
           


                
                
                
            </article>
</template>
<script>
import RegisterCandidat from '~/components/Candidat-Space/Register_candidat';
import Seconnecter from '~/components/Candidat-Space/Login_candidat';
export default {
    components:{
      RegisterCandidat,
      Seconnecter,
    }
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

.slogan-candidat{
    font-size: 3rem;
}


</style>