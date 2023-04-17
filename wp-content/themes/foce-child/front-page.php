<!--HEADER-->
<?php get_header();?>
<!--END HEADER-->

    <!-- MAIN -->
    <main id="primary" class="site-main">

        <!-- SECTION BANNER -->
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
        <!-- SECTION END BANNER -->

        <!-- SECTION STORY -->
        <section id="story" class="story">
            <div class="js-slide-up title-background">
                <h2 class="js-slide-up">L'histoire</h2> 
            </div>

            <!-- ARTICLE STORY INTRO -->
            <article class="story__article js-slide-up">
                <p><?php echo get_theme_mod('story'); ?></p>
            </article>
            <!-- END ARTICLE STORY INTRO -->

            <!-- ARTICLE CHARACTERS -->
            <article id="characters" class="js-slide-up">
                <h3 id="characters-title">Les personnages</h3>
                <!--SWIPER-->
                <?php include('swiper.php'); ?>
                <!--END SWIPER-->
            </article>
            <!-- END ARTICLE CHARACTERS -->

            <!-- ARTICLE PLACE -->
            <article id="place" class="js-slide-up">
                <div>
                    <img class="cloud big-cloud" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/big_cloud.png'; ?>" alt="nuage">
                    <img class="cloud little-cloud" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/little_cloud.png'; ?>" alt="nuage">
                    <h3 class="js-slide-up">Le Lieu</h3>
                    <p class="js-slide-up"><?php echo get_theme_mod('place'); ?></p>
                </div>
            </article>
            <!--END ARTICLE PLACE -->

        </section>
        <!-- END SECTION STORY -->

        <!-- SECTION STUDIO -->
        <section id="studio" class="js-slide-up">
            <div class="title-background">
                <h2 class="studio__title js-slide-up">Studio Koukaki</h2>
            </div>
            <div class="studio-content js-slide-up">
                <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
                <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
            </div>
        </section>
        <!-- END SECTION STUDIO -->

        <!-- SECTION NOMINATION -->
        <section id="nomination" class="js-slide-up">
            <div>
                <div id="nomination-title">
                    <p>Fleurs d’oranger & chats errants est nominé aux Oscars Short Film Animated de 2022 !</p>
                </div>
                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/oscars_short_film_animated.svg'; ?>" alt="Court métrage éligible aux Oscars 2021">
            </div>
        </section>
        <!-- END SECTION NOMINATION -->

    </main>
    <!-- END MAIN -->

    <?php get_footer(); ?>
