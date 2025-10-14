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
    <div class="masonry">
      <h2 class="item h3 fw-bold-500 mb-3">Tours</h2>

      <!-- inca trail tours -->
      <div class="item">
        <div class="mb-2 pb-2">
          <h3 class="h4 fw-bold-500"><?php echo PearTheme::lang('Inca Trail Tours','Excursiones al Camino Inca','---','---') ?></h3>
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
      </div>

      <!-- Alternative Treks tours -->
      <div class="item mb-2 pb-2">
        <h3 class="h4 fw-bold-500"><?php echo PearTheme::lang('Alternative Treks','Rutas alternativas','---','---') ?></h3>
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
      <div class="item mb-2 pb-2">
        <h3 class="h4 fw-bold-500"><?php echo PearTheme::lang('Day tours','Excursiones de un día','---','---') ?></h3>
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
      <div class="item mb-2 pb-2">
        <h3 class="h4 fw-bold-500"><?php echo PearTheme::lang('E-bike Trips','Excursiones en bicicleta eléctrica','---','---') ?></h3>
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
      <div class="item mb-2 pb-2">
        <h3 class="h4 fw-bold-500"><?php echo PearTheme::lang('Machu Picchu Tours','Excursiones a Machu Picchu','---','---') ?></h3>
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
      <div class="item mb-2 pb-2">
        <h3 class="h4 fw-bold-500"><?php echo PearTheme::lang('Packages','Paquetes','---','---') ?></h3>
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
      <h2 class="item h3 fw-bold-500 mb-3"><?php echo PearTheme::lang('Categories','Categorías','---','---') ?></h2>
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

      <!-- Blogs -->
      <div class="item">
        <h2 class="h3 fw-bold-500 mb-3"><?php echo PearTheme::lang('Blogs','Blogs','---','---') ?></h2>
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

      <!-- Pages -->
      <div class="item">
        <h2 class="h3 fw-bold-500 mb-3"><?php echo PearTheme::lang('Pages','Páginas','---','---') ?></h2>
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
      </div>

      <!-- Faqs -->
      <div class="item">
        <h2 class="h3 fw-bold-500 mb-3"><?php echo PearTheme::lang('FAQs','Preguntas frecuentes','---','---') ?></h2>
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
      </div>

      <!-- Posts -->
      <div class="item">
        <h2 class="h3 fw-bold-500 mb-3"><?php echo PearTheme::lang('Posts','Publicaciones','---','---') ?></h2>
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

<style>
  .masonry {
    column-count: 3;       /* Número de columnas */
    column-gap: 1rem;      /* Espacio entre columnas */
  }

  .item {
    padding: 1rem;
    margin-bottom: 1rem;
    break-inside: avoid;   /* Evita que un item se corte entre columnas */
  }

  @media (max-width:991px) {
    .masonry {
      column-count: 2;     /* Cambia a 2 columnas en pantallas medianas */
    }
  }

  @media (max-width:767px) {
    .masonry {
      column-count: 1;     /* Cambia a 1 columna en pantallas pequeñas */
    }
  }
</style>
<?php
get_footer();
?>