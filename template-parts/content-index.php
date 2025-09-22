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
                                <a class="btn bg-primary text-white py-2 px-4 fw-bold-600" href="<?php echo  get_permalink(pll_get_post(282)); ?>">
                                    <?php echo PearTheme::lang('Treks to Machu Picchu','Caminatas a Machu Picchu','马丘比丘徒步之旅','Caminhadas até Machu Picchu') ?>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewBox="0 0 17 16" fill="none">
                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M12.2661 7.49958L9.02693 4.35852L9.72307 3.64062L14.2183 7.99958L9.72307 12.3585L9.02693 11.6406L12.2661 8.49958H2.5V7.49958H12.2661Z" fill="white"/>
                                    </svg>
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

    
    <!-- tours de varias categorias -->
    <div class="position-relative content-svg-banner">
        <svg class="position-absolute w-100 h-auto" xmlns="http://www.w3.org/2000/svg" width="1838" height="107" viewBox="0 0 1838 107" fill="none">
          <path d="M513.207 8.94656C519.169 3.2066 527.124 0 535.4 0H1309.67C1317.9 0 1325.82 3.17632 1331.78 8.86793L1380.22 55.1754C1386.18 60.867 1394.1 64.0433 1402.33 64.0433H1838V107H0V64.5H442.6C450.876 64.5 458.831 61.2934 464.793 55.5534L513.207 8.94656Z" fill="white"/>
        </svg>
    </div>

    <section class="categories-tour mb-5 position-relative">
        <div class="text-center mb-4">
            <div class="mb-2">
                <span class="fw-bold text-uppercase text-secondary bg-light rounded-3 px-3 py-2"><?php echo PearTheme::lang('Choose your destination','Elige tu destino','选择您的目的地','Escolha o seu destino') ?></span>
            </div>
            <h2 class="fw-bold h3 text-uppercase">
                <?php echo PearTheme::lang('Unique Adventures in Cusco','Aventuras Únicas en Cusco','库斯科的独特冒险','Aventuras únicas em Cusco') ?>
            </h2>
        </div>
        <div class="container" >
            <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
                <!-- inca trail -->
                <li class="m-auto m-lg-0 mb-2" role="presentation">
                    <button
                        class="categories-tour__button active py-2 px-3 rounded-3"
                        id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab"
                        aria-controls="pills-home" aria-selected="true">
                        <?php echo PearTheme::lang('Alternative Tours','Tours Alternativos','另类旅游','Excursões alternativas') ?>
                        <i class="bi bi-arrow-right"></i>
                    </button>
                </li>
                <!--  tour to machu picchu -->
                <li class="m-auto m-lg-0 ms-lg-3 mb-2" role="presentation">
                    <button
                        class="categories-tour__button py-2 px-3 rounded-3"
                        id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button"
                        role="tab" aria-controls="pills-profile" aria-selected="false">
                        <?php echo PearTheme::lang('Tours to machu Picchu','Tours a Machu Picchu','马丘比丘旅游','Excursões a Machu Picchu') ?>
                        <i class="bi bi-arrow-right"></i>
                    </button>
                </li>
                <!--  day tours -->
                <li class="m-auto m-lg-0 ms-lg-3" role="presentation">
                    <button
                        class="categories-tour__button py-2 px-3 rounded-3"
                        id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button"
                        role="tab" aria-controls="pills-contact" aria-selected="false">
                        <?php echo PearTheme::lang('Day Tours','Tours de un Dia','一日游','Excursões de um dia') ?>
                        <i class="bi bi-arrow-right"></i>
                    </button>
                </li>
                <!--  Others route -->
            </ul>
            <div class="tab-content mt-3" id="pills-tabContent">
                <!--  content inca trail -->
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"
                    tabindex="0">
                    <div class="py-3 w-100 w-lg-70 mb-3">
                        <p class="fs-95">
                            <?php echo PearTheme::lang('Explore fascinating routes beyond the Inca Trail and immerse yourself in a unique trekking experience in the Peruvian Andes. Discover ancient trails that will take you to impressive archaeological sites, surrounded by spectacular landscapes. Each alternative route offers a physical and mental challenge. If you are looking for adventure, culture and nature in one trip, our alternative tours are the perfect option for you.','Explora rutas fascinantes más allá del Camino Inca y sumérgete en una experiencia de trekking única en los Andes peruanos. Descubre senderos ancestrales que te llevarán a impresionantes sitios arqueológicos, rodeados de paisajes espectaculares. Cada ruta alternativa ofrece un desafío físico y mental. Si buscas aventura, cultura y naturaleza en un solo viaje, nuestros tours alternativos son la opción perfecta para ti.','探索印加古道之外的迷人路线，沉浸在秘鲁安第斯山脉的独特徒步旅行体验中。探索古老的小径，带您前往令人印象深刻的考古遗址，周围环绕着壮观的风景。每条替代路线都会带来体力和精神上的挑战。如果您想在一次旅行中体验冒险、文化和自然，我们的替代旅游是您的完美选择。','Explore rotas fascinantes além da Trilha Inca e mergulhe numa experiência única de trekking nos Andes peruanos. Descubra trilhas antigas que o levarão a impressionantes sítios arqueológicos, rodeados por paisagens espetaculares. Cada rota alternativa oferece um desafio físico e mental. Se procura aventura, cultura e natureza numa única viagem, os nossos passeios alternativos são a opção perfeita para si.') ?>
                        </p>
                    </div>
                    <div class="row gy-5 pt-5">
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
                        <div class="col-12 col-md-6 col-lg-4 mb-3">
                            <div class="border rounded-4 gx-3 px-2 py-2 bg-white">
                                <div class="position-relative w-100 rounded-3 mtn-50 mb-3 hx-250 overflow-hidden">
                                    <?php the_post_thumbnail('full-size',array('class'=>'w-100 h-100 object-fit-cover') ) ?>
                                    <!-- <div class="p position-absolute top-0 start-0 py-2">
                                        <span class="bg-complementary fw-bold-600 text-white py-1 px-2 fs-85 rounded-end-3">Best Seller</span>
                                    </div> -->
                                </div>
                                <div class="p-2">
                                    <div class="border-bottom pb-4 mb-4">
                                        <h3 class="fw-bold h5"><?php the_title(); ?></h3>
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
                                        <a href="<?php the_permalink(); ?>" class="btn btn-primary bg-white fw-bold-500 rounded-3 text-primary py-2 px-3 white-space-nowrap">
                                            <?php echo PearTheme::lang('View Itinerary','Ver itinerario','查看行程','Ver itinerário') ?>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
                                              <path fill-rule="evenodd" clip-rule="evenodd" d="M12.0996 8.41511L8.86043 5.27405L9.55656 4.55615L14.0518 8.91511L9.55656 13.274L8.86043 12.5562L12.0996 9.41511H2.3335V8.41511H12.0996Z" fill="#E91E3E"/>
                                            </svg>
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
                </div>
                <!-- content  tour to machu Picchu -->
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"
                    tabindex="0">
                    <div class="pb-3 mb-3">
                        <p class="fs-95"><?php echo PearTheme::lang('Machu Picchu, the most popular destination in South America and what most people visit Peru to see. There are several ways to visit the magnificent site, the most popular being a trip on one of the fabulous trains, either as a day tour or an overnight tour. Another popular choice is to combine a tour to Machu Picchu with the other attractions around Cusco like the Sacred Valley or Rainbow Mountain. Becoming a popular way to visit for those who like a challenge, is one of the many treks through the Andes that finish in Machu Picchu.','Machu Picchu, el destino más popular de Sudamérica y el lugar que la mayoría de la gente visita en Perú. Hay varias formas de visitar este magnífico lugar, la más popular es un viaje en uno de los fabulosos trenes, ya sea como una excursión de un día o una excursión de una noche. Otra opción popular es combinar una excursión a Machu Picchu con otras atracciones alrededor de Cusco, como el Valle Sagrado o la Montaña Arcoíris. Una de las muchas caminatas por los Andes que terminan en Machu Picchu se está convirtiendo en una forma popular de visitar para aquellos que buscan un desafío.','马丘比丘是南美洲最受欢迎的目的地，也是大多数人前往秘鲁游览的景点。游览这个壮丽景点的方式有很多种，最受欢迎的是乘坐一列神奇的火车，可以一日游或过夜游。另一个受欢迎的选择是将马丘比丘之旅与库斯科周围的其他景点（如圣谷或彩虹山）结合起来。对于那些喜欢挑战的人来说，马丘比丘是众多穿越安第斯山脉并以马丘比丘为终点的徒步旅行之一，也成为一种受欢迎的游览方式。','Machu Picchu, o destino mais popular da América do Sul e o que a maioria das pessoas visita no Peru. Existem várias maneiras de visitar este magnífico local, sendo a mais popular uma viagem num dos fabulosos comboios, seja numa excursão de um dia ou numa excursão com pernoite. Outra opção popular é combinar uma excursão a Machu Picchu com outras atrações ao redor de Cusco, como o Vale Sagrado ou a Montanha Arco-Íris. Uma forma popular de visitar o local para aqueles que gostam de desafios é uma das muitas caminhadas pelos Andes que terminam em Machu Picchu.') ?>
                        </p>
                    </div>
                    <div class="row gy-5 pt-5">
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
                        <div class="col-12 col-md-6 col-lg-4 mb-3">
                            <div class="border rounded-4 gx-3 px-2 py-2 bg-white">
                                <div class="position-relative w-100 rounded-3 mtn-50 mb-3 hx-250 overflow-hidden">
                                    <?php the_post_thumbnail('full-size',array('class'=>'w-100 h-100 object-fit-cover') ) ?>
                                    <!-- <div class="p position-absolute top-0 start-0 py-2">
                                        <span class="bg-complementary fw-bold-600 text-white py-1 px-2 fs-85 rounded-end-3">Best Seller</span>
                                    </div> -->
                                </div>
                                <div class="p-2">
                                    <div class="border-bottom pb-4 mb-4">
                                        <h3 class="fw-bold h5"><?php the_title(); ?></h3>
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
                                        <a href="<?php the_permalink(); ?>" class="btn btn-primary bg-white fw-bold-500 rounded-3 text-primary py-2 px-3 white-space-nowrap">
                                            <?php echo PearTheme::lang('View Itinerary','Ver itinerario','查看行程','Ver itinerário') ?>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
                                              <path fill-rule="evenodd" clip-rule="evenodd" d="M12.0996 8.41511L8.86043 5.27405L9.55656 4.55615L14.0518 8.91511L9.55656 13.274L8.86043 12.5562L12.0996 9.41511H2.3335V8.41511H12.0996Z" fill="#E91E3E"/>
                                            </svg>
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
                </div>
                <!-- content day tours -->
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab"
                    tabindex="0">
                    <div class="pb-3 mb-3">
                        <p class="fs-95"><?php echo PearTheme::lang('Around the Cusco region there are many and varied things to do and see. A great start is a Cusco City tour, where you will discover the history of this fascinating Inca City. Travel further afield and tour the beautiful Sacred Valley of the Incas, this truly spectacular part of Peru will blow you away with its history and beauty. Take a day tour to Rainbow Mountain for an experience that you will not soon forget. The pinnacle of any Peruvian tour would have to be a day tour to the Inca Citadel of Machu Picchu, the most talked about tour in Peru.','En la región de Cusco hay muchas y variadas cosas para hacer y ver. Un buen comienzo es un tour por la ciudad de Cusco, donde descubrirás la historia de esta fascinante ciudad inca. Viaja más lejos y recorre el hermoso Valle Sagrado de los Incas, esta parte verdaderamente espectacular de Perú te dejará boquiabierto con su historia y belleza. Haz un tour de un día a la Montaña de Colores para vivir una experiencia que no olvidarás fácilmente. El punto culminante de cualquier tour peruano sería un tour de un día a la Ciudadela Inca de Machu Picchu, el tour del que más se habla en Perú.','库斯科地区有很多不同的事情可做可看。库斯科城市之旅是开始游览的好地方，您将在那里发现这座迷人的印加城市的历史。再远一点，参观美丽的印加圣谷，这是秘鲁真正壮观的地区，其历史和美景将让您惊叹不已。前往彩虹山一日游，享受难忘的体验。秘鲁之旅的巅峰必须是前往印加城堡马丘比丘的一日游，这是秘鲁最受关注的旅游项目。','Na região de Cusco, há muitas e variadas coisas para fazer e ver. Um ótimo começo é um passeio pela cidade de Cusco, onde descobrirá a história desta fascinante cidade inca. Viaje mais longe e visite o belo Vale Sagrado dos Incas, esta parte verdadeiramente espetacular do Peru irá impressioná-lo com a sua história e beleza. Faça um passeio de um dia à Montanha Arco-Íris para uma experiência que não esquecerá tão cedo. O ponto alto de qualquer passeio pelo Peru seria um passeio de um dia à cidadela inca de Machu Picchu, o passeio mais comentado do Peru.') ?>
                        </p>
                    </div>
                    <div class="row gy-5 pt-5">
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
                        <div class="col-12 col-md-6 col-lg-4 mb-3">
                            <div class="border rounded-4 gx-3 px-2 py-2 bg-white">
                                <div class="position-relative w-100 rounded-3 mtn-50 mb-3 hx-250 overflow-hidden">
                                    <?php the_post_thumbnail('full-size',array('class'=>'w-100 h-100 object-fit-cover') ) ?>
                                    <!-- <div class="p position-absolute top-0 start-0 py-2">
                                        <span class="bg-complementary fw-bold-600 text-white py-1 px-2 fs-85 rounded-end-3">Best Seller</span>
                                    </div> -->
                                </div>
                                <div class="p-2">
                                    <div class="border-bottom pb-4 mb-4">
                                        <h3 class="fw-bold h5"><?php the_title(); ?></h3>
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
                                        <a href="<?php the_permalink(); ?>" class="btn btn-primary bg-white fw-bold-500 rounded-3 text-primary py-2 px-3 white-space-nowrap">
                                            <?php echo PearTheme::lang('View Itinerary','Ver itinerario','查看行程','Ver itinerário') ?>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
                                              <path fill-rule="evenodd" clip-rule="evenodd" d="M12.0996 8.41511L8.86043 5.27405L9.55656 4.55615L14.0518 8.91511L9.55656 13.274L8.86043 12.5562L12.0996 9.41511H2.3335V8.41511H12.0996Z" fill="#E91E3E"/>
                                            </svg>
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
                </div>
            </div>
        </div>
    </section>

    <!-- tours inca trail -->
    <section class="bg-light py-5 ">
        <div class="container">
            <div class="text-center mb-5">
                <span class="fw-bold text-uppercase text-secondary mb-3"><?php echo PearTheme::lang('discover','descubre','发现','descobrir') ?></span>
                <h2 class="fw-bold h3 text-uppercase">
                    <?php echo PearTheme::lang('Inca Trail','Camino Inca','印加古道','Trilha Inca') ?>
                </h2>
                <p>
                    <?php echo PearTheme::lang('Explore the wonders of our popular destinations','Explore las maravillas de nuestros destinos populares','探索我们热门目的地的奇妙之处','Explore as maravilhas dos nossos destinos populares')?>
                </p>
            </div>
            <div class="row gy-5 pt-5">
                <?php
                    $queryincatrail = new WP_Query(
                        array(
                            'post_type' => 'tour',
                            'posts_per_page' => 3,
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
                        $persons = get_post_meta(get_the_ID(), 'custom_field_grupo', true);
                        $altitud = get_post_meta(get_the_ID(), 'custom_field_altitud', true);
                ?>

                <div class="col-12 col-md-6 col-lg-4 mb-3">
                    <div class="border rounded-4 gx-3 px-2 py-2 bg-white">
                        <div class="position-relative w-100 rounded-3 mtn-50 mb-3 hx-250 overflow-hidden">
                            <?php the_post_thumbnail('full-size',array('class'=>'w-100 h-100 object-fit-cover') ) ?>
                            <div class="p position-absolute top-0 start-0 py-2">
                                <span class="bg-primary text-white py-1 px-2 fs-85 rounded-end-3"><?php echo PearTheme::lang('Best Seller','Más vendido','畅销书','Mais vendido') ?></span>
                            </div>
                        </div>
                        <div class="p-2">
                            <div class="border-bottom pb-4 mb-4">
                                <h3 class="fw-bold h5"><?php the_title(); ?></h3>
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
                                <a href="<?php the_permalink(); ?>" class="btn btn-primary bg-white fw-bold-500 rounded-3 text-primary py-2 px-3 white-space-nowrap">
                                    <?php echo PearTheme::lang('View Itinerary','Ver itinerario','查看行程','Ver itinerário') ?>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M12.0996 8.41511L8.86043 5.27405L9.55656 4.55615L14.0518 8.91511L9.55656 13.274L8.86043 12.5562L12.0996 9.41511H2.3335V8.41511H12.0996Z" fill="#E91E3E"/>
                                    </svg>
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
        </div>
    </section>
    <!-- shw categories -->
    <section class="container py-5">
        <div class="text-center pb-5">
            <h2 class="fw-bold text-uppercase h3">
                <?php echo PearTheme::lang('The Best Places to Visit in Cusco and Peru','Los mejores lugares para visitar en Cusco y Perú','库斯科和秘鲁最值得游览的地方','Os melhores locais para visitar em Cusco e no Peru')?>
            </h2>
            <p>
                <?php echo PearTheme::lang('Explore the wonders of our popular destinations','Explore las maravillas de nuestros destinos populares','探索我们热门目的地的奇妙之处','Explore as maravilhas dos nossos destinos populares')?>
            </p>
        </div>
        <div class="content_destination">
            <?php
            $args = array(
                'post_type' => 'page',
                'posts_per_page' => 5,
                'order' => 'ASC',
                'post__in' => array(282, 294, 290, 298)
            );
            $toursofperu = new WP_Query($args);
            if ($toursofperu->have_posts()) :
                while ($toursofperu->have_posts()) : $toursofperu->the_post();
                
            ?>
            <div class="item_destination">
                <?php $imagen = get_post_meta(get_the_ID(), 'custom_field_imagen_portada', true); ?>
                <a href="<?php the_permalink(); ?>">
                    <img src="<?php echo $imagen?>" alt="">
                    <div>
                        <h4><?php the_title(); ?></h4>
                        <span><?php echo PearTheme::lang('Discover','Descubrir','发现','Descubra')?></span>
                    </div>
                </a>
            </div>
            <?php
            endwhile;
                wp_reset_postdata(); 
            else :
                echo 'No hay publicaciones con la categoría "inca-trail".';
            endif;
            ?>
        </div>
    </section>

    <!--  home-->
    <section class="container py-5 bg-light">
        <div class="row gy-3 align-items-center">
            <div class="col-md-4">
                <div class="row">
                    <?php $images = get_post_meta(get_the_ID(), 'vdw_gallery_id', true); ?>
                    <?php
                    if (!empty($images) && is_array($images)) {
                        $limitedImages = array_slice($images, 0, 5);

                        foreach ($limitedImages as $index => $img) :
                    ?>
                    <div class="col-md-12">
                        <a href="<?php echo wp_get_attachment_url($img); ?>" data-fslightbox="gallery">
                            <?php echo wp_get_attachment_image($img, 'full',null,array('class'=>'img-cover  rounded-1 shadow-sm max-h-450')); ?>
                        </a>
                    </div>
                    <?php
                        endforeach;
                    }
                ?>

                </div>
            </div>
            <div class="col-md-8">
                <div class="position-relative p-1 px-lg-5">
                    <?php the_content(); ?>
                    <a href="<?php echo get_permalink(pll_get_post(333)) ?>"
                        class="btn btn-primary text-white mt-3 px-5 rounded-3 lead fw-normal">
                        <?php echo PearTheme::lang('Learn more','Leer más','了解更多','Leia mais')?> <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!--  why choose -->
    <section class="py-5">
        <div class="container">
            <div class="row gy-3 align-items-center">
                <div class="col-md-5">
                    <h2 class="h3 fw-bold">
                        <?php echo PearTheme::lang('Why Choose Us','Por qué elegirnos','为什么选择我们','Por que nos escolher')?>
                    </h2>
                    <span>
                        <?php echo PearTheme::lang('These popular destinations have a lot to offer','Estos destinos populares tienen mucho que ofrecer.','这些热门目的地有很多好玩的地方','Esses destinos populares têm muito a oferecer')?>
                    </span>
                    <p>
                        <?php echo PearTheme::lang('At 69 Explorer, we are committed to providing an exceptional experience. Your safety, comfort, and enjoyment are our top priorities. We continuously strive to exceed expectations and ensure that every trip with us becomes a cherished memory.','En 69 Explorer, estamos comprometidos a brindar una experiencia excepcional. Su seguridad, comodidad y disfrute son nuestras principales prioridades. Nos esforzamos continuamente por superar las expectativas y garantizar que cada viaje con nosotros se convierta en un recuerdo preciado.','在 69 Explorer，我们致力于提供非凡的体验。您的安全、舒适和享受是我们的首要任务。我们不断努力超越期望，确保与我们一起的每一次旅行都成为珍贵的回忆。','Na 69 Explorer, estamos comprometidos em proporcionar uma experiência excepcional. Sua segurança, conforto e diversão são nossas principais prioridades. Nós nos esforçamos continuamente para superar as expectativas e garantir que cada viagem conosco se torne uma lembrança inesquecível.')?>
                    </p>
                    <a href="<?php echo get_permalink(pll_get_post(888)); ?>" class="btn btn-primary text-white rounded-3 px-5">
                        <?php echo PearTheme::lang('Learn more','Leer más','了解更多','Saiba mais')?> <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
                <div class="col-md-7">
                    <div class="row gy-3">
                        <div class="col-md-6">
                            <div class="bg-white p-2 rounded-2">
                                <svg width="70" version="1.0" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet">

                                    <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"
                                        fill="#000000" stroke="none">
                                        <path d="M1173 5100 c-125 -33 -235 -105 -310 -205 -109 -143 -123 -209 -123
                                            -597 0 -293 0 -297 -21 -303 -35 -11 -101 -77 -120 -120 -25 -55 -25 -144 1
                                            -197 l20 -42 -24 -25 c-61 -66 -81 -170 -51 -262 34 -102 151 -189 255 -189
                                            27 0 27 -1 34 -86 24 -291 172 -553 404 -713 30 -21 32 -26 32 -82 0 -70 -19
                                            -121 -52 -143 -12 -8 -185 -55 -383 -105 -433 -109 -467 -123 -595 -251 -69
                                            -68 -94 -102 -128 -171 -72 -146 -72 -140 -72 -896 l0 -672 26 -20 c33 -26 65
                                            -27 95 -2 l24 19 5 694 c6 756 1 703 65 828 37 73 136 170 212 208 40 21 153
                                            54 322 97 143 36 266 65 274 65 7 0 21 -14 31 -31 33 -55 137 -158 211 -208
                                            325 -217 750 -180 1025 89 42 41 91 98 109 126 l32 51 167 -28 c245 -41 325
                                            -75 444 -187 82 -78 80 -74 248 -386 149 -276 165 -296 246 -296 24 0 55 5 69
                                            12 14 6 145 148 292 316 l266 304 163 -163 c159 -159 162 -163 146 -184 -9
                                            -11 -105 -121 -212 -244 -107 -122 -199 -233 -203 -245 -18 -52 33 -106 87
                                            -92 35 9 747 821 781 891 49 101 49 235 0 339 -30 64 -117 149 -179 177 -72
                                            31 -147 42 -216 29 -34 -6 -68 -14 -76 -17 -12 -4 -14 69 -14 529 l0 535 282
                                            229 c154 125 289 242 299 259 25 39 24 111 0 151 -16 26 -398 346 -534 448
                                            -62 46 -136 37 -175 -21 -16 -25 -17 -102 -22 -1141 l-5 -1114 -370 -423
                                            c-321 -366 -372 -421 -383 -407 -7 9 -67 118 -133 243 -67 124 -144 257 -171
                                            293 -86 115 -236 220 -378 265 -36 11 -174 39 -308 61 -146 24 -253 47 -268
                                            57 -37 24 -54 65 -54 131 l0 58 81 64 c203 160 332 405 346 656 l6 101 52 6
                                            c95 10 173 63 220 149 52 94 36 225 -37 304 -19 21 -19 24 -3 54 23 45 30 122
                                            15 174 -15 53 -64 114 -113 141 l-35 19 -4 320 c-4 295 -6 326 -26 386 -66
                                            201 -232 354 -430 395 -53 12 -172 15 -577 14 -466 0 -516 -2 -582 -19z m1142
                                            -145 c166 -44 287 -176 314 -346 14 -82 15 -539 1 -539 -5 0 -44 11 -87 25
                                            -95 30 -127 31 -153 5 -25 -25 -26 -81 -2 -103 9 -8 61 -30 115 -47 143 -46
                                            265 -99 282 -123 8 -12 15 -34 15 -50 0 -36 -49 -87 -83 -87 -14 0 -70 18
                                            -126 40 -119 47 -324 102 -476 127 -172 28 -565 25 -740 -6 -153 -27 -327 -75
                                            -450 -125 -49 -20 -102 -36 -117 -36 -40 0 -78 40 -78 82 0 67 29 86 239 159
                                            306 106 637 151 942 130 80 -6 159 -14 177 -17 26 -5 36 -1 63 25 25 26 30 37
                                            24 59 -11 48 -34 60 -130 73 -118 15 -444 15 -570 0 -142 -18 -332 -57 -462
                                            -97 -62 -19 -115 -34 -118 -34 -10 0 -5 510 6 562 32 150 157 282 308 324 34
                                            9 175 12 546 13 420 1 510 -1 560 -14z m2399 -965 c119 -96 216 -177 216 -180
                                            0 -6 -427 -353 -441 -358 -5 -2 -9 140 -9 358 0 223 4 360 9 358 6 -1 107 -82
                                            225 -178z m-2644 -276 c122 -18 259 -51 380 -92 l85 -29 3 -282 c2 -255 0
                                            -291 -18 -368 -62 -263 -267 -479 -535 -563 -98 -31 -264 -38 -372 -16 -330
                                            67 -576 329 -623 662 -5 42 -10 185 -10 318 l0 243 73 26 c161 58 347 100 512
                                            117 119 12 374 4 505 -16z m-1269 -174 l29 0 0 -115 0 -115 -27 0 c-69 0 -129
                                            72 -120 143 6 44 52 101 75 92 7 -3 27 -5 43 -5z m2032 -51 c34 -65 -2 -149
                                            -73 -170 -67 -20 -71 -14 -68 108 l3 108 40 6 c49 7 74 -7 98 -52z m-1303
                                            -1262 c63 -18 100 -22 235 -21 154 0 235 13 328 49 14 6 17 2 17 -22 0 -85 66
                                            -184 150 -226 l50 -25 -40 -50 c-51 -63 -132 -124 -223 -168 -209 -99 -460
                                            -80 -655 50 -64 42 -162 137 -162 156 0 4 14 14 32 21 78 32 144 125 155 220
                                            5 41 9 49 22 44 9 -4 50 -16 91 -28z m3195 -194 c81 -41 128 -117 128 -208 0
                                            -88 -15 -113 -190 -309 l-35 -39 -163 163 -163 163 86 99 c47 54 100 108 117
                                            118 65 40 154 45 220 13z" />
                                        <path d="M1302 3480 c-20 -19 -22 -30 -22 -139 0 -134 8 -151 72 -151 55 0 72
                                            27 77 121 4 97 -4 144 -30 170 -25 25 -69 24 -97 -1z" />
                                        <path
                                            d="M2125 3475 c-23 -22 -25 -31 -25 -128 0 -90 3 -108 21 -131 26 -33
                                            79 -36 109 -6 18 18 20 33 20 134 0 112 -1 115 -26 135 -35 28 -69 26 -99 -4z" />
                                        <path d="M1554 2836 c-41 -29 -38 -89 5 -123 9 -7 47 -23 85 -34 113 -36 271
                                            -13 338 48 24 22 23 78 -2 103 -25 25 -51 25 -118 0 -62 -24 -132 -25 -187 -4
                                            -61 24 -97 27 -121 10z" />
                                        <path d="M826 709 l-26 -20 0 -324 0 -324 26 -20 c43 -34 86 -26 109 20 19 37
                                            22 607 3 642 -26 50 -69 60 -112 26z" />
                                        <path d="M2950 710 c-11 -11 -22 -30 -25 -42 -3 -13 -5 -160 -3 -326 l3 -304
                                            24 -19 c30 -25 62 -24 95 2 26 20 26 23 26 141 l0 121 88 -84 c116 -113 160
                                            -134 278 -134 81 0 97 3 150 30 51 26 84 59 242 238 187 213 197 230 171 278
                                            -15 29 -57 42 -88 29 -14 -7 -102 -99 -194 -205 -103 -119 -181 -199 -201
                                            -209 -19 -9 -56 -16 -83 -16 -66 0 -109 30 -250 173 l-113 114 0 96 c0 91 -1
                                            96 -26 116 -34 26 -68 27 -94 1z" />
                                    </g>
                                </svg>
                                <h4 class="text-950 mt-3 fw-bold h-100">
                                    <?php echo PearTheme::lang('Local Experience','Experiencia Local','当地体验','Experiência local')?>
                                </h4>
                                <p class=" rounded-0  mb-0 border-3">
                                    <?php echo PearTheme::lang('Our guides are locals with extensive knowledge about the history, myths, and secrets of the region.','Nuestros guías son locales con amplio conocimiento sobre la historia, mitos y secretos de la región.','我们的导游都是当地人，对该地区的历史、神话和秘密有着丰富的了解。','Nossos guias são moradores locais com amplo conhecimento sobre a história, os mitos e os segredos da região.')?>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="bg-white p-2 rounded-2">
                                <svg width="70" version="1.0" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet">

                                    <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"
                                        fill="#000000" stroke="none">
                                        <path d="M2445 3908 c-27 -5 -86 -27 -131 -48 -111 -54 -200 -142 -253 -253
                                            -49 -102 -61 -166 -61 -327 0 -161 12 -225 60 -326 65 -136 185 -238 340 -290
                                            40 -14 84 -19 160 -19 115 0 170 14 272 67 109 58 213 182 258 311 28 77 39
                                            325 21 434 -53 306 -354 510 -666 451z m279 -186 c91 -42 149 -100 194 -190
                                            l37 -76 0 -176 0 -176 -37 -76 c-45 -91 -103 -147 -196 -191 -61 -29 -76 -32
                                            -162 -32 -86 0 -101 3 -162 32 -93 44 -151 100 -196 191 l-37 76 0 175 0 176
                                            32 67 c40 85 97 147 172 186 78 42 122 52 213 48 61 -3 92 -11 142 -34z" />
                                        <path d="M925 3428 c-27 -5 -86 -27 -131 -48 -111 -54 -200 -142 -253 -253
                                            -49 -102 -61 -166 -61 -327 0 -160 12 -225 60 -325 84 -175 259 -295 455 -312
                                            69 -5 74 -4 99 20 33 33 34 79 3 111 -17 17 -39 24 -91 29 -142 13 -259 95
                                            -324 225 l-37 76 0 175 0 176 32 67 c44 93 100 151 191 196 72 35 81 37 172
                                            37 91 0 100 -2 172 -37 91 -45 147 -103 191 -196 l32 -67 0 -176 0 -175 -37
                                            -76 c-37 -73 -72 -113 -161 -181 -28 -21 -37 -35 -37 -58 0 -42 14 -64 49 -79
                                            26 -11 36 -9 76 10 56 27 153 122 191 185 61 105 77 168 82 332 5 186 -6 261
                                            -59 370 -109 226 -359 349 -614 301z" />
                                        <path d="M3965 3428 c-154 -29 -313 -153 -384 -301 -53 -109 -64 -184 -59
                                            -370 5 -164 21 -227 82 -332 38 -63 135 -158 191 -185 40 -19 50 -21 76 -10
                                            35 15 49 37 49 79 0 23 -9 37 -37 58 -89 68 -124 108 -161 181 l-37 76 0 175
                                            0 176 32 67 c44 93 100 151 191 196 72 35 81 37 172 37 91 0 100 -2 172 -37
                                            91 -45 147 -103 191 -196 l32 -67 0 -176 0 -175 -37 -76 c-65 -130 -182 -212
                                            -324 -225 -52 -5 -74 -12 -91 -29 -31 -32 -30 -78 3 -111 25 -24 30 -25 99
                                            -20 175 15 328 108 424 257 67 103 83 164 88 337 7 186 -5 261 -58 370 -109
                                            226 -359 349 -614 301z" />
                                        <path d="M2285 2554 c-270 -27 -460 -61 -538 -97 -70 -33 -132 -88 -167 -151
                                            -37 -64 -37 -80 -1 -117 52 -52 80 -41 165 66 50 62 111 82 376 121 145 21
                                            551 29 724 15 184 -16 416 -56 464 -80 22 -11 52 -36 68 -56 61 -76 82 -95
                                            109 -95 30 0 85 49 85 75 0 30 -42 98 -91 147 -82 82 -176 113 -464 153 -114
                                            16 -625 29 -730 19z" />
                                        <path d="M760 2074 c-111 -10 -299 -36 -388 -55 -177 -36 -265 -96 -329 -227
                                            l-38 -76 -3 -233 -4 -232 26 -26 c33 -33 79 -33 111 0 25 24 25 25 25 226 0
                                            124 4 217 12 240 14 50 69 114 117 138 130 66 695 110 1035 82 185 -16 416
                                            -56 465 -80 49 -26 104 -90 119 -140 8 -23 12 -116 12 -240 0 -201 0 -202 25
                                            -226 32 -33 78 -33 111 0 l26 26 -4 232 -3 233 -38 76 c-81 165 -180 213 -542
                                            263 -115 16 -619 29 -735 19z" />
                                        <path d="M3800 2074 c-111 -10 -299 -36 -388 -55 -177 -36 -265 -96 -329 -227
                                            l-38 -76 -3 -233 -4 -232 26 -26 c33 -33 79 -33 111 0 25 24 25 25 25 226 0
                                            124 4 217 12 240 14 50 69 114 117 138 130 66 695 110 1035 82 185 -16 416
                                            -56 465 -80 49 -26 104 -90 119 -140 8 -23 12 -116 12 -240 0 -201 0 -202 25
                                            -226 32 -33 78 -33 111 0 l26 26 -4 232 -3 233 -38 76 c-81 165 -180 213 -542
                                            263 -115 16 -619 29 -735 19z" />
                                    </g>
                                </svg>
                                <h4 class="text-950 mt-3 fw-bold">
                                    <?php echo PearTheme::lang('Small Personalized Groups','Pequeños grupos personalizados','小型个性化团体','Pequenos grupos personalizados')?>
                                </h4>
                                <p>
                                    <?php echo PearTheme::lang('Our groups never exceed 10 people, giving you an unforgettable experience','Nuestros grupos nunca superan las 10 personas, brindándote una experiencia inolvidable.','我们的团体人数不超过 10 人，为您带来难忘的体验','Nossos grupos nunca excedem 10 pessoas, proporcionando uma experiência inesquecível.')?>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="bg-white p-2 rounded-2">
                                <svg width="70" version="1.0" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet">
                                    <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"
                                        fill="#000000" stroke="none">
                                        <path d="M1709 5026 c-27 -16 -41 -42 -104 -212 l-38 -101 -160 -9 -159 -10
                                        -29 -32 c-37 -41 -39 -89 -5 -129 13 -15 69 -64 125 -108 55 -44 101 -85 101
                                        -92 0 -7 -16 -70 -35 -140 -19 -70 -35 -138 -35 -151 0 -61 60 -111 119 -99
                                        15 3 83 42 151 86 l122 80 37 -23 c20 -13 78 -51 130 -85 51 -33 104 -61 116
                                        -61 62 0 110 46 108 104 -1 25 -28 133 -69 278 -3 12 30 44 116 114 132 107
                                        141 121 127 194 -11 52 -44 64 -216 75 l-154 10 -54 140 c-29 77 -61 148 -72
                                        158 -24 25 -89 31 -122 13z m139 -441 c26 -27 61 -35 153 -35 38 0 69 -3 69
                                        -7 -1 -5 -30 -30 -66 -58 -65 -50 -94 -88 -94 -122 0 -10 11 -55 24 -101 27
                                        -95 28 -95 -65 -31 -91 62 -117 62 -213 -1 -43 -28 -80 -49 -83 -47 -2 3 5 38
                                        17 78 30 109 27 134 -17 178 -21 20 -58 53 -83 73 l-45 37 83 1 c127 0 165 25
                                        197 129 4 13 14 40 22 60 l16 36 31 -84 c18 -46 42 -94 54 -106z" />
                                        <path d="M2883 5016 c-24 -20 -43 -58 -83 -164 l-52 -139 -160 -9 -160 -10
                                        -29 -32 c-34 -38 -38 -87 -10 -123 10 -13 66 -62 125 -109 58 -47 106 -92 106
                                        -100 0 -8 -16 -71 -35 -140 -19 -69 -35 -135 -35 -148 0 -61 60 -111 119 -99
                                        16 3 82 41 147 83 65 43 123 77 129 77 5 0 66 -37 133 -81 135 -89 168 -99
                                        215 -62 49 39 51 71 12 215 -20 72 -38 138 -41 147 -4 12 28 43 115 113 135
                                        109 153 136 127 198 -8 20 -25 41 -38 49 -13 7 -86 17 -177 23 l-154 10 -53
                                        139 c-29 76 -61 148 -72 158 -10 11 -37 22 -59 25 -32 4 -44 0 -70 -21z m150
                                        -434 c24 -24 35 -26 122 -30 52 -3 95 -7 95 -11 -1 -3 -32 -31 -70 -61 -95
                                        -75 -99 -88 -68 -205 13 -52 22 -95 19 -95 -3 0 -40 23 -81 50 -97 64 -115 64
                                        -215 -1 -42 -27 -79 -48 -82 -46 -2 3 5 38 17 78 36 130 31 145 -77 231 l-67
                                        53 96 5 c137 7 138 8 212 205 7 16 15 3 41 -63 17 -46 44 -95 58 -110z" />
                                        <path d="M4063 5016 c-23 -19 -43 -58 -83 -164 l-52 -139 -160 -9 -160 -10
                                        -29 -32 c-33 -36 -38 -84 -15 -118 8 -12 66 -62 129 -113 l114 -92 -38 -137
                                        c-48 -172 -48 -185 -5 -228 53 -53 78 -48 225 48 69 44 131 81 136 81 6 0 66
                                        -37 133 -81 139 -92 169 -100 220 -57 17 14 33 38 36 53 5 22 -28 165 -70 304
                                        -4 12 28 43 115 113 135 109 153 136 127 198 -8 20 -25 41 -38 49 -13 7 -86
                                        17 -176 23 l-154 10 -53 139 c-30 77 -63 148 -73 158 -10 11 -37 22 -59 25
                                        -32 4 -44 0 -70 -21z m96 -332 c45 -116 60 -127 176 -132 52 -3 95 -7 95 -11
                                        0 -3 -29 -29 -65 -56 -35 -28 -72 -65 -81 -84 -16 -33 -15 -38 9 -128 13 -51
                                        23 -93 20 -93 -2 0 -39 23 -82 50 -50 32 -89 50 -108 50 -20 0 -58 -18 -108
                                        -51 -42 -27 -79 -48 -81 -46 -2 2 5 36 16 75 24 86 25 130 5 159 -8 12 -45 45
                                        -82 75 l-67 53 96 5 c138 7 143 13 213 209 7 19 9 16 44 -75z" />
                                        <path d="M1650 3856 c-225 -63 -370 -284 -332 -507 15 -86 53 -167 108 -228
                                        l41 -46 -66 -32 c-240 -118 -408 -354 -447 -625 -6 -44 -4 -50 24 -78 l30 -30
                                        561 0 560 0 25 -25 25 -25 764 0 764 0 23 25 23 25 569 2 570 3 19 24 c26 32
                                        24 90 -6 195 -43 149 -110 260 -217 362 -67 65 -155 126 -225 158 l-43 19 40
                                        47 c83 99 115 195 108 329 -4 78 -9 99 -41 163 -61 125 -163 209 -292 243
                                        -256 66 -513 -104 -557 -369 -21 -124 25 -276 111 -369 l40 -44 -62 -29 c-68
                                        -32 -205 -131 -237 -171 l-20 -26 -65 51 c-35 27 -95 65 -132 83 -37 19 -70
                                        35 -72 36 -2 1 16 24 39 50 74 85 110 181 110 299 0 400 -487 598 -767 312
                                        -168 -171 -174 -443 -14 -616 l39 -42 -75 -37 c-41 -21 -101 -59 -134 -86
                                        l-60 -48 -68 63 c-55 51 -199 145 -246 161 -5 2 7 21 28 43 21 21 55 73 75
                                        113 36 73 37 77 37 190 0 110 -2 120 -32 184 -38 80 -122 173 -191 210 -98 53
                                        -232 71 -332 43z m249 -182 c62 -33 96 -70 129 -142 20 -45 23 -65 20 -125 -6
                                        -123 -61 -202 -176 -255 -46 -21 -65 -24 -126 -20 -83 6 -137 30 -192 85 -73
                                        75 -100 184 -69 288 22 76 107 166 181 189 74 24 168 16 233 -20z m2361 0
                                        c107 -58 156 -151 148 -279 -6 -86 -34 -143 -99 -199 -114 -97 -290 -86 -392
                                        23 -63 67 -80 110 -80 201 -1 62 4 84 26 126 33 64 106 130 166 149 71 23 167
                                        14 231 -21z m-1211 -41 c55 -20 125 -83 153 -138 14 -26 23 -66 26 -116 4 -66
                                        1 -84 -20 -131 -50 -109 -145 -171 -263 -172 -166 -1 -289 122 -290 289 -1
                                        207 194 339 394 268z m-1119 -688 c113 -30 260 -120 319 -196 l21 -27 -44 -83
                                        c-24 -46 -50 -103 -57 -126 l-12 -43 -515 0 -514 0 6 28 c4 15 25 64 47 110
                                        133 272 454 417 749 337z m2361 0 c129 -34 265 -122 342 -223 49 -63 99 -157
                                        115 -215 l10 -37 -515 2 -516 3 -12 41 c-7 23 -33 80 -58 127 l-45 86 51 48
                                        c177 167 401 226 628 168z m-1187 -55 c206 -52 376 -205 450 -402 l26 -68
                                        -635 0 -635 0 6 28 c12 49 63 149 108 209 91 121 257 221 406 246 71 12 202 6
                                        274 -13z" />
                                        <path d="M1747 2230 c-109 -32 -173 -65 -550 -284 -196 -113 -360 -206 -364
                                        -206 -4 0 -20 22 -35 49 -53 93 -128 137 -218 129 -37 -4 -83 -24 -187 -82
                                        -76 -43 -153 -89 -171 -103 -58 -43 -88 -128 -71 -201 14 -64 740 -1347 789
                                        -1394 44 -43 106 -63 169 -54 42 6 273 127 349 183 47 35 75 96 75 164 0 48
                                        -6 68 -43 135 -24 43 -49 89 -57 100 -13 21 -10 24 57 63 40 23 77 41 83 41 6
                                        0 272 -71 591 -157 554 -149 586 -157 692 -161 123 -5 219 15 314 63 98 50
                                        1676 1027 1708 1058 72 69 109 196 91 309 -32 196 -206 312 -419 279 -161 -25
                                        -208 -49 -805 -396 -415 -242 -529 -305 -556 -305 -5 0 -2 14 6 30 46 89 39
                                        212 -18 308 -56 94 -128 138 -282 171 -148 32 -305 81 -593 182 l-257 92 -115
                                        3 c-93 3 -128 0 -183 -16z m523 -237 c263 -94 434 -145 603 -183 84 -19 104
                                        -27 136 -58 73 -70 76 -169 7 -238 -64 -64 -128 -58 -490 42 -127 35 -246 64
                                        -263 64 -59 0 -93 -64 -63 -119 13 -24 33 -32 265 -95 485 -131 645 -147 819
                                        -82 35 13 288 155 563 315 275 160 533 304 574 320 185 74 312 60 368 -40 48
                                        -85 23 -206 -52 -255 -94 -61 -1598 -984 -1632 -1002 -80 -40 -152 -55 -249
                                        -50 -78 4 -180 29 -691 167 -330 88 -607 161 -615 161 -8 0 -58 -25 -110 -55
                                        -52 -30 -98 -51 -101 -47 -12 13 -430 754 -427 757 2 2 100 59 218 127 118 69
                                        275 160 348 202 244 142 311 166 447 162 85 -2 105 -7 345 -93z m-1643 -241
                                        c10 -6 678 -1175 737 -1291 12 -23 14 -36 6 -51 -16 -30 -276 -173 -303 -166
                                        -17 4 -107 156 -382 641 -198 350 -365 649 -372 665 -18 41 -1 57 147 140 124
                                        69 144 77 167 62z" />
                                        <path d="M505 1598 c-51 -29 -60 -89 -21 -134 63 -75 176 6 140 101 -7 19 -55
                                        45 -81 45 -10 0 -27 -6 -38 -12z" />
                                    </g>
                                </svg>
                                <h4 class="text-950 mt-3 fw-bold">
                                    <?php echo PearTheme::lang('Our Experiences','Nuestra experiencia','我们的经验','Nossas experiências')?>
                                </h4>
                                <p>
                                    <?php echo PearTheme::lang('With seven years of experience and more than 20 packages to Machu Picchu alone, our team knows how to carry out a successful expedition.','Con siete años de experiencia y más de 20 paquetes solo a Machu Picchu, nuestro equipo sabe cómo llevar a cabo una expedición exitosa.','我们的团队拥有七年的经验，仅前往马丘比丘的旅行团就超过 20 个，他们知道如何进行一次成功的探险。','Com sete anos de experiência e mais de 20 pacotes apenas para Machu Picchu, nossa equipe sabe como realizar uma expedição bem-sucedida.')?>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="bg-white p-2 rounded-2">
                                <svg width="70" version="1.0" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet">

                                    <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"
                                        fill="#000000" stroke="none">
                                        <path
                                            d="M2345 4688 c-404 -45 -790 -203 -1110 -453 -91 -71 -278 -260 -346
                                            -350 -125 -164 -251 -396 -324 -598 -41 -114 -42 -126 -14 -161 16 -20 29 -26
                                            58 -26 47 0 72 26 96 100 104 324 327 657 582 870 284 237 583 374 973 447
                                            138 25 525 25 665 -1 329 -60 621 -185 870 -371 173 -128 367 -347 490 -550
                                            48 -79 136 -257 130 -263 -2 -2 -54 24 -117 57 -67 36 -127 61 -145 61 -57 0
                                            -95 -77 -60 -123 19 -25 442 -247 471 -247 15 0 37 10 49 23 24 23 187 457
                                            187 496 0 31 -43 71 -77 71 -51 0 -68 -23 -114 -150 l-43 -120 -62 124 c-125
                                            252 -290 471 -484 643 -330 292 -745 473 -1202 522 -114 13 -359 12 -473 -1z" />
                                        <path d="M2340 4116 c-240 -35 -449 -113 -639 -240 -534 -355 -804 -1020 -675
                                            -1656 39 -188 135 -406 251 -568 117 -163 341 -372 400 -372 28 0 83 50 83 75
                                            0 30 -19 52 -114 134 -350 302 -537 762 -487 1201 46 399 204 710 477 938 454
                                            380 1131 442 1639 151 355 -204 582 -533 669 -971 27 -136 41 -158 97 -158 29
                                            0 42 6 59 27 19 25 21 36 15 92 -30 283 -173 596 -383 837 -167 192 -430 364
                                            -685 448 -199 65 -499 92 -707 62z" />
                                        <path d="M1670 3233 c-50 -18 -110 -119 -135 -225 -24 -104 -20 -296 10 -414
                                            78 -308 270 -520 558 -614 58 -19 72 -20 98 -10 34 14 49 37 49 73 0 41 -31
                                            66 -115 95 -207 72 -352 223 -427 448 -20 60 -23 89 -23 219 0 94 5 166 13
                                            193 l13 43 27 -19 c79 -56 192 -95 338 -116 55 -8 131 -26 169 -40 58 -22 71
                                            -24 93 -13 38 18 59 59 47 94 -21 57 -99 89 -290 118 -130 20 -226 57 -310
                                            120 -33 25 -63 45 -66 45 -4 0 -13 2 -21 4 -7 3 -20 2 -28 -1z" />
                                        <path d="M3349 3149 c-103 -78 -190 -111 -336 -129 -283 -35 -524 -236 -589
                                            -490 -38 -146 -5 -406 64 -520 37 -59 100 -106 162 -119 102 -22 324 18 465
                                            83 217 100 356 261 441 509 l39 112 0 175 c0 145 -3 184 -19 230 -26 77 -50
                                            121 -84 158 -42 44 -75 42 -143 -9z m89 -350 c5 -152 -15 -247 -79 -379 -33
                                            -67 -60 -103 -123 -166 -89 -89 -168 -136 -291 -173 -64 -19 -225 -44 -233
                                            -36 -9 8 21 86 55 144 48 82 192 230 303 310 47 35 91 70 98 79 34 44 -8 122
                                            -66 122 -52 0 -247 -155 -369 -293 -30 -34 -73 -92 -96 -129 -23 -37 -45 -68
                                            -48 -68 -11 0 -20 85 -20 175 1 177 88 318 256 410 76 42 107 51 231 69 121
                                            18 211 46 290 92 l59 33 14 -32 c9 -20 16 -80 19 -158z" />
                                        <path d="M3991 2463 c-16 -14 -26 -47 -45 -148 -55 -303 -177 -537 -391 -750
                                            -165 -166 -341 -275 -555 -345 -159 -52 -247 -64 -445 -64 -206 0 -301 16
                                            -470 80 -112 42 -155 46 -185 19 -28 -26 -27 -85 2 -112 56 -50 286 -121 462
                                            -143 131 -17 370 -7 494 19 330 72 614 230 848 474 233 242 381 554 410 867 6
                                            64 5 70 -19 94 -31 31 -75 34 -106 9z" />
                                        <path d="M518 2114 c-16 -8 -28 -16 -28 -17 0 -2 -38 -108 -85 -236 -47 -128
                                            -85 -241 -85 -251 0 -9 9 -29 21 -44 16 -20 29 -26 59 -26 52 0 68 22 121 172
                                            l43 122 19 -44 c10 -25 37 -86 58 -136 146 -336 422 -662 744 -879 361 -242
                                            817 -368 1275 -352 337 12 601 77 895 221 219 107 389 228 555 395 216 217
                                            380 476 494 783 49 131 48 166 -5 194 -33 16 -70 11 -93 -15 -8 -9 -29 -57
                                            -46 -106 -72 -209 -208 -448 -352 -620 -671 -804 -1918 -930 -2754 -279 -213
                                            166 -407 402 -529 645 -51 100 -97 211 -91 217 3 2 52 -22 110 -53 87 -46 112
                                            -55 136 -50 59 13 81 92 38 132 -29 25 -440 243 -459 243 -8 -1 -26 -8 -41
                                            -16z" />
                                    </g>
                                </svg>
                                <h4 class="text-950 mt-3 fw-bold">
                                    <?php echo PearTheme::lang('Sustainable Travel','Viajes Sostenibles','可持续旅游','Viagens sustentáveis')?>
                                </h4>
                                <p>
                                    <?php echo PearTheme::lang('We believe in responsible tourism. Our tours are designed to respect the local communities and environment, ensuring a positive impact.','Creemos en el turismo responsable. Nuestros tours están diseñados para respetar las comunidades locales y el medio ambiente, asegurando un impacto positivo.','我们信奉负责任的旅游理念。我们的旅游行程尊重当地社区和环境，确保产生积极影响。','Acreditamos no turismo responsável. Nossos passeios são planejados para respeitar as comunidades locais e o meio ambiente, garantindo um impacto positivo.')?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- sus -->
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

    <!-- top seller -->
    <section class="py-5">
        <div class="container">
            <div class="row gy-3 align-items-center">
                <div class="col-md-4">
                    <div class="posotion-relative">
                        <h2 class="fw-bold text-uppercase h3">
                            <?php echo PearTheme::lang('Inca Trail Hike to Machu Picchu ','Caminata por el Camino Inca a Machu Picchu','印加古道徒步前往马丘比丘','Caminhada pela Trilha Inca até Machu Picchu') ?>
                            <span class="text-primary">2025</span>
                        </h2>
                        <p class="lead fw-bold-600">
                                <?php echo PearTheme::lang('Book now and secure your preferred date before they sell
                                out','Reserva ahora y asegura tu fecha preferida antes de que se agoten','立即预订，确保你的首选日期，以免售罄','Reserve agora e garanta a data que você prefere antes que os ingressos se esgotem.') ?>
                            </p>

                        <div class="row gy-2 align-items-baseline">
                            <div class="col-12">
                                <div class="">
                                    <div>
                                        <b><?php echo  PearTheme::lang('Best Price Guarantee','Mejor precio garantizado','最优价格保证','Garantia do melhor preço') ?></b>
                                        <p> <?php echo  PearTheme::lang('Extraordinary prices for your upcoming vacation experience.','Precios extraordinarios para tu próxima experiencia vacacional.','获得即将到来的假期体验的超值优惠。','Preços extraordinários para a sua próxima experiência de férias.') ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="">
                                    <div><b>
                                            <?php echo  PearTheme::lang('24/7 Customer Service','Servicio al cliente 24 horas al dí','24/7客户服务','Atendimento ao cliente 24 horas') ?></b>
                                        <p> <?php echo  PearTheme::lang('Our travel specialists are just a call away, every day of the week.','Nuestros especialistas en viajes están a sólo una llamada de distancia, todos los días de la semana.','每周每天，只需一个电话即可联系我们的旅行专家。','Os nossos especialistas em viagens estão à distância de uma chamada, todos os dias da semana.') ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <!-- slider -->
                    <div class="swiper mySwiper1 overflow-hidden">
                        <div class="swiper-wrapper">
                            <?php

                                $categoria_id = 72; 
                                $toursofperu = get_posts([
                                    'post_type' => 'tour',
                                    'numberposts' => 4,
                                    'order' => 'DESC',
                                    'ignore_sticky_posts' => 0,
                                    'category' => $categoria_id 
                                ]);

                                foreach ($toursofperu as $post) :
                          
                                    $precio = get_post_meta(get_the_ID(), 'custom_field_precio', true); 
                                    $lugares = get_post_meta(get_the_ID(), 'custom_field_lugares', true);
                                    $dias = get_post_meta(get_the_ID(), 'custom_field_lugares_visitar', true);
                                    $dificultys = get_post_meta(get_the_ID(), 'custom_field_dificultad', true);
                            ?>  
                            <div class="swiper-slide">
                                <div class="position-relative border bg-white rounded-3 overflow-hidden">
                                    <figure class="position-relative overflow-hidden m-0">
                                        <b
                                            class="top-seller"><?php echo PearTheme::lang('Best Seller','Mas Vendido','畅销书','Mais vendido') ?></b>
                                        <?php the_post_thumbnail('full',array('class'=>'img-cover min-h-300 max-h-300') ) ?>
                                        <div
                                            class="position-absolute bottom-0 px-3 py-1  w-100 end-0 start-0 bg-dark bg-opacity-50">
                                            <p class="mb-0 text-white">
                                                <strong><i class="bi bi-bar-chart-fill text-white"></i></strong>
                                                <span><?php echo $dificultys ?></span>
                                            </p>
                                        </div>
                                    </figure>
                                    <div class="p-3">
                                        <h3 class="fw-bold-600 fs-5">
                                            <a href="<?php the_permalink( ) ?>"
                                                class="text-dark text-decoration-none stretched-link fw-bold-600"><?php the_title() ?></a>
                                        </h3>
                                        <p class="fw-bold fs-sm-9">
                                            <?php echo PearTheme::lang('Exploring','Explorando','探索','Explorando') ?>: <span
                                                class="fw-normal"><?php echo  $lugares ?></span>
                                        </p>
                                        <div class="d-flex justify-content-between align-items-end px-2 mb-0">
                                            <b>
                                                <div class="fw-normal" style="margin-bottom: -10px;">
                                                    <span class="fs-sm">
                                                        <?php echo PearTheme::lang('From','Desde','从','De') ?></span>
                                                    <span>USD</span>
                                                </div>
                                                <div>
                                                    <i class="fs-5">$</i>
                                                    <strong class="fs-4 letter-spacing-1"><?php echo $precio ?></strong>
                                                    <small
                                                        class="fw-normal"><?php echo PearTheme::lang('Per Person','Por Persona','每人','Por pessoa') ?></small>
                                                </div>
                                            </b>
                                            <button class="btn btn-primary text-white px-4 rounded-3 fw-bold"><?php echo PearTheme::lang('View Trip','Ver Viaje','查看行程','Ver viagem')?> <i class="bi bi-arrow-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php  endforeach;
                                    wp_reset_postdata();
                                ?>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                    <!-- end slider -->
                </div>
            </div>
        </div>
    </section>

    <!-- contact -->
    <section class=" bg-400 text-white"
        style="background-image: url('https://69explorer.com/wp-content/uploads/2024/03/huacachina-desert-oasis.jpg'); background-size: cover;background-attachment: fixed;">
        <div class=" py-5" style="background-color: #65000091;">
            <div class="container-xxl">
                <div class="row gy-3 align-items-center">
                    <div class="col-md-6 col-lg-7">
                        <div class="position-relative text-center  p-lg-4">
                            <h4 class="fs-3">
                                <?php echo  PearTheme::lang('Need help planning that long-awaited trip?','¿Necesitas ayuda para planificar ese viaje tan esperado?','需要帮助来计划那次期待已久的旅行吗？','Precisa de ajuda para planear aquela viagem tão esperada?') ?>
                            </h4>
                            <h3 class="display-6 fw-bold">
                                <?php echo PearTheme::lang('WE DESIGN YOUR EXPERIENCE IN PERU TOGETHER','DISEÑAMOS JUNTOS TU EXPERIENCIA EN PERÚ','我们共同设计您在秘鲁的体验','PROJETAMOS A SUA EXPERIÊNCIA NO PERU JUNTOS') ?>
                            </h3>
                            <p class="lead fw-normal fst-italic">69 Explorer Peru</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-5">
                        <div class="card rounded-0 border-0 bg-white rounded-2 overflow-hidden">
                            <div class="card-body">
                                <form action="#"
                                    data-action="<?php echo get_template_directory_uri()?>/inc/src/pear-email.php"
                                    class="row gy-4 gx-1  contact_form" id="fromInquire">
                                    <div class="col-md-12">
                                        <div class="form-floating ">
                                            <input type="text" name="name" class="form-control rounded-2"
                                                id="floatingInput" placeholder="<?php echo PearTheme::lang('Full Name','Nombre completo','姓名','Nome completo') ?>">
                                            <label for="floatingInput"><?php echo PearTheme::lang('Full Name','Nombre completo','姓名','Nome completo') ?></label>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-floating">
                                            <div class="form-floating ">
                                                <input type="text" name="country" class="form-control rounded-2"
                                                    id="country" placeholder="<?php echo PearTheme::lang('country','país','国家','país') ?>">
                                                <label for="country"><?php echo PearTheme::lang('country','país','国家','país') ?></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="form-floating ">
                                            <input type="text" name="phone" class="form-control rounded-2"
                                                id="WhatsApp" placeholder="<?php echo PearTheme::lang('Phone (WhatsApp)','Teléfono (WhatsApp)','电话号码（WhatsApp）','Telefone (WhatsApp)') ?>">
                                            <label for="WhatsApp"><?php echo PearTheme::lang('Phone (WhatsApp)','Teléfono (WhatsApp)','电话号码（WhatsApp）','Telefone (WhatsApp)') ?></label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-floating ">
                                            <input type="text" name="email" class="form-control rounded-2"
                                                id="floatingInput" placeholder="<?php echo PearTheme::lang('email','correo electrónico','电子邮件','e-mail') ?>">
                                            <label for="floatingInput"><?php echo PearTheme::lang('Email','Correo electrónico','电子邮件','e-mail') ?></label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-floating ">
                                            <input type="date" name="date" class="form-control rounded-2 <?php echo PearTheme::lang('datebirthday','datebirthday','datebirthdayZh','data de nascimento') ?>" id="travel"
                                                placeholder="<?php echo PearTheme::lang('Phone Number','Número de teléfono','电话号码','Número de telefone') ?>">
                                            <label for="travel"> <?php echo PearTheme::lang('When do you plan to travel?','¿Cuando planeas viajar?','你什么时候计划旅行？','Quando planeia viajar?') ?></label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-floating ">
                                            <input type="number" name="travelers" class="form-control rounded-2"
                                                id="travelers" placeholder="<?php echo PearTheme::lang('Phone Number','Número de teléfono','电话号码','Número de telefone') ?>">
                                            <label for="travelers"><?php echo PearTheme::lang('How many people are traveling?','¿Cuántas personas viajan?','有多少人出行？','Quantas pessoas estão a viajar?') ?></label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <select class="form-select rounded-2" name="ContacPassBy"
                                                id="floatingSelect" aria-label="Floating label select example">
                                                <option value="Email"><?php echo PearTheme::lang('Email','Correo electrónico','电子邮件','Email') ?></option>
                                                <option value="WhatsApp">WhatsApp</option>
                                            </select>
                                            <label for="floatingSelect"><?php echo PearTheme::lang('How would you like us to contact you?','¿Cómo desea que nos comuniquemos con usted?','您希望我们如何联系您？','Como gostaria que entrássemos em contacto consigo?') ?></label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="text-center p-2">
                                            <button type="submit"
                                                class="btn btn-dark text-white  w-100 rounded-3 loaded"><?php echo PearTheme::lang('Send Message','Enviar mensaje','发送消息','Enviar mensagem') ?></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!--  get Reviews? -->
    <?php get_template_part('/template/reviews','reviews') ?>
    <!-- blogs -->
    <section class="py-5 bg-light">
        <div class="container-xxl">

            <div class="text-center mb-5">
                <span class="fw-bold text-uppercase text-secondary mb-3"><?php echo PearTheme::lang('INSIGTH','INFORMACIÓN','洞察','VISÃO') ?></span>
                <h2 class="fw-bold h3 text-uppercase">
                    <?php echo PearTheme::lang('View All Post','Ver todas las publicaciones','查看所有帖子','Ver todas as publicações') ?>
                </h2>
                <p>
                    <?php echo PearTheme::lang('Explore the wonders of our popular blogs','Explore las maravillas de nuestros blogs populares','探索我们热门博客的精彩内容','Explore as maravilhas dos nossos blogs populares')?>
                </p>
            </div>

            <div class="row gy-3 gx-3 mb-5">
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
                            <?php the_post_thumbnail('large',array('class'=>'img-cover min-h-200 rounded-3')) ?>
                        </figure>
                        <div class="px-2 py-2 flex-column">
                            <h3 class="fw-bold-600 h6 line-clamp-3"><a href="<?php the_permalink() ?>" class="fw-bold-600 h6"><?php the_title() ?></a></h3>
                            <div class="mb-3">
                                <span class="fs-85 text-dark-emphasis"><i class="bi bi-calendar-check mb-3 text-primary"></i> <?php echo get_the_date() ?></span>
                            </div>
                            <a href="<?php the_permalink() ?>" class="btn border-complementary text-complementary fw-bold-500 h6">
                                <?php echo PearTheme::lang('See more','Ver mas','查看更多','Ver mais')?>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                  <path fill-rule="evenodd" clip-rule="evenodd" d="M11.7661 7.50007L8.52693 4.35901L9.22307 3.64111L13.7183 8.00007L9.22307 12.359L8.52693 11.6411L11.7661 8.50007H2V7.50007H11.7661Z" fill="#39A3B8"/>
                                </svg>
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

            <div class="d-flex w-100 justify-content-center">
                <div>
                    <a href="<?php echo get_permalink(pll_get_post(335)); ?>" class="btn btn-primary text-white rounded-3 fw-bold-500">
                        <?php echo PearTheme::lang('View All Blogs','Ver todos los blogs','查看所有博客','Ver todos os blogs') ?> 
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>

        </div>
    </section>