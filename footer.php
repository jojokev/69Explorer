<!-- Our Permits -->
<section class="py-default position-relative">
  <div class="container">
    <!-- titulo -->
    <div class="w-lg-75 mx-auto mb-45 text-center position-relative z-2">
        <span class="fw-bold text-uppercase mb-1 text-primary"><?php echo PearTheme::lang('Permits','Permisos','许可证','Autorizações') ?></span>
        <h2 class="fw-bold h3 text-uppercase mb-3">
            <?php echo PearTheme::lang('Our Permits and Certifications','Nuestros Permisos y Certificaciones','我们的执照和认证','Nossas licenças e certificações') ?>
        </h2>
    </div>

    <div class="d-flex flex-wrap justify-content-center align-items-center">
        <div class="px-3" style="max-width: 150px;">
            <img class="w-100" src="<?php echo get_template_directory_uri(); ?>/assets/imagenes/iconos/icon-lonely.webp" alt="background page">
        </div>
        <div class="px-3" style="max-width: 150px;height: 120px;">
            <img class="w-100 h-100 object-fit-cover" src="<?php echo get_template_directory_uri(); ?>/assets/imagenes/iconos/icon-mominee.webp" alt="background page">
        </div>
        <div class="px-3" style="max-width: 150px;">
            <img class="w-100" src="<?php echo get_template_directory_uri(); ?>/assets/imagenes/iconos/icon-peru.webp" alt="background page">
        </div>
        <div class="px-3" style="max-width: 150px;">
            <img class="w-100" src="<?php echo get_template_directory_uri(); ?>/assets/imagenes/iconos/icon-tourradar.webp" alt="background page">
        </div>
        <div class="px-3" style="max-width: 150px;">
            <img class="w-100" src="<?php echo get_template_directory_uri(); ?>/assets/imagenes/iconos/icon-tripadvisorr.webp" alt="background page">
        </div>
        <div class="px-3" style="max-width: 150px;">
            <img class="w-100" src="<?php echo get_template_directory_uri(); ?>/assets/imagenes/iconos/icon-traveler.webp" alt="background page">
        </div>
    </div>
  </div>
</section>
<!-- Fin Our Permits -->

