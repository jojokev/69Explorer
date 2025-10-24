<?php
/*
Template Name: New tours 2025
Template Post Type: tour
*/
get_header();
?>

<?php 
    $dias = get_post_meta(get_the_ID(), 'custom_field_lugares_visitar', true);
    $estilo = get_post_meta(get_the_ID(), 'custom_field_estilo', true);
    $dificultad = get_post_meta(get_the_ID(), 'custom_field_dificultad', true);
    $grupo = get_post_meta(get_the_ID(), 'custom_field_grupo', true);
    $precio = get_post_meta(get_the_ID(), 'custom_field_precio', true); 
?>

<main class="main-Tour-2025">

    <!-- Title -->
    <section class="title-tour py-4">
        <?php $lugares = get_post_meta(get_the_ID(), 'custom_field_lugares', true); ?>
        <div class="container-xl">
            <h1 class="h1 fw-bold mb-1"><?php the_title() ?></h1>
        </div>
    </section>
    <!-- End Title -->

    <!-- Navigation Tour -->
    <!-- Navigation Top Tour -->
    <section class="navigation-tour py-2 bg-white z-2" id="navigation-tour">
        <div class="container-xl">
            <div class="d-flex justify-content-between">
                <div class="d-flex flex-row">
                    <a href="<?php echo APP_LANG == 'en' ? esc_url(get_permalink(7)) : (APP_LANG == 'es' ? esc_url(get_permalink(603)) :(APP_LANG == "pt"? esc_url(get_permalink(4045)): esc_url(get_permalink(2873)))); ?>" class="navigation-tour__show align-items-center pe-2 overflow-hidden hmx-50 navigation-tour__logo">
                        <img src="https://69explorer.com/wp-content/uploads/2025/08/logo-69-columna.webp" alt="69 explorer logo" class="wx-100 h-auto">
                    </a>
                    <div class="d-none d-lg-flex justify-content-start" id="items-navigation-tour">
                        <?php if(get_field("description")){?>
                        <div class="py-2 px-2 ps-0 fw-bold-600 me-1 text-uppercase fs-90 lh-lg">
                            <span class="ps-2 fw-bold-600 text-uppercase fs-90 lh-lg d-flex align-items-center">
                              <svg class="me-1" xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                                  <path d="M15 6.51224C14.6897 6.51224 14.3836 6.44002 14.106 6.30131L9.894 4.19531C9.6164 4.05659 9.31033 3.98438 9 3.98438M15 6.51224C15.3103 6.51224 15.6164 6.44002 15.894 6.30131L19.553 4.47131C19.7056 4.39507 19.8751 4.35912 20.0455 4.36688C20.2159 4.37463 20.3814 4.42585 20.5265 4.51564C20.6715 4.60543 20.7911 4.73082 20.874 4.87989C20.9569 5.02896 21.0003 5.19675 21 5.36731V18.1313C20.9999 18.317 20.9481 18.4989 20.8505 18.6568C20.7528 18.8147 20.6131 18.9423 20.447 19.0253L15.894 21.3023C15.6164 21.441 15.3103 21.5132 15 21.5132M15 6.51224V21.5132M15 21.5132C14.6897 21.5132 14.3836 21.441 14.106 21.3023L9.894 19.1963C9.6164 19.0576 9.31033 18.9854 9 18.9854C8.68967 18.9854 8.3836 19.0576 8.106 19.1963L4.447 21.0263C4.29436 21.1026 4.12473 21.1385 3.95426 21.1307C3.78379 21.1229 3.61816 21.0716 3.47312 20.9817C3.32808 20.8918 3.20846 20.7663 3.12565 20.6171C3.04284 20.4679 2.99958 20.3 3 20.1293V7.36631C3.0001 7.18065 3.05189 6.99868 3.14956 6.84078C3.24722 6.68289 3.38692 6.5553 3.553 6.47231L8.106 4.19531C8.3836 4.05659 8.68967 3.98438 9 3.98438M9 3.98438V18.9843" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                              <?php echo PearTheme::lang('overview','resumen','概述','visão geral') ?>
                            </span>
                        </div>
                        <?php } ?>
                        <div class="py-2 px-2 ps-0 fw-bold-600 me-1 text-uppercase fs-90 lh-lg">
                            <span class="ps-2 fw-bold-600 text-uppercase fs-90 lh-lg d-flex align-items-center">
                                <svg class="me-1" xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                                  <path d="M9 19.748C9 21.4049 7.65685 22.748 6 22.748C4.34315 22.748 3 21.4049 3 19.748C3 18.0912 4.34315 16.748 6 16.748C7.65685 16.748 9 18.0912 9 19.748ZM9 19.748H17.5C18.4283 19.748 19.3185 19.3793 19.9749 18.7229C20.6313 18.0665 21 17.1763 21 16.248C21 15.3198 20.6313 14.4296 19.9749 13.7732C19.3185 13.1168 18.4283 12.748 17.5 12.748H6.5C5.57174 12.748 4.6815 12.3793 4.02513 11.7229C3.36875 11.0665 3 10.1763 3 9.24805C3 8.31979 3.36875 7.42955 4.02513 6.77317C4.6815 6.1168 5.57174 5.74805 6.5 5.74805H15M15 5.74805C15 7.4049 16.3431 8.74805 18 8.74805C19.6569 8.74805 21 7.4049 21 5.74805C21 4.09119 19.6569 2.74805 18 2.74805C16.3431 2.74805 15 4.09119 15 5.74805Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <?php echo PearTheme::lang('Itinerary','Itinerario','行程安排','Itinerário') ?>
                            </span>
                        </div>
                        <?php if(get_field("inclusiones")){ ?>
                        <div class="py-2 px-2 ps-0 me-1">
                            <span class="ps-2 fw-bold-600 text-uppercase fs-90 lh-lg d-flex align-items-center">
                                <svg class="me-1" xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                                  <path d="M11 18.748H3M15 18.748L17 20.748L21 16.748M16 12.748H3M16 6.74805H3" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <?php echo PearTheme::lang('Includes','Incluye','包括','Inclui') ?>
                            </span>
                        </div>
                        <?php } ?>
                        <?php if(get_field("recomendaciones")){ ?>
                        <div class="py-2 px-2 ps-0 fw-bold-600 me-1 text-uppercase fs-90 lh-lg">
                            <span class="ps-2 fw-bold-600 text-uppercase fs-90 lh-lg d-flex align-items-center">
                                <svg class="me-1" xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                                  <path d="M8 10.748H16M8 18.748H16M8 22.748V16.748C8 16.2176 8.21071 15.7089 8.58579 15.3338C8.96086 14.9588 9.46957 14.748 10 14.748H14C14.5304 14.748 15.0391 14.9588 15.4142 15.3338C15.7893 15.7089 16 16.2176 16 16.748V22.748M9 6.74805V4.74805C9 4.21761 9.21071 3.70891 9.58579 3.33383C9.96086 2.95876 10.4696 2.74805 11 2.74805H13C13.5304 2.74805 14.0391 2.95876 14.4142 3.33383C14.7893 3.70891 15 4.21761 15 4.74805V6.74805M4 10.748C4 9.68718 4.42143 8.66977 5.17157 7.91962C5.92172 7.16947 6.93913 6.74805 8 6.74805H16C17.0609 6.74805 18.0783 7.16947 18.8284 7.91962C19.5786 8.66977 20 9.68718 20 10.748V20.748C20 21.2785 19.7893 21.7872 19.4142 22.1623C19.0391 22.5373 18.5304 22.748 18 22.748H6C5.46957 22.748 4.96086 22.5373 4.58579 22.1623C4.21071 21.7872 4 21.2785 4 20.748V10.748Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <?php echo PearTheme::lang('What to bring?','¿Qué llevar?','需要带什么？','O que levar?') ?>
                            </span>
                        </div>
                        <?php } ?>
                        <?php if(get_field("preguntas_frecuentes")){ ?>
                        <div class="py-2 px-2 ps-0 fw-bold-600 me-1 text-uppercase fs-90 lh-lg">
                            <span class="ps-2 fw-bold-600 text-uppercase fs-90 lh-lg d-flex align-items-center">
                                <svg class="me-1" xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                                  <path d="M3 12.748H3.01M3 18.748H3.01M3 6.74805H3.01M8 12.748H21M8 18.748H21M8 6.74805H21" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <?php echo PearTheme::lang('FAQs','Preguntas frecuentes','常见问题解答','Perguntas frequentes') ?>
                            </span>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="d-flex justify-content-end w-100">
                    <div class="me-2">
                        <p class="m-0 fs-81 text-end"><?php echo PearTheme::lang('Price from','Precio desde','/ 价格从','Preço a partir de') ?></p>
                        <p class="m-0 fs-81 text-end"><strong class="fs-93">$<?php echo $precio ?></strong>USD</p>
                    </div>
                    <a rel="nofollow" href="<?php echo esc_url(get_permalink(pll_get_post(339)) . '?uuid=' . get_the_ID()); ?>" class="btn btn-primary px-3 py-2 fw-bold-600">
                        <?php echo PearTheme::lang('Booking Now','Reservar ahora','立即预订','Reservar agora') ?> 
                    </a>
                    <div class="px-3 align-items-center btn border-0 navigation-tour__show" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" id="btn-mnav-tour">
                        <i class="bi bi-list text-primary fs-5"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="aside-navigation-tour offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
            <a href="<?php echo APP_LANG == 'en' ? esc_url(get_permalink(7)) : (APP_LANG == 'es' ? esc_url(get_permalink(603)) :(APP_LANG == "pt"? esc_url(get_permalink(3404)): esc_url(get_permalink(2873)))); ?>" class="navigation-tour__show align-items-center pe-2 overflow-hidden hmx-50 navigation-tour__logo">
                <img src="https://69explorer.com/wp-content/uploads/2025/08/logo-69-columna.webp" alt="69 explorer logo" class="wx-100 h-auto">
            </a>
            <button type="button" class="btn-close btn-close-dark" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body overflow-auto" id="menu-destok">
            <p class="h5 py-3 fw-bold-600 m-0 text-primary"><?php echo PearTheme::lang('Destinations','Destinos','目的地','Destinos') ?></p>
            <!-- Se hace una copia de los destinos del header -->
            <div id="paste-destination-header"></div>
            <p class="h5 py-3 fw-bold-600 m-0 text-primary"><?php echo PearTheme::lang('Information','Información','信息','Informações') ?></p>
            <!-- Se hace una copia de los links del header -->
            <div id="paste-links-header"></div>
        </div>
    </div>
    <!-- End Navigation Top Tour -->

    <!-- Navigation Bottom Tour -->
    <section class="navigation-title py-2 bg-white position-fixed bottom-0 start-0 end-0 z-3 border-top" id="navigation-title">
        <div class="container-xl">
            <div class="d-flex justify-content-center align-items-center">
                <span class="fw-bold-600 h6 m-0"><?php the_title(); ?></span>
                <button class="btn btn-secondary border ms-3 py-1 border-primary text-primary fw-bold-600" data-bs-toggle="modal" data-bs-target="#staticForm">
                    <?php echo PearTheme::lang('Inquire now ','Preguntar ahora','立即咨询','Informe-se agora') ?>
                </button>
            </div>
        </div>
    </section>
    <!-- End Navigation Bottom Tour -->
    <!-- End Navigation Tour -->

    <!-- Gallery Tour -->
    <section class="gallery-tour py-4">
        <?php 
            $images = get_post_meta(get_the_ID(), 'vdw_gallery_id', true); 
            $imagenes = [];
            foreach ($images as $key=>$value ){
                $url = wp_get_attachment_image_url($value,'full-size'); 
                $imagenes[] = $url;
            }
        ?>
        <div class="container-xl">
            <div class="row gx-2 position-relative">
                <div class="col-12 col-lg-6 hx-450 mb-2 mb-lg-0">
                    <a href="<?php echo $imagenes[0]; ?>" data-fslightbox="gallery" class="d-block h-100">
                        <img src="<?php echo $imagenes[0]; ?>" alt="69 Explorer Tour" class="img-cover rounded-3">
                    </a>
                </div>
                <div class="col-12 col-lg-6 row gx-2 gy-2 m-0 d-none d-sm-flex">
                    <div class="col-12 hx-220 m-0 d-none d-lg-block">
                        <a href="<?php echo $imagenes[1]; ?>" data-fslightbox="gallery" class="d-block h-100">
                            <img src="<?php echo $imagenes[1]; ?>" alt="69 Explorer Tour" class="img-cover rounded-3">
                        </a>
                    </div>
                    <div class="col-6 hx-220">
                        <a href="<?php echo $imagenes[2]; ?>" data-fslightbox="gallery" class="d-block h-100">
                            <img src="<?php echo $imagenes[2]; ?>" alt="69 Explorer Tour" class="img-cover rounded-3">
                        </a>
                    </div>
                    <div class="col-6 hx-220">
                        <a href="<?php echo $imagenes[3]; ?>" data-fslightbox="gallery" class="d-block h-100">
                            <img src="<?php echo $imagenes[3]; ?>" alt="69 Explorer Tour" class="img-cover rounded-3">
                        </a>
                    </div>
                </div>
                <div class="position-absolute bottom-0 end-0 px-3 py-3 py-sm-2 d-flex justify-content-end">
                    <!-- <div class="btn bg-light rounded-3 me-3 px-3 py-2 shadow fs-93">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
                          <path d="M1.66667 12.0814C1.20095 9.88356 1.20095 7.61253 1.66667 5.41471C1.72786 5.19152 1.8461 4.9881 2.00974 4.82445C2.17339 4.66081 2.37681 4.54257 2.6 4.48138C6.17564 3.88902 9.82437 3.88902 13.4 4.48138C13.6232 4.54257 13.8266 4.66081 13.9903 4.82445C14.1539 4.9881 14.2721 5.19152 14.3333 5.41471C14.7991 7.61253 14.7991 9.88356 14.3333 12.0814C14.2721 12.3046 14.1539 12.508 13.9903 12.6716C13.8266 12.8353 13.6232 12.9535 13.4 13.0147C9.82438 13.6072 6.17563 13.6072 2.6 13.0147C2.37681 12.9535 2.17339 12.8353 2.00974 12.6716C1.8461 12.508 1.72786 12.3046 1.66667 12.0814Z" stroke="#15252D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                          <path d="M6.66667 10.748L10 8.74805L6.66667 6.74805V10.748Z" stroke="#15252D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        Video
                    </div> -->
                    <?php if( count($imagenes)>4){ ?>
                        <a href="<?php echo $imagenes[4]; ?>" data-fslightbox="gallery" class="btn bg-light rounded-3 px-3 py-2 shadow fs-93">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
                              <g clip-path="url(#clip0_63_4546)">
                                <path d="M14.6668 8.08154L13.8028 7.21754C13.6541 7.06758 13.4771 6.94855 13.2822 6.86732C13.0872 6.78609 12.878 6.74427 12.6668 6.74427C12.4556 6.74427 12.2465 6.78609 12.0515 6.86732C11.8565 6.94855 11.6796 7.06758 11.5308 7.21754L7.3335 11.4149M2.66683 6.08154C2.31321 6.08154 1.97407 6.22202 1.72402 6.47207C1.47397 6.72212 1.3335 7.06125 1.3335 7.41488V14.0815C1.3335 14.4352 1.47397 14.7743 1.72402 15.0244C1.97407 15.2744 2.31321 15.4149 2.66683 15.4149H9.3335C9.68712 15.4149 10.0263 15.2744 10.2763 15.0244C10.5264 14.7743 10.6668 14.4352 10.6668 14.0815M9.3335 5.41488C9.3335 5.78307 9.03502 6.08154 8.66683 6.08154C8.29864 6.08154 8.00016 5.78307 8.00016 5.41488C8.00016 5.04669 8.29864 4.74821 8.66683 4.74821C9.03502 4.74821 9.3335 5.04669 9.3335 5.41488ZM6.66683 2.08154H13.3335C14.0699 2.08154 14.6668 2.6785 14.6668 3.41488V10.0815C14.6668 10.8179 14.0699 11.4149 13.3335 11.4149H6.66683C5.93045 11.4149 5.3335 10.8179 5.3335 10.0815V3.41488C5.3335 2.6785 5.93045 2.08154 6.66683 2.08154Z" stroke="#15252D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                              </g>
                              <defs>
                                <clipPath id="clip0_63_4546">
                                  <rect width="16" height="16" fill="white" transform="translate(0 0.748047)"/>
                                </clipPath>
                              </defs>
                            </svg>
                            <?php echo PearTheme::lang('Photos','Fotos','照片','Fotos') ?>
                        </a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
    <!-- End Gallery Tour -->

    <!-- Featured Tour -->
    <section class="featured-tour py-4">
        <div class="container-xl">
            <div class="d-flex align-items-start align-items-sm-center justify-content-between flex-column flex-lg-row">
                <div class="d-flex justify-content-start mb-3 mb-lg-0 flex-wrap flex-sm-nowrap w-100">
                    <div class="d-flex align-items-center me-0 me-sm-3 w-50 w-sm-100 mb-3 mb-sm-0">
                        <div class="rounded-5 bg-50 p-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="36" viewBox="0 0 40 41" fill="none">
                              <path d="M26.6667 24.0815V27.7482L29.3333 29.4149M26.6667 4.08154V10.7482M35 13.2482V10.7482C35 9.86415 34.6488 9.01631 34.0237 8.39119C33.3986 7.76607 32.5507 7.41488 31.6667 7.41488H8.33333C7.44928 7.41488 6.60143 7.76607 5.97631 8.39119C5.35119 9.01631 5 9.86415 5 10.7482V34.0815C5 34.9656 5.35119 35.8134 5.97631 36.4386C6.60143 37.0637 7.44928 37.4149 8.33333 37.4149H14.1667M5 17.4149H13.3333M13.3333 4.08154V10.7482M36.6667 27.4149C36.6667 32.9377 32.1895 37.4149 26.6667 37.4149C21.1438 37.4149 16.6667 32.9377 16.6667 27.4149C16.6667 21.892 21.1438 17.4149 26.6667 17.4149C32.1895 17.4149 36.6667 21.892 36.6667 27.4149Z" stroke="#E91E3E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="ms-2">
                            <p class="fw-bold mb-1"><?php echo PearTheme::lang('Duration','Duración','期间','Duração') ?></p>
                            <p class="m-0"><?php echo PearTheme::days($dias) ?></p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center me-0 me-sm-3 w-50 w-sm-100 mb-3 mb-sm-0">
                        <div class="rounded-5 bg-50 p-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="36" viewBox="0 0 40 41" fill="none">
                              <path d="M4.52579 17.8548C4.34914 18.2228 4.22067 18.6389 4.14038 19.071C4.10826 19.295 4.0922 19.5191 4.0922 19.7271L4.25279 29.8408L0.751928 37.378C0.623456 37.602 0.543161 37.8581 0.494984 38.1301C0.302276 39.3783 1.1534 40.5305 2.406 40.7226C3.36954 40.8666 4.30097 40.3865 4.73456 39.5704L8.58872 31.345C8.66901 31.153 8.73325 30.9609 8.76536 30.7369C8.78142 30.6409 8.78142 30.5289 8.78142 30.4329L8.74931 24.1918L14.6751 26.7683L15.6386 32.8813C15.8313 33.7774 16.57 34.4815 17.5175 34.6416C18.7701 34.8176 19.9264 33.9694 20.1191 32.7372C20.1512 32.5292 20.1512 32.3212 20.1351 32.1131L18.9628 24.7359C18.8183 24.0318 18.3526 23.4077 17.6781 23.1037L12.3786 20.7513L15.751 14.9103L17.4212 17.0226C17.5978 17.2147 17.8066 17.3747 18.0635 17.4707L24.4389 19.327C25.2901 19.5031 26.1573 19.071 26.4784 18.2548C26.8478 17.3267 26.4142 16.2865 25.4988 15.9185C25.4667 15.9025 25.4346 15.9025 25.4025 15.8865L19.8621 14.2542L15.7029 9.27736C15.0765 8.62126 14.2415 8.14118 13.2779 7.99715C11.5917 7.74111 9.98585 8.54124 9.13472 9.91747L4.52579 17.8548Z" fill="#E91E3E"/>
                              <path d="M22.801 32.3533L22.3995 35.3778L11.4473 38.0342L11.5597 39.9065H38.2818C39.2293 39.9065 40.0002 39.1384 40.0002 38.1942L39.968 2.30029L36.2905 1.45215L34.1868 10.8937L30.6699 12.366L27.5544 21.0714L30.5253 27.7285L29.6903 30.2889L22.801 32.3533Z" fill="#E91E3E"/>
                              <path d="M15.3656 7.53317C17.2445 7.53317 18.7701 6.01292 18.7701 4.14061C18.7701 2.2683 17.2445 0.748047 15.3656 0.748047C13.4867 0.748047 11.9611 2.2683 11.9611 4.14061C11.945 6.01292 13.4706 7.53317 15.3656 7.53317Z" fill="#E91E3E"/>
                              <path d="M8.57255 8.06141C8.8295 7.59733 8.68497 7.00524 8.2032 6.73319L6.54912 5.77303C6.08341 5.51699 5.48923 5.66101 5.21622 6.14109L0.125523 14.8945C-0.131421 15.3586 0.0131102 15.9507 0.49488 16.2228L2.14896 17.1829C2.61467 17.455 3.20885 17.2949 3.48185 16.8309L8.57255 8.06141Z" fill="#E91E3E"/>
                            </svg>
                        </div>
                        <div class="ms-2">
                            <p class="fw-bold mb-1"><?php echo PearTheme::lang('Type of Tour','Tipo de Tour','类型旅游','Tipo de passeio') ?></p>
                            <p class="m-0"><?php echo $estilo ?></p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center me-0 me-sm-3 w-50 w-sm-100 mb-3 mb-sm-0">
                        <div class="rounded-5 bg-50 p-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="36" viewBox="0 0 40 41" fill="none">
                              <path d="M34.7796 0.748047V40.748H40V0.748047H34.7796ZM26.0875 13.053V40.748H31.2993V13.053H26.0875ZM17.3782 22.2906V40.748H22.6072V22.2906H17.3782ZM8.68611 28.4431V40.748H13.9065V28.4431H8.68611ZM0 32.9216V40.748H5.21527V32.9216H0Z" fill="#E91E3E"/>
                            </svg>
                        </div>
                        <div class="ms-2">
                            <p class="fw-bold mb-1"><?php echo PearTheme::lang('Difficulty','Dificultad','困难','Dificuldade') ?></p>
                            <p class="m-0"><?php echo $dificultad ?></p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center me-0 me-sm-3 w-50 w-sm-100 mb-3 mb-sm-0">
                        <div class="rounded-5 bg-50 p-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="36" viewBox="0 0 40 41" fill="none">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M15.3302 7.75C19.8797 7.75 23.5849 11.4505 23.5849 15.9995V18.3565C23.5849 20.8973 22.4057 23.1436 20.592 24.6591C22.5543 24.9491 24.4976 25.3875 26.3939 26.005C28.9458 26.8347 30.6604 29.2482 30.6604 32.0083V36.1825L30.1014 36.529C27.0071 38.4523 21.9292 40.748 15.3302 40.748C11.6863 40.748 6.16274 40.015 0.556601 36.529L0 36.1825V32.2369C0 29.3071 1.86084 26.7569 4.62735 25.8871C6.40802 25.3309 8.22406 24.9184 10.0543 24.6473C8.24999 23.1318 7.07548 20.8903 7.07548 18.3565V15.9995C7.07548 11.4505 10.7783 7.75 15.3302 7.75ZM24.6698 0.748047C29.2194 0.748047 32.9245 4.44854 32.9245 8.99756V11.3546C32.9245 13.8954 31.7453 16.144 29.9316 17.6572C31.8939 17.9471 33.8349 18.3878 35.7335 19.003C38.2854 19.8374 40 22.2486 40 25.0087V29.1829L39.4434 29.5294C37.8255 30.5359 35.6533 31.6342 33.0189 32.4615V32.009C33.0189 28.2236 30.6509 24.9097 27.125 23.7642C26.3576 23.5142 25.582 23.2901 24.7995 23.0924C25.5448 21.6382 25.9434 20.0213 25.9434 18.3572V16.0002C25.9434 10.7818 22.1486 6.45906 17.1792 5.5799C18.4859 2.73736 21.3396 0.748047 24.6698 0.748047Z" fill="#E91E3E"/>
                            </svg>
                        </div>
                        <div class="ms-2">
                            <p class="fw-bold mb-1"><?php echo PearTheme::lang('Gruop size','Tamaño del grupo','团体规模','Tamanho do grupo') ?></p>
                            <p class="m-0">2 <?php echo PearTheme::lang('min.','min.','最小','min.'); ?> - <?php echo $grupo; ?> <?php echo PearTheme::lang('max.','max.','最大','max.'); ?></p>
                        </div>
                    </div>
                </div>
                <div class="text-primary fs-5 px-4 py-2 rounded-3 white-space-nowrap d-none d-lg-block">
                    <span class="fw-bold">$<?php echo $precio ?></span><span class="fs-87"><?php echo PearTheme::lang('/ Per person','/ Por persona','/ 每人','/ Por pessoa') ?></span>
                </div>
            </div>
        </div>
    </section>
    <!-- End Featured Tour -->

    <!-- Highlights Tour -->
    <?php if(get_field("HighLights")){ ?>
        <section class="highlights-tour py-4">
            <div class="container-xl">
                <div class="position-relative">
                    <span class="highlights-tour__line"></span>
                    <?php echo get_field("HighLights"); ?>
                </div>
            </div>
        </section>
    <?php } ?>
    <!-- End Highlights Tour -->

    <!-- Overview Tour -->
    <?php if(get_field("description")){?>
        <section class="overview-tour py-4" data-section="navigation">
            <div class="container-xl">
                <div class="row">
                    <div class="order-2 order-md-1 col-12 col-md-7 fw-bold-500">
                        <div class="mb-3 overflow-hidden hmx-300 bt-scroll-text" data-scrollText="overview" data-scrollHeight="300">
                            <?php echo get_field("description"); ?>
                        </div>
                        <button class="rounded-3 px-2 py-2 bt-scroll-button" data-scrollButton="overview">
                            <span>
                                <?php echo PearTheme::lang('Read more','Leer más','阅读更多','Leia mais') ?> 
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                                  <path d="M19 3.74805H5M12 21.748V7.74805M12 21.748L6 15.748M12 21.748L18 15.748" stroke="#E91E3E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </span>
                            <span>
                                <?php echo PearTheme::lang('Read less','Leer menos','少读点','Leia menos') ?> 
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                                  <path d="M18 9.74805L12 3.74805M12 3.74805L6 9.74805M12 3.74805V17.748M5 21.748H19" stroke="#E91E3E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </span>
                        </button>
                    </div>
                    <div class="order-1 order-md-2 col-12 col-md-5 mb-3 mb-md-0 pswp-gallery pswp-gallery--single-column" id="map-tour">
                        <?php 
                            $imagen = get_field('mapa'); 
                            if( $imagen ) : ?>
                                <a href="<?php echo esc_url($imagen['url']); ?>" class="d-block" data-pswp-width="1920" data-pswp-height="1080" aria-label="<?php echo PearTheme::lang('Tour map','Mapa del recorrido','游览路线图','Mapa do passeio') ?>">
                                    <img src="<?php echo esc_url($imagen['url']); ?>" alt="<?php echo esc_attr($imagen['alt']); ?>" class="w-100 rounded-3 border"/>
                                </a>
                            <?php endif; 
                        ?>
                    </div>
                </div>
            </div>
        </section>
    <?php } ?>
    <!-- End Overview Tour -->

    <!-- Itinerary Tour -->
    <section class="itinerary-tour py-4" data-section="navigation">
        <div class="container-xl">
            <?php the_content(); ?>
        </div>
    </section>
    <!-- End Itinerary Tour -->

    <!-- Why us Tour -->
    <section class="why-us-tour py-4">
        <div class="container-xl">
            <div class="row align-items-stretch gx-3">
                <div class="col-12 col-md-4 mb-3 mb-md-0">
                    <div class="bg-info text-center px-3 px-md-5 py-3 py-md-5 d-flex justify-content-center flex-column h-100">
                        <p class="fw-bold h2 mb-3">5</p>
                        <p class="fw-bold h5"><?php echo PearTheme::lang('Reasons Travelers Choose Us in '.date('Y').'','Razones por las que los viajeros nos eligen en '.date('Y').'',''.date('Y').'年旅客选择我们的理由','Razões pelas quais os viajantes nos escolhem em '.date('Y').'') ?></p>
                    </div>
                </div>
                <div class="col-12 col-md-8">
                    <div class="d-flex align-content-center mb-3">
                        <div class="bg-info d-flex align-items-center justify-content-center px-3 py-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="14" viewBox="0 0 18 14" fill="none">
                              <path d="M17 1.91504L6 12.915L1 7.91504" stroke="#15252D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="ps-3">
                            <p><strong><?php echo PearTheme::lang('Authentic & Expertly Curated Adventures','Aventuras auténticas y cuidadosamente seleccionadas','真实而专业策划的探险之旅','Aventuras autênticas e cuidadosamente selecionadas') ?></strong> – <?php echo PearTheme::lang('We design unique experiences across Peru, carefully planed to match your interests, pace, and travel style.','Diseñamos experiencias únicas en todo Perú, cuidadosamente planificadas para adaptarse a sus intereses, ritmo y estilo de viaje.','我们精心设计遍布秘鲁的独特体验，根据您的兴趣、节奏和旅行风格量身定制行程。','Criamos experiências únicas em todo o Peru, cuidadosamente planejadas para atender aos seus interesses, ritmo e estilo de viagem.') ?></p>
                        </div>
                    </div>
                    <div class="d-flex align-content-center mb-3">
                        <div class="bg-info d-flex align-items-center justify-content-center px-3 py-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="14" viewBox="0 0 18 14" fill="none">
                              <path d="M17 1.91504L6 12.915L1 7.91504" stroke="#15252D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="ps-3">
                            <p><strong><?php echo PearTheme::lang('Seasoned Local Guides','Guías locales experimentados','经验丰富的当地向导','Guias locais experientes') ?></strong> – <?php echo PearTheme::lang('Our experienced guides are trained professionals. They are locals who are proudly knowledgeable on culture, history, and hidden gems.','Nuestros guías experimentados son profesionales capacitados. Son lugareños que se enorgullecen de conocer la cultura, la historia y los tesoros ocultos.','我们的向导是受过专业培训的资深人士，作为当地人，他们对文化、历史和秘境宝藏了如指掌。','Nossos guias experientes são profissionais treinados. Eles são moradores locais que têm orgulho de seu conhecimento sobre cultura, história e tesouros escondidos.') ?></p>
                        </div>
                    </div>
                    <div class="d-flex align-content-center mb-3">
                        <div class="bg-info d-flex align-items-center justify-content-center px-3 py-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="14" viewBox="0 0 18 14" fill="none">
                              <path d="M17 1.91504L6 12.915L1 7.91504" stroke="#15252D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="ps-3">
                            <p><strong><?php echo PearTheme::lang('Small Groups, Big Connections','Grupos pequeños, grandes conexiones','小团体，大联结','Pequenos grupos, grandes conexões') ?></strong> – <?php echo PearTheme::lang('Traveling in small groups means a more personal, safe, and enriching experience, fostering genuine connections along the way.','Viajar en grupos pequeños significa una experiencia más personal, segura y enriquecedora, que fomenta conexiones genuinas a lo largo del camino.','小团体旅行意味着更个性化、更安全、更充实的体验，沿途能建立真诚的联系。','Viajar em pequenos grupos significa uma experiência mais pessoal, segura e enriquecedora, promovendo conexões genuínas ao longo do caminho.') ?></p>
                        </div>
                    </div>
                    <div class="d-flex align-content-center mb-3">
                        <div class="bg-info d-flex align-items-center justify-content-center px-3 py-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="14" viewBox="0 0 18 14" fill="none">
                              <path d="M17 1.91504L6 12.915L1 7.91504" stroke="#15252D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="ps-3">
                            <p><strong><?php echo PearTheme::lang('Dedicated Care from Start to Finish','Atención dedicada de principio a fin','全程专属关怀','Atendimento dedicado do início ao fim') ?></strong> – <?php echo PearTheme::lang('Our experienced team handles every single detail to assure a top experience with 69 Explorer.','Nuestro experimentado equipo se encarga de cada detalle para garantizar una experiencia inmejorable con 69 Explorer.','经验丰富的团队精心打理每个细节，确保您在69 Explorer获得顶级体验。','Nossa equipe experiente cuida de cada detalhe para garantir uma experiência de alto nível com a 69 Explorer.') ?></p>
                        </div>
                    </div>
                    <div class="d-flex align-content-center">
                        <div class="bg-info d-flex align-items-center justify-content-center px-3 py-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="14" viewBox="0 0 18 14" fill="none">
                              <path d="M17 1.91504L6 12.915L1 7.91504" stroke="#15252D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="ps-3">
                            <p><strong><?php echo PearTheme::lang('Unmatched Value for Quality','Valor inigualable por su calidad','品质无与伦比的价值','Valor incomparável pela qualidade') ?></strong> – <?php echo PearTheme::lang('Our exceptional service & comfort, during authentic experiences promise unforgettable moments. Best price guaranteed — no hidden costs, just real value.','Nuestro excepcional servicio y comodidad, junto con experiencias auténticas, prometen momentos inolvidables. El mejor precio garantizado, sin costes ocultos, solo valor real.','在原汁原味的旅程中，卓越的服务与舒适体验将缔造难忘时刻。价格最优保证——无隐藏费用，尽享真实价值。','Nosso serviço e conforto excepcionais, durante experiências autênticas, prometem momentos inesquecíveis. Melhor preço garantido — sem custos ocultos, apenas valor real.') ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Why us Tour -->

    <!-- Includes Tour -->
    <?php if(get_field("inclusiones")){ ?>
        <section class="included-tour py-4" data-section="navigation">
            <div class="container-xl">
                <div class="included-tour__content">
                    <?php echo get_field("inclusiones"); ?>
                </div>
            </div>
        </section>
    <?php } ?>
    <!-- End Includes Tour -->

    <!-- No Includes Tour -->
    <?php if(get_field("no_incluye")){ ?>
        <section class="excludes-tour py-4">
            <div class="container-xl">
                <div class="excludes-tour__list">
                    <?php echo get_field("no_incluye"); ?>
                </div>
            </div>
        </section>
    <?php } ?>
    <!-- End No Includes Tour -->

    <!-- Recommends Tour -->
    <?php if(get_field("recomendaciones")){ ?>
        <section class="recommend-tour py-4" data-section="navigation">
            <div class="container-xl">
                <div class="mb-3 overflow-hidden hmx-450 bt-scroll-text" data-scrollText="Recommend" data-scrollHeight="450">
                    <div class="recommend-tour__content">
                        <?php echo get_field("recomendaciones"); ?>
                    </div>
                </div>
                <button class="rounded-3 px-2 py-2 bt-scroll-button bt-scroll-button--recommend" data-scrollButton="Recommend">
                    <span>
                        <?php echo PearTheme::lang('Read more','Leer más','阅读更多','Leia mais') ?> 
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                          <path d="M19 3.41504H5M12 21.415V7.41504M12 21.415L6 15.415M12 21.415L18 15.415" stroke="#FF8800" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </span>
                    <span>
                        <?php echo PearTheme::lang('Read less','Leer menos','少读点','Leia menos') ?> 
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                          <path d="M18 9.41504L12 3.41504M12 3.41504L6 9.41504M12 3.41504V17.415M5 21.415H19" stroke="#FF8800" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </span>
                </button>
            </div>
        </section>
    <?php } ?>
    <!-- Fin Recommends Tour -->

    <!-- Prices Tour -->
    <?php if(get_field("price")){ ?>
        <section class="prices-tour py-4">
            <div class="container-xl">
                <?php echo get_field("price"); ?>
            </div>
        </section>
    <?php } ?>
    <!-- End Prices Tour -->

    <!-- FAQs Tour -->
    <?php if(get_field("preguntas_frecuentes")){ ?>
        <section class="faqs-tour py-4" data-section="navigation">
            <div class="container-xl">
                <?php echo get_field("preguntas_frecuentes"); ?>
            </div>
        </section>
    <?php } ?>
    <!-- End FAQs Tour -->

    <!-- Aux Navigation Tour -->
    <div id="navigation-end"></div>

</main>

<!-- Reviews Tour -->
<section class="bg-section">
    <?php get_template_part('template/reviews','reviews') ?>
</section>
<!-- End Reviews Tour -->

<!-- Recommended Tours -->
<section class="position-relative py-5">
    <div class="container-xl">
        <div class="text-center mb-5">
            <h3 class="fw-bold text-uppercase"> <?php echo PearTheme::lang('Similar tours that may interest you','Tours similares que te pueden interesar','您可能感兴趣的类似旅游','Passeios semelhantes que podem lhe interessar') ?></h3>
            <p>  <?php echo PearTheme::lang('Explore Related Tours: Discover More with 69 Explorer','Explorar tours relacionados: Descubra más con 69 Explorer','探索相关旅游：与 69 Explorer 一起探索更多','Explore passeios relacionados: Descubra mais com o 69 Explorer') ?> </p>
        </div>
        <!-- row tours -->
        <div class="row gy-3 mt-3">
            <?php $categories = get_the_category();
                if ( ! empty( $categories ) ) {
                $id = ( $categories[0]->cat_ID );}
            ?>
            <?php
                $toursofperu = get_posts([
                    'post_type' => 'tour',
                    'numberposts' => 3,
                    'order' => 'desc',
                    'orderby' => 'rand',
                    'ignore_sticky_posts' => 0,
                    'cat'=>array( $id ),
                    'post__not_in'=> array(get_the_ID())
                ]);

                foreach ($toursofperu as $post) :
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
            <?php  endforeach;
                wp_reset_postdata();
            ?>
        </div>
    </div>
</section>
<!-- End Recommended Tours -->

<!-- Modal Inquire now -->
<div class="modal fade" id="staticForm" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticFormLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fs-5" id="staticBackdropLabel"><?php echo PearTheme::lang('Inquiry now','Consulta ahora','立即索取报价','Consulte agora') ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> 
            </div>
            <div class="modal-body">
                <div class="content">
                    <form action="#" data-action="<?php echo get_template_directory_uri()?>/inc/src/pear-email.php" class="row gy-3" id="fromInquire">
                        <div class="col-md-12">
                            <div class="position-relative">
                                <label for="Tour"
                                    class="form-label"><?php echo PearTheme::lang('Tour','Tour','旅行','Tour') ?></label>
                                <input type="text" name="tour" id="Tour" class="form-control rounded-0" value="<?php echo the_title() ?>" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="position-relative">
                                <label for="name"
                                    class="form-label"><?php echo PearTheme::lang('Name','Nombre','姓名','Nome') ?></label>
                                <input type="text" name="name" id="name" class="form-control rounded-0" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="position-relative">
                                <label for="Lastname"
                                    class="form-label"><?php echo PearTheme::lang('Lastname','Apellidos','姓','Sobrenome') ?></label>
                                <input type="text" name="lastname" id="Lastname" class="form-control rounded-0">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="position-relative">
                                <label for="email"
                                    class="form-label"><?php echo PearTheme::lang('Email','Correo electrónico','电子邮件',"E-mail") ?></label>
                                <input type="email" name="email" id="email" class="form-control rounded-0">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="position-relative">
                                <label for="country"
                                    class="form-label"><?php echo PearTheme::lang('Country','País','国家','País') ?></label>
                                <input type="text" name="country" id="country" class="form-control rounded-0">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="position-relative">
                                <label for="phone"
                                    class="form-label"><?php echo PearTheme::lang('Phone or Mobile','Teléfono o Móvil','电话或手机','Telefone ou celular') ?></label>
                                <input type="text" name="phone" id="phone" class="form-control rounded-0">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="position-relative">
                                <label for="dateStart"
                                    class="form-label"><?php echo PearTheme::lang('Arrival Date','Fecha de llegada','抵达日期','Data de chegada') ?></label>
                                <input type="text" name="dateStart" id="dateStart" class="form-control rounded-0 <?php echo PearTheme::lang('datebirthday','datebirthday','datebirthdayZh','data de nascimento') ?>">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="position-relative">
                                <label for="typeservice"
                                    class="form-label"><?php echo PearTheme::lang('Service Type','Tipo de servicio','服务类型','Tipo de serviço') ?></label>
                                <select name="typeService" id="typeservice" class="form-select">
                                    <option value="" selected>-<?php echo PearTheme::lang('Select','Seleccione','选择','Selecione') ?>-</option>
                                    <option value="Private"><?php echo PearTheme::lang('Private','Privado','私人的','Privado') ?></option>
                                    <option value="Group"><?php echo PearTheme::lang('Group','Grupo','团体','Grupo') ?></option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="position-relative">
                                <label for="travelers"
                                    class="form-label"><?php echo PearTheme::lang('Number of Participans','Número de participantes','参加人数','Número de participantes') ?></label>
                                <input type="number" name="travelers" id="travelers" value="2" min="1" max="10"  class="form-control rounded-0">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="position-relative">
                                <label for="comments"
                                    class="form-label"><?php echo PearTheme::lang('Questions and Comments','Preguntas y comentarios','问题和评论','Perguntas e comentários') ?></label>
                                <textarea name="comments" id="comments" class="form-control " row="3"></textarea>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger- rounded-0 me-3" data-bs-dismiss="modal" id="closed-inquiry-form"><?php echo PearTheme::lang('Close','Cerrar','关闭','Fechar') ?></button>
                <button type="submit"
                    class="btn btn-primary position-relative  rounded-0 px-4 btn-sm text-uppercase letter-spacing-1 fw-bold loaded"
                    form="fromInquire"
                    ><?php echo PearTheme::lang('Send Form','Enviar formulario','发送表单','Enviar formulário') ?></button>
            </div>
        </div>
    </div>
</div>
<!-- End Modal Inquire now -->

<?php get_footer(); ?>