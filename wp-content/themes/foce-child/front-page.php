<?php

get_header();
?>

    <main id="primary" class="site-main">

        <section class="banner">
            <div class="parallax-video">
              <video id="background-video" muted autoplay loop poster="<?php echo get_stylesheet_directory_uri() . '/assets/images/banner.png'; ?>">
                <source src="<?php echo get_stylesheet_directory_uri() . '/assets/videos/koukaki_video_header.mp4'; ?>" type="video/mp4">
                <p>Votre navigateur ne prend pas en charge les vidéos HTML5.</p>
            </video>  
            </div>
            <div class="parallax-logo">
                <img class="parallax-img anim-logo" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/logo.png'; ?>" alt="logo Fleurs d'oranger & chats errants">
            </div>
        </section>

        <section id="story" class="story">
            <div class="title-background">
                <h2>L'histoire</h2> 
            </div>
            <article class="story__article">
                <p><?php echo get_theme_mod('story'); ?></p>
            </article>
            <?php
            $args = array(
                'post_type' => 'characters',
                'posts_per_page' => -1,
                'meta_key'  => '_main_char_field',
                'orderby'   => 'meta_value_num',

            );
            $characters_query = new WP_Query($args);
            ?>
            <article id="characters">
                <h3 id="characters-title">Les personnages</h3>
                <!--SWIPER-->
                <?php //include(get_stylesheet_directory_uri() . '/swiper.php') ?>
                <swiper-container class="mySwiper" pagination="true" effect="coverflow" grab-cursor="true" centered-slides="true"
                slides-per-view="auto" coverflow-effect-rotate="50" coverflow-effect-stretch="0" coverflow-effect-depth="100"
                coverflow-effect-modifier="1" coverflow-effect-slide-shadows="true">
                    <?php foreach($characters_query->posts as $character): ?>
                        <swiper-slide>
                            <img src="<?php echo get_the_post_thumbnail_url($character->ID); ?>" alt="<?php echo $character->post_title; ?>">
                        </swiper-slide>
                    <?php endforeach;?>
                </swiper-container>
                <!--END SWIPER-->
            </article>
            <article id="place">
                <div>
                    <img class="cloud big-cloud" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/big_cloud.png'; ?>" alt="nuage">
                    <img class="cloud little-cloud" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/little_cloud.png'; ?>" alt="nuage">
                    <h3>Le Lieu</h3>
                    <p><?php echo get_theme_mod('place'); ?></p>
                </div>
            </article>
        </section>


        <section id="studio">
            <div class="title-background">
                <h2 class="studio__title">Studio Koukaki</h2>
            </div>
            <div class="studio-content">
                <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
                <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
            </div>
        </section>

        <section id="nomination">
            <div>
                <div id="nomination-title">
                    <p>Fleurs d’oranger & chats errants est nominé aux Oscars Short Film Animated de 2022 !</p>
                </div>
                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/oscars_short_film_animated.svg'; ?>" alt="Court métrage éligible aux Oscars 2021">
            </div>
        </section>

    </main><!-- #main -->

<?php get_footer(); ?>

<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
