<?php
// ****************
//encabezado
//********************** */
get_header();
?>

<div class="bg-section py-default position-relative">
    <div class="container">
      <div class="row py-default">
          <div class="col-12 text-center my-5">
              <h1 class="display-1">404</h1>
              <h2 class="mb-4"><?php echo PearTheme::lang('Page not found','Página no encontrada','页面未找到','Página não encontrada')?> </h2>
              <p class="lead fw-bold-500 mb-5"><?php echo PearTheme::lang('Oops! It seems that this destination does not exist...','¡Ups! Parece que este destino no existe…','哎呀！似乎这个目的地不存在...','Opa! Parece que este destino não existe...')?></p>
              <a href="<?php echo home_url(); ?>" class="home-page__buttom1">
                <?php echo PearTheme::lang('Back to top','Volver al inicio','返回顶部','Voltar ao início')?>
                <i class="bi bi-arrow-right"></i>
              </a>
          </div>
      </div>
    </div>
</div>


<?php
// ****************
//foooter
//********************** */
get_footer();
?>