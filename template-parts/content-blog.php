<main class=" ">
    <div class="bg-section py-default position-relative mb-45">
		<div class="container">
			<h1 class="h2 fw-bold mb-3 text-center z-2 position-relative"><?php the_title(); ?></h1>
		</div>
	</div>
    <div class="container-xl">
        <div class="texto__blog__page mb-5">
            <?php the_content(); ?>
        </div>
        <div class="row gx-3 gy-4 w-100">
            <div class="col-12 col-lg-8 pe-0 pe-lg-4">
                <h2 class="h3 fw-bold-600 mb-4 text-primary"><?php echo PearTheme::lang('Recent Blogs','Blogs Recientes','最近的博客','Blogs recentes') ?></h2>
                <div class="row gy-3">
                    <?php
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array(
                            'post_type' => 'blog',
                            'posts_per_page' => 10,
                            'order' => 'DESC',
                            'paged'          => $paged
                        );
                        $toursofperu = new WP_Query($args);
                        if ($toursofperu->have_posts()) :
                            while ($toursofperu->have_posts()) : $toursofperu->the_post();
                        ?>
                            <div class="col-12 col-sm-6">
                                <div class="border-shadow-inca-trail rounded-4 gx-3 bg-white h-100 d-flex flex-column">
                                    <a href="<?php the_permalink(); ?>" class="d-flex position-relative w-100 rounded-4 rounded-bottom-0 mb-1 hx-280 overflow-hidden border-4 border-complementary">
                                        <?php the_post_thumbnail('full-size',array('class'=>'w-100 h-100 object-fit-cover') ) ?>
                                    </a>
                                    <div class="p-3 flex-grow-1 flex-shrink-1 d-flex flex-column">
                                        <div class="border-bottom pb-4 mb-4 flex-grow-1 flex-shrink-1">
                                            <a href="<?php the_permalink(); ?>" class="text-dark"><h3 class="fw-bold-600 h5"><?php the_title(); ?></h3></a>
                                            <?php
                                                $excerpt = get_the_excerpt();
                                                $excerpt_200 = wp_trim_words($excerpt, 35);
                                            ?>
                                            <div class="line-clamp-3 fs-85 text-dark-emphasi">
                                                <?php echo $excerpt_200;?>
                                            </div>
                                        </div>
                                        <div class="d-flex">
                                            <a href="<?php the_permalink(); ?>" class="home-page__buttom2">
                                                <?php echo PearTheme::lang('See more','Ver mas','查看更多','Ver mais')?> 
                                                <i class="bi bi-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                            endwhile;
                        ?>
                            <nav aria-label="navigation my-4">
                              <ul class="pagination justify-content-center py-4">
                                <?php
                                echo paginate_links(array(
                                    'total'   => $toursofperu->max_num_pages,
                                    'current' => $paged,
                                    'prev_text' => '<span class="page-link">« Anterior</span>',
                                    'next_text' => '<span class="page-link">Siguiente »</span>',
                                    'type'    => 'array',
                                )) ? implode('', array_map(function($link){
                                    // Aseguramos clases Bootstrap en cada <li>
                                    $active = strpos($link, 'current') !== false ? ' active' : '';
                                    return '<li class="page-item'.$active.'">'.str_replace('page-numbers', 'page-link', $link).'</li>';
                                }, paginate_links(array(
                                    'total'   => $toursofperu->max_num_pages,
                                    'current' => $paged,
                                    'prev_text' => '«',
                                    'next_text' => '»',
                                    'type'    => 'array',
                                )))) : '';
                                ?>
                              </ul>
                            </nav>
                        <?php
                            wp_reset_postdata();
                        else :
                            echo 'No hay publicaciones con la categoría "inca-trail".';
                        endif;
                    ?>
                </div>
            </div>
            <div class="col-12 col-sm-8 col-lg-4 mx-auto ps-0 ps-lg-4">
                <!-- Find Your Blog -->
              <div class="px-3 py-3 border rounded-3 mb-4" style="background-color: #FAFAFA;">
                  <h2 class="mb-4 h5 fw-bold-600 border-start border-primary border-3 ps-2 py-1">
                    <?php echo PearTheme::lang('Find Your Blog','Encuentra tu blog','找到你的博客','Encontre seu blog') ?>
                  </h2>
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
                  <h2 class="mb-4 h5 fw-bold-600 border-start border-primary border-3 ps-2 py-1">
                    <?php echo PearTheme::lang('Latest Blogs','Últimos blogs','最新博客','Blogs mais recentes') ?>
                  </h2>
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
                                  <a class="" href="<?php the_permalink(); ?>">
                                    <?php if ( has_post_thumbnail() ) {
                                       the_post_thumbnail( 'medium', array( 'class' => 'wx-100 hx-80 object-fit-cover    rounded-3' ) );
                                    } ?>
                                  </a>
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
        
    </div>
    <section class="container">
        <?php get_template_part('template-parts/why_us') ?>
    </section>
</main>