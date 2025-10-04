<?php
/*
  Template Name: Site Map
  Template Post Type: page
*/
get_header();
?>

<section class="bg-section py-default position-relative mb-45">
	  <div class="container">
			<h1 class="h2 fw-bold mb-3 text-center z-2 position-relative"><?php the_title(); ?></h1>
		</div>
</section>

<section class="py-default position-relative">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-6 col-lg-4">
        <h2 class="h3 fw-bold-500 mb-3">Tours</h2>
        <!-- inca trail tours -->
        <div class="mb-2 pb-2">
          <h3 class="h4 fw-bold-500">Inca Trail Tours </h3>
          <ul>
            <?php
              $args = array(
                'post_type' => 'tour',
                'posts_per_page' => -1,
                'order' => 'ASC',
                'tax_query' => array(
                  array(
                    'taxonomy' => 'category',
                    'field'    => 'slug',
                    'terms'    => 'inca-trail',
                  ),
                ),
              );
              $inca_trail_tours = new WP_Query($args);
              if ($inca_trail_tours->have_posts()) :
                while ($inca_trail_tours->have_posts()) : $inca_trail_tours->the_post();
            ?>
              <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
            <?php
                endwhile;
                wp_reset_postdata();
              endif;
            ?>
          <ul>
        </div>

        <!-- Alternative Treks tours -->
        <div class="mb-2 pb-2">
          <h3 class="h4 fw-bold-500">Alternative Treks</h3>
          <ul>
            <?php
              $args = array(
                'post_type' => 'tour',
                'posts_per_page' => -1,
                'order' => 'ASC',
                'tax_query' => array(
                  array(
                    'taxonomy' => 'category',
                    'field'    => 'slug',
                    'terms'    => 'alternative-treks',
                  ),
                ),
              );
              $inca_trail_tours = new WP_Query($args);
              if ($inca_trail_tours->have_posts()) :
                while ($inca_trail_tours->have_posts()) : $inca_trail_tours->the_post();
            ?>
              <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
            <?php
                endwhile;
                wp_reset_postdata();
              endif;
            ?>
          <ul>
        </div>

        <!-- Day tour tours -->
        <div class="mb-2 pb-2">
          <h3 class="h4 fw-bold-500">Day tours</h3>
          <ul>
            <?php
              $args = array(
                'post_type' => 'tour',
                'posts_per_page' => -1,
                'order' => 'ASC',
                'tax_query' => array(
                  array(
                    'taxonomy' => 'category',
                    'field'    => 'slug',
                    'terms'    => 'day-tour',
                  ),
                ),
              );
              $inca_trail_tours = new WP_Query($args);
              if ($inca_trail_tours->have_posts()) :
                while ($inca_trail_tours->have_posts()) : $inca_trail_tours->the_post();
            ?>
              <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
            <?php
                endwhile;
                wp_reset_postdata();
              endif;
            ?>
          <ul>
        </div>

        <!-- E-bike Trips -->
        <div class="mb-2 pb-2">
          <h3 class="h4 fw-bold-500">E-bike Trips</h3>
          <ul>
            <?php
              $args = array(
                'post_type' => 'tour',
                'posts_per_page' => -1,
                'order' => 'ASC',
                'tax_query' => array(
                  array(
                    'taxonomy' => 'category',
                    'field'    => 'slug',
                    'terms'    => 'e-bike-trips',
                  ),
                ),
              );
              $inca_trail_tours = new WP_Query($args);
              if ($inca_trail_tours->have_posts()) :
                while ($inca_trail_tours->have_posts()) : $inca_trail_tours->the_post();
            ?>
              <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
            <?php
                endwhile;
                wp_reset_postdata();
              endif;
            ?>
          <ul>
        </div>

        <!-- Machu Picchu Tours -->
        <div class="mb-2 pb-2">
          <h3 class="h4 fw-bold-500">Machu Picchu Tours</h3>
          <ul>
            <?php
              $args = array(
                'post_type' => 'tour',
                'posts_per_page' => -1,
                'order' => 'ASC',
                'tax_query' => array(
                  array(
                    'taxonomy' => 'category',
                    'field'    => 'slug',
                    'terms'    => 'machu-picchu',
                  ),
                ),
              );
              $inca_trail_tours = new WP_Query($args);
              if ($inca_trail_tours->have_posts()) :
                while ($inca_trail_tours->have_posts()) : $inca_trail_tours->the_post();
            ?>
              <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
            <?php
                endwhile;
                wp_reset_postdata();
              endif;
            ?>
          <ul>
        </div>

        <!-- Packages -->
        <div class="mb-2 pb-2">
          <h3 class="h4 fw-bold-500">Packages</h3>
          <ul>
            <?php
              $args = array(
                'post_type' => 'tour',
                'posts_per_page' => -1,
                'order' => 'ASC',
                'tax_query' => array(
                  array(
                    'taxonomy' => 'category',
                    'field'    => 'slug',
                    'terms'    => 'packages',
                  ),
                ),
              );
              $inca_trail_tours = new WP_Query($args);
              if ($inca_trail_tours->have_posts()) :
                while ($inca_trail_tours->have_posts()) : $inca_trail_tours->the_post();
            ?>
              <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
            <?php
                endwhile;
                wp_reset_postdata();
              endif;
            ?>
          <ul>
        </div>

        <!-- Categories -->
        <h2 class="h3 fw-bold-500 mb-3">Categories</h2>
        <ul>
          <?php
            $categories = get_categories( array(
              'orderby' => 'name',
              'order'   => 'ASC'
            ) );

            foreach( $categories as $category ) {
              echo '<li><a href="' . get_category_link( $category->term_id ) . '">' . $category->name . '</a></li>';
            }
          ?>
        </ul>

      </div>
      <div class="col-12 col-md-6 col-lg-4">
        <!-- Blogs -->
        <h2 class="h3 fw-bold-500 mb-3">Blogs</h2>
        <ul>
          <?php
            $args = array(
              'post_type' => 'blog',
              'posts_per_page' => -1,
              'order' => 'DESC',
            );
            $blogs = new WP_Query($args);
            if ($blogs->have_posts()) :
              while ($blogs->have_posts()) : $blogs->the_post();
          ?>
            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
          <?php
              endwhile;
              wp_reset_postdata();
            endif;
          ?>
        </ul>
      </div>
      <div class="col-12 col-md-6 col-lg-4">
        <!-- Blogs -->
        <h2 class="h3 fw-bold-500 mb-3">Pages</h2>
        <ul>
          <?php
            $args = array(
              'post_type' => 'page',
              'posts_per_page' => -1,
              'order' => 'DESC',
            );
            $blogs = new WP_Query($args);
            if ($blogs->have_posts()) :
              while ($blogs->have_posts()) : $blogs->the_post();
          ?>
            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
          <?php
              endwhile;
              wp_reset_postdata();
            endif;
          ?>
        </ul>

        <!-- Faqs -->
        <h2 class="h3 fw-bold-500 mb-3">FAQs</h2>
        <ul>
          <?php
            $args = array(
              'post_type' => 'faqs',
              'posts_per_page' => -1,
              'order' => 'DESC',
            );
            $blogs = new WP_Query($args);
            if ($blogs->have_posts()) :
              while ($blogs->have_posts()) : $blogs->the_post();
          ?>
            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
          <?php
              endwhile;
              wp_reset_postdata();
            endif;
          ?>
        </ul>

        <!-- Posts -->
        <h2 class="h3 fw-bold-500 mb-3">Posts</h2>
        <ul>
          <?php
            $args = array(
              'post_type' => 'post',
              'posts_per_page' => -1,
              'order' => 'DESC',
            );
            $blogs = new WP_Query($args);
            if ($blogs->have_posts()) :
              while ($blogs->have_posts()) : $blogs->the_post();
          ?>
            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
          <?php
              endwhile;
              wp_reset_postdata();
            endif;
          ?>
        </ul>

      </div>
    </div>
  </div>
</section>

<?php
get_footer();
?>