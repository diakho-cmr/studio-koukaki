<?php 
$args = [
'post_type' => 'characters',
'posts_per_page' => -1,
'meta_key'  => '_main_char_field',
'orderby'   => 'meta_value_num',
];
$characters_query = new WP_Query($args);
?>

<?php if(!empty($characters_query)) : ?>
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <?php foreach($characters_query->posts as $character): ?>
                <div class="swiper-slide">
                    <img src="<?php echo get_the_post_thumbnail_url($character->ID); ?>" alt="<?php echo $character->post_title; ?>">
                </div>
            <?php endforeach;?>
        </div>
        <div class="swiper-pagination"></div>
    </div>
<?php endif; ?>