<!-- Our Accommodations -->
<?php if(get_the_ID() === 7 || get_the_ID() === 603 || get_the_ID() === 4045){ ?>
    <section class="pb-5 mb-3">
        <div class="container px-3">
            <!-- titulo -->
            <div class="w-lg-75 mx-auto mb-45 text-center position-relative z-2">
                <span class="fw-bold text-uppercase mb-1 text-primary"><?php echo PearTheme::lang('Discover the Comfort You Deserve!','¡Descubra la comodidad que se merece! ','发现您应得的舒适！','Descubra o conforto que você merece! ') ?></span>
                <h2 class="fw-bold h3 text-uppercase mb-3">
                    <?php echo PearTheme::lang('Our Hotel in Ollantayatmbo and & Air BnB in Cusco Partners','Nuestro hotel en Ollantaytambo y nuestros socios de Airbnb en Cusco','我们在奥兰塔坦博的酒店及库斯科的Airbnb合作伙伴','Nosso hotel em Ollantaytambo e nossos parceiros do Airbnb em Cusco') ?>
                </h2>
            </div>
            <div class="row gx-5 gy-3">
                <div class="col-md-6 flex-grow-1 flex-shrink-1">
                    <div class="row bg-dark rounded-4 px-0 py-0 overflow-hidden h-100">
                        <div class="col-12 col-lg-6 px-0 py-0">
                            <?php echo wp_get_attachment_image(5983,'full-size ', null,array('class'=>'w-100 h-100 object-fit-cover max-h-380') ) ?>
                        </div>
                        <div class="col-12 col-lg-6 text-white px-4 py-4 d-flex flex-column justify-content-center">
                            <?php echo wp_get_attachment_image(5986,'full-size ', null,array('class'=>'wx-120 mb-3 h-auto') ) ?>
                            <h3 class="h4 fw-bold-600 text-warning">Hotel Andenes del Inca</h3>
                            <p class="fs-90"><?php echo PearTheme::lang('Comfortable lodging near the ruins of Ollantaytambo, in the Sacred Valley of the Incas','Alojamiento confortable cerca de las ruinas de Ollantaytambo, en el Valle Sagrado de los Incas.','位于印加圣谷奥兰泰坦博遗址附近的舒适住宿','Alojamento confortável perto das ruínas de Ollantaytambo, no Vale Sagrado dos Incas') ?></p>
                            <div>
                                <a href="https://www.andenesdelinca.com/" target="_blank" class="btn btn-warning fw-bold-600"><?php echo PearTheme::lang('Lear More','Más información','了解更多','Saiba mais') ?> <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 flex-grow-1 flex-shrink-1">
                    <div class="row rounded-4 px-0 py-0 overflow-hidden h-100" style="background-color: #270570;">
                        <div class="col-12 col-lg-6 px-0 py-0">
                            <?php echo wp_get_attachment_image(5984,'full-size ', null,array('class'=>'w-100 h-100 object-fit-cover max-h-380') ) ?>
                        </div>
                        <div class="col-12 col-lg-6 text-white px-4 py-4 d-flex flex-column justify-content-center align-items-start">
                            <?php echo wp_get_attachment_image(6014,'full-size ', null,array('class'=>'wx-120 mb-3 h-auto') ) ?>
                            <h3 class="h4 fw-bold-600">SAM Apartment</h3>
                            <p class="fs-90"><?php echo PearTheme::lang('Discover the Comfort You Deserve, modern Home in the City of the Incas','Descubra la comodidad que se merece, una casa moderna en la ciudad de los incas.','探索您应得的舒适，印加古城中的现代之家','Descubra o conforto que você merece, uma casa moderna na cidade dos Incas') ?></p>
                            <div>
                                <a href="https://samapartmentsperu.com/" target="_blank" class="btn bg-white fw-bold-600"  style="color: #270570;"><?php echo PearTheme::lang('Lear More','Más información','了解更多','Saiba mais') ?> <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>
<!-- End Our Accommodations -->

<footer class="">
  <div class="container-xxl">
      <div class="row gy-3 py-5">
          <div class="col-12 col-sm-6 col-lg-3 ">
              <div class="position-relative">
                  <img src="<?php echo IMGS_URL?>logo-69-white.png" alt="" class="img-fluid my-2 px-3"> 
                  <div class="text-white py-2">
                      <p><?php echo PearTheme::lang('Welcome to 69EXPLORER.COM. We are a tour operator focused on quality budget-friendly experiences. Our HQ is located in the heart of the Inca Empire, Cusco-Peru. We are specialists creating unforgettable travel experiences across the Peruvian Andes','Bienvenido a 69EXPLORER.COM. Somos un operador turístico especializado en experiencias de calidad a precios asequibles. Nuestra sede se encuentra en el corazón del Imperio Inca, Cusco-Perú. Somos especialistas en crear experiencias de viaje inolvidables a través de los Andes peruanos.','欢迎访问69EXPLORER.COM。我们是一家专注于提供高品质经济型旅行体验的旅行社，总部坐落于印加帝国的心脏地带——秘鲁库斯科。我们致力于打造穿越秘鲁安第斯山脉的难忘旅程。','Bem-vindo ao 69EXPLORER.COM. Somos uma operadora de turismo focada em experiências de qualidade a preços acessíveis. Nossa sede está localizada no coração do Império Inca, em Cusco, Peru. Somos especialistas em criar experiências de viagem inesquecíveis pelos Andes peruanos.') ?>
                      </p>
                      <div class="p-0 d-flex jutify-content-center">
                          <a href="https://www.facebook.com/69explorerperu"
                              class="text-decoration-none mx-2 btn btn-light" target="_blank" aria-label="Facebook Link">
                              <i class="bi bi-facebook"></i>
                          </a>
                          <a href="https://www.instagram.com/69explorerperu/"
                              class="text-decoration-none mx-2 btn btn-light" target="_blank" aria-label="Instagram Link">
                              <i class="bi bi-instagram"></i>
                          </a>
                          <a href="https://www.tiktok.com/@69explorer"
                              class="text-decoration-none mx-2 btn btn-light" target="_blank" aria-label="Tiktok Link">
                              <i class="bi bi-tiktok"></i>
                          </a>
                          <a href="https://www.youtube.com/@69Explorer"
                              class="text-decoration-none mx-2 btn btn-light" target="_blank" aria-label="Youtube Link">
                              <i class="bi bi-youtube"></i>
                          </a>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-12 col-sm-6 col-lg-3 ">
              <div class="position-relative">
                  <h3 class="text-uppercase fs-6 text-light py-3"><?php echo PearTheme::lang('COMPANY','COMPAÑÍA','公司','EMPRESA') ?></h3>
                  <div class="text-light">
                      <ul class="px-0 list-style-none styled-list-footer">
                          <li class="py-1">
                              <a href="<?php echo get_permalink(pll_get_post(333)); ?>" class="link-light"> <?php echo PearTheme::lang('About 69 Explorer Peru','Acerca de 69 Explorer Perú','关于 69 Explorer Peru','Sobre o 69 Explorer Peru') ?></a>
                          </li>
                          <li class="py-1">
                              <a href="<?php echo get_permalink(pll_get_post(327)); ?>" class="link-light"> <?php echo PearTheme::lang('Terms and Conditions','Términos y condiciones','条款和条件','Termos e Condições') ?></a>
                          </li>
                          <li class="py-1">
                              <a href="<?php echo get_permalink(pll_get_post(329)); ?>" class="link-light"><?php echo PearTheme::lang('Personal data Protection','Protencion de datos Personales','个人资料保护','Proteção de dados pessoais') ?></a>
                          </li>
                          <li class="py-1">
                              <a href="<?php echo get_permalink(pll_get_post(335)); ?>" class="link-light"><?php echo PearTheme::lang('Travel Blog','Blog de viajes','旅游博客','Blog de viagens') ?></a>
                          </li>
                          <li class="py-1">
                              <a href="<?php echo get_permalink(pll_get_post(420)); ?>" class="link-light"><?php echo PearTheme::lang('Payments','Pagos','支付','Pagamentos') ?></a>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
          <div class="col-12 col-sm-6 col-lg-3 ">
              <div class="position-relative">
                  <h3 class=" text-uppercase fs-6 text-light py-3 fw-bold-600"> <?php echo PearTheme::lang('Top Trek & Tours','Las mejores caminatas y excursiones','热门徒步和旅游','Melhores caminhadas e passeios') ?></h3>
                  <div class="text-light">
                      <ul class="px-0 list-style-none styled-list-footer">
                          <li class="py-1">
                              <a href="<?php echo get_permalink(pll_get_post(94)); ?>" class="link-light"><?php echo PearTheme::lang('Inca Trail 4 Days','excursiones Camino Inca 4 días','印加古道 4 天','Trilha Inca 4 Dias') ?></a>
                          </li>
                          <li class="py-1">
                              <a href="<?php echo get_permalink(pll_get_post(144)); ?>" class="link-light"><?php echo PearTheme::lang('Lares Trek 4 Day','Caminata por Lares 4 días','拉雷斯 4 日徒步','Caminhada Lares 4 dias') ?></a>
                          </li>
                          <li class="py-1">
                              <a href="<?php echo get_permalink(pll_get_post(90)); ?>" class="link-light"><?php echo PearTheme::lang('Short Inca Trail 2 Days','Camino Inca Corto 2 Días','印加古道短途两日游','Trilha Inca Curta 2 Dias') ?></a>
                          </li>
                          <li class="py-1">
                              <a href="<?php echo get_permalink(pll_get_post(231)); ?>" class="link-light"><?php echo PearTheme::lang('Sacred Valley & Short Inca Trail','Valle Sagrado y Camino Inca Corto','圣谷和短印加古道','Vale Sagrado e Trilha Inca Curta') ?> </a>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
          <div class="col-12 col-sm-6 col-lg-3 ">
              <div class="position-relative">
                  <h3 class=" text-uppercase fs-6 text-light py-3 fw-bold-600"><?php echo PearTheme::lang('Contact Us','Contáctanos','联系我们','Entre em contato conosco') ?></h3>
                  <div class="text-light">
                      <div>
                          <span><?php echo PearTheme::lang('Address:','Dirección:','地址：','Endereço:') ?> </span>
                          <span><?php echo PearTheme::lang(' Garcilaso Street 210, Office Nº:207 (2nd Floor) in the CASA DEL ABUELO shopping
                              center','Calle Garcilaso 210, Oficina Nº:207 (2ª Planta) en el centro comercial CASA DEL ABUELO','Garcilaso 街 210 号，207 号办公室（二楼），位于 CASA DEL ABUELO 购物中心','Rua Garcilaso, 210, Escritório Nº: 207 (2º andar) no shopping center CASA DEL ABUELO') ?></span>
                      </div>
                      <a rel="nofollow" href="mailto:69explorerperu@gmail.com"
                          class="d-block pt-2 link-light">69explorerperu@gmail.com</a>
                      <small class="d-block fs-sm text-light mb-2"><?php echo PearTheme::lang('Drop us a line','Escríbenos','给我们留言','Entre em contato conosco') ?></small>
                      <div class="py-2">
                          <span><?php echo PearTheme::lang('Monday to Saturday: 9:00 - 13:00 hrs. and from 3:00 p.m. to 7:00 p.m.','De lunes a sábado 9:00 - 13:00 h. y de 15:00 a 19:00 h.','周一至周六：9:00 - 13:00 和 3:00 - 7:00','De segunda a sábado: das 9h às 13h e das 15h às 19h.') ?></span>
                          <small class="d-block fs-sm text-light"><?php echo PearTheme::lang('Office hours','Horario de oficina','办公时间','Horário de atendimento') ?></small>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- col12 -->
      <div class="row mt-4 mb-4">
          <div class="col-md-12">
              <div class=" text-end">
                  <a href="<?php echo  get_permalink(420); ?>" class="text-light text-decoration-none">
                    <?php echo PearTheme::lang('Payment Methods','Metodos de Pago','付款方式','Formas de pagamento')?>
                    <img src="<?php echo IMGS_URL?>payment.png" width="250" alt="">
                  </a>
              </div>
          </div>
      </div>
  </div>
  <!-- footer -->
  <div class="d-block py-3 text-center text-light">
      <p class="link-light mb-0 fs-95">
          69Explorer Copyright ©
          <script>
          document.write(new Date().getFullYear());
          </script> All rights reserved | <i class="bi bi-lock"></i> developed by
          <a class="link-light"href="https://eltiosam.net/" target="_blank">Tio Sam</a>
          | 
          <a class="link-light" href="https://69explorer.com/site-map/">Site Map</a>
      </p>
  </div>
</footer>

<div id="scroll-top-page">
    <i class="bi bi-arrow-up-circle-fill text-primary"></i>
</div>

<a id="help-footer" href="<?php echo  get_permalink(pll_get_post(324)); ?>">
    <i class="bi bi-question-circle"></i>
    <?php echo PearTheme::lang("help","ayuda","帮助","ajuda") ?>
</a>

<style>
    #scroll-top-page{
        position: fixed;
        bottom: 60px;
        right: 25px;
        font-size: 2rem;
        cursor: pointer;
        z-index: 100;
        background: #fff;
        border-radius: 50%;
        display: flex;
        width: 36px;
        height: 37px;
        align-items: center;
        justify-content: center;
        padding: 1rem;
    }
    #help-footer{
        background-color: #ff7000;
        color: #051036;
        font-size: 1rem;
        padding: 10px 20px;
        border-radius: 50px;
        text-decoration: none;
        position: fixed;
        right: 25px;
        bottom: 12px;
        z-index: 100;
        font-weight: 500;
        text-transform: capitalize;
    }
    @media (max-width:991px) {
        #scroll-top-page{
            right: 10px;
            bottom: 120px;
        } 
        #help-footer{
            right: 10px;
            bottom: 72px;
        }
    }
