<?php
/*
Template Name: home
*/
get_header();

?>

<div class="container">
    <div class="img">

        <div class="bandeau">
            <div class="row">
                <div class="col-lg-6">
                    <img id="panneau"
                        src="http://marion2/wp-content/uploads/2019/09/panneau-bois-suspendu-clou-rouille-copie-1.png"
                        alt="panneau">
                </div>

                <div class="col-lg-6" id="citation">
              <p>« Tout ce dont nous avons besoin pour rester sain,
                    la nature nous l’a donné en abondance »</p>
                 <p>Sébastian Kneipp</p> 
                </div>

            </div>
        </div>
        <!-- bandeau fin -->

        <div class="row">

            <div class="card-deck">

                <div class="col-lg-4">
                    <div class="card" id="card1">
                        <img src="http://marion2/wp-content/uploads/2019/09/pexels-photo-459301.jpeg"
                            class="card-img-top" id="cardimg1" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Bilan d'hygiène de vie</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in
                                to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card" id="card2">
                        <img src="http://marion2/wp-content/uploads/2019/09/pexels-photo-257840.jpg"
                            class="card-img-top" id="cardimg2" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Conseils en alimentation</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This card has even longer content than the first to show that equal
                                height action.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card" id="card3">
                        <img src="http://marion2/wp-content/uploads/2019/09/pexels-photo-235990.jpg"
                            class="card-img-top" id="cardimg3" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Gestion du stress et des émotions</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This card has even longer content than the first to show that equal
                                height action.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>





        </div>
    </div>

<!-- parallax -->

    <div class="parallax" 
  
    <?php echo do_shortcode('[parallax-scroll id="106"]') ?>
   
</div>
<!-- parallax fin -->
<!-- footer -->
<div>
    <?php get_footer();?>

</div>





