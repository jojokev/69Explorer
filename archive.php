<?php
// ****************
//encabezado
//********************** */
get_header();
?>

<!--  Banner Category -->
<div class="py-5 px-3 mb-3 bg-50 position-relative wrapper-banner-tour-page">
    <div class="img-background-banner">
        <?php 
            $categoria = get_queried_object();
            $banner = get_field('banner', $categoria);
            if( $banner ) {
                echo '<img src="' . esc_url($banner['url']) . '" alt="' . esc_attr($banner['alt']) . '" class="img-cover w-100 h-100" />';
            }
            else{
                $image_id = 5109;
                echo wp_get_attachment_image( $image_id, 'full', false, array('class'=>'img-cover w-100 h-100')); 
            }
        ?>
    </div>
    <h1 class="py-5 text-center fs-1 fw-bold"><?php echo PearTheme::lang('Tours to Cusco','Excursiones a Cusco','库斯科之旅','Passeios a Cusco')?></h1>
</div>
<!--  Fin Banner Category -->
  
<!-- Categories Home -->
<section class="py-default position-relative">
    <div class="container">
        <!-- titulo -->
        <div class="mb-45 text-center position-relative z-2">
            <span class="fw-bold text-uppercase mb-1 text-primary"><?php the_title(); ?></span>
            <h2 class="fw-bold h3 text-uppercase mb-3">
                <?php echo PearTheme::lang('The Best Places to Visit in Cusco and Peru','Los mejores lugares para visitar en Cusco y Perú','库斯科和秘鲁最值得游览的地方','Os melhores locais para visitar em Cusco e no Peru')?>
            </h2>
            <p>
                <?php echo PearTheme::lang('Explore the wonders of our popular destinations','Explore las maravillas de nuestros destinos populares','探索我们热门目的地的奇妙之处','Explore as maravilhas dos nossos destinos populares')?>
            </p>
        </div>

        <!-- Categories carousel -->
        <div class="px-2 position-relative">
                <div class="swiper mainCarousel pb-5 position-static">
                    <div class="swiper-wrapper">
                        <?php
                        $args = array(
                            'post_type' => 'page',
                            'order' => 'ASC',
                            'post__in' => array(282, 294, 290, 298)
                        );
                        $toursofperu = new WP_Query($args);
                        if ($toursofperu->have_posts()) :
                            while ($toursofperu->have_posts()) : $toursofperu->the_post();
                            
                        ?>
                        <div class="swiper-slide">
                            <div class="item_destination">
                                <?php $imagen = get_post_meta(get_the_ID(), 'custom_field_imagen_portada', true); ?>
                                <a href="<?php the_permalink(); ?>">
                                    <img class="w-100 hx-380 object-fit-cover rounded-4" src="<?php echo $imagen?>" alt="<?php the_title(); ?>">
                                    <div class="px-3 py-3">
                                        <h3 class="h5 text-dark fw-bold-600 m-0">
                                            <?php the_title(); ?>
                                            <i class="bi bi-arrow-right"></i>
                                        </h3>
                                    </div>
                                </a>
                            </div>
                        </div>    
                        <?php
                        endwhile;
                            wp_reset_postdata(); 
                        else :
                            echo 'No hay publicaciones con la categoría "inca-trail".';
                        endif;
                        ?>
                    </div>
                    <div class="swiper-button-next position-absolute end-0 top-50 translate-middle-y"><i class="bi bi-arrow-right-circle-fill h2 text-primary m-0"></i></div>
                    <div class="swiper-button-prev position-absolute start-0 top-50 translate-middle-y"><i class="bi bi-arrow-left-circle-fill h2 text-primary m-0"></i></div>
                    <div class="swiper-pagination position-absolute start-50 bottom-0 translate-middle-x"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Fin Categories Home -->

<!--  Why Choose home -->
<div class="bg-section position-relative">
    <?php get_template_part('/template/why-us','/why-us') ?>
</div>
<!-- Fin Why Choose home -->

<?php
// ****************
//foooter
//********************** */
get_footer();
?>