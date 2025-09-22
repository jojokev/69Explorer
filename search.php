<?php get_header(); ?>

<section class="pb-5">
    <div class="container">
		<div class="py-5 my-3 text-center">
			<h1 class="cn f40 border-0 p-0 h2">
				<?php echo PearTheme::lang('Search results','Resultados de la búsqueda','搜索结果') ?>:
				<span class="ffe"> <?php printf(esc_html('%s'), get_search_query())?> </span>
			</h1>
		</div>
		<main class="content_search">
			<div class="row">
				<div class="col-12 col-lg-9">
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
				<div class="col-12 col-lg-3">
					<div class="blog_page_item position-sticky top-0">
						<div class="position-realtive mb-4">
							<form action="<?php echo esc_url(home_url('/')); ?>" role="search">
								<div class="input-group ">
									<button
										class="input-group-text text-primary border rounded-0 border-end-0 bg-transparent"
										id="basic-addon1"><i class="bi bi-search"></i></button>
									<input type="text" style="margin-left: -5px;"
										class="form-control shadow-none border fst-italic fs-sm-9 rounded-0  border-start-0"
										placeholder="<?php echo PearTheme::lang('Destinations, Tours','Destinos, Tours','目的地、旅行') ?>" name="s" aria-label="Username"
										aria-describedby="basic-addon1">
									<input type="hidden" name="post_type" value="tour"> 
								</div>
							</form>
						</div>
						<div class="item_sidebar">
							<h4><?php echo PearTheme::lang('Categories','Categorías','类别') ?></h4>
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
							<h4><?php echo PearTheme::lang('Recent Blogs','Blogs Recientes','最近的博客') ?></h4>
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
									echo 'No hay publicaciones con la categoría "inca-trail".';
								endif;
								?>
							</ul>
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