<?php
get_header();
?>


<?php if (has_post_thumbnail()) : ?>
    <section class="single_blog">
        <div class="texto_single_blog">
            <h1><?php the_title(); ?></h1>
            <span><?php the_time( 'F j, Y' );?></span>
        </div>
        <?php the_post_thumbnail('list_articles_thumbs'); ?>
    </section>
<?php else : ?>
    <div class="texto_page_alternative">
        <h1><?php the_title(); ?></h1>
    </div>
<?php endif; ?>
<div class="container-fluid mb-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-9">
                <div class="container_blog">
                    <?php  the_content(); ?>
                </div>
            </div>
            <div class="col-12 col-lg-3 ">
                <div class="blog_page_item position-sticky top-0">
                    <div class="position-realtive mb-4">
                        <form action="<?php echo esc_url(home_url('/')); ?>" role="search">
                            <div class="input-group ">
                                <button
                                    class="input-group-text text-primary border rounded-0 border-end-0 bg-transparent"
                                    id="basic-addon1"><i class="bi bi-search"></i></button>
                                <input type="text" style="margin-left: -5px;"
                                    class="form-control shadow-none border fst-italic fs-sm-9 rounded-0  border-start-0"
                                    placeholder="<?php echo PearTheme::lang('Destinos, Excursões','Destinos, Tours','目的地、旅行','Destinos') ?>" name="s" aria-label="Username"
                                    aria-describedby="basic-addon1">
                                <input type="hidden" name="post_type" value="tour"> 
                            </div>
                        </form>
                    </div>
                    <div class="item_sidebar">
                        <h4><?php echo PearTheme::lang('Categories','Categorías','类别','Categorias') ?></h4>
                        <ul class="mt-3">
                            <?php
                                $args = array(
                                    'post_type' => 'page',
                                    'posts_per_page' => 5,
                                    'order' => 'ASC',
                                    'post__in' => array(282, 290, 294, 296, 298)
                                );
                                $toursofperu_query = new WP_Query($args);

                                if ($toursofperu_query->have_posts()) :
                                while ($toursofperu_query->have_posts()) : $toursofperu_query->the_post();
                            ?>
                                <li class="item_menu">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_title(); ?>
                                    </a>
                                </li>
                            <?php
                                endwhile;
                                wp_reset_postdata();
                            endif;
                            ?>
                        </ul>
                        <h4><?php echo PearTheme::lang('Recent Blogs','Blogs Recientes','最近的博客','Blogs recentes') ?></h4>
                        <ul>
                            <?php
                            $args = array(
                                'post_type' => 'blog',
                                'posts_per_page' => 4,
                                'order' => 'DESC',
                                'post__not_in'   => array(get_the_ID()),
                            );
                            $toursofperu = new WP_Query($args);
                            if ($toursofperu->have_posts()) :
                                while ($toursofperu->have_posts()) : $toursofperu->the_post();
                            ?>
                                <div class="recent_post">
                                    <?php if (has_post_thumbnail()) {
                                        the_post_thumbnail('medium');
                                    } ?>
                                    <div class="text_recent w-100">
                                        <h4 class="">
                                            <a class="" href="<?php the_permalink(); ?>"><?php the_title();?></a>
                                        </h4>
                                        <span><?php the_time( 'F j, Y' );?></span>
                                    </div> 
                                </div>
                            <?php
                                endwhile;
                                wp_reset_postdata();
                            else :
                                echo 'No entries';
                            endif;
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="container my-5">
    <div class="text-center mb-4">
        <span class="fw-bold text-uppercase text-secondary mb-3"><?php echo PearTheme::lang('discover','descubre','发现','descobrir') ?></span>
        <h2 class="fw-bold h3 text-uppercase">
            <?php echo PearTheme::lang('Inca Trail','Camino Inca','印加古道','Trilha Inca') ?>
        </h2>
        <p>
            <?php echo PearTheme::lang('Explore the wonders of our popular destinations','Explore las maravillas de nuestros destinos populares','探索我们热门目的地的奇妙之处','Explore as maravilhas dos nossos destinos populares')?>
        </p>
    </div>
    <div class="row gy-3">
        <?php
            $queryincatrail = new WP_Query(
                array(
                    'post_type' => 'tour',
                    'posts_per_page' => 3,
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'category',
                            'field' => 'term_id',
                            'terms' => 54,
                        ),
                    ),
                )
            );
            if ($queryincatrail->have_posts()) :
                while ($queryincatrail->have_posts()) :$queryincatrail->the_post();
                $precio = get_post_meta(get_the_ID(), 'custom_field_precio', true); 
                $lugares = get_post_meta(get_the_ID(), 'custom_field_lugares', true);
                $dias = get_post_meta(get_the_ID(), 'custom_field_lugares_visitar', true);
                $dificulty = get_post_meta(get_the_ID(), 'custom_field_dificultad', true);
                $persons = get_post_meta(get_the_ID(), 'custom_field_grupo', true);
                $altitud = get_post_meta(get_the_ID(), 'custom_field_altitud', true);
        ?>
        <div class="col-12 col-md-6 col-lg-4 wrapper-item-tour">
            <div class="position-relative">
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('full-size',array('class'=>'img-cover min-h-250 max-h-250') ) ?>
                </a>
                <div class="content-details-tour">
                    <div class="item-details-tour">
                        <i class="bi bi-person-walking"></i>
                        <span><?php echo $dificulty ?></span>
                    </div>
                    <div class="item-details-tour">
                        <i class="bi bi-people-fill"></i>
                        <span><?php echo PearTheme::lang('Personas','People','人们','Personas') ?>: <?php echo $persons ?></span>
                    </div>
                    <div class="item-details-tour">
                        <i class="bi bi-bar-chart-fill"></i>
                        <span><?php echo PearTheme::lang('Altitud','Altitude','高的','Altitude') ?>: <?php echo $altitud ?></span>
                    </div>
                </div>
                <div class="content-price-tour">
                    <span><?php echo PearTheme::lang('from','Desde','从','de')?> $<?php echo $precio ?></span>
                </div>
            </div>
            <div class="px-3 py-2 pt-4 content-title-item-tour">
                <h3 class="h5"><a href="<?php the_permalink();?>" class="text-decoration-none text-dark"> <?php the_title(); ?> </a></h3>
                <p><i class="bi bi-clock"></i> <?php echo PearTheme::days($dias)?></p>
                <p><strong><?php echo PearTheme::lang('Exploring','Explorar','探索','Explorando') ?></strong>: <?php echo  $lugares ?></p>
            </div>
            <div class="row content-link-item-tour px-3">
                <a class="col-6 bg-50" href="<?php the_permalink(); ?>">
                    <span><?php echo PearTheme::lang('See more','Ver mas','查看更多','Veja mais') ?></span> <i class="bi bi-arrow-right"></i>
                </a>
                <a href="#" id="openmodal" class="openmodal-item-tour fs-sm-9 text-decoration-none openmodal col-6" data-bs-toggle="modal" data-bs-target="#staticForm" title-tour="<?php the_title(); ?>">
                    <span><?php echo PearTheme::lang('Consult','Consultar','咨询','Consultar') ?></span> <i class="bi bi-send-check-fill"></i></i>
                </a>
            </div>
        </div>
        <?php 
            endwhile;
            wp_reset_postdata( );
            endif;
        ?>
    </div>
</section>

<?php get_footer(); ?>