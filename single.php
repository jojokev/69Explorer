<?php
// ****************
// encabezado
// ********************** */
get_header();
?>

<main class="mb-45">
    <div class="bg-section py-default position-relative mb-45">
		<div class="container title-single">
			<h1 class="h2 fw-bold mb-3 text-center z-2 position-relative"><?php the_title(); ?></h1>
		</div>
	</div>

    <section class="container">
        <article class="article-blog">
            <?php the_content();?>
        </article>
    </section>
</main>

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
 
<!-- Join 69 Explorer -->
<section class="py-default position-relative">
  <div class="container-xxl">
    <!-- titulo -->
    <div class="mb-45 text-center position-relative z-2">
        <span class="fw-bold text-uppercase mb-1 text-primary"><?php echo PearTheme::lang('EXPERIENCE PERU','EXPERIMENTA PERÚ','体验秘鲁','EXPERIMENTE O PERU') ?></span>
        <h2 class="fw-bold h3 text-uppercase mb-3"><?php echo PearTheme::lang('JOIN 69 EXPLORER FOR AN UNFORGETTABLE JOURNEY','ÚNETE A 69 EXPLORER PARA UN VIAJE INOLVIDABLE','加入69号探险者，开启难忘之旅','加入69号探险者，开启难忘之旅') ?></h2>
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

<?php
// ****************
//foooter
//********************** */
get_footer();
?>