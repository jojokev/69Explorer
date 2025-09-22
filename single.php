<?php
// ****************
// encabezado
// ********************** */
get_header();
$post_id = get_the_ID();
$lugares = get_post_meta(get_the_ID(), 'custom_field_lugares', true);
?>

<main>
    <div class="container-xxl">
        <div class="py-3">
            <h1 class="fw-bold fs-2" ><?php  the_title(); ?></h1>
        </div>
        <?php the_content();?>
    </div>
    <div class="container">
        <div class="titulo_h2">
            <h2>Tour to Machu PIcchu, Cusco</h2>
        </div>
    </div>
</main>
<div class="container_tour">
    <?php $categories = get_the_category();
        if ( ! empty( $categories ) ) {
        $id = ( $categories[0]->cat_ID );}
    ?>
    <?php
        $toursofperu = get_posts([
            'post_type' => 'tour',
            'numberposts' => 4,
            'order' => 'desc',
            'orderby' => 'rand',
            'ignore_sticky_posts' => 0,
            'cat'=>array( $id ),
            'post__not_in'=> array(get_the_ID())
        ]);

        foreach ($toursofperu as $post) :
    ?>
    <?php 
        $precio = get_post_meta(get_the_ID(), 'custom_field_precio', true); 
        $lugares = get_post_meta(get_the_ID(), 'custom_field_lugares', true);
        $dias = get_post_meta(get_the_ID(), 'custom_field_lugares_visitar', true);
    ?>
    <div class="item_tour">
        <a href="<?php the_permalink(); ?>">
            <div class="tour_item_img">
                <?php if (has_post_thumbnail()) {
                    the_post_thumbnail('medium_large');
                } ?>
                <?php
                    $images = get_post_meta(get_the_ID(), 'vdw_gallery_id', true);
                    
                    if ($images && is_array($images)) {
                        $first_image_id = reset($images);
                        echo wp_get_attachment_image($first_image_id, 'full-size');
                    }
                ?>
            </div>
            <div class="tour_item_text">
                <span class="tour_item_hora">
                    <i class="bi bi-calendar-week"></i>
                    <?php if ( $dias ) { ?>
                    <?php echo $dias ?>
                    <?php
            
                            $values = $dias;
                            if($values == 1) {
                                if(APP_LANG=='en'){
                                    echo 'day';
                                }else{
                                    echo 'dia';
                                }
                            } else {
                                $night = $values - 1; 
                                if(APP_LANG=='en'){
                                    echo 'days' , ' - ' , ''.$night.'',' nights';
                                }else{
                                    echo 'días' , ' - ' , ''.$night.'',' noches';
                                }
                            }
                        ?>
                    <?php } else { ?>
                    <?php if(APP_LANG=='en'){
                                    echo 'Half day';
                                }else{
                                    echo 'Medio día';
                                } 
                            ?>
                    <?php } ?>
                </span>
                <h3>
                    <?php the_title(); ?>
                </h3>
                <span class="tour_item_destinos">
                    <i class="bi bi-geo-alt"></i> <?php echo $lugares ?>
                </span>
                <div class="tour_item_precio">
                    <div class="item_precio_star">
                        <i class="bi bi-star-fill"></i>
                        <span>4.82</span>
                    </div>
                    <div class="item_precio_star">
                        <span>From: <strong>USD <?php echo $precio ?></strong></span>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <?php  endforeach;
        wp_reset_postdata();
    ?>
</div>

<?php get_template_part('template-parts/about-item') ?>

<?php
// ****************
//foooter
//********************** */
get_footer();
?>