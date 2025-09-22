
<?php if (has_post_thumbnail()) : ?>
    <section class="page_plantilla_img">
        <?php the_post_thumbnail('list_articles_thumbs'); ?>
        <div class="text_page">
            <h1><?php the_title(); ?></h1>
        </div>
    </section>
<?php else : ?>
    <div class="texto_page_alternative">
        <h1><?php the_title(); ?></h1>
    </div>
<?php endif; ?>
    
<div class="wp_page">
    <div class="container">
        <?php the_content(); ?>
    </div>
</div>
<?php get_template_part('template-parts/about-item') ?>