<main class=" ">
    <div class="banner_blog bg-50 mb-5">
        <?php if (has_post_thumbnail()) {
            the_post_thumbnail('list_articles_thumbs');
        } ?>
        <div class="titulo_h2">
            <h1><?php the_title(); ?></h1>
        </div>
    </div>
    <div class="container-xl">
        <div class="texto__blog__page mb-5">
            <?php the_content(); ?>
        </div>
        <div class="content_blog_page">
            <div id="items-search-blogs" class="blog_page_item row">
                <h2 class="h3 mb-3 text-primary"><?php echo PearTheme::lang('Recent Blogs','Blogs Recientes','最近的博客','Blogs recentes') ?></h2>
                <?php
                    $args = array(
                        'post_type' => 'blog',
                        'posts_per_page' => 10,
                        'order' => 'DESC'
                    );
                    $toursofperu = new WP_Query($args);
                    if ($toursofperu->have_posts()) :
                        while ($toursofperu->have_posts()) : $toursofperu->the_post();
                    ?>
                        <div class="blog_article col-12 col-md-6">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail( 'medium_large' ); ?>
                                <div class="text_blog_article">
                                    <span><i class="bi bi-calendar-check text-primary"></i> <?php the_time( 'F j, Y' );?></span>
                                    <h3><?php the_title(); ?></h3>
                                    <?php
                                        $excerpt = get_the_excerpt();
                                        $excerpt_200 = wp_trim_words($excerpt, 35);
                                    ?>
                                    <p>
                                        <?php echo $excerpt_200;?>
                                    </p>
                                </div>
                            </a>
                        </div>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                    else :
                        echo 'No hay publicaciones con la categoría "inca-trail".';
                    endif;
                ?>
            </div>
            <div class="blog_page_item">
                <div class="content-form-search-blog">
                    <form id="form-search-blogs" action="<?php echo esc_url(admin_url("admin-ajax.php"))?>" role="search"  method="GET">
                        <input type="text" name="s" placeholder="<?php echo PearTheme::lang('Search blogs','Buscar blogs','搜索博客','Pesquisar blogs') ?>">
                        <input type="hidden" name="action" value="search_tours"> 
                        <button type="submit"><?php echo PearTheme::lang('Search','Buscar','搜索','Pesquisar') ?></button>
                    </form>
                </div>
                <div class="item_sidebar">
                    <h4><?php echo PearTheme::lang('Featured Blogs','Blogs destacados','精选博客','Blogs em destaque') ?></h4>
                    <ul>
                        <?php
                        $args = array(
                            'post_type'      => 'blog',
                            'order'          => 'DESC',
                            'post__in'       => array(2653, 1402, 412, 964, 501), //210), 
                            'orderby'        => 'post__in' 
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
    <section class="container">
        <?php get_template_part('template-parts/why_us') ?>
    </section>
</main>