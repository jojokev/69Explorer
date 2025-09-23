<main class="home-page">

    <!-- Banner -->
    <section class="wrapper-banner-home-page position-relative">
        <span class="background-banner position-absolute top-0 start-0 end-0 bottom-0"></span>

        <?php echo wp_get_attachment_image(2021,'full-size ', null,array('class'=>'img-banner-home img-cover') ) ?>

        <div class="content-columns-banner-home container position-absolute top-50 start-50 top-50 translate-middle pb-5">
            <div class="w-100 w-lg-75 mx-auto">
                <div class="content-title-home-page">
                    <div class="container">
                        <div class="col-md-12">
                            <h1 class="text-white mb-3 text-center">
                                <?php echo PearTheme::lang('Budget Friendly Tours & Treks to Machu Picchu','Excursiones y caminatas económicas a Machu Picchu','前往马丘比丘的廉价旅游和徒步旅行','Excursões e caminhadas económicas a Machu Picchu') ?>
                            </h1>
                            <p class="fs-6 fw-bold-600 text-white text-center"><?php echo PearTheme::lang("Experience Machu Picchu's beauty and history with our guided tours and treks. Join us for an unforgettable adventure!",'Experimente la belleza y la historia de Machu Picchu con nuestras visitas guiadas y caminatas. ¡Únase a nosotros para vivir una aventura inolvidable!','参加我们的导游和徒步旅行，体验马丘比丘的美丽和历史。加入我们，享受一次难忘的冒险！','Experimente a beleza e a história de Machu Picchu com as nossas visitas guiadas e caminhadas. Junte-se a nós para uma aventura inesquecível!') ?></p>
                            
                            <div class="d-flex justify-content-center">
                                <a class="home-page__buttom1" href="<?php echo  get_permalink(pll_get_post(282)); ?>">
                                    <?php echo PearTheme::lang('Treks to Machu Picchu','Caminatas a Machu Picchu','马丘比丘徒步之旅','Caminhadas até Machu Picchu') ?>
                                    <i class="bi bi-arrow-right"></i>
                                </a> 
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>

        <div class="position-absolute bottom-0 start-0 p-2 p-md-5">
            <a href="https://www.tripadvisor.com.pe/Attraction_Review-g294314-d27140492-Reviews-69_Explorer_Peru-Cusco_Cusco_Region.html" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/imagenes/iconos/travelers-choice-69explorer.png" alt="tripadvisor" class="w-auto hx-100"></a>
        </div>
    </section>
    <!-- Fin Banner -->

    <!-- About us -->
    <section class="py-default position-relative">
        <!-- Background -->
        <img class="p position-absolute start-0 top-0 w-100 h-100 object-fit-cover" src="<?php echo get_template_directory_uri(); ?>/assets/imagenes/fondos/Bg-sections.webp" alt="background page">

        <div class="container">
            <div class="d-flex align-items-center px-0 px-sm-2 px-lg-5 flex-wrap flex-md-nowrap">
                <div class="d-flex justify-content-center w-100 order-2 order-md-1">
                    <div class="position-relative w-auto">
                        <?php echo wp_get_attachment_image(4843, 'full', false, ['class' => 'wx-480 hx-480 wx-responsive hx-responsive rounded-circle object-fit-cover position-relative z-2']); ?>
                        <span class="wx-480 hx-480 wx-responsive hx-responsive rounded-circle bg-primary position-absolute top-9 start-0 z-1"></span>
                        <?php echo wp_get_attachment_image(4844, 'full', false, ['class' => 'wx-130 h-auto z-3 position-absolute top-100 start-50 translate-middle px-3 py-2 bg-white rounded-3']); ?>
                    </div>
                </div>

                <div class="px-0 px-sm-2 px-lg-5 order-1 order-md-2 mb-3 mb-md-0">
                    <div class="mb-4 home-page__title home-page__list">
                        <?php the_content(); ?>
                    </div>
                    <a href="<?php echo  get_permalink(pll_get_post(333)); ?>" class="home-page__buttom1">
                        <?php echo PearTheme::lang('Learn more','Leer más','了解更多','Leia mais')?> 
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>   
        </div>
    </section>
    <!-- Fin About us -->
    
    <!-- Tours de varias categorias -->
    <section class="categories-tour py-default position-relative">
        <div class="container">
            <!-- titulo -->
            <div class="mb-3 text-center">
                <span class="fw-bold text-uppercase text-primary mb-1"><?php echo PearTheme::lang('Choose your destination','Elige tu destino','选择您的目的地','Escolha o seu destino') ?></span>
                <h2 class="fw-bold h3 text-uppercase mb-3">
                    <?php echo PearTheme::lang('Unique Adventures in Cusco','Aventuras Únicas en Cusco','库斯科的独特冒险','Aventuras únicas em Cusco') ?>
                </h2>
                <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
                    <!-- inca trail -->
                    <li class="m-2 m-lg-0 mb-2" role="presentation">
                        <button
                            class="categories-tour__button active py-2 px-3 rounded-3 fw-bold-600"
                            id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab"
                            aria-controls="pills-home" aria-selected="true">
                            <?php echo PearTheme::lang('Alternative Tours','Tours Alternativos','另类旅游','Excursões alternativas') ?>
                            <i class="bi bi-arrow-right"></i>
                        </button>
                    </li>
                    <!--  tour to machu picchu -->
                    <li class="m-2 m-lg-0 ms-lg-3 mb-2" role="presentation">
                        <button
                            class="categories-tour__button py-2 px-3 rounded-3 fw-bold-600"
                            id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button"
                            role="tab" aria-controls="pills-profile" aria-selected="false">
                            <?php echo PearTheme::lang('Tours to machu Picchu','Tours a Machu Picchu','马丘比丘旅游','Excursões a Machu Picchu') ?>
                            <i class="bi bi-arrow-right"></i>
                        </button>
                    </li>
                    <!--  day tours -->
                    <li class="m-2 m-lg-0 ms-lg-3" role="presentation">
                        <button
                            class="categories-tour__button py-2 px-3 rounded-3 fw-bold-600"
                            id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button"
                            role="tab" aria-controls="pills-contact" aria-selected="false">
                            <?php echo PearTheme::lang('Day Tours','Tours de un Dia','一日游','Excursões de um dia') ?>
                            <i class="bi bi-arrow-right"></i>
                        </button>
                    </li>
                    <!--  Others route -->
                </ul>
            </div>

            <!-- categorias -->
            <div class="tab-content" id="pills-tabContent">
                <!--  content Alternatives treks -->
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"
                    tabindex="0">
                    <div class="w-lg-75 mb-5 text-center m-auto">
                        <p class="fs-95">
                            <?php echo PearTheme::lang('Explore fascinating routes beyond the Inca Trail and immerse yourself in a unique trekking experience in the Peruvian Andes. Discover ancient trails that will take you to impressive archaeological sites, surrounded by spectacular landscapes. Each alternative route offers a physical and mental challenge. If you are looking for adventure, culture and nature in one trip, our alternative tours are the perfect option for you.','Explora rutas fascinantes más allá del Camino Inca y sumérgete en una experiencia de trekking única en los Andes peruanos. Descubre senderos ancestrales que te llevarán a impresionantes sitios arqueológicos, rodeados de paisajes espectaculares. Cada ruta alternativa ofrece un desafío físico y mental. Si buscas aventura, cultura y naturaleza en un solo viaje, nuestros tours alternativos son la opción perfecta para ti.','探索印加古道之外的迷人路线，沉浸在秘鲁安第斯山脉的独特徒步旅行体验中。探索古老的小径，带您前往令人印象深刻的考古遗址，周围环绕着壮观的风景。每条替代路线都会带来体力和精神上的挑战。如果您想在一次旅行中体验冒险、文化和自然，我们的替代旅游是您的完美选择。','Explore rotas fascinantes além da Trilha Inca e mergulhe numa experiência única de trekking nos Andes peruanos. Descubra trilhas antigas que o levarão a impressionantes sítios arqueológicos, rodeados por paisagens espetaculares. Cada rota alternativa oferece um desafio físico e mental. Se procura aventura, cultura e natureza numa única viagem, os nossos passeios alternativos são a opção perfeita para si.') ?>
                        </p>
                    </div>
                    <div class="px-2 position-relative mb-4">
                        <div class="swiper mainCarousel py-5 position-static">
                            <div class="swiper-wrapper">
                                <?php
                                    $queryincatrail = new WP_Query(
                                        array(
                                            'post_type' => 'tour',
                                            'posts_per_page' => 6,
                                            'tax_query' => array(
                                                array(
                                                    'taxonomy' => 'category',
                                                    'field' => 'term_id',
                                                    'terms' => 52,
                                                ),
                                            ),
                                        )
                                    );
                                    if ($queryincatrail->have_posts()) :
                                        while ($queryincatrail->have_posts()) :$queryincatrail->the_post();
                                        $precio = get_post_meta(get_the_ID(), 'custom_field_precio', true); 
                                        $lugares = get_post_meta(get_the_ID(), 'custom_field_lugares', true);
                                        $dias = get_post_meta(get_the_ID(), 'custom_field_lugares_visitar', true);
                                        $dificulty = get_post_meta(get_the_ID(), 'custom_field_dificultad', true);
                                        $estilo = get_post_meta(get_the_ID(), 'custom_field_estilo', true);
                                ?>
                                <div class="swiper-slide h-auto">
                                    <div class="border rounded-4 gx-3 px-2 py-2 bg-white h-100 d-flex flex-column">
                                        <a href="<?php the_permalink(); ?>" class="d-flex position-relative w-100 rounded-3 mtn-50 mb-1 hx-250 overflow-hidden">
                                            <?php the_post_thumbnail('full-size',array('class'=>'w-100 h-100 object-fit-cover') ) ?>
                                        </a>
                                        <div class="p-2 flex-grow-1 flex-shrink-1 d-flex flex-column">
                                            <div class="border-bottom pb-4 mb-4 flex-grow-1 flex-shrink-1">
                                                <a href="<?php the_permalink(); ?>" class="text-dark"><h3 class="fw-bold-600 h5"><?php the_title(); ?></h3></a>
                                                <div class="d-flex mb-2">
                                                    <span class="me-2 fs-85 text-dark-emphasis">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
                                                          <g clip-path="url(#clip0_157_115)">
                                                            <path d="M8.038 3.44395C8.87441 3.44395 9.55234 2.76576 9.55234 1.9296C9.55234 1.09298 8.87441 0.415039 8.038 0.415039C7.20138 0.415039 6.52344 1.09298 6.52344 1.9296C6.52344 2.76579 7.20138 3.44395 8.038 3.44395Z" fill="#E91E3E" fill-opacity="0.5"/>
                                                            <path d="M11.3271 12.8593L10.6269 9.15953L10.3154 5.88016C10.1135 3.7055 8.00621 3.86138 6.97756 4.86888L5.26815 6.62172L3.66552 7.14075L3.35027 5.35106C3.31574 5.15553 3.12915 5.02475 2.93359 5.05903C2.73781 5.09353 2.60706 5.28016 2.64177 5.47594L2.9744 7.36469L2.9324 7.37831C2.62112 7.49285 2.45424 7.83091 2.55259 8.14778L2.56034 8.17197C2.64649 8.44991 2.91127 8.62503 3.19321 8.60791L4.50684 16.0679C4.54137 16.2634 4.72774 16.3942 4.92352 16.3596C5.11909 16.3251 5.24981 16.1388 5.21531 15.943L3.89746 8.45813L5.32706 8.13419C5.66087 8.05719 5.97799 7.91963 6.26181 7.72831L7.19306 7.10225L7.52193 9.60203C7.54587 9.78538 7.33012 10.5563 7.28106 10.7352L5.87824 15.4906C5.77165 15.8742 5.99587 16.2721 6.37943 16.3803L6.40593 16.3878C6.76862 16.4899 7.14912 16.2974 7.28106 15.9446L9.17215 11.3067L9.67359 13.414C9.74352 13.5535 9.83602 13.6798 9.94727 13.7887L12.1809 16.1601C12.4452 16.4183 12.8633 16.4298 13.141 16.1864L13.1746 16.1575C13.3166 16.0329 13.4032 15.8566 13.4145 15.6678C13.4257 15.4789 13.3612 15.2934 13.2346 15.153L11.3271 12.8593Z" fill="#E91E3E" fill-opacity="0.5"/>
                                                            <path d="M12.5993 8.90293C12.854 8.87993 13.0892 8.75668 13.2526 8.56C13.4165 8.36328 13.4954 8.10975 13.4717 7.85506L13.2618 5.58343C13.213 5.05478 12.7451 4.66509 12.2162 4.71275L11.0493 4.81815L11.4364 9.00787L12.5993 8.90293Z" fill="#E91E3E" fill-opacity="0.5"/>
                                                          </g>
                                                          <defs>
                                                            <clipPath id="clip0_157_115">
                                                              <rect width="16" height="16" fill="white" transform="translate(0 0.415039)"/>
                                                            </clipPath>
                                                          </defs>
                                                        </svg>
                                                        <?php echo $dificulty ?>
                                                    </span>
                                                    <span class="me-2 fs-85 text-dark-emphasis">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
                                                            <path d="M10.6667 9.74835V11.215L11.7333 11.8817M10.6667 1.74835V4.41502M14 5.41502V4.41502C14 4.0614 13.8595 3.72226 13.6095 3.47221C13.3594 3.22216 13.0203 3.08169 12.6667 3.08169H3.33333C2.97971 3.08169 2.64057 3.22216 2.39052 3.47221C2.14048 3.72226 2 4.0614 2 4.41502V13.7484C2 14.102 2.14048 14.4411 2.39052 14.6912C2.64057 14.9412 2.97971 15.0817 3.33333 15.0817H5.66667M2 7.08169H5.33333M5.33333 1.74835V4.41502M14.6667 11.0817C14.6667 13.2908 12.8758 15.0817 10.6667 15.0817C8.45753 15.0817 6.66667 13.2908 6.66667 11.0817C6.66667 8.87255 8.45753 7.08169 10.6667 7.08169C12.8758 7.08169 14.6667 8.87255 14.6667 11.0817Z" stroke="#E91E3E" stroke-opacity="0.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        </svg>
                                                        <?php echo PearTheme::days($dias)?>
                                                    </span>
                                                </div>
                                                <div class="line-clamp-3 fs-85 text-dark-emphasi">
                                                    <?php echo get_field("description"); ?>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div>
                                                    <span class="fs-85 text-dark-emphasis"><?php echo PearTheme::lang('Price from','Precio desde','价格  起','Preço a partir de') ?>:</span>
                                                    <p class="mb-0 h5 fw-bold text-primary">$<?php echo $precio ?> <span class="fs-85 text-dark-emphasis">/ <?php echo PearTheme::lang('per person','por persona','每人','por pessoa') ?></span></p>
                                                </div>
                                                <a href="<?php the_permalink(); ?>" class="home-page__buttom2">
                                                    <?php echo PearTheme::lang('View Itinerary','Ver itinerario','查看行程','Ver itinerário') ?>
                                                    <i class="bi bi-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php 
                                 endwhile;
                                 wp_reset_postdata( );
                                 endif;
                                ?>
                            </div>
                            <div class="swiper-button-next position-absolute end-0 top-50 translate-middle-y"><i class="bi bi-arrow-right-circle-fill h2 text-primary m-0"></i></div>
                            <div class="swiper-button-prev position-absolute start-0 top-50 translate-middle-y"><i class="bi bi-arrow-left-circle-fill h2 text-primary m-0"></i></div>
                            <div class="swiper-pagination position-absolute start-50 bottom-0 translate-middle-x"></div>
                        </div>
                    </div>

                    <!-- Button Alternatives treks -->
                    <div class="d-flex justify-content-center w-100">
                        <a href="<?php echo  get_permalink(pll_get_post(290)); ?>" class="home-page__buttom1"><?php echo PearTheme::lang('See All Tours','Ver todos los tours','查看所有行程','Ver todos os passeios') ?><i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
                <!-- content Tours to machu Picchu -->
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"
                    tabindex="0">
                    <div class="w-lg-75 mb-5 text-center m-auto">
                        <p class="fs-95"><?php echo PearTheme::lang('Machu Picchu, the most popular destination in South America and what most people visit Peru to see. There are several ways to visit the magnificent site, the most popular being a trip on one of the fabulous trains, either as a day tour or an overnight tour. Another popular choice is to combine a tour to Machu Picchu with the other attractions around Cusco like the Sacred Valley or Rainbow Mountain. Becoming a popular way to visit for those who like a challenge, is one of the many treks through the Andes that finish in Machu Picchu.','Machu Picchu, el destino más popular de Sudamérica y el lugar que la mayoría de la gente visita en Perú. Hay varias formas de visitar este magnífico lugar, la más popular es un viaje en uno de los fabulosos trenes, ya sea como una excursión de un día o una excursión de una noche. Otra opción popular es combinar una excursión a Machu Picchu con otras atracciones alrededor de Cusco, como el Valle Sagrado o la Montaña Arcoíris. Una de las muchas caminatas por los Andes que terminan en Machu Picchu se está convirtiendo en una forma popular de visitar para aquellos que buscan un desafío.','马丘比丘是南美洲最受欢迎的目的地，也是大多数人前往秘鲁游览的景点。游览这个壮丽景点的方式有很多种，最受欢迎的是乘坐一列神奇的火车，可以一日游或过夜游。另一个受欢迎的选择是将马丘比丘之旅与库斯科周围的其他景点（如圣谷或彩虹山）结合起来。对于那些喜欢挑战的人来说，马丘比丘是众多穿越安第斯山脉并以马丘比丘为终点的徒步旅行之一，也成为一种受欢迎的游览方式。','Machu Picchu, o destino mais popular da América do Sul e o que a maioria das pessoas visita no Peru. Existem várias maneiras de visitar este magnífico local, sendo a mais popular uma viagem num dos fabulosos comboios, seja numa excursão de um dia ou numa excursão com pernoite. Outra opção popular é combinar uma excursão a Machu Picchu com outras atrações ao redor de Cusco, como o Vale Sagrado ou a Montanha Arco-Íris. Uma forma popular de visitar o local para aqueles que gostam de desafios é uma das muitas caminhadas pelos Andes que terminam em Machu Picchu.') ?>
                        </p>
                    </div>
                    <div class="px-2 position-relative mb-4">
                        <div class="swiper mainCarousel py-5 position-static">
                            <div class="swiper-wrapper">
                                <?php
                                    $queryincatrail = new WP_Query(
                                        array(
                                            'post_type' => 'tour',
                                            'posts_per_page' => 6,
                                            'tax_query' => array(
                                                array(
                                                    'taxonomy' => 'category',
                                                    'field' => 'term_id',
                                                    'terms' => 56,
                                                ),
                                            ),
                                        )
                                    );
                                    if ($queryincatrail->have_posts()) :
                                        while ($queryincatrail->have_posts()) :$queryincatrail->the_post();
                                        $precio = get_post_meta(get_the_ID(), 'custom_field_precio', true); 
                                        $lugares = get_post_meta(get_the_ID(), 'custom_field_lugares', true);
                                        $dias = get_post_meta(get_the_ID(), 'custom_field_lugares_visitar', true);
                                        $dificulty = get_post_meta(get_the_ID(), 'custom_field_dificultad', true);
                                        $estilo = get_post_meta(get_the_ID(), 'custom_field_estilo', true);
                                ?>
                                <div class="swiper-slide h-auto">
                                    <div class="border rounded-4 gx-3 px-2 py-2 bg-white h-100 d-flex flex-column">
                                        <a href="<?php the_permalink(); ?>" class="d-flex position-relative w-100 rounded-3 mtn-50 mb-1 hx-250 overflow-hidden">
                                            <?php the_post_thumbnail('full-size',array('class'=>'w-100 h-100 object-fit-cover') ) ?>
                                        </a>
                                        <div class="p-2 flex-grow-1 flex-shrink-1 d-flex flex-column">
                                            <div class="border-bottom pb-4 mb-4 flex-grow-1 flex-shrink-1">
                                                <a href="<?php the_permalink(); ?>" class="text-dark"><h3 class="fw-bold-600 h5"><?php the_title(); ?></h3></a>
                                                <div class="d-flex mb-2">
                                                    <span class="me-2 fs-85 text-dark-emphasis">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
                                                          <g clip-path="url(#clip0_157_115)">
                                                            <path d="M8.038 3.44395C8.87441 3.44395 9.55234 2.76576 9.55234 1.9296C9.55234 1.09298 8.87441 0.415039 8.038 0.415039C7.20138 0.415039 6.52344 1.09298 6.52344 1.9296C6.52344 2.76579 7.20138 3.44395 8.038 3.44395Z" fill="#E91E3E" fill-opacity="0.5"/>
                                                            <path d="M11.3271 12.8593L10.6269 9.15953L10.3154 5.88016C10.1135 3.7055 8.00621 3.86138 6.97756 4.86888L5.26815 6.62172L3.66552 7.14075L3.35027 5.35106C3.31574 5.15553 3.12915 5.02475 2.93359 5.05903C2.73781 5.09353 2.60706 5.28016 2.64177 5.47594L2.9744 7.36469L2.9324 7.37831C2.62112 7.49285 2.45424 7.83091 2.55259 8.14778L2.56034 8.17197C2.64649 8.44991 2.91127 8.62503 3.19321 8.60791L4.50684 16.0679C4.54137 16.2634 4.72774 16.3942 4.92352 16.3596C5.11909 16.3251 5.24981 16.1388 5.21531 15.943L3.89746 8.45813L5.32706 8.13419C5.66087 8.05719 5.97799 7.91963 6.26181 7.72831L7.19306 7.10225L7.52193 9.60203C7.54587 9.78538 7.33012 10.5563 7.28106 10.7352L5.87824 15.4906C5.77165 15.8742 5.99587 16.2721 6.37943 16.3803L6.40593 16.3878C6.76862 16.4899 7.14912 16.2974 7.28106 15.9446L9.17215 11.3067L9.67359 13.414C9.74352 13.5535 9.83602 13.6798 9.94727 13.7887L12.1809 16.1601C12.4452 16.4183 12.8633 16.4298 13.141 16.1864L13.1746 16.1575C13.3166 16.0329 13.4032 15.8566 13.4145 15.6678C13.4257 15.4789 13.3612 15.2934 13.2346 15.153L11.3271 12.8593Z" fill="#E91E3E" fill-opacity="0.5"/>
                                                            <path d="M12.5993 8.90293C12.854 8.87993 13.0892 8.75668 13.2526 8.56C13.4165 8.36328 13.4954 8.10975 13.4717 7.85506L13.2618 5.58343C13.213 5.05478 12.7451 4.66509 12.2162 4.71275L11.0493 4.81815L11.4364 9.00787L12.5993 8.90293Z" fill="#E91E3E" fill-opacity="0.5"/>
                                                          </g>
                                                          <defs>
                                                            <clipPath id="clip0_157_115">
                                                              <rect width="16" height="16" fill="white" transform="translate(0 0.415039)"/>
                                                            </clipPath>
                                                          </defs>
                                                        </svg>
                                                        <?php echo $dificulty ?>
                                                    </span>
                                                    <span class="me-2 fs-85 text-dark-emphasis">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
                                                            <path d="M10.6667 9.74835V11.215L11.7333 11.8817M10.6667 1.74835V4.41502M14 5.41502V4.41502C14 4.0614 13.8595 3.72226 13.6095 3.47221C13.3594 3.22216 13.0203 3.08169 12.6667 3.08169H3.33333C2.97971 3.08169 2.64057 3.22216 2.39052 3.47221C2.14048 3.72226 2 4.0614 2 4.41502V13.7484C2 14.102 2.14048 14.4411 2.39052 14.6912C2.64057 14.9412 2.97971 15.0817 3.33333 15.0817H5.66667M2 7.08169H5.33333M5.33333 1.74835V4.41502M14.6667 11.0817C14.6667 13.2908 12.8758 15.0817 10.6667 15.0817C8.45753 15.0817 6.66667 13.2908 6.66667 11.0817C6.66667 8.87255 8.45753 7.08169 10.6667 7.08169C12.8758 7.08169 14.6667 8.87255 14.6667 11.0817Z" stroke="#E91E3E" stroke-opacity="0.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        </svg>
                                                        <?php echo PearTheme::days($dias)?>
                                                    </span>
                                                </div>
                                                <div class="line-clamp-3 fs-85 text-dark-emphasi">
                                                    <?php echo get_field("description"); ?>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div>
                                                    <span class="fs-85 text-dark-emphasis"><?php echo PearTheme::lang('Price from','Precio desde','价格  起','Preço a partir de') ?>:</span>
                                                    <p class="mb-0 h5 fw-bold text-primary">$<?php echo $precio ?> <span class="fs-85 text-dark-emphasis">/ <?php echo PearTheme::lang('per person','por persona','每人','por pessoa') ?></span></p>
                                                </div>
                                                <a href="<?php the_permalink(); ?>" class="home-page__buttom2">
                                                    <?php echo PearTheme::lang('View Itinerary','Ver itinerario','查看行程','Ver itinerário') ?>
                                                    <i class="bi bi-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php 
                                 endwhile;
                                 wp_reset_postdata( );
                                 endif;
                                ?>
                            </div>
                            <div class="swiper-button-next position-absolute end-0 top-50 translate-middle-y"><i class="bi bi-arrow-right-circle-fill h2 text-primary m-0"></i></div>
                            <div class="swiper-button-prev position-absolute start-0 top-50 translate-middle-y"><i class="bi bi-arrow-left-circle-fill h2 text-primary m-0"></i></div>
                            <div class="swiper-pagination position-absolute start-50 bottom-0 translate-middle-x"></div>
                        </div>
                    </div>

                    <!-- Button Tours to machu Picchu -->
                    <div class="d-flex justify-content-center w-100">
                        <a href="<?php echo  get_permalink(pll_get_post(294)); ?>" class="home-page__buttom1"><?php echo PearTheme::lang('See All Tours','Ver todos los tours','查看所有行程','Ver todos os passeios') ?><i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
                <!-- content Day tours -->
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab"
                    tabindex="0">
                    <div class="w-lg-75 mb-5 text-center m-auto">
                        <p class="fs-95"><?php echo PearTheme::lang('Around the Cusco region there are many and varied things to do and see. A great start is a Cusco City tour, where you will discover the history of this fascinating Inca City. Travel further afield and tour the beautiful Sacred Valley of the Incas, this truly spectacular part of Peru will blow you away with its history and beauty. Take a day tour to Rainbow Mountain for an experience that you will not soon forget. The pinnacle of any Peruvian tour would have to be a day tour to the Inca Citadel of Machu Picchu, the most talked about tour in Peru.','En la región de Cusco hay muchas y variadas cosas para hacer y ver. Un buen comienzo es un tour por la ciudad de Cusco, donde descubrirás la historia de esta fascinante ciudad inca. Viaja más lejos y recorre el hermoso Valle Sagrado de los Incas, esta parte verdaderamente espectacular de Perú te dejará boquiabierto con su historia y belleza. Haz un tour de un día a la Montaña de Colores para vivir una experiencia que no olvidarás fácilmente. El punto culminante de cualquier tour peruano sería un tour de un día a la Ciudadela Inca de Machu Picchu, el tour del que más se habla en Perú.','库斯科地区有很多不同的事情可做可看。库斯科城市之旅是开始游览的好地方，您将在那里发现这座迷人的印加城市的历史。再远一点，参观美丽的印加圣谷，这是秘鲁真正壮观的地区，其历史和美景将让您惊叹不已。前往彩虹山一日游，享受难忘的体验。秘鲁之旅的巅峰必须是前往印加城堡马丘比丘的一日游，这是秘鲁最受关注的旅游项目。','Na região de Cusco, há muitas e variadas coisas para fazer e ver. Um ótimo começo é um passeio pela cidade de Cusco, onde descobrirá a história desta fascinante cidade inca. Viaje mais longe e visite o belo Vale Sagrado dos Incas, esta parte verdadeiramente espetacular do Peru irá impressioná-lo com a sua história e beleza. Faça um passeio de um dia à Montanha Arco-Íris para uma experiência que não esquecerá tão cedo. O ponto alto de qualquer passeio pelo Peru seria um passeio de um dia à cidadela inca de Machu Picchu, o passeio mais comentado do Peru.') ?>
                        </p>
                    </div>

                    <div class="px-2 position-relative mb-4">
                        <div class="swiper mainCarousel py-5 position-static">
                            <div class="swiper-wrapper">
                                <?php
                                    $queryincatrail = new WP_Query(
                                        array(
                                            'post_type' => 'tour',
                                            'posts_per_page' => 6,
                                            'tax_query' => array(
                                                array(
                                                    'taxonomy' => 'category',
                                                    'field' => 'term_id',
                                                    'terms' => 50,
                                                ),
                                            ),
                                        )
                                    );
                                    if ($queryincatrail->have_posts()) :
                                        while ($queryincatrail->have_posts()) :$queryincatrail->the_post();
                                        $precio = get_post_meta(get_the_ID(), 'custom_field_precio', true); 
                                        $lugares = get_post_meta(get_the_ID(), 'custom_field_lugares', true);
                                        $dias = get_post_meta(get_the_ID(), 'custom_field_lugares_visitar', true);
                                        $dificulty = get_post_meta(get_the_ID(), 'custom_field_dificultad', true);
                                        $estilo = get_post_meta(get_the_ID(), 'custom_field_estilo', true);
                                ?>
                                <div class="swiper-slide h-auto">
                                    <div class="border rounded-4 gx-3 px-2 py-2 bg-white h-100 d-flex flex-column">
                                        <a href="<?php the_permalink(); ?>" class="d-flex position-relative w-100 rounded-3 mtn-50 mb-1 hx-250 overflow-hidden">
                                            <?php the_post_thumbnail('full-size',array('class'=>'w-100 h-100 object-fit-cover') ) ?>
                                        </a>
                                        <div class="p-2 flex-grow-1 flex-shrink-1 d-flex flex-column">
                                            <div class="border-bottom pb-4 mb-4 flex-grow-1 flex-shrink-1">
                                                <a href="<?php the_permalink(); ?>" class="text-dark"><h3 class="fw-bold-600 h5"><?php the_title(); ?></h3></a>
                                                <div class="d-flex mb-2">
                                                    <span class="me-2 fs-85 text-dark-emphasis">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
                                                          <g clip-path="url(#clip0_157_115)">
                                                            <path d="M8.038 3.44395C8.87441 3.44395 9.55234 2.76576 9.55234 1.9296C9.55234 1.09298 8.87441 0.415039 8.038 0.415039C7.20138 0.415039 6.52344 1.09298 6.52344 1.9296C6.52344 2.76579 7.20138 3.44395 8.038 3.44395Z" fill="#E91E3E" fill-opacity="0.5"/>
                                                            <path d="M11.3271 12.8593L10.6269 9.15953L10.3154 5.88016C10.1135 3.7055 8.00621 3.86138 6.97756 4.86888L5.26815 6.62172L3.66552 7.14075L3.35027 5.35106C3.31574 5.15553 3.12915 5.02475 2.93359 5.05903C2.73781 5.09353 2.60706 5.28016 2.64177 5.47594L2.9744 7.36469L2.9324 7.37831C2.62112 7.49285 2.45424 7.83091 2.55259 8.14778L2.56034 8.17197C2.64649 8.44991 2.91127 8.62503 3.19321 8.60791L4.50684 16.0679C4.54137 16.2634 4.72774 16.3942 4.92352 16.3596C5.11909 16.3251 5.24981 16.1388 5.21531 15.943L3.89746 8.45813L5.32706 8.13419C5.66087 8.05719 5.97799 7.91963 6.26181 7.72831L7.19306 7.10225L7.52193 9.60203C7.54587 9.78538 7.33012 10.5563 7.28106 10.7352L5.87824 15.4906C5.77165 15.8742 5.99587 16.2721 6.37943 16.3803L6.40593 16.3878C6.76862 16.4899 7.14912 16.2974 7.28106 15.9446L9.17215 11.3067L9.67359 13.414C9.74352 13.5535 9.83602 13.6798 9.94727 13.7887L12.1809 16.1601C12.4452 16.4183 12.8633 16.4298 13.141 16.1864L13.1746 16.1575C13.3166 16.0329 13.4032 15.8566 13.4145 15.6678C13.4257 15.4789 13.3612 15.2934 13.2346 15.153L11.3271 12.8593Z" fill="#E91E3E" fill-opacity="0.5"/>
                                                            <path d="M12.5993 8.90293C12.854 8.87993 13.0892 8.75668 13.2526 8.56C13.4165 8.36328 13.4954 8.10975 13.4717 7.85506L13.2618 5.58343C13.213 5.05478 12.7451 4.66509 12.2162 4.71275L11.0493 4.81815L11.4364 9.00787L12.5993 8.90293Z" fill="#E91E3E" fill-opacity="0.5"/>
                                                          </g>
                                                          <defs>
                                                            <clipPath id="clip0_157_115">
                                                              <rect width="16" height="16" fill="white" transform="translate(0 0.415039)"/>
                                                            </clipPath>
                                                          </defs>
                                                        </svg>
                                                        <?php echo $dificulty ?>
                                                    </span>
                                                    <span class="me-2 fs-85 text-dark-emphasis">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
                                                            <path d="M10.6667 9.74835V11.215L11.7333 11.8817M10.6667 1.74835V4.41502M14 5.41502V4.41502C14 4.0614 13.8595 3.72226 13.6095 3.47221C13.3594 3.22216 13.0203 3.08169 12.6667 3.08169H3.33333C2.97971 3.08169 2.64057 3.22216 2.39052 3.47221C2.14048 3.72226 2 4.0614 2 4.41502V13.7484C2 14.102 2.14048 14.4411 2.39052 14.6912C2.64057 14.9412 2.97971 15.0817 3.33333 15.0817H5.66667M2 7.08169H5.33333M5.33333 1.74835V4.41502M14.6667 11.0817C14.6667 13.2908 12.8758 15.0817 10.6667 15.0817C8.45753 15.0817 6.66667 13.2908 6.66667 11.0817C6.66667 8.87255 8.45753 7.08169 10.6667 7.08169C12.8758 7.08169 14.6667 8.87255 14.6667 11.0817Z" stroke="#E91E3E" stroke-opacity="0.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        </svg>
                                                        <?php echo PearTheme::days($dias)?>
                                                    </span>
                                                </div>
                                                <div class="line-clamp-3 fs-85 text-dark-emphasi">
                                                    <?php echo get_field("description"); ?>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div>
                                                    <span class="fs-85 text-dark-emphasis"><?php echo PearTheme::lang('Price from','Precio desde','价格  起','Preço a partir de') ?>:</span>
                                                    <p class="mb-0 h5 fw-bold text-primary">$<?php echo $precio ?> <span class="fs-85 text-dark-emphasis">/ <?php echo PearTheme::lang('per person','por persona','每人','por pessoa') ?></span></p>
                                                </div>
                                                <a href="<?php the_permalink(); ?>" class="home-page__buttom2">
                                                    <?php echo PearTheme::lang('View Itinerary','Ver itinerario','查看行程','Ver itinerário') ?>
                                                    <i class="bi bi-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php 
                                 endwhile;
                                 wp_reset_postdata( );
                                 endif;
                                ?>
                            </div>
                            <div class="swiper-button-next position-absolute end-0 top-50 translate-middle-y"><i class="bi bi-arrow-right-circle-fill h2 text-primary m-0"></i></div>
                            <div class="swiper-button-prev position-absolute start-0 top-50 translate-middle-y"><i class="bi bi-arrow-left-circle-fill h2 text-primary m-0"></i></div>
                            <div class="swiper-pagination position-absolute start-50 bottom-0 translate-middle-x"></div>
                        </div>
                    </div>

                    <!-- Button Day tours -->
                    <div class="d-flex justify-content-center w-100">
                        <a href="<?php echo  get_permalink(pll_get_post(298)); ?>" class="home-page__buttom1"><?php echo PearTheme::lang('See All Tours','Ver todos los tours','查看所有行程','Ver todos os passeios') ?><i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    <!-- Fin Tours de varias categorias -->

    <!-- Tours inca trail -->
    <section class="py-default position-relative pt-5">
        <?php echo wp_get_attachment_image(4846, 'full', false, ['class' => 'w-100 hx-600 object-fit-cover position-absolute top-0 start-0 z-1 filter-5']); ?>
        <span class="pt-5 d-block"></span>
        <div class="container position-relative z-2 pt-5 mt-5">
            <!-- titulo -->
            <div class="mb-45 text-center text-white ">
                <span class="fw-bold text-uppercase text-white mb-1"><?php echo PearTheme::lang('discover','descubre','发现','descobrir') ?></span>
                <h2 class="fw-bold h3 text-uppercase mb-3 text-white ">
                    <?php echo PearTheme::lang('Inca Trail Hike to Machu Picchu ','Caminata por el Camino Inca a Machu Picchu','印加古道徒步前往马丘比丘','Caminhada pela Trilha Inca até Machu Picchu') ?>
                    <span class="fw-bold h3"><?php $nextYear = date('Y') + 1; echo $nextYear;?></span>
                </h2>
                <p><?php echo PearTheme::lang('Explore the wonders of our popular destinations','Explore las maravillas de nuestros destinos populares','探索我们热门目的地的奇妙之处','Explore as maravilhas dos nossos destinos populares')?></p>
            </div>

            <!-- tours -->
            <div class="px-2 position-relative mb-4">
                <div class="swiper mainCarousel position-static pb-5">
                    <div class="swiper-wrapper">
                        <?php
                            $queryincatrail = new WP_Query(
                                array(
                                    'post_type' => 'tour',
                                    'posts_per_page' => 6,
                                    'tax_query' => array(
                                        array(
                                            'taxonomy' => 'category',
                                            'field' => 'term_id',
                                            'terms' => 54,
                                        ),
                                    ),
                                )
                            );
                            if ($queryincatrail->have_posts()) :
                                while ($queryincatrail->have_posts()) :$queryincatrail->the_post();
                                $precio = get_post_meta(get_the_ID(), 'custom_field_precio', true); 
                                $lugares = get_post_meta(get_the_ID(), 'custom_field_lugares', true);
                                $dias = get_post_meta(get_the_ID(), 'custom_field_lugares_visitar', true);
                                $dificulty = get_post_meta(get_the_ID(), 'custom_field_dificultad', true);
                                $estilo = get_post_meta(get_the_ID(), 'custom_field_estilo', true);
                        ?>
                        <div class="swiper-slide swiper-inca-trail h-auto">
                            <div class="border-shadow-inca-trail rounded-4 gx-3 bg-white h-100 d-flex flex-column">
                                <a href="<?php the_permalink(); ?>" class="d-flex position-relative w-100 rounded-4 rounded-bottom-0 mb-1 hx-280 overflow-hidden border-4 border-complementary">
                                    <?php the_post_thumbnail('full-size',array('class'=>'w-100 h-100 object-fit-cover') ) ?>
                                    <div class="p position-absolute top-0 start-0 py-2">
                                        <span class="bg-primary text-white py-1 px-2 fs-85 rounded-end-3"><?php echo PearTheme::lang('Best Seller','Más vendido','畅销书','Mais vendido') ?></span>
                                    </div>
                                </a>
                                <div class="p-3 flex-grow-1 flex-shrink-1 d-flex flex-column">
                                    <div class="border-bottom pb-4 mb-4 flex-grow-1 flex-shrink-1">
                                        <a href="<?php the_permalink(); ?>" class="text-dark"><h3 class="fw-bold-600 h5"><?php the_title(); ?></h3></a>
                                        <div class="d-flex mb-2">
                                            <span class="me-2 fs-85 text-dark-emphasis">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
                                                  <g clip-path="url(#clip0_157_115)">
                                                    <path d="M8.038 3.44395C8.87441 3.44395 9.55234 2.76576 9.55234 1.9296C9.55234 1.09298 8.87441 0.415039 8.038 0.415039C7.20138 0.415039 6.52344 1.09298 6.52344 1.9296C6.52344 2.76579 7.20138 3.44395 8.038 3.44395Z" fill="#E91E3E" fill-opacity="0.5"/>
                                                    <path d="M11.3271 12.8593L10.6269 9.15953L10.3154 5.88016C10.1135 3.7055 8.00621 3.86138 6.97756 4.86888L5.26815 6.62172L3.66552 7.14075L3.35027 5.35106C3.31574 5.15553 3.12915 5.02475 2.93359 5.05903C2.73781 5.09353 2.60706 5.28016 2.64177 5.47594L2.9744 7.36469L2.9324 7.37831C2.62112 7.49285 2.45424 7.83091 2.55259 8.14778L2.56034 8.17197C2.64649 8.44991 2.91127 8.62503 3.19321 8.60791L4.50684 16.0679C4.54137 16.2634 4.72774 16.3942 4.92352 16.3596C5.11909 16.3251 5.24981 16.1388 5.21531 15.943L3.89746 8.45813L5.32706 8.13419C5.66087 8.05719 5.97799 7.91963 6.26181 7.72831L7.19306 7.10225L7.52193 9.60203C7.54587 9.78538 7.33012 10.5563 7.28106 10.7352L5.87824 15.4906C5.77165 15.8742 5.99587 16.2721 6.37943 16.3803L6.40593 16.3878C6.76862 16.4899 7.14912 16.2974 7.28106 15.9446L9.17215 11.3067L9.67359 13.414C9.74352 13.5535 9.83602 13.6798 9.94727 13.7887L12.1809 16.1601C12.4452 16.4183 12.8633 16.4298 13.141 16.1864L13.1746 16.1575C13.3166 16.0329 13.4032 15.8566 13.4145 15.6678C13.4257 15.4789 13.3612 15.2934 13.2346 15.153L11.3271 12.8593Z" fill="#E91E3E" fill-opacity="0.5"/>
                                                    <path d="M12.5993 8.90293C12.854 8.87993 13.0892 8.75668 13.2526 8.56C13.4165 8.36328 13.4954 8.10975 13.4717 7.85506L13.2618 5.58343C13.213 5.05478 12.7451 4.66509 12.2162 4.71275L11.0493 4.81815L11.4364 9.00787L12.5993 8.90293Z" fill="#E91E3E" fill-opacity="0.5"/>
                                                  </g>
                                                  <defs>
                                                    <clipPath id="clip0_157_115">
                                                      <rect width="16" height="16" fill="white" transform="translate(0 0.415039)"/>
                                                    </clipPath>
                                                  </defs>
                                                </svg>
                                                <?php echo $dificulty ?>
                                            </span>
                                            <span class="me-2 fs-85 text-dark-emphasis">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
                                                    <path d="M10.6667 9.74835V11.215L11.7333 11.8817M10.6667 1.74835V4.41502M14 5.41502V4.41502C14 4.0614 13.8595 3.72226 13.6095 3.47221C13.3594 3.22216 13.0203 3.08169 12.6667 3.08169H3.33333C2.97971 3.08169 2.64057 3.22216 2.39052 3.47221C2.14048 3.72226 2 4.0614 2 4.41502V13.7484C2 14.102 2.14048 14.4411 2.39052 14.6912C2.64057 14.9412 2.97971 15.0817 3.33333 15.0817H5.66667M2 7.08169H5.33333M5.33333 1.74835V4.41502M14.6667 11.0817C14.6667 13.2908 12.8758 15.0817 10.6667 15.0817C8.45753 15.0817 6.66667 13.2908 6.66667 11.0817C6.66667 8.87255 8.45753 7.08169 10.6667 7.08169C12.8758 7.08169 14.6667 8.87255 14.6667 11.0817Z" stroke="#E91E3E" stroke-opacity="0.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                                <?php echo PearTheme::days($dias)?>
                                            </span>
                                        </div>
                                        <div class="line-clamp-3 fs-85 text-dark-emphasi">
                                            <?php echo get_field("description"); ?>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <span class="fs-85 text-dark-emphasis"><?php echo PearTheme::lang('Price from','Precio desde','价格  起','Preço a partir de') ?>:</span>
                                            <p class="mb-0 h5 fw-bold text-primary">$<?php echo $precio ?> <span class="fs-85 text-dark-emphasis">/ <?php echo PearTheme::lang('per person','por persona','每人','por pessoa') ?></span></p>
                                        </div>
                                        <a href="<?php the_permalink(); ?>" class="home-page__buttom2">
                                            <?php echo PearTheme::lang('View Itinerary','Ver itinerario','查看行程','Ver itinerário') ?>
                                            <i class="bi bi-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php 
                         endwhile;
                         wp_reset_postdata( );
                         endif;
                        ?>
                    </div>
                    <div class="swiper-button-next position-absolute end-0 top-50 translate-middle-y"><i class="bi bi-arrow-right-circle-fill h2 text-primary m-0"></i></div>
                    <div class="swiper-button-prev position-absolute start-0 top-50 translate-middle-y"><i class="bi bi-arrow-left-circle-fill h2 text-primary m-0"></i></div>
                    <div class="swiper-pagination position-absolute start-50 bottom-0 translate-middle-x"></div>
                </div>
            </div>

            <!-- Button inca trail -->
            <div class="d-flex justify-content-center w-100">
                <a href="<?php echo  get_permalink(pll_get_post(282)); ?>" class="home-page__buttom1"><?php echo PearTheme::lang('See All Tours','Ver todos los tours','查看所有行程','Ver todos os passeios') ?><i class="bi bi-arrow-right"></i></a>
            </div>
        </div>
    </section>
    <!-- Fin Tours inca trail -->

    <!-- Categories Home -->
    <section class="py-default position-relative">
        <!-- Background -->
        <img class="p position-absolute start-0 top-0 w-100 h-100 object-fit-cover" src="<?php echo get_template_directory_uri(); ?>/assets/imagenes/fondos/Bg-sections.webp" alt="background page">

        <div class="container">
            <!-- titulo -->
            <div class="mb-45 text-center position-relative z-2">
                <span class="fw-bold text-uppercase mb-1 text-primary"><?php echo PearTheme::lang('discover','descubre','发现','descobrir') ?></span>
                <h2 class="fw-bold h3 text-uppercase mb-3">
                    <?php echo PearTheme::lang('The Best Places to Visit in Cusco and Peru','Los mejores lugares para visitar en Cusco y Perú','库斯科和秘鲁最值得游览的地方','Os melhores locais para visitar em Cusco e no Peru')?>
                </h2>
                <p>
                    <?php echo PearTheme::lang('Explore the wonders of our popular destinations','Explore las maravillas de nuestros destinos populares','探索我们热门目的地的奇妙之处','Explore as maravilhas dos nossos destinos populares')?>
                </p>
            </div>

            <!-- Categories carousel -->
            <div class="px-2 position-relative">
                    <div class="swiper mainCarousel pb-5 position-static">
                        <div class="swiper-wrapper">
                            <?php
                            $args = array(
                                'post_type' => 'page',
                                'order' => 'ASC',
                                'post__in' => array(282, 294, 290, 298)
                            );
                            $toursofperu = new WP_Query($args);
                            if ($toursofperu->have_posts()) :
                                while ($toursofperu->have_posts()) : $toursofperu->the_post();
                                
                            ?>
                            <div class="swiper-slide">
                                <div class="item_destination">
                                    <?php $imagen = get_post_meta(get_the_ID(), 'custom_field_imagen_portada', true); ?>
                                    <a href="<?php the_permalink(); ?>">
                                        <img class="w-100 hx-380 object-fit-cover rounded-4" src="<?php echo $imagen?>" alt="<?php the_title(); ?>">
                                        <div class="px-3 py-3">
                                            <h4 class="h5 text-dark fw-bold-600 m-0">
                                                <?php the_title(); ?>
                                                <i class="bi bi-arrow-right"></i>
                                            </h4>
                                        </div>
                                    </a>
                                </div>
                            </div>    
                            <?php
                            endwhile;
                                wp_reset_postdata(); 
                            else :
                                echo 'No hay publicaciones con la categoría "inca-trail".';
                            endif;
                            ?>
                        </div>
                        <div class="swiper-button-next position-absolute end-0 top-50 translate-middle-y"><i class="bi bi-arrow-right-circle-fill h2 text-primary m-0"></i></div>
                        <div class="swiper-button-prev position-absolute start-0 top-50 translate-middle-y"><i class="bi bi-arrow-left-circle-fill h2 text-primary m-0"></i></div>
                        <div class="swiper-pagination position-absolute start-50 bottom-0 translate-middle-x"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Fin Categories Home -->

    <!--  Why Choose home -->
    <section class="py-default position-relative">
        <!-- Text Why Choose -->
        <?php
            $textWhyUs = [
                [
                    'title' => PearTheme::lang('Local Experience','Experiencia Local','当地体验','Experiência local'),
                    'description' => PearTheme::lang('Our guides are locals with extensive knowledge about the history, myths, and secrets of the region.','Nuestros guías son locales con amplio conocimiento sobre la historia, mitos y secretos de la región.','我们的导游都是当地人，对该地区的历史、神话和秘密有着丰富的了解。','Nossos guias são moradores locais com amplo conhecimento sobre a história, os mitos e os segredos da região.')
                ],
                [
                    'title' => PearTheme::lang('Small Personalized Groups','Pequeños grupos personalizados','小型个性化团体','Pequenos grupos personalizados'),
                    'description' => PearTheme::lang('Our groups never exceed 10 people, giving you an unforgettable experience','Nuestros grupos nunca superan las 10 personas, brindándote una experiencia inolvidable.','我们的团体人数不超过 10 人，为您带来难忘的体验','Nossos grupos nunca excedem 10 pessoas, proporcionando uma experiência inesquecível.')
                ],
                [
                    'title' => PearTheme::lang('Our Experiences','Nuestra experiencia','我们的经验','Nossas experiências'),
                    'description' => PearTheme::lang('With seven years of experience and more than 20 packages to Machu Picchu alone, our team knows how to carry out a successful expedition.','Con siete años de experiencia y más de 20 paquetes solo a Machu Picchu, nuestro equipo sabe cómo llevar a cabo una expedición exitosa.','我们的团队拥有七年的经验，仅前往马丘比丘的旅行团就超过 20 个，他们知道如何进行一次成功的探险。','Com sete anos de experiência e mais de 20 pacotes apenas para Machu Picchu, nossa equipe sabe como realizar uma expedição bem-sucedida.')
                ],
                [
                    'title' => PearTheme::lang('Sustainable Travel','Viajes Sostenibles','可持续旅游','Viagens sustentáveis'),
                    'description' => PearTheme::lang('We believe in responsible tourism. Our tours are designed to respect the local communities and environment, ensuring a positive impact.','Creemos en el turismo responsable. Nuestros tours están diseñados para respetar las comunidades locales y el medio ambiente, asegurando un impacto positivo.','我们信奉负责任的旅游理念。我们的旅游行程尊重当地社区和环境，确保产生积极影响。','Acreditamos no turismo responsável. Nossos passeios são planejados para respeitar as comunidades locais e o meio ambiente, garantindo um impacto positivo.')
                ],
            ]
        ?>

        <div class="container">
            <!-- titulo -->
            <div class="w-lg-75 mx-auto mb-45 text-center position-relative z-2">
                <span class="fw-bold text-uppercase mb-1 text-primary">Choice</span>
                <h2 class="fw-bold h3 text-uppercase mb-3">
                    <?php echo PearTheme::lang('Why Choose Us','Por qué elegirnos','为什么选择我们','Por que nos escolher')?>
                </h2>
                <p><?php echo PearTheme::lang('At 69 Explorer, we are committed to providing an exceptional experience. Your safety, comfort, and enjoyment are our top priorities. We continuously strive to exceed expectations and ensure that every trip with us becomes a cherished memory.','En 69 Explorer, estamos comprometidos a brindar una experiencia excepcional. Su seguridad, comodidad y disfrute son nuestras principales prioridades. Nos esforzamos continuamente por superar las expectativas y garantizar que cada viaje con nosotros se convierta en un recuerdo preciado.','在 69 Explorer，我们致力于提供非凡的体验。您的安全、舒适和享受是我们的首要任务。我们不断努力超越期望，确保与我们一起的每一次旅行都成为珍贵的回忆。','Na 69 Explorer, estamos comprometidos em proporcionar uma experiência excepcional. Sua segurança, conforto e diversão são nossas principais prioridades. Nós nos esforçamos continuamente para superar as expectativas e garantir que cada viagem conosco se torne uma lembrança inesquecível.')?></p>
            </div>
             
            <!-- cards -->
            <div class="row gx-3">
                <?php $count = 1;foreach ($textWhyUs as $item): ?>
                <div class="col-sm-6 col-lg-3 mb-3 mb-lg-0">
                  <div class="bg-success px-3 py-3 d-flex flex-column align-items-center rounded-4 position-relative h-100">
                      <!-- Background -->
                      <img class="position-absolute start-0 top-0 w-100 h-100 object-fit-cover z-1" src="<?php echo get_template_directory_uri(); ?>/assets/imagenes/fondos/bg-cards.webp" alt="background page">

                      <div class="mb-3 rounded-circle px-3 py-3 bg-white">
                          <?php if($count===1){
                            echo '<svg xmlns="http://www.w3.org/2000/svg" width="26" height="28" viewBox="0 0 26 28" fill="none">
                              <path d="M21.5733 15.2157C22.0493 13.9586 22.3333 12.6741 22.3333 11.4001C22.3333 8.64184 21.2095 5.99653 19.2091 4.04613C17.2088 2.09572 14.4956 1 11.6667 1C8.83769 1 6.12458 2.09572 4.12419 4.04613C2.12381 5.99653 1 8.64184 1 11.4001C1 17.8911 8.38533 24.6512 10.8653 26.739C11.0964 26.9084 11.3776 27 11.6667 27C11.9557 27 12.237 26.9084 12.468 26.739C12.8348 26.4295 13.1962 26.114 13.552 25.7926M17 21.8003L19.6667 24.4003L25 19.2002M15.6667 11.4001C15.6667 13.5541 13.8758 15.3002 11.6667 15.3002C9.45753 15.3002 7.66667 13.5541 7.66667 11.4001C7.66667 9.24619 9.45753 7.50008 11.6667 7.50008C13.8758 7.50008 15.6667 9.24619 15.6667 11.4001Z" stroke="#E91E3E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>';
                          } ?>
                          <?php if($count===2){
                            echo '<svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                              <path d="M19.4236 16.8593C20.4904 17.4435 21.0998 18.4843 21.0234 19.5251C20.9722 20.1597 20.947 20.1857 20.1345 20.2873C19.6267 20.3636 16.4271 20.3888 13.1267 20.3888C9.39406 20.3888 5.48431 20.3125 5.20481 20.2361C4.08762 19.9566 4.697 17.9253 6.17006 16.9609C7.31244 16.2248 9.64837 15.1076 10.2837 14.98C11.1474 14.8021 11.249 14.2691 10.2837 12.5425C10.0554 12.1615 9.80112 10.9939 9.77594 9.77515C9.75075 7.79427 10.1318 6.44877 11.8584 5.78902C12.2142 5.66227 12.5693 5.61108 12.8992 5.61108C14.0416 5.61108 15.1084 6.24565 15.5398 7.18571C16.1744 8.42965 15.9209 11.756 15.2603 12.9496C14.4982 14.2951 14.5746 14.7273 15.4131 14.9556C15.9721 15.1084 17.6986 15.9209 19.4252 16.8601L19.4236 16.8593ZM5.61106 16.098C5.20481 16.3775 4.82375 16.7326 4.51906 17.0885C3.55381 17.0885 2.81769 17.0633 2.74131 17.0373C2.10675 16.8845 2.46181 15.717 3.30031 15.2091C3.93487 14.8029 5.23 14.1683 5.58587 14.092C6.04331 13.9904 6.14487 13.7109 5.58587 12.7465C5.45912 12.5433 5.30637 11.8828 5.30637 11.1978C5.28119 10.0806 5.5095 9.31852 6.47475 8.98865C7.28725 8.68396 8.20131 9.06502 8.53119 9.75077C8.86106 10.4617 8.68394 12.2898 8.32806 12.9504C7.92181 13.7377 7.99819 13.9408 8.45481 14.0676C8.55637 14.0928 8.7595 14.1943 9.039 14.3219C7.92181 14.7793 6.39837 15.617 5.61106 16.0996V16.098ZM22.3185 15.1328C22.9279 15.4626 23.2577 16.0216 23.2074 16.6058C23.1822 16.9617 23.1822 16.9869 22.7248 17.0373C22.598 17.0625 22.0138 17.0885 21.2517 17.0885C20.9218 16.657 20.4644 16.2508 19.9062 15.9713C18.8654 15.3619 17.5954 14.7013 16.6562 14.2951C16.9105 14.1935 17.1388 14.1171 17.2404 14.092C17.723 13.9904 17.7994 13.7109 17.2404 12.7465C17.1388 12.5433 16.9609 11.8828 16.9609 11.1978C16.9357 10.0806 17.1388 9.31852 18.1033 8.98865C18.9409 8.68396 19.855 9.06502 20.1597 9.75077C20.4896 10.4617 20.3628 12.2898 20.0069 12.9504C19.6007 13.7377 19.6511 13.9408 20.0833 14.0676C20.388 14.1691 21.3533 14.6266 22.3177 15.1344L22.3185 15.1328Z" fill="#E91E3E"/>
                            </svg>';
                          } ?>
                          <?php if($count===3){
                            echo '<svg xmlns="http://www.w3.org/2000/svg" width="30" height="26" viewBox="0 0 30 26" fill="none">
                              <path d="M5.81667 13.4815H15.0483C15.2852 15.1127 16.6801 16.3704 18.3833 16.3704C20.0866 16.3704 21.4815 15.1127 21.7183 13.4815H24.1833C25.3656 13.4815 26.3477 12.6302 26.5555 11.5113C28.2143 11.2946 29.5 9.89637 29.5 8.18519C29.5 6.474 28.2143 5.07578 26.5555 4.85911C26.3477 3.74015 25.3656 2.88889 24.1833 2.88889H17.8517C17.6148 1.25763 16.2199 0 14.5167 0C12.8134 0 11.4185 1.25763 11.1817 2.88889H9.15167C8.91483 1.25763 7.51993 0 5.81667 0C3.9481 0 2.43333 1.50896 2.43333 3.37037C2.43333 5.23178 3.9481 6.74074 5.81667 6.74074C7.51993 6.74074 8.91483 5.48311 9.15167 3.85185H11.1826C11.4195 5.48311 12.8144 6.74074 14.5176 6.74074C16.2209 6.74074 17.6158 5.48311 17.8526 3.85185H24.1843C24.8339 3.85185 25.3791 4.2823 25.5628 4.87067C23.9591 5.13548 22.7333 6.51348 22.7333 8.18519C22.7333 9.85689 23.9591 11.2349 25.5618 11.4997C25.3781 12.0881 24.8329 12.5185 24.1833 12.5185H21.7183C21.4815 10.8873 20.0866 9.62963 18.3833 9.62963C16.6801 9.62963 15.2852 10.8873 15.0483 12.5185H5.81667C4.63443 12.5185 3.6523 13.3698 3.44447 14.4887C1.78567 14.7054 0.5 16.1036 0.5 17.8148C0.5 19.526 1.78567 20.9242 3.44447 21.1409C3.6523 22.2599 4.63443 23.1111 5.81667 23.1111H8.28167C8.5185 24.7424 9.9134 26 11.6167 26C13.3199 26 14.7148 24.7424 14.9517 23.1111H20.8493C21.0861 24.7424 22.481 26 24.1843 26C26.0529 26 27.5676 24.491 27.5676 22.6296C27.5676 20.7682 26.0519 19.2593 24.1833 19.2593C22.4801 19.2593 21.0852 20.5169 20.8483 22.1481H14.9517C14.7148 20.5169 13.3199 19.2593 11.6167 19.2593C9.9134 19.2593 8.5185 20.5169 8.28167 22.1481H5.81667C5.16707 22.1481 4.62187 21.7177 4.4382 21.1293C6.04093 20.8645 7.26667 19.4865 7.26667 17.8148C7.26667 16.1431 6.04093 14.7651 4.4382 14.5003C4.62187 13.9119 5.16707 13.4815 5.81667 13.4815ZM5.81667 4.81482C5.01723 4.81482 4.36667 4.16674 4.36667 3.37037C4.36667 2.574 5.01723 1.92593 5.81667 1.92593C6.6161 1.92593 7.26667 2.574 7.26667 3.37037C7.26667 4.16674 6.6161 4.81482 5.81667 4.81482ZM14.5167 4.81482C13.7172 4.81482 13.0667 4.16674 13.0667 3.37037C13.0667 2.574 13.7172 1.92593 14.5167 1.92593C15.3161 1.92593 15.9667 2.574 15.9667 3.37037C15.9667 4.16674 15.3161 4.81482 14.5167 4.81482ZM24.6667 8.18519C24.6667 7.38881 25.3172 6.74074 26.1167 6.74074C26.9161 6.74074 27.5667 7.38881 27.5667 8.18519C27.5667 8.98156 26.9161 9.62963 26.1167 9.62963C25.3172 9.62963 24.6667 8.98156 24.6667 8.18519ZM18.3833 11.5556C19.1828 11.5556 19.8333 12.2036 19.8333 13C19.8333 13.7964 19.1828 14.4444 18.3833 14.4444C17.5839 14.4444 16.9333 13.7964 16.9333 13C16.9333 12.2036 17.5839 11.5556 18.3833 11.5556ZM24.1833 21.1852C24.9828 21.1852 25.6333 21.8333 25.6333 22.6296C25.6333 23.426 24.9828 24.0741 24.1833 24.0741C23.3839 24.0741 22.7333 23.426 22.7333 22.6296C22.7333 21.8333 23.3839 21.1852 24.1833 21.1852ZM11.6167 21.1852C12.4161 21.1852 13.0667 21.8333 13.0667 22.6296C13.0667 23.426 12.4161 24.0741 11.6167 24.0741C10.8172 24.0741 10.1667 23.426 10.1667 22.6296C10.1667 21.8333 10.8172 21.1852 11.6167 21.1852ZM5.33333 17.8148C5.33333 18.6112 4.68277 19.2593 3.88333 19.2593C3.0839 19.2593 2.43333 18.6112 2.43333 17.8148C2.43333 17.0184 3.0839 16.3704 3.88333 16.3704C4.68277 16.3704 5.33333 17.0184 5.33333 17.8148Z" fill="#E91E3E"/>
                            </svg>';
                          } ?>
                          <?php if($count===4){
                            echo '<svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                              <g clip-path="url(#clip0_264_1723)">
                                <path d="M19.6907 6.86597C19.1142 6.2341 18.4404 5.67226 17.6743 5.20512C15.6944 3.99775 13.4359 3.62491 11.3116 3.98607C11.1235 4.01806 10.9365 4.05614 10.7508 4.09956C10.5008 4.15801 10.2531 4.22646 10.0086 4.30543C8.80109 4.69518 7.66999 5.33248 6.69926 6.19652C6.03321 6.78934 5.44247 7.4885 4.95477 8.28825C4.77592 8.58157 4.61601 8.88112 4.47347 9.1853C2.49828 13.3996 3.97439 18.5299 8.03795 21.0077C8.09528 21.0427 8.15318 21.0756 8.21102 21.1091C9.53915 21.8806 10.9848 22.2839 12.4275 22.3484C12.5654 22.3545 12.7032 22.3588 12.8409 22.3588C13.6666 22.3588 14.4872 22.2474 15.28 22.0322C15.8183 21.8862 16.3436 21.6923 16.849 21.4515C16.8829 21.4353 16.9167 21.4185 16.9505 21.4019C18.4742 20.6529 19.81 19.4783 20.7575 17.9246C21.3085 17.0209 21.6852 16.0592 21.8981 15.0788C22.5315 12.1633 21.7124 9.08201 19.6907 6.86597ZM9.16713 16.9704L9.65544 19.8241C9.42657 19.7145 9.20191 19.593 8.98233 19.4592C5.68658 17.4494 4.50769 13.2696 6.15879 9.86481L8.32832 11.1065C9.04053 11.514 9.39813 12.3545 9.19785 13.1504C9.14514 13.3599 9.20227 13.5788 9.3508 13.7359L9.41844 13.8075C10.0731 14.4997 10.0856 15.5958 9.44668 16.3028L9.32028 16.4427C9.19023 16.5867 9.13437 16.7791 9.16713 16.9704ZM8.60025 8.74315C8.509 8.79449 8.40678 8.82085 8.30374 8.82085C8.25433 8.82085 8.20482 8.8148 8.15622 8.80257L7.00374 8.51255C8.25489 6.91609 10.0682 5.94835 11.9865 5.7205L11.7225 6.76969C11.682 6.93051 11.5773 7.06773 11.4327 7.14903L8.60025 8.74315ZM14.6089 20.3377C13.6905 20.5603 12.7571 20.6062 11.8481 20.4822L11.7096 19.6369C11.6651 19.3653 11.8096 19.0979 12.0612 18.9864L12.6439 18.7282C13.6105 18.2997 14.7398 18.6258 15.329 19.5037L15.6401 19.9672L15.6986 19.9841C15.348 20.1282 14.9842 20.2467 14.6089 20.3377ZM19.9348 15.4L19.5492 15.0309C19.2919 14.7845 18.9547 14.6552 18.5979 14.6665C18.2418 14.6779 17.913 14.8286 17.6718 15.0909C17.2963 15.4993 16.7884 15.7761 16.2415 15.8702L14.7202 16.132C14.62 16.1492 14.5194 16.1577 14.4195 16.1577C14.0054 16.1577 13.6025 16.0119 13.2809 15.7395C12.8817 15.4014 12.6544 14.9075 12.6571 14.3844L12.6642 13.0149C12.6657 12.7292 12.5719 12.4461 12.4002 12.2177L11.6103 11.1672C11.4605 10.968 11.4483 10.6973 11.5796 10.4854L12.8276 8.47162C12.9334 8.3008 13.1173 8.19375 13.3181 8.18593L16.2089 8.07375L17.1584 7.03609C19.8418 8.93536 20.9209 12.3566 19.9348 15.4Z" fill="#E91E3E"/>
                                <path d="M22.3653 3.50345L22.1357 3.75146C19.6869 1.3323 16.4431 0 13 0C9.84354 0 6.79986 1.14527 4.4297 3.22476C1.61459 5.69486 0 9.25778 0 13C0 13.5009 0.406098 13.907 0.906953 13.907C1.40786 13.907 1.81391 13.5009 1.81391 13C1.81391 9.77991 3.20333 6.71399 5.626 4.58834C7.66518 2.79922 10.284 1.81396 13 1.81396C15.9666 1.81396 18.7613 2.96329 20.8694 5.05009C20.8807 5.06127 20.8928 5.07107 20.9046 5.08153L20.6354 5.37235C20.2954 5.7396 20.5787 6.33364 21.078 6.30053L22.7484 6.18998C23.0321 6.17124 23.2554 5.94054 23.265 5.65647L23.3246 3.89807C23.342 3.38579 22.7135 3.12726 22.3653 3.50345Z" fill="#E91E3E"/>
                                <path d="M25.0929 12.093C24.592 12.093 24.186 12.4991 24.186 13C24.186 15.7443 23.1825 18.3836 21.3605 20.4318C19.2379 22.8177 16.1906 24.186 12.9999 24.186C10.2841 24.186 7.66542 23.2009 5.62635 21.412C5.59324 21.3829 5.55815 21.3578 5.5223 21.3343L5.75183 21.0864C5.81236 21.021 5.85278 20.9483 5.87614 20.8733C5.98365 20.5273 5.71953 20.131 5.30917 20.1581L4.40608 20.2178L3.63877 20.2686C3.35511 20.2873 3.13177 20.518 3.12217 20.8021L3.06261 22.5605C3.04524 23.0729 3.67366 23.3314 4.02187 22.9552L4.30858 22.6455C4.34417 22.6918 4.3846 22.7355 4.4302 22.7755C6.80016 24.8549 9.84368 26 12.9999 26C16.708 26 20.2493 24.4099 22.7157 21.6376C24.8335 19.2568 25.9999 16.1894 25.9999 13C25.9999 12.4991 25.5938 12.093 25.0929 12.093Z" fill="#E91E3E"/>
                              </g>
                              <defs>
                                <clipPath id="clip0_264_1723">
                                  <rect width="26" height="26" fill="white"/>
                                </clipPath>
                              </defs>
                            </svg>';
                          } ?>
                      </div>

                      <h3 class="h5 text-white mb-2 text-center z-2"><?= $item['title']; ?></h3>
                      <p class="text-white fs-93 text-center z-2"><?= $item['description']; ?></p>
                  </div>
                </div>
                <?php $count++; ?>
                <?php endforeach; ?>
            </div>

        </div>

    </section>
    <!-- Fin Why Choose home -->

    <!-- Sustainable Home -->
    <div class="content_sustainable mt-0"
        style="background-image: url('<?php echo esc_url(wp_get_attachment_image_url(322, 'full')); ?>');">
        <div class="sustainable_row py-5 ">
            <div class="item_sustainable">
                <h2>
                    <?php echo PearTheme::lang('Sustainable Ecotourism in the Andes: Connecting with Nature and Culture','Ecoturismo sostenible en los Andes: conectando con la naturaleza y la cultura','安第斯山脉的可持续生态旅游：连接自然与文化','Ecoturismo sustentável nos Andes: conectando-se com a natureza e a cultura')?>
                </h2>
                <p>
                    <?php echo PearTheme::lang('Collaborative initiatives preserve biodiversity, empower locals, and embrace responsible ecotourism, fostering harmony between nature and thriving communities.','Las iniciativas colaborativas preservan la biodiversidad, empoderan a los lugareños y adoptan el ecoturismo responsable, fomentando la armonía entre la naturaleza y las comunidades prósperas.','合作举措保护生物多样性、增强当地人的权利、倡导负责任的生态旅游，促进自然与繁荣社区之间的和谐。','Iniciativas colaborativas preservam a biodiversidade, empoderam os habitantes locais e adotam o ecoturismo responsável, promovendo a harmonia entre a natureza e comunidades prósperas.')?>
                </p>
            </div>
        </div>
    </div>
    <!-- Fin Sustainable Home -->
    
    <!-- Reviews -->
    <?php get_template_part('/template/reviews','reviews') ?>
    <!-- Fin Reviews -->

    <!-- Blogs -->
    <section class="py-default position-relative">
        <!-- Background -->
        <img class="p position-absolute start-0 top-0 w-100 h-100 object-fit-cover" src="<?php echo get_template_directory_uri(); ?>/assets/imagenes/fondos/Bg-sections.webp" alt="background page">

        <div class="container">
            <!-- titulo -->
            <div class="w-lg-75 mx-auto mb-45 text-center position-relative z-2">
                <span class="fw-bold text-uppercase mb-1 text-primary"><?php echo PearTheme::lang('INSIGTH','INFORMACIÓN','洞察','VISÃO') ?></span>
                <h2 class="fw-bold h3 text-uppercase mb-3">
                    <?php echo PearTheme::lang('View All Post','Ver todas las publicaciones','查看所有帖子','Ver todas as publicações') ?>
                </h2>
                <p class="mb-3"><?php echo PearTheme::lang('Explore the wonders of our popular blogs','Explore las maravillas de nuestros blogs populares','探索我们热门博客的精彩内容','Explore as maravilhas dos nossos blogs populares')?></p>
            </div>

            <!-- Blog cards -->
            <div class="row gy-3 gx-3 mb-45">
                <?php
                    $args = array(
                        'post_type' => 'blog',
                        'posts_per_page' => 4,
                        'order' => 'DESC'
                    );
                    $toursofperu = new WP_Query($args);
                    if ($toursofperu->have_posts()) :
                        while ($toursofperu->have_posts()) : $toursofperu->the_post();
                ?>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="border rounded-4 gx-3 px-2 py-2 bg-white">
                        <figure class="mb-0">
                            <?php the_post_thumbnail('large',array('class'=>'w-100 hx-200 object-fit-cover rounded-3')) ?>
                        </figure>
                        <div class="px-2 py-2 flex-column">
                            <h3 class="fw-bold-600 h6 line-clamp-3"><a href="<?php the_permalink() ?>" class="fw-bold-600 h6"><?php the_title() ?></a></h3>
                            <div class="mb-3">
                                <span class="fs-85 text-dark-emphasis"><i class="bi bi-calendar-check mb-3 text-primary"></i> <?php echo get_the_date() ?></span>
                            </div>
                            <a href="<?php the_permalink() ?>" class="home-page__buttom2">
                                <?php echo PearTheme::lang('See more','Ver mas','查看更多','Ver mais')?> <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <?php
                    endwhile;
                    wp_reset_postdata(); 
                    endif;
                ?>
            </div>

            <!-- Blogs Link -->
            <div class="d-flex w-100 justify-content-center">
                <a href="<?php echo get_permalink(pll_get_post(335)); ?>" class="home-page__buttom1">
                    <?php echo PearTheme::lang('View All Blogs','Ver todos los blogs','查看所有博客','Ver todos os blogs') ?> 
                    <i class="bi bi-arrow-right"></i>
                </a>
            </div>

        </div>
    </section>
    <!-- Fin Blogs -->

</main>