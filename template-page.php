<?php
/*Template Name: plantilla page*/
get_header();
$categoria = get_post_meta(get_the_ID(), 'custom_field_titulo_menu2', true);
?>

<!--  Banner Category -->
<div class="py-5 px-3 mb-3 bg-50 position-relative wrapper-banner-tour-page">
    <div class="img-background-banner">
        <?php the_post_thumbnail('full-size',array('class'=>'img-cover')) ?>
    </div>
    <h1 class="py-5 text-center fs-1 fw-bold"><?php the_title(); ?></h1>
</div>
<!--  Fin Banner Category -->

<!--  Content Category -->
<article class="py-default position-relative">
    <div class="container">
        <div class="article-blog">
            <!-- content -->
            <?php the_content(); ?>
        </div>
    </div>
</article>
<!--  Fin Content Category -->

<!-- Cards Category -->
<section class="py-5">
    <div class="container">
        <div class="row gy-3 flex-md-row-reverse">
            <!--  col-right -->
            <div class="col-md-12 col-lg-8">
                <div class="position-relative">
                    <h2 class="fw-bold h4 text-uppercase mb-4 text-primary"><?php the_title(); ?></h2>
                    <!--  tours -->
                    <div class="row gy-3">
                        <?php
                            $class=null;
                            $toursofperu = get_posts([
                                'post_type' => 'tour',
                                'numberposts' => -1, //cantidad de entradas
                                'order' => 'desc',
                                'ignore_sticky_posts' => 0,
                                'category_name' => $categoria
                            ]);
                            
                            foreach ($toursofperu as $key =>  $post) :
                                $precio = get_post_meta(get_the_ID(), 'custom_field_precio', true); 
                                $lugares = get_post_meta(get_the_ID(), 'custom_field_lugares', true);
                                $dias = get_post_meta(get_the_ID(), 'custom_field_lugares_visitar', true);
                                $dificulty = get_post_meta(get_the_ID(), 'custom_field_dificultad', true);
                                $estilo = get_post_meta(get_the_ID(), 'custom_field_estilo', true);
                            // Ejemplo de valor
                                $class =($key % 2 == 0) ? ' flex-md-row-reverse':''; 
                        ?>
                            <div class="col-12 col-sm-6">
                                <div class="border-shadow-inca-trail rounded-4 gx-3 bg-white h-100 d-flex flex-column">
                                    <a href="<?php the_permalink(); ?>" class="d-flex position-relative w-100 rounded-4 rounded-bottom-0 mb-1 hx-280 overflow-hidden border-4 border-complementary">
                                        <?php the_post_thumbnail('full-size',array('class'=>'w-100 h-100 object-fit-cover') ) ?>
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
                        <?php endforeach; ?>
                    </div>
                  </div>
            </div>
            <!--  col-left -->
            <div class="col-md-12 col-lg-4">
                <!-- Table contents Categories-->
                <div class="px-3 py-3 border rounded-3 mb-4 position-sticky top-5 lastest-blogs" style="background-color: #FAFAFA;">
                    <div class="py-2">
                        <h2 class="mb-4 h5 fw-bold-600 border-start border-primary border-3 ps-2 py-1">
                            <?php echo PearTheme::lang('Other Routes to Machu Picchu','Otras rutas a Machu Picchu','前往马丘比丘的其他路线') ?>
                        </h2>
                    </div>
                    <ul class="p-0 m-0 list-style-none">
                        <?php
                            $args = [
                                'post_type' => 'page',
                                'post__in'  => [623, 294,298,282,296], // Page IDs
                                'orderby'   => 'post__in', // Optional: keep the order of IDs
                                'posts_per_page' => -1, // -1 means no limit
                            ];
                            
                            $pages = get_posts($args);
                            
                            if ($pages) {
                                foreach ($pages as $page) {
                                    // Get the permalink for the page
                                    $page_url = get_permalink($page->ID);
                        ?>
                            <a href="<?php echo esc_url($page_url); ?>" class="d-flex justify-content-between align-items-center border rounded-3 px-2 py-2 mb-3">
                                <span><?php echo esc_html($page->post_title); ?></span> <i class="bi bi-arrow-right"></i>
                            </a>
                        <?php
                                }
                            }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- old -->

<!-- Join 69 Explorer -->
<section class="bg-section py-default position-relative">
  <div class="container-xxl">
    <!-- titulo -->
    <div class="mb-45 text-center position-relative z-2">
        <span class="fw-bold text-uppercase mb-1 text-primary"><?php echo PearTheme::lang('EXPERIENCE PERU','EXPERIMENTA PERÚ','体验秘鲁','EXPERIMENTE O PERU') ?></span>
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

<!-- Reviews Tour -->
<?php get_template_part('template/reviews','reviews') ?>
<!-- End Reviews Tour -->


<?php
get_footer();
?>