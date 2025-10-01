
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
<div class="bg-section position-relative">
    <?php get_template_part('/template/why-us','/why-us') ?>
</div>
<!-- Fin Why Choose home -->