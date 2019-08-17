<template  >
<div class="carousel-class mt-4">
      <section class="section-carousel container mt-3 ">
          <div class="row ml-3">
                <div class=" devin-goal col-lg-4 mt-5 pt-5 "> <blockquote> Devinweb met à votre disposition une plateforme de recrutement en ligne,
                                                                                qui propose de porter le système de suivi des candidats au niveau supérieur
                                                                                en intégrant un outil puissant qui est le <strong>Skype entretiens</strong> ,
                                                                                ce dernier permet de créer ,personnaliser et palnifier des entretiens à distance.
                                                                </blockquote>
                </div>
                <div class="devin-slogan col-lg-8 mt-5">
                <carousel :scrollPerPage="true" :controls='true' :autoplay='true' :perPage='1' autoplayTimeout='1000' paginationColor='grey' >
                    <slide  data-index="0"  data-name="MySlideName">
                        <!-- @slideclick="handleSlideClick" -->
                    <div class="carousel-item active ">
                        <img class="d-block w-100 " src="@/assets/IMG/image1.jpg" alt="image1">
                        <div class="carousel-caption d-none d-md-block mb-3 ">
                            <h2 class="pb-5">Plus besoin de se déplacer pour passer les entretiens, postulez-vous et on vous convequera pour des entretiens en-ligne.</h2>
                        </div>
                    </div>
                    </slide>
                    <slide  data-index="1"
                            data-name="MySlideName">
                    <div class="carousel-item active">
                        <img class="d-block w-100 " src="@/assets/IMG/image2.jpg" alt="image2">
                        <div class="carousel-caption d-none d-md-block mb-5">
                        <h2 class="pb-2">Portail de recrutement qui vous permet de passer des entrentiens grace à votre webcam depuis chez-vous, à l'heure qui vous convient.</h2>
                        </div>
                    </div>
                    </slide>
                
                </carousel>

                </div>

        </div>
      </section>
</div>
</template>

<script>
export default {

}
</script>

<style >




.carousel-item  img{
  height: 380px;
  border-radius: 40px; 
}

.carousel-caption h1{
  text-align:left;
}
.devin-goal{
  background-color: #c5c5c5;
  border:1px #b3b3b6 solid ;
  border-radius: 20px;
  margin-top: 10%;
  height: 380px;
  width: 100%;
  margin-right: 20px;
  margin-left: -20px;
}

.devin-goal blockquote{
    padding-top: 15%;
    text-align:left;
    font-style: normal;
    font: 1.2rem sans-serif;
    display: inline-block;


}

.carousel-class{
  background-color: #ffffff;
  margin-left: -110px;
  padding-left: 110px;
  margin-right: -110px;
  padding-right: 110px;
  margin-bottom: -300px;
  padding-bottom: 350px;
  border-top: #dbdbdb solid 1px;
  border-bottom:  #dbdbdb  solid 1px;
}




</style>
