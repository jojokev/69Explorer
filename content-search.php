
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