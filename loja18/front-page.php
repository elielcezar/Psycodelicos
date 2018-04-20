
<?php
/*
Template Name: Homepage Custom
*/

//the content of page.php and now you can do what you want.
?>


<?php get_header(); ?>

    <section id="chamada">

        <img src="<?php echo get_site_url(); ?>/wp-content/themes/loja18/img/psycodelicos.jpg" class="foto">

      	<div class="chamada">
          <h2>Sejam bem vindos a PSYcodélicos 3!</h2>
          <p>
            Psicodélico é uma forma de manifestação da mente ou da alma, é um nível tão alto de elevação, que chega a proporcionar uma nova percepção do mundo, totalmente diferente de tudo que já conhecia, alterando de diversas formas os níveis de consciência, visão, audição e sentidos da vida, trazendo muitas vezes sensações semelhantes aos sonhos mais extraordinários!
          </p>
          <p>
            Com este proposito, convidamos todos a embarcar nesse sonho conosco, desfrutando de toda a essência que é a identidade da PSYcodélicos, sintonizando ainda mais os elementos da natureza, com muita musica e uma decoração digna de sintonizar sua mente em nossa frequência.
          </p>

    </div>


    <!-- About Section -->
    <section id="about">



          <div class="item ingresso">
            <a href="#">
            <img src="<?php echo get_site_url(); ?>/wp-content/themes/loja18/img/ico-ingressos.png" />
            <h3>Ingressos</h3>
            <p>Garanta já o seu ingresso online.</p>
            </a>
          </div>
          <div class="item promoters">
            <a href="#">
            <img src="<?php echo get_site_url(); ?>/wp-content/themes/loja18/img/ico-promoters.png" />
            <h3>Promoters</h3>
            <p>Ou compre diretamente com<br/>um de nossos representantes.</p>
            </a>
          </div>


                    <?php
                      //echo do_shortcode('[products ids="36"]');
                    ?>



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
