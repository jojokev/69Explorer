<?php
// ****************
//encabezado
//********************** */
get_header();
?>

<div class="py-default position-relative">
    <!-- Background -->
    <img class="p position-absolute start-0 top-0 w-100 h-100 object-fit-cover" src="<?php echo get_template_directory_uri(); ?>/assets/imagenes/fondos/Bg-sections.webp" alt="background page">
    <div class="container">
      <div class="row py-default">
          <div class="col-12 text-center my-5">
              <h1 class="display-1">404</h1>
              <h2 class="mb-4">Página no encontrada</h2>
              <p class="lead fw-bold-500 mb-5">¡Ups! Parece que este destino no existe…</p>
              <a href="<?php echo home_url(); ?>" class="home-page__buttom1">
                Volver al inicio 
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