<?php
/*Template Name: plantilla page*/
get_header();
$categoria = get_post_meta(get_the_ID(), 'custom_field_titulo_menu2', true);
?>
<!-- new -->
<div class="py-5 px-3 mb-3 bg-50 position-relative wrapper-banner-tour-page">
    <div class="img-background-banner">
        <?php the_post_thumbnail('full-size',array('class'=>'img-cover')) ?>
    </div>
    <h1 class="py-5 text-center fs-1 fw-bold"><?php the_title(); ?></h1>
</div>
<section class="py-5">
    <div class="container-xxl">
        <div class="row gy-3 flex-md-row-reverse">
            <div class="col-md-12 col-lg-8">
                <div class="position-relative">
                    <!-- content -->
                    <div class="content">
                        <?php the_content(); ?>
                    </div>
                    <!--  tours -->
                    <div class="row gx-3">
                        <?php
                            $class=null;
                            $toursofperu = get_posts([
                                'post_type' => 'tour',
                                'numberposts' => -1, //cantidad de entradas
                                'order' => 'desc',
                                'ignore_sticky_posts' => 0,
                                'category_name' => $categoria
                            ]);
                            
                            foreach ($toursofperu as $key =>  $post) :
                                $precio = get_post_meta(get_the_ID(), 'custom_field_precio', true); 
                                $lugares = get_post_meta(get_the_ID(), 'custom_field_lugares', true);
                                $dias = get_post_meta(get_the_ID(), 'custom_field_lugares_visitar', true); 
                            // Ejemplo de valor
                                $class =($key % 2 == 0) ? ' flex-md-row-reverse':''; 
                        ?>
                        <div class="col-12 col-sm-6 rounded-1 overflow-hidden mb-3 position-relative <?php echo $class ?>">
                            <div class="border shadow-sm h-100">
                                <div class="w-10 overflow-hidden">
                                    <figure class="h-100 position-relative">
                                        <div
                                            class="position-absolute fw-bold top-0 start-0 bg-primary px-3 py-1 fs-sm text-white mt-1 ms-1">
                                            <span><?php echo PearTheme::days($dias) ?></span>
                                        </div>
                                        <?php the_post_thumbnail('full-size',array('class'=>'img-cover min-h-250 max-h-250')) ?>

                                    </figure>
                                </div>
                                <div class="w-10 overflow-hidden">
                                    <div class="p-2 p-md-3">
                                        <h3 class="fs-4 text-start mb-1">
                                            <a href="<?php the_permalink(); ?> "
                                                class="text-decoration-none fw-bold fs-5 stretched-link">
                                                <?php the_title(); ?>
                                            </a>
                                        </h3>
                                        <div class="d-block py-2">
                                            <i class="bi bi-geo-alt-fill"></i>
                                            <span class="text-muted fs-sm-9"> <?php echo   $lugares; ?></span>
                                        </div>
                                        <div class="d-none d-md-block">
                                            <?php
                                        // Obtener el campo de descripción
                                        $description = get_field('description');

                                        // Eliminar las palabras específicas
                                        $description = str_replace(['descripcion', 'Descripcion General', 'Overview', 'overview', 'descripcion general'], '', $description);

                                        // Quitar etiquetas HTML
                                        $description = wp_strip_all_tags($description);

                                        // Mostrar solo los primeros 150 caracteres
                                        $description = mb_substr($description, 0, 200);

                                        // Imprimir la descripción limpia
                                        echo $description;
                                        ?>

                                        </div>
                                        <div class="d-flex  justify-content-between align-items-center">
                                            <div>
                                                <div>
                                                    <span class="text-muted fs-sm-9"><?php echo PearTheme::lang('From','Desde','从')?></span>
                                                    <b class="fs-2">$<?php echo $precio  ?></b>
                                                    <span class="text-muted fs-sm-9"><?php echo PearTheme::lang('Per Person','Por persona','每人')?></span>
                                                </div>
                                            </div>
                                            <div class="pe-lg-2">
                                                <button role="button" class="btn btn-dark rounded-0 px-3"><?php echo PearTheme::lang('View Itineary','Ver Itineary','查看行程')?></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php endforeach; ?>
                    </div>

                </div>
            </div>
            <!--  col-left -->
            <div class="col-md-12 col-lg-4">
                <div class="position-relative bg-light p-2 p-lg-4  position-sticky top-0">
                    <div class="py-2">
                        <h3><?php echo PearTheme::lang('Other Routes to Machu Picchu','Otras rutas a Machu Picchu','前往马丘比丘的其他路线') ?></h3>
                    </div>
                    <ul class="p-0 m-0 list-style-none">
                        <?php
                            $args = [
                                'post_type' => 'page',
                                'post__in'  => [623, 294,298,282,296], // Page IDs
                                'orderby'   => 'post__in', // Optional: keep the order of IDs
                                'posts_per_page' => -1, // -1 means no limit
                            ];
                            
                            $pages = get_posts($args);
                            
                            if ($pages) {
                                foreach ($pages as $page) {
                                    // Get the permalink for the page
                                    $page_url = get_permalink($page->ID);
                            ?>
                        <li class="py-2">
                            <a href="<?php echo esc_url($page_url); ?>" class="text-muted fw-bold text-decoration-none">
                            <i class="bi bi-arrow-right fw-bold fs-6"></i> <?php echo esc_html($page->post_title); ?>
                            </a>
                        </li>
                        <?php
                                }
                            }
                            ?>
                    </ul>

                    <div>
                        <img class="img-cover bg-dark p-2" style="width: 80px;"
                            src="<?php echo IMGS_URL?>iconos/travelers-choice-69explorer.png"
                            alt="Travelers choice 69explorer">
                    </div>
                </div>
                   <div></div>
            </div>
        </div>
    </div>
</section>
<!-- old -->


<?php
get_footer();
?>