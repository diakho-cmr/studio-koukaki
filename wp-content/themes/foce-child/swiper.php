<swiper-container class="mySwiper" pagination="true" effect="coverflow" grab-cursor="true" centered-slides="true"
slides-per-view="auto" coverflow-effect-rotate="50" coverflow-effect-stretch="0" coverflow-effect-depth="100"
coverflow-effect-modifier="1" coverflow-effect-slide-shadows="true">
    <?php foreach($characters_query->posts as $character): ?>
        <swiper-slide>
            <img src="<?php echo get_the_post_thumbnail_url($character->ID); ?>" alt="<?php echo $character->post_title; ?>">
        </swiper-slide>
    <?php endforeach;?>
</swiper-container>