<?php
get_header();
?>

<!-- Contenido Blog -->
<section class="py-default position-relative">
    <div class="container">
        <div class="row gx-3 gy-4 w-100">
            <div class="col-12 col-lg-8 article-blog pe-0 pe-lg-4">
                <h1 class="h1 fw-bold mb-3 text-center"><?php the_title(); ?></h1>
                <div class="d-flex justify-content-center mb-45">
                    <span class="fs-94 text-opaco me-3">
                        <svg class="me-1" xmlns="http://www.w3.org/2000/svg" width="21" height="22" viewBox="0 0 21 22" fill="none">
                          <path d="M5.99908 1V5M13.9991 1V5M18.9991 13V5C18.9991 4.46957 18.7884 3.96086 18.4133 3.58579C18.0382 3.21071 17.5295 3 16.9991 3H2.99908C2.46865 3 1.95994 3.21071 1.58487 3.58579C1.2098 3.96086 0.999084 4.46957 0.999084 5V19C0.999084 19.5304 1.2098 20.0391 1.58487 20.4142C1.95994 20.7893 2.46865 21 2.99908 21H10.9991M0.999084 9H18.9991M13.9991 19L15.9991 21L19.9991 17" stroke="#E91E3E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <?php the_time( 'F j, Y' );?>
                    </span>
                    <span class="fs-94 text-opaco me-2">
                        <svg class="me-1" xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                          <path d="M10.9991 1.00003C12.9392 0.999677 14.8376 1.56371 16.4628 2.62339C18.0879 3.68306 19.3698 5.19262 20.152 6.96807C20.9343 8.74352 21.1832 10.7082 20.8684 12.6226C20.5536 14.537 19.6887 16.3186 18.3791 17.75M10.9991 5.00003V11L14.9991 13M1.49908 7.87503C1.18043 8.84369 1.01182 9.85539 0.999084 10.875M1.82908 15C2.39059 16.2919 3.21867 17.4505 4.25908 18.4M3.63508 4.23503C3.91413 3.93126 4.21169 3.64505 4.52608 3.37803M7.64308 20.42C10.1368 21.3084 12.881 21.1717 15.2741 20.04" stroke="#E91E3E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <?php $readingTime = get_field("reading_time");
                            if($readingTime){ echo $readingTime." min. read";}
                            else{ echo "5 min. read";}
                        ?>
                    </span>
                </div>
                <div class="w-100 mb-45">
                    <?php the_post_thumbnail('list_articles_thumbs'); ?>
                </div>
                <article id="text-blog">
                    <?php  the_content(); ?>
                </article>
            </div>
            <div class="col-12 col-sm-8 col-lg-4 mx-auto ps-0 ps-lg-4">
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

                <!-- Table contents -->
                <div class="px-3 py-3 border rounded-3 mb-4" style="background-color: #FAFAFA;">
                    <h2 class="cursor-pointer h5 fw-bold-600 border-start border-primary border-3 ps-2 py-1 d-flex justify-content-between" data-bs-toggle="collapse" data-bs-target="#contentTitlesBlog" aria-controls="contentTitlesBlog" aria-expanded="false" aria-label="Toggle navigation">
                        Table Contents
                        <i class="ms-2 bi bi-chevron-down"></i>
                    </h2>
                    <ul class="collapse mt-4" id="contentTitlesBlog">
                    </ul>
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
    </div>
</section> 
<!-- Fin Contenido Blog --> 

<!-- Reviews -->
<div class="py-default position-relative">
    <!-- Background -->
    <img class="p position-absolute start-0 top-0 w-100 h-100 object-fit-cover" src="<?php echo get_template_directory_uri(); ?>/assets/imagenes/fondos/Bg-sections.webp" alt="background page">

    <?php get_template_part('/template/reviews','reviews') ?>
 </div>
<!-- Fin Reviews -->

<?php get_footer(); ?>