<main class="home-page">

    <!-- Banner -->
    <section class="wrapper-banner-home-page position-relative">
        <span class="background-banner position-absolute top-0 start-0 end-0 bottom-0"></span>

        <?php echo wp_get_attachment_image(2021,'full-size ', null,array('class'=>'img-banner-home img-cover') ) ?>

        <div class="container position-relative h-100 w-100">
            <div class="content-columns-banner-home container position-absolute top-50 start-50 top-50 translate-middle pb-5">
                <div class="w-100 w-lg-75 mx-auto">
                    <div class="content-title-home-page">
                        <div class="container">
                            <div class="col-md-12">
                                <h1 class="text-white mb-3 text-center">
                                    <?php echo PearTheme::lang('Budget Friendly Tours & Treks to Machu Picchu','Excursiones y caminatas económicas a Machu Picchu','前往马丘比丘的廉价旅游和徒步旅行','Excursões e caminhadas econômicas a Machu Picchu') ?>
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

            <div class="position-absolute bottom-0 start-0 p-2 p-md-5 d-none d-sm-block">
                <a href="https://www.tripadvisor.com.pe/Attraction_Review-g294314-d27140492-Reviews-69_Explorer_Peru-Cusco_Cusco_Region.html" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/imagenes/iconos/travelers-choice-69explorer.png" alt="tripadvisor" class="w-auto hx-100"></a>
            </div>
        </div>
    </section>
    <!-- Fin Banner -->

    <!-- About us -->
    <section class="bg-section py-default position-relative">
        <div class="container">
            <div class="d-flex align-items-center px-0 px-sm-2 px-lg-5 flex-wrap flex-md-nowrap">
                <div class="d-flex justify-content-center w-100 order-2 order-md-1">
                    <div class="position-relative w-auto">
                        <?php echo wp_get_attachment_image(5913, 'full', false, ['class' => 'wx-480 hx-480 wx-responsive hx-responsive rounded-circle object-fit-cover position-relative z-2']); ?>
                        <span class="wx-480 hx-480 wx-responsive hx-responsive rounded-circle bg-primary position-absolute top-9 start-0 z-1"></span>
                        <?php echo wp_get_attachment_image(4844, 'full', false, ['class' => 'wx-130 h-auto z-3 position-absolute top-100 start-50 translate-middle px-3 py-2 bg-white rounded-3']); ?>
                    </div>
                </div>

                <div class="px-0 px-sm-2 px-lg-5 order-1 order-md-2 mb-3 mb-md-0">
                    <div class="mb-4 home-page__title home-page__list">
                        <?php the_content(); ?>
                    </div>
                    <a href="<?php echo  get_permalink(pll_get_post(333)); ?>" class="home-page__buttom1">
                        <?php echo PearTheme::lang('Learn more about us','Más información sobre nosotros','了解更多关于我们','Saiba mais sobre nós')?> 
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
                    <!--  day tours -->
                    <li class="m-2 m-lg-0" role="presentation">
                        <button
                            class="categories-tour__button active py-2 px-3 rounded-3 fw-bold-600"
                            id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button"
                            role="tab" aria-controls="pills-contact" aria-selected="true">
                            <?php echo PearTheme::lang('Day Tours','Tours de un Dia','一日游','Excursões de um dia') ?>
                            <i class="bi bi-arrow-right"></i>
                        </button>
                    </li>
                    <!-- inca trail -->
                    <li class="m-2 m-lg-0 ms-lg-3 mb-2" role="presentation">
                        <button
                            class="categories-tour__button py-2 px-3 rounded-3 fw-bold-600"
                            id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab"
                            aria-controls="pills-home" aria-selected="false">
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
                    <!--  Others route -->
                </ul>
            </div>

            <!-- categorias -->
            <div class="tab-content" id="pills-tabContent">
                <!-- content Day tours -->
                <div class="tab-pane fade show active" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab"
                    tabindex="0">
                    <div class="w-lg-75 mb-5 text-center m-auto">
                        <p class="fs-6"><?php echo PearTheme::lang('Around the Cusco region there are many and varied things to do and see. A great start is a Cusco City tour, where you will discover the history of this fascinating Inca City. Travel further afield and tour the beautiful Sacred Valley of the Incas, this truly spectacular part of Peru will blow you away with its history and beauty. Take a day tour to Rainbow Mountain for an experience that you will not soon forget. The pinnacle of any Peruvian tour would have to be a day tour to the Inca Citadel of Machu Picchu, the most talked about tour in Peru.','En la región de Cusco hay muchas y variadas cosas para hacer y ver. Un buen comienzo es un tour por la ciudad de Cusco, donde descubrirás la historia de esta fascinante ciudad inca. Viaja más lejos y recorre el hermoso Valle Sagrado de los Incas, esta parte verdaderamente espectacular de Perú te dejará boquiabierto con su historia y belleza. Haz un tour de un día a la Montaña de Colores para vivir una experiencia que no olvidarás fácilmente. El punto culminante de cualquier tour peruano sería un tour de un día a la Ciudadela Inca de Machu Picchu, el tour del que más se habla en Perú.','库斯科地区有很多不同的事情可做可看。库斯科城市之旅是开始游览的好地方，您将在那里发现这座迷人的印加城市的历史。再远一点，参观美丽的印加圣谷，这是秘鲁真正壮观的地区，其历史和美景将让您惊叹不已。前往彩虹山一日游，享受难忘的体验。秘鲁之旅的巅峰必须是前往印加城堡马丘比丘的一日游，这是秘鲁最受关注的旅游项目。','Na região de Cusco, há muitas e variadas coisas para fazer e ver. Um ótimo começo é um passeio pela cidade de Cusco, onde descobrirá a história desta fascinante cidade inca. Viaje mais longe e visite o belo Vale Sagrado dos Incas, esta parte verdadeiramente espetacular do Peru irá impressioná-lo com a sua história e beleza. Faça um passeio de um dia à Montanha Arco-Íris para uma experiência que não esquecerá tão cedo. O ponto alto de qualquer passeio pelo Peru seria um passeio de um dia à cidadela inca de Machu Picchu, o passeio mais comentado do Peru.') ?>
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
                                                <div class="line-clamp-3 fs-95 text-dark-emphasi">
                                                    <?php
                                                        $description = get_field('description');
                                                        $description = preg_replace('/<(h2|h3)\b[^>]*>.*?<\/\1>/is', '', $description);
                                                        echo $description;
                                                    ?>
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

                <!--  content Alternatives treks -->
                <div class="tab-pane fade" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"
                    tabindex="0">
                    <div class="w-lg-75 mb-5 text-center m-auto">
                        <p class="fs-6">
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
                                                <div class="line-clamp-3 fs-95 text-dark-emphasi">
                                                    <?php
                                                        $description = get_field('description');
                                                        $description = preg_replace('/<(h2|h3)\b[^>]*>.*?<\/\1>/is', '', $description);
                                                        echo $description;
                                                    ?>
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
                        <p class="fs-6"><?php echo PearTheme::lang('Machu Picchu, the most popular destination in South America and what most people visit Peru to see. There are several ways to visit the magnificent site, the most popular being a trip on one of the fabulous trains, either as a day tour or an overnight tour. Another popular choice is to combine a tour to Machu Picchu with the other attractions around Cusco like the Sacred Valley or Rainbow Mountain. Becoming a popular way to visit for those who like a challenge, is one of the many treks through the Andes that finish in Machu Picchu.','Machu Picchu, el destino más popular de Sudamérica y el lugar que la mayoría de la gente visita en Perú. Hay varias formas de visitar este magnífico lugar, la más popular es un viaje en uno de los fabulosos trenes, ya sea como una excursión de un día o una excursión de una noche. Otra opción popular es combinar una excursión a Machu Picchu con otras atracciones alrededor de Cusco, como el Valle Sagrado o la Montaña Arcoíris. Una de las muchas caminatas por los Andes que terminan en Machu Picchu se está convirtiendo en una forma popular de visitar para aquellos que buscan un desafío.','马丘比丘是南美洲最受欢迎的目的地，也是大多数人前往秘鲁游览的景点。游览这个壮丽景点的方式有很多种，最受欢迎的是乘坐一列神奇的火车，可以一日游或过夜游。另一个受欢迎的选择是将马丘比丘之旅与库斯科周围的其他景点（如圣谷或彩虹山）结合起来。对于那些喜欢挑战的人来说，马丘比丘是众多穿越安第斯山脉并以马丘比丘为终点的徒步旅行之一，也成为一种受欢迎的游览方式。','Machu Picchu, o destino mais popular da América do Sul e o que a maioria das pessoas visita no Peru. Existem várias maneiras de visitar este magnífico local, sendo a mais popular uma viagem num dos fabulosos comboios, seja numa excursão de um dia ou numa excursão com pernoite. Outra opção popular é combinar uma excursão a Machu Picchu com outras atrações ao redor de Cusco, como o Vale Sagrado ou a Montanha Arco-Íris. Uma forma popular de visitar o local para aqueles que gostam de desafios é uma das muitas caminhadas pelos Andes que terminam em Machu Picchu.') ?>
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
                                                <div class="line-clamp-3 fs-95 text-dark-emphasi">
                                                    <?php
                                                        $description = get_field('description');
                                                        $description = preg_replace('/<(h2|h3)\b[^>]*>.*?<\/\1>/is', '', $description);
                                                        echo $description;
                                                    ?>
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
            </div>
            
        </div>
    </section>
    <!-- Fin Tours de varias categorias -->

    <!-- Tours inca trail -->
    <section class="py-default position-relative pt-5">
        <span class="w-100 hx-600 object-fit-cover position-absolute top-0 start-0 z-1 filter-5"  style="background-image: url(<?php echo wp_get_attachment_url(6062); ?>);"></span>
        <span class="pt-5 d-block"></span>
        <div class="container position-relative z-2 pt-5 mt-5">
            <!-- titulo -->
            <div class="mb-45 text-center text-white ">
                <span class="fw-bold text-uppercase text-white mb-1"><?php echo PearTheme::lang('discover','descubre','发现','DESCUBRA') ?></span>
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
                                        <div class="line-clamp-3 fs-95 text-dark-emphasi">
                                            <?php
                                                $description = get_field('description');
                                                $description = preg_replace('/<(h2|h3)\b[^>]*>.*?<\/\1>/is', '', $description);
                                                echo $description;
                                            ?>
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
    <section class="bg-section py-default position-relative">
        <div class="container">
            <!-- titulo -->
            <div class="mb-45 text-center position-relative z-2">
                <span class="fw-bold text-uppercase mb-1 text-primary"><?php echo PearTheme::lang('discover','descubre','发现','DESCUBRA') ?></span>
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
                                        <img class="w-100 hx-380 object-fit-cover rounded-4" src="<?php echo $imagen?>" alt="<?php echo PearTheme::lang('Category image','Imagen de categoría','分类图片','Imagem da categoria')?>">
                                        <div class="px-3 py-3">
                                            <h3 class="h5 text-dark fw-bold-600 m-0">
                                                <?php the_title(); ?>
                                                <i class="bi bi-arrow-right"></i>
                                            </h3>
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

    <!-- Join 69 Explorer -->
    <section class="py-default position-relative">
      <div class="container-xxl">
        <!-- titulo -->
        <div class="mb-45 text-center position-relative z-2">
            <span class="fw-bold text-uppercase mb-1 text-primary"><?php echo PearTheme::lang('EXPERIENCE PERU','EXPERIMENTA PERÚ','体验秘鲁','EXPERIENCIE O PERU') ?></span>
            <h2 class="fw-bold h3 text-uppercase mb-3"><?php echo PearTheme::lang('JOIN 69 EXPLORER FOR AN UNFORGETTABLE JOURNEY','ÚNETE A 69 EXPLORER PARA UN VIAJE INOLVIDABLE','加入69号探险者，开启难忘之旅','JUNTE-SE AO 69 EXPLORER PARA UMA VIAGEM INESQUECÍVEL') ?></h2>
            <p><?php echo PearTheme::lang('At 69 Explorer, we are committed to providing an exceptional experience. Your safety, comfort and enjoyment are our top priorities.','En 69 Explorer, nos comprometemos a ofrecerte una experiencia excepcional. Tu seguridad, comodidad y disfrute son nuestras principales prioridades.','在69 Explorer，我们致力于提供非凡的体验。您的安全、舒适与愉悦始终是我们的首要任务。','Na 69 Explorer, estamos comprometidos em proporcionar uma experiência excepcional. Sua segurança, conforto e diversão são nossas principais prioridades.') ?></p>
        </div>

        <div class="row gx-4 gy-4">
            <div class="col-12 col-lg-5">
                <?php echo wp_get_attachment_image(5916, 'full', false, ['class' => 'w-100 h-auto rounded-3 object-fit-cover max-h-580']); ?>
            </div>
            <div class="col-12 col-lg-7">
                <div class="row mb-3">
                    <div class="col-12 col-md-6">
                        <ul class="p-0">
                            <li class="li list-style-none border-start border-primary border-3 px-2 py-2 mb-3" style="background: rgba(235, 0, 0, 0.03);"><?php echo PearTheme::lang('100% Locally Owned and Operated','100 % de propiedad y gestión local','100%本地拥有和运营','100% de propriedade e operação locais'); ?></li>
                            <li class="li list-style-none border-start border-primary border-3 px-2 py-2 mb-3" style="background: rgba(235, 0, 0, 0.03);"><?php echo PearTheme::lang('3+ Years of Experience in the Budget Tourism Segment','Más de 3 años de experiencia en el segmento del turismo económico.','在经济型旅游领域拥有3年以上经验','Mais de 3 anos de experiência no segmento de turismo econômico'); ?></li>
                            <li class="li list-style-none border-start border-primary border-3 px-2 py-2 mb-3" style="background: rgba(235, 0, 0, 0.03);"><?php echo PearTheme::lang('Knowledgeable Local Staff ready to deliver the Best Service','Personal local experto dispuesto a ofrecer el mejor servicio.','经验丰富的本地员工随时为您提供最优质的服务','Equipe local experiente e pronta para oferecer o melhor serviço'); ?></li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-6">
                        <ul class="p-0">
                            <li class="li list-style-none border-start border-primary border-3 px-2 py-2 mb-3" style="background: rgba(235, 0, 0, 0.03);"><?php echo PearTheme::lang('Best Value Group Tours and Treks','Excursiones y trekkings en grupo con la mejor relación calidad-precio','超值团体旅游与徒步之旅','Excursões e caminhadas em grupo com a melhor relação custo-benefício'); ?></li>
                            <li class="li list-style-none border-start border-primary border-3 px-2 py-2 mb-3" style="background: rgba(235, 0, 0, 0.03);"><?php echo PearTheme::lang('Best Value Tailored Tours and Treks','Excursiones y rutas de senderismo personalizadas con la mejor relación calidad-precio','超值定制旅行与徒步之旅','Excursões e caminhadas personalizadas com a melhor relação custo-benefício'); ?></li>
                        </ul>
                    </div>
                </div>
                <div class="mb-45">
                    <!-- titulo 2 -->
                    <div class="mb-4 text-center text-lg-start text-xxl-start position-relative z-2">
                        <span class="fw-bold text-uppercase mb-1 text-primary">69 Explorer</span>
                        <h3 class="fw-bold h4 text-uppercase mb-3"><?php echo PearTheme::lang('Why Choose us?','¿Por qué elegirnos?','为什么选择我们？','Por que nos escolher?'); ?></h3>
                        <p><?php echo PearTheme::lang('We are specialists in the Budget Tourism Segment, delivering the Best Value experiences without sacrificing top quality and service.','Somos especialistas en el segmento del turismo económico y ofrecemos las mejores experiencias sin sacrificar la máxima calidad y el mejor servicio.','我们专注于经济型旅游领域，致力于提供物超所值的体验，同时确保顶级品质与服务。','Somos especialistas no segmento de turismo econômico, oferecendo as melhores experiências em termos de custo-benefício, sem sacrificar a qualidade e o serviço de excelência.'); ?></p>
                    </div>
                    <div class="row gx-2 gy-3">
                        <div class="col-12 col-md-6">
                            <div class="d-flex align-items-start rounded-2">
                                <div class="bg-primary px-2 py-1 rounded-2 fs-4">
                                    <i class="bi bi-journal-check text-white"></i>
                                </div>
                                <div class="px-2 py-0">
                                    <h4 class="h6 fw-bold-600 mb-1"><?php echo PearTheme::lang('Superior Service','Servicio superior','卓越服务','Serviço de excelência'); ?></h4>
                                    <p><?php echo PearTheme::lang('Attention to detail and focus on the best experience possible.','Atención al detalle y enfoque en la mejor experiencia posible.','注重细节，致力于提供最佳体验。','Atenção aos detalhes e foco na melhor experiência possível.'); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="d-flex align-items-start rounded-2">
                                <div class="bg-primary px-2 py-1 rounded-2 fs-4">
                                    <i class="bi bi-journal-check text-white"></i>
                                </div>
                                <div class="px-2 py-0">
                                    <h4 class="h6 fw-bold-600 mb-1"><?php echo PearTheme::lang('Inca Trail Specialists','Especialistas en el Camino Inca','印加古道专家','Especialistas na Trilha Inca'); ?></h4>
                                    <p><?php echo PearTheme::lang('Machu Picchu and Inca Trail Specialists','Especialistas en Machu Picchu y el Camino Inca','马丘比丘与印加古道专家','Especialistas em Machu Picchu e Trilha Inca'); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="d-flex align-items-start rounded-2">
                                <div class="bg-primary px-2 py-1 rounded-2 fs-4">
                                    <i class="bi bi-journal-check text-white"></i>
                                </div>
                                <div class="px-2 py-0">
                                    <h4 class="h6 fw-bold-600 mb-1"><?php echo PearTheme::lang('Local Impact','Impacto local','本地影响','Impacto local'); ?></h4>
                                    <p><?php echo PearTheme::lang('We believe in Tourism as a Local Economy Developer','Creemos en el turismo como motor del desarrollo económico local.','我们相信旅游业是地方经济的发展引擎','Acreditamos no turismo como impulsionador da economia local.'); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="d-flex align-items-start rounded-2">
                                <div class="bg-primary px-2 py-2 rounded-2 fs-4">
                                    <i class="bi bi-journal-check text-white"></i>
                                </div>
                                <div class="px-2 py-0">
                                    <h4 class="h6 fw-bold-600 mb-1"><?php echo PearTheme::lang('Small groups','Grupos pequeños','小团体','Pequenos grupos'); ?></h4>
                                    <p><?php echo PearTheme::lang('Personalized experiences for the Best Enjoyment','Experiencias personalizadas para disfrutar al máximo','专属定制体验，尽享极致愉悦','Experiências personalizadas para o melhor entretenimento'); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-45 text-center text-lg-start">
                    <a href="<?php echo  get_permalink(pll_get_post(333)); ?>" class="home-page__buttom1">
                        <?php echo PearTheme::lang('Learn more about us','Más información sobre nosotros','了解更多关于我们','Saiba mais sobre nós')?> 
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
      </div>
    </section>
    <!-- End Join 69 Explorer -->

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
    <section class="bg-section py-default position-relative">
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
                    <div class="border rounded-4 gx-3 px-2 py-2 bg-white d-flex flex-column h-100">
                        <figure class="mb-0">
                            <?php the_post_thumbnail('large',array('class'=>'w-100 hx-200 object-fit-cover rounded-3')) ?>
                        </figure>
                        <div class="px-2 py-2 flex-column flex-grow-1 flex-shrink-1 d-flex flex-column">
                            <div class="mb-3 flex-grow-1 flex-shrink-1 ">
                                <h3 class="fw-bold-600 h6 line-clamp-3mb-1"><a href="<?php the_permalink() ?>" class="fw-bold-600 h6"><?php the_title() ?></a></h3>
                                <span class="fs-85 text-dark-emphasis"><i class="bi bi-calendar-check mb-3 text-primary"></i> <?php echo get_the_date() ?></span>
                            </div>
                            <a href="<?php the_permalink() ?>" class="home-page__buttom2 text-center" aria-label="Read more about this article">
                                <?php echo PearTheme::lang('Read full article','Leer artículo completo','阅读全文','Leia o artigo completo')?> <i class="bi bi-arrow-right"></i>
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