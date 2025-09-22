<?php
/* 
    Template Name: Availability template
    Template Post Type: faqs
*/
get_header();
?>

<main class="py-5">

    <div class="container">
        <h1 class="h1 fw-bold mb-5 text-center"><?php the_title(); ?></h1>
    </div>
        
    <div class="wp_page my-5">
        <div class="container text-center text-availability">
            <?php the_content(); ?>
        </div>
    </div>

</main>

<?php
get_footer();
?>