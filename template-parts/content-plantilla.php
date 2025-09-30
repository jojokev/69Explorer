
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
    
<div class="wp_page py-default position-relative">
    <div class="container">
        <?php the_content(); ?>
    </div>
</div>

<!--  Why Choose home -->
<div class="position-relative">
    <!-- Background -->
    <img class="p position-absolute start-0 top-0 w-100 h-100 object-fit-cover" src="<?php echo get_template_directory_uri(); ?>/assets/imagenes/fondos/Bg-sections.webp" alt="background page">

    <?php get_template_part('/template/why-us','/why-us') ?>
</div>
<!-- Fin Why Choose home -->