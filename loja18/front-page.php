
<?php
/*
Template Name: Homepage Custom
*/

//the content of page.php and now you can do what you want.
?>


<?php get_header(); ?>


    <!-- About Section -->
    <section id="about">

        <div class="container content-section text-center">
        
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">

                    <h1>Espaço para texto/imagens/video apresentando a festa</h1>

                    <p>Sejam bem vindos a PSYcodélicos 3!</p>
                    <p>Psicodélico é uma forma de manifestação da mente ou da alma, é um nível tão alto de elevação, que chega a proporcionar uma nova percepção do mundo, totalmente diferente de tudo que já conhecia, alterando de diversas formas os níveis de consciência, visão, audição e sentidos da vida, trazendo muitas vezes sensações semelhantes aos sonhos mais extraordinários!</p>
                    <p>Com este proposito, convidamos todos a embarcar nesse sonho conosco, desfrutando de toda a essência que é a identidade da PSYcodélicos, sintonizando ainda mais os elementos da natureza, com muita musica e uma decoração digna de sintonizar sua mente em nossa frequência.</p>
                    <p>Sejam muitos bem vindos a mais esta viajem. . . . .</p>
                    <p>Vem ai, PSYcodélicos 3° ed.</p>
                    <p>Vem ai a festa do full on, </p>
                    <p>LINE UP!</p>
                    <p>Em construção..</p>
                    <p>1 Live internacional</p>
                    <p>4 Lives nacionais</p>
                    <p>+ Artistas Locais...</p>

                    Divulgação dia 07/04/2018

                    <div class="fb-page" data-href="https://www.facebook.com/psycodelicosoficial/" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/psycodelicosoficial/" class="fb-xfbml-parse-ignore"></blockquote></div>

                    <h1>Compre já o seu ingresso!</h1>

                    <?php

                    echo do_shortcode('[products ids="36"]');

                    ?>
                    
                </div>
            </div>
        </div>
    </section>



    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>  
    <!-- Theme JavaScript -->
   
    <script src="js/jquery.countdown.js"></script>

    <script src="js/aos.js"></script>



<script type="text/javascript">
$( document ).ready(function() {
   
   /*  $(window).scroll(function() {
        if ($(this).scrollTop() >= 500) { 
            $('#cat-footer').addClass('active');
        }else{
            $('#cat-footer').removeClass('active');
        }
    });

   $('#clock').countdown('2017/09/06', function(event) {
      $(this).html(event.strftime('%D dias e %H:%M:%S'));
    });


   AOS.init({
        easing: 'ease-in-out-sine'
      });

      

    $('.owl-carousel').owlCarousel({
        stagePadding: 200,
        loop:true,
        margin:10,
        nav:false,
        center: true,
        items:1,
        lazyLoad: true,
        nav:true
    })
*/

});
</script>


<?php get_footer(); ?>

