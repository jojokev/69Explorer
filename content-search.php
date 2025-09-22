<?php 
    $precio = get_post_meta(get_the_ID(), 'custom_field_precio', true); 
    $lugares = get_post_meta(get_the_ID(), 'custom_field_lugares', true);
    $dias = get_post_meta(get_the_ID(), 'custom_field_lugares_visitar', true);
    $dificulty = get_post_meta(get_the_ID(), 'custom_field_dificultad', true);
    $estilo = get_post_meta(get_the_ID(), 'custom_field_estilo', true);
?>
<div class="col-12 col-sm-6">
    <div class="position-relative h-100 rounded-2 px-2 py-2 overflow-hidden content-information-tour-home">
        <div class="card-body p-0">
            <figure class="position-relative m-0">
                <?php the_post_thumbnail('full-size',array('class'=>'img-cover min-h-250 max-h-250 rounded-2') ) ?>
            </figure>
            <div class="px-3 py-3">
                <span class="mb-2 d-block"><i class="bi bi-map"></i> <?php echo $estilo; ?></span>
                <h3 class="mb-3">
                    <a href="<?php the_permalink(); ?>"
                        class="text-decoration-none text-dark stretched-link h4"><?php the_title(); ?></a>
                </h3>
                <span class="mb-2 d-block"><i class="bi bi-geo-alt"></i> <?php echo $lugares; ?></span>
                <div class="content-details-duration-tour mb-4">
                    <span><i class="bi bi-clock"></i> <?php echo PearTheme::days($dias);  ?></span>
                    <span><i class="bi bi-reception-4"></i> <?php echo $dificulty; ?></span>
                </div>
                <div class="d-flex justify-content-between">
                    <div class="content-btn-tour">
                        <a class="btn btn-primary" href="#"><?php echo PearTheme::lang('See more','Ver mas','查看更多') ?> <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>