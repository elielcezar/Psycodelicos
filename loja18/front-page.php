
<?php
/*
Template Name: Homepage Custom
*/

//the content of page.php and now you can do what you want.
?>


<?php get_header(); ?>

<!-- About Section -->
<section id="cta">

      <div class="item ingresso" data-aos="fade-down">
        <a href="http://ecwd.net/psycodelicos/produto/ingresso-2/">
        <img src="<?php echo get_site_url(); ?>/wp-content/themes/loja18/img/ico-ingressos.png" />
        <h3>Ingressos</h3>
        <p>Garanta já o seu ingresso online.</p>
        </a>
      </div>
      <div class="item promoters" data-aos="fade-up">
        <a href="http://ecwd.net/psycodelicos/promoters-e-pontos-de-venda/">
        <img src="<?php echo get_site_url(); ?>/wp-content/themes/loja18/img/ico-promoters.png" />
        <h3>Promoters</h3>
        <p>Compre diretamente com um de nossos representantes.</p>
        </a>
      </div>
      <div class="item facebook" data-aos="fade-down">
        <a href="https://www.facebook.com/events/542423806130891/">
        <img src="<?php echo get_site_url(); ?>/wp-content/themes/loja18/img/ico-facebook.png" />
        <h3>Facebook</h3>
        <p>Confirme presença no evento no Facebook.</p>
        </a>
      </div>
                <?php
                  //echo do_shortcode('[products ids="36"]');
                ?>


</section>

    <section id="about" data-aos="fade-right">

        <!--img src="<?php echo get_site_url(); ?>/wp-content/themes/loja18/img/psycodelicos.jpg" class="foto" data-aos="fade-right"-->

      	<div class="chamada" data-aos="fade-left">
          <h2>Sejam bem vindos à PSYcodélicos 3!</h2>
          <p>
            Psicodélico é uma forma de manifestação da mente ou da alma, é um nível tão alto de elevação, que chega a proporcionar uma nova percepção do mundo, totalmente diferente de tudo que já conhecia, alterando de diversas formas os níveis de consciência, visão, audição e sentidos da vida, trazendo muitas vezes sensações semelhantes aos sonhos mais extraordinários!
          </p>
          <p>
            Com este proposito, convidamos todos a embarcar nesse sonho conosco, desfrutando de toda a essência que é a identidade da PSYcodélicos, sintonizando ainda mais os elementos da natureza, com muita musica e uma decoração digna de sintonizar sua mente em nossa frequência.
          </p>

    </div>


<?php get_footer(); ?>
