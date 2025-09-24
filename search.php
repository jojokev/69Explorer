<?php 
/* 
	#
	# Search Solo Blogs 
	#
*/
get_header(); 
?>

<section class="pb-5">
	<div class="py-default position-relative mb-45">
			<!-- Background -->
    	<img class="p position-absolute start-0 top-0 w-100 h-100 object-fit-cover" src="<?php echo get_template_directory_uri(); ?>/assets/imagenes/fondos/Bg-sections.webp" alt="background page">

			<div class="container">
				<h1 class="h2 fw-bold mb-3 text-center z-2 position-relative">
					<?php echo PearTheme::lang('Search results','Resultados de la búsqueda','搜索结果') ?>:
					<span class="text-primary text-uppercase"> <?php printf(esc_html('%s'), get_search_query())?> </span>
				</h1>
			</div>
	</div>
  <div class="container">
		<main class="content_search">
			<div class="row">
				<div class="col-12 col-lg-8">
					<div class="row gy-3">
						<?php 
							if ( have_posts() ){
							?> 
								<?php
								while( have_posts() ){
									the_post();
									get_template_part('content-search');
								}
							}else{
						?> 
							<div class="pt-5 mt-5 text-center">
								<h2 class="cn f40 border-0 p-0">
									<?php echo PearTheme::lang('No search','No existe la busqueda','没有搜索') ?>:
									<span class="ff800"> <?php printf(esc_html('%s'), get_search_query())?> </span>
								</h2>
							</div>
						<?php
						}
						?>
					</div>
				</div>
				<div class="col-12 col-sm-8 col-lg-4">
					<!-- Find Your Blog -->
          <div class="px-3 py-3 border rounded-3 mb-4" style="background-color: #FAFAFA;">
              <h2 class="mb-4 h5 fw-bold-600 border-start border-primary border-3 ps-2 py-1">Find Your Blog</h2>
              <form action="<?php echo esc_url(home_url('/')); ?>" role="search">
                  <div class="d-flex ">
                      <input type="text" class="w-100 px-2 py-2 fs-95 border rounded-3 rounded-end-0" placeholder="<?php echo PearTheme::lang('Destinos, Excursões','Destinos, Tours','目的地、旅行','Destinos') ?>" name="s" aria-label="Username" aria-describedby="basic-addon1">
                      <button class="roun rounded-end-3 bg-primary text-white px-3 py-2 border-0">
                          <i class="bi bi-search"></i>
                      </button>
                      <input type="hidden" name="post_type" value="blog"> 
                  </div>
              </form>
          </div>

          <!-- Latest Blogs -->
          <div class="px-3 py-3 border rounded-3 mb-4 position-sticky top-5 lastest-blogs" style="background-color: #FAFAFA;">
              <h2 class="mb-4 h5 fw-bold-600 border-start border-primary border-3 ps-2 py-1">Latest Blogs</h2>
              <div class="row gy-3">
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
                      <div class="col-12">
                          <div class="d-flex border rounded-3 px-2 py-2">
                              <?php if ( has_post_thumbnail() ) {
                                  the_post_thumbnail( 'medium', array( 'class' => 'wx-100 hx-80 object-fit-cover rounded-3' ) );
                              } ?>
                              <div class="w-100 ps-2">
                                  <h3 class="h6 mb-2">
                                      <a class="h6s fw-bold-600" href="<?php the_permalink(); ?>"><?php the_title();?></a>
                                  </h3>
                                  <span class="fs-90 text-opaco me-3 d-flex align-items-center">
                                      <svg class="me-1 mb-1" xmlns="http://www.w3.org/2000/svg" width="14" height="15" viewBox="0 0 14 15" fill="none">
                                        <path d="M4.15789 1V3.6M9.21053 1V3.6M12.3684 8.8V3.6C12.3684 3.25522 12.2353 2.92456 11.9984 2.68076C11.7616 2.43696 11.4403 2.3 11.1053 2.3H2.26316C1.92815 2.3 1.60686 2.43696 1.36997 2.68076C1.13308 2.92456 1 3.25522 1 3.6V12.7C1 13.0448 1.13308 13.3754 1.36997 13.6192C1.60686 13.863 1.92815 14 2.26316 14H7.31579M1 6.2H12.3684M9.21053 12.7L10.4737 14L13 11.4" stroke="#E91E3E" stroke-linecap="round" stroke-linejoin="round"/>
                                      </svg>
                                      <?php the_time( 'F j, Y' );?>
                                  </span>
                              </div> 
                          </div>
                      </div>
                  <?php
                          endwhile;
                          wp_reset_postdata();
                      else :
                          echo 'No entries';
                      endif;
                  ?>
              </div>
          </div>
				</div>
			</div>
		</main>
		<div class="items_navigation">
			<?php 
				the_posts_pagination( array( 
				'prev_text'          => __( 'prev', 'cm' ),
				'next_text'          => __( 'next', 'cm' ),
				) );
			?>
		</div>
		<style>
			.items_navigation h2{
				display: none;
			}
		</style>
	</div>
</section>
<?php get_footer(); ?>