</style>

<script>
    // Función para calcular el tamaño total de contenido (incluyendo subniveles)
    function calculateContentSize(li) {
        let totalSize = 0;

        // Suma el tamaño del texto del elemento li actual
        totalSize += li.textContent.trim().length;

        // Si existen subniveles, añade su tamaño
        const subList = li.querySelectorAll('ul > li');
        subList.forEach(subLi => {
            totalSize += subLi.textContent.trim().length;
        });

        return totalSize;
    }

    // Obtén todos los elementos UL con la clase 'main-list'
    const mainLists = document.querySelectorAll('.wp-block-list');

    // Para cada lista con la clase 'main-list'
    mainLists.forEach(mainList => {
        // Convierte los elementos LI del primer nivel a un array
        const items = Array.from(mainList.querySelectorAll(':scope > li'));

        // Ordena los elementos LI según el tamaño total de su contenido (incluyendo subniveles), de mayor a menor
        items.sort((a, b) => calculateContentSize(b) - calculateContentSize(a));

        // Vacía la lista y vuelve a añadir los elementos ordenados
        mainList.innerHTML = '';
        items.forEach(item => mainList.appendChild(item));
    });
</script>

<script type="text/javascript">
/*window.$zopim || (function(d, s) {
    var z = $zopim = function(c) {
            z._.push(c)
        },
        $ = z.s =
        d.createElement(s),
        e = d.getElementsByTagName(s)[0];
    z.set = function(o) {
        z.set.
        _.push(o)
    };
    z._ = [];
    z.set._ = [];
    $.async = !0;
    $.setAttribute("charset", "utf-8");
    $.src = "https://v2.zopim.com/?5M0hjOF9TfA89uBJmGlNzBQzF7pH5Dnr";
    z.t = +new Date;
    $.
    type = "text/javascript";
    e.parentNode.insertBefore($, e)
})(document, "script");
*/
</script>
<?php wp_footer(); ?>
</body>

</html>