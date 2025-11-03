<!DOCTYPE html>
<html lang=<?php echo APP_LANG==="en"?"en":(APP_LANG==="es"?"es":(APP_LANG==="pt"?"pt":"zh-CN")); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, minimum-scale=1.0">
    <meta name="theme-color" content="#E91E3E">

    <meta name="google-site-verification" content="d62BGVQjleiztK-fTswTuEB4xWPTnmkzCMn6codh-QM" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <?php wp_head(); ?>

    <!-- clarity  -->
    <script type="text/javascript">
        (function(c,l,a,r,i,t,y){
            c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
            t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
            y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
        })(window, document, "clarity", "script", "qr8tdbgf4o");
    </script>
    
</head>
<body>

<div class="bg-dark px-3 py-3">
    <div class="container-xl">
        <span class="m-0 d-flex justify-content-center align-items-center text-white flex-column flex-md-row">
            <span class="me-2 text-center mb-2 mb-md-0">
                <svg class="mb-1" xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 17 17" fill="none">
                  <path d="M6.49992 8.49967L7.83325 9.83301L10.4999 7.16634M1.83325 6.49967C2.36368 6.49967 2.87239 6.71039 3.24747 7.08546C3.62254 7.46053 3.83325 7.96924 3.83325 8.49967C3.83325 9.03011 3.62254 9.53882 3.24747 9.91389C2.87239 10.289 2.36368 10.4997 1.83325 10.4997V11.833C1.83325 12.1866 1.97373 12.5258 2.22378 12.7758C2.47382 13.0259 2.81296 13.1663 3.16659 13.1663H13.8333C14.1869 13.1663 14.526 13.0259 14.7761 12.7758C15.0261 12.5258 15.1666 12.1866 15.1666 11.833V10.4997C14.6362 10.4997 14.1274 10.289 13.7524 9.91389C13.3773 9.53882 13.1666 9.03011 13.1666 8.49967C13.1666 7.96924 13.3773 7.46053 13.7524 7.08546C14.1274 6.71039 14.6362 6.49967 15.1666 6.49967V5.16634C15.1666 4.81272 15.0261 4.47358 14.7761 4.22353C14.526 3.97348 14.1869 3.83301 13.8333 3.83301H3.16659C2.81296 3.83301 2.47382 3.97348 2.22378 4.22353C1.97373 4.47358 1.83325 4.81272 1.83325 5.16634V6.49967Z" stroke="#FF8800" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <strong class="me-2" style="color: #F80;"><?php echo PearTheme::lang('Inca Trail 2026','Camino Inca 2026','印加古道2026','Trilha Inca 2026')?></strong> 
                – <?php echo PearTheme::lang('Limited spots! Book in advance & secure your place','¡Plazas limitadas! Reserve con antelación y asegúrese su plaza.','名额有限！提前预约，锁定席位','Os ingressos para Machu Picchu estão esgotados? Não se preocupe, a trilha Inca de 2 dias para Machu Picchu ainda está disponível!.')?>
            </span>
            <a href="<?php echo esc_url(get_permalink(pll_get_post(94))); ?>" class="btn bg-primary text-white py-1 px-2 fw-bold-600">
                <?php echo PearTheme::lang('Secure Your Spot','Asegura tu plaza','锁定席位','Garanta o seu lugar')?>
                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M12.2661 7.99958L9.02693 4.85852L9.72307 4.14062L14.2183 8.49958L9.72307 12.8585L9.02693 12.1406L12.2661 8.99958H2.5V7.99958H12.2661Z" fill="white"/>
                </svg>
            </a>
        </span>
    </div>
</div> 

<header class="">
    <div class="container-xl">
        <div class="d-flex justify-content-between align-items-center border-bottom py-3 flex-column flex-lg-row">
            <div class="logo">
                <a href="<?php echo APP_LANG == 'en' ? esc_url(get_permalink(7)) : (APP_LANG == 'es' ? esc_url(get_permalink(603)) :(APP_LANG == 'pt'?esc_url(get_permalink(4045)):esc_url(get_permalink(2873)))); ?>"  aria-label="Link to Home Page">
                    <?php echo wp_get_attachment_image(544,'full-size', null, array('class'=>'wx-250 h-auto'))?>
                </a>
            </div>
            <div class="p-0 d-flex jutify-content-center flex-wrap px-2  ">
                <a href="https://www.facebook.com/69explorerperu" class="text-primary px-3 py-2 bg-light rounded-3 me-1 h6" target="_blank" aria-label="Facebook Link">
                  <i class="bi bi-facebook"></i>
                </a>
                <a href="https://www.instagram.com/69explorerperu/" class="text-primary px-3 py-2 bg-light rounded-3 me-1 h6" target="_blank" aria-label="Instagram Link">
                  <i class="bi bi-instagram"></i>
                </a>
                <a href="https://www.tiktok.com/@69explorer" class="text-primary px-3 py-2 bg-light rounded-3 me-1 h6" target="_blank" aria-label="Tiktok Link">
                  <i class="bi bi-tiktok"></i>
                </a>
                <a href="https://www.youtube.com/@69Explorer" class="text-primary px-3 py-2 bg-light rounded-3 me-1 h6" target="_blank" aria-label="Youtube Link">
                  <i class="bi bi-youtube"></i>
                </a>
            </div>
            <div class="content-nav-page w-auto">
                <div class="items-links-header d-flex align-items-center justify-content-center justify-content-lg-end text-center mb-2">
                    <div class="" id="copy-links-header"> 
                        <!-- copy-links-header - crear una copia de este div en el menu de navegacion de un tour -->
                         <a href="<?php echo  get_permalink(pll_get_post(927)); ?>" class="text-dark text-decoration-none py-2 py-sm-0 px-2 border-end fw-bold-600"><?php echo PearTheme::lang('Inca Trail Availability','Disponibilidad del Camino Inca','查询可用性','Disponibilidade da Trilha Inca')?></a>
                        <a href="<?php echo  get_permalink(pll_get_post(5355)); ?>" class="text-dark text-decoration-none py-2 py-sm-0 px-2 border-end fw-bold-600"><?php echo PearTheme::lang('Tailor-Made','Tours Personalizados','量身定制','Pacotes Personalizados') ?></a>
                        <a href="<?php if(APP_LANG === 'en' || APP_LANG === 'es' || APP_LANG === 'pt'){echo  get_permalink(pll_get_post(562));}else{echo  get_permalink(pll_get_post(3122));} ?>" class="text-dark text-decoration-none py-2 py-sm-0 px-2 border-end fw-bold-600"><?php echo PearTheme::lang('Circuits','Circuitos','新赛道','Circuitos') ?></a>
                        <a href="<?php echo  get_permalink(pll_get_post(420)); ?>" class="text-dark text-decoration-none py-2 py-sm-0 px-2 border-end fw-bold-600"><?php echo PearTheme::lang('Payments','Pagos','支付','Pagamentos') ?></a>
                        <a href="<?php echo  get_permalink(pll_get_post(335)); ?>" class="text-dark text-decoration-none py-2 py-sm-0 px-2 fw-bold-600"><?php echo PearTheme::lang('Blogs','Blogs','我们的博客','Blogs') ?></a>
                    </div>
                    <div class="lang-dropdown position-relative my-2 m-sm-0" id="content-languages-page">
                        <ul class="m-0 p-0" id="language-page" lang="<?php echo PearTheme::lang('en','es','zh','pt')?>"></ul>
                        <ul id="languages-options">
                            <?php pll_the_languages( array( 'show_flags' => 1,'show_names' => 1,'display_names_as'  => 'slug') ); ?>
                        </ul>
                        <i class="bi bi-arrow-down"></i>
                    </div>
                    <script>
                        let $wrapperLangPage = document.getElementById("content-languages-page");
                        let $langSelectedPage = document.getElementById("language-page");
                        let $languagesOptionsPage = document.getElementById("languages-options");
                        if($langSelectedPage.getAttribute("lang") === "en") $langSelectedPage.appendChild($languagesOptionsPage.children[0]);
                        if($langSelectedPage.getAttribute("lang") === "es") $langSelectedPage.appendChild($languagesOptionsPage.children[1]);
                        if($langSelectedPage.getAttribute("lang") === "zh") $langSelectedPage.appendChild($languagesOptionsPage.children[2]);
                        if($langSelectedPage.getAttribute("lang") === "pt") $langSelectedPage.appendChild($languagesOptionsPage.children[3]);
                        $langSelectedPage.querySelector("a").setAttribute("href","#");
                    </script>
                </div>
                <div class="items-links-header d-flex justify-content-center justify-content-lg-end">
                    <a href="https://api.whatsapp.com/send?phone=51961721125&text=Hello%2C%20Explorer%2069!%20%F0%9F%8C%8D" target="_blank" rel="nofollow" class="fs-95 text-dark fw-bold-600 py-2 py-sm-0">
                        <svg class="me-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                          <g clip-path="url(#clip0_182_534)">
                            <path d="M9.22125 11.045C9.35894 11.1082 9.51405 11.1227 9.66105 11.086C9.80804 11.0492 9.93814 10.9636 10.0299 10.843L10.2666 10.533C10.3908 10.3674 10.5518 10.233 10.737 10.1404C10.9221 10.0479 11.1263 9.99967 11.3333 9.99967H13.3333C13.6869 9.99967 14.026 10.1402 14.2761 10.3902C14.5261 10.6402 14.6666 10.9794 14.6666 11.333V13.333C14.6666 13.6866 14.5261 14.0258 14.2761 14.2758C14.026 14.5259 13.6869 14.6663 13.3333 14.6663C10.1507 14.6663 7.09841 13.4021 4.84797 11.1516C2.59753 8.90119 1.33325 5.84894 1.33325 2.66634C1.33325 2.31272 1.47373 1.97358 1.72378 1.72353C1.97382 1.47348 2.31296 1.33301 2.66659 1.33301H4.66659C5.02021 1.33301 5.35935 1.47348 5.60939 1.72353C5.85944 1.97358 5.99992 2.31272 5.99992 2.66634V4.66634C5.99992 4.87333 5.95173 5.07749 5.85915 5.26263C5.76658 5.44777 5.63218 5.60881 5.46658 5.73301L5.15458 5.96701C5.0322 6.06046 4.94593 6.1934 4.91045 6.34324C4.87496 6.49308 4.89244 6.65059 4.95992 6.78901C5.87104 8.63958 7.36953 10.1362 9.22125 11.045Z" stroke="#E91E3E" stroke-linecap="round" stroke-linejoin="round"/>
                          </g>
                          <defs>
                            <clipPath id="clip0_182_534">
                              <rect width="16" height="16" fill="white"/>
                            </clipPath>
                          </defs>
                        </svg>
                        +51 961 721 125
                    </a>
                    <a href="mailto:info@69explorer.com" class="fs-95 text-dark fw-bold-600 py-2 py-sm-0">
                        <svg class="me-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                          <path d="M11.3333 12.6667C11.3333 13.0203 11.1928 13.3594 10.9427 13.6095C10.6927 13.8595 10.3535 14 9.99992 14H2.66659C2.31296 14 1.97382 13.8595 1.72378 13.6095C1.47373 13.3594 1.33325 13.0203 1.33325 12.6667V7.33333C1.33326 7.09929 1.39487 6.86937 1.51189 6.66669C1.62892 6.464 1.79723 6.29569 1.99992 6.17867M14.6666 3.66667L10.3873 6.45267C10.1723 6.59078 9.92211 6.66421 9.66658 6.66421C9.41105 6.66421 9.16091 6.59078 8.94592 6.45267L4.66659 3.66667M5.99992 2H13.3333C14.0696 2 14.6666 2.59695 14.6666 3.33333V8.66667C14.6666 9.40305 14.0696 10 13.3333 10H5.99992C5.26354 10 4.66659 9.40305 4.66659 8.66667V3.33333C4.66659 2.59695 5.26354 2 5.99992 2Z" stroke="#E91E3E" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        info@69explorer.com
                    </a>
                    <a href="https://www.tripadvisor.com.pe/Attraction_Review-g294314-d27140492-Reviews-69_Explorer_Peru-Cusco_Cusco_Region.html" target="_blank" class="d-flex align-items-center fs-95 text-tripadvisor fw-bold-600 py-2 py-sm-0">
                        <svg class="me-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                          <path d="M11.745 7.43055C11.0105 7.43055 10.4155 8.02605 10.4155 8.76005C10.4155 9.49405 11.011 10.0895 11.745 10.0895C12.4795 10.0895 13.0745 9.49405 13.0745 8.76005C13.0745 8.51505 13.0085 8.28605 12.893 8.08905L12.8965 8.09555C12.6625 7.69555 12.2345 7.43055 11.745 7.43055ZM4.25245 7.43055C3.51795 7.43055 2.92295 8.02605 2.92295 8.76005C2.92295 9.49405 3.51845 10.0895 4.25245 10.0895C4.98695 10.0895 5.58195 9.49405 5.58195 8.76005C5.58195 8.51505 5.51595 8.28605 5.40045 8.08905L5.40395 8.09555C5.16995 7.69555 4.74195 7.43055 4.25245 7.43055ZM11.745 6.22455C11.7455 6.22455 11.7455 6.22455 11.746 6.22455C13.146 6.22455 14.281 7.35955 14.281 8.75955C14.281 10.1595 13.146 11.2945 11.746 11.2945C10.346 11.2945 9.21095 10.1595 9.21095 8.75955C9.21095 8.29305 9.33695 7.85605 9.55645 7.48055L9.54995 7.49255C9.99595 6.72905 10.8115 6.22505 11.745 6.22455ZM4.25245 6.22305C5.65295 6.22305 6.78845 7.35855 6.78845 8.75905C6.78845 10.1595 5.65295 11.295 4.25245 11.295C2.85195 11.295 1.71645 10.1595 1.71645 8.75905C1.71645 8.29205 1.84245 7.85455 2.06245 7.47905L2.05595 7.49105C2.50245 6.72755 3.31845 6.22305 4.25245 6.22305ZM7.99995 4.41005C9.01595 4.41055 9.98295 4.61805 10.862 4.99255L10.814 4.97455C9.22745 5.51955 8.09045 6.95955 7.99995 8.67705L7.99945 8.68705C7.90945 6.95955 6.77195 5.51905 5.21445 4.98305L5.18545 4.97455C6.01645 4.61855 6.98395 4.41155 7.99945 4.41105L7.99995 4.41005ZM8.00395 3.18555C8.00295 3.18555 8.00145 3.18555 8.00045 3.18555C6.21795 3.18555 4.56395 3.73505 3.19845 4.67455L3.22695 4.65605H0.501953L1.72845 5.99005C0.974453 6.67805 0.503453 7.66455 0.503453 8.76105C0.503453 10.83 2.18095 12.5075 4.24995 12.5075C5.23545 12.5075 6.13195 12.127 6.80095 11.505L6.79845 11.507L7.99945 12.814L9.20045 11.508C9.86695 12.1275 10.7635 12.508 11.749 12.508C13.8185 12.508 15.496 10.8305 15.496 8.76105C15.496 7.66455 15.025 6.67755 14.274 5.99255L14.271 5.99005L15.4975 4.65605H12.7795C11.443 3.73555 9.78945 3.18605 8.00695 3.18605C8.00545 3.18605 8.00445 3.18605 8.00295 3.18605L8.00395 3.18555Z" fill="#00852F"/>
                        </svg>
                        <?php echo PearTheme::lang('Reviews','Reseñas','评论','Avaliações') ?>
                    </a>
                    <a href="<?php echo  get_permalink(pll_get_post(324)); ?>" class="d-flex align-items-center fs-95 fw-bold-600 py-2 py-sm-0 d-inline-block d-lg-none d-xl-inline-block">
                        <?php echo PearTheme::lang('Inquire Now','Contáctenos','联系我们','Contato') ?>
                        <i class="bi bi-arrow-right ms-1"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    <nav class="bg-primary">
        <div class="navigation-page py-2">
            <ul class="d-flex justify-content-center">
                <?php
                    $args = array(
                        'post_type' => 'page',
                        'posts_per_page' => 6,
                        'order' => 'ASC',
                        'post__in' => array( 290, 294, 296, 298, 282)
                    );
                    $toursofperu_query = new WP_Query($args);

                    if ($toursofperu_query->have_posts()) :
                        while ($toursofperu_query->have_posts()) : $toursofperu_query->the_post();
                            $categoria = get_post_meta(get_the_ID(), 'custom_field_titulo_menu2', true);
                            $titulo = get_post_meta(get_the_ID(), 'custom_field_titulo_menu', true);
                            $text = get_the_content(get_the_ID());
                            $imagen = get_post_meta(get_the_ID(), 'custom_field_imagen_portada', true);
                            $text2 = get_post_meta(get_the_ID(), 'custom_field_contenido_editor', true);
                    ?>
                        <li class="item_menu position-relative">
                            <a href="<?php the_permalink(); ?>">
                                <?php echo $titulo ?> <i class="bi bi-chevron-down ms-1"></i>
                            </a>
                            <div class="mega_menu bg-white border-top border-2 border-primary rounded-2">
                                <ul class="px-2 py-2 border rounded-2">
                                    <?php
                                        $toursofperu = get_posts([
                                            'post_type' => 'tour',
                                            'numberposts' => -1, //cantidad de entradas
                                            'order' => 'desc',
                                            'ignore_sticky_posts' => 0,
                                            'category_name' => $categoria
                                        ]);

                                        foreach ($toursofperu as $post) :
                                    ?>
                                            <li><a href="<?php the_permalink(); ?>" class="py-1 px-2 white-space-nowrap text-dark fw-bold-500 d-flex align-items-center"><?php the_title(); ?></a></li>
                                    <?php  endforeach;
                                        wp_reset_postdata();
                                    ?>
                                </ul>
                            </div>
                        </li>
                    <?php   
                        endwhile;
                        wp_reset_postdata();
                    endif;
                ?>
                <?php if(APP_LANG==="en"){ ?>
                <li class="item_menu position-relative">
                    <a href="#" class="text-white">
                        E-bike Trips <i class="bi bi-chevron-down ms-1"></i>
                    </a>
                    <div class="mega_menu bg-white border-top border-2 border-primary rounded-2">
                        <ul class="px-2 py-2 border rounded-2">
                            <?php
                                $toursofperu = get_posts([
                                    'post_type' => 'tour',
                                    'numberposts' => -1, //cantidad de entradas
                                    'order' => 'desc',
                                    'ignore_sticky_posts' => 0,
                                    'category_name' => 'e-bike-trips'
                                ]);

                                foreach ($toursofperu as $post) :
                            ?>
                                    <li><a href="<?php the_permalink(); ?>" class="py-1 px-2 white-space-nowrap text-dark fw-bold-500 d-flex align-items-center"><?php the_title(); ?></a></li>
                            <?php  endforeach;
                                wp_reset_postdata();
                            ?>
                        </ul>
                    </div>
                </li>
                <?php } ?>
            </ul>
            <div class="btn_menu">
                <span></span><span></span><span></span>
            </div>
        </div>
    </nav>
</header>

<div class="content_menu_ui">
    <div class="menu_ui bg-light">
        <a href="<?php echo APP_LANG == 'en' ? esc_url(get_permalink(7)) : (APP_LANG == 'es' ? esc_url(get_permalink(603)) :esc_url(get_permalink(2873))); ?>" class="item_ui" data-target="home">
            <svg version="1.0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.000000 512.000000"
                preserveAspectRatio="xMidYMid meet">

                <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"
                fill="#000000" stroke="none">
                <path d="M2027 4293 c-292 -251 -565 -485 -604 -521 l-73 -64 0 334 c0 252 -3
                338 -12 351 -12 16 -40 17 -318 15 l-305 -3 -3 -622 -2 -622 -279 -238 c-160
                -137 -287 -253 -300 -274 -40 -69 -20 -167 42 -211 16 -12 51 -23 77 -26 60
                -6 106 17 219 111 47 40 94 79 104 86 17 13 17 5 15 -164 l-3 -179 -75 -12
                c-116 -20 -228 -80 -321 -173 -131 -132 -184 -256 -184 -431 1 -95 4 -116 37
                -212 84 -244 284 -627 514 -985 l54 -83 1944 0 1945 0 15 22 c14 20 16 143 16
                1125 l0 1103 121 -100 c160 -134 218 -171 273 -177 133 -15 238 138 174 254
                -18 33 -305 282 -1268 1098 -685 580 -1251 1055 -1258 1055 -6 0 -252 -206
                -545 -457z m1736 -644 c650 -551 1203 -1022 1230 -1047 50 -49 58 -77 35 -127
                -13 -30 -55 -55 -91 -55 -13 0 -55 22 -93 49 -38 27 -562 462 -1164 965 -673
                563 -1101 915 -1111 913 -8 -2 -499 -402 -1090 -888 -591 -487 -1098 -904
                -1127 -927 -55 -43 -94 -52 -132 -32 -25 13 -41 65 -30 95 5 13 289 264 632
                558 343 294 875 751 1183 1016 308 264 564 481 568 481 4 0 540 -451 1190
                -1001z m-2495 339 l2 -346 -240 -206 -240 -206 0 555 0 555 238 -2 237 -3 3
                -347z m2211 -488 l891 -745 -905 -3 c-498 -1 -1313 -1 -1811 0 l-906 3 908
                748 c500 411 914 746 920 745 6 -2 413 -338 903 -748z m971 -1940 l0 -1110
                -319 0 -320 0 -3 418 c-3 406 -4 419 -26 472 -41 103 -132 193 -232 231 -70
                27 -237 37 -319 19 -125 -27 -230 -111 -288 -228 l-28 -57 -5 -425 -5 -425
                -1102 -3 -1103 -2 65 104 c247 401 441 800 480 991 39 188 -26 386 -175 536
                -88 88 -202 151 -310 170 -36 6 -71 13 -77 15 -10 3 -13 52 -13 204 l0 200
                1890 0 1890 0 0 -1110z m-3724 619 c96 -17 219 -82 291 -154 108 -108 175
                -285 159 -421 -14 -121 -111 -359 -247 -609 -90 -165 -292 -505 -300 -505 -14
                0 -264 434 -365 635 -163 326 -203 468 -175 617 41 209 216 388 425 433 77 17
                136 18 212 4z m2819 -691 c65 -34 128 -100 157 -163 23 -49 23 -56 26 -462 l3
                -413 -376 0 -376 0 3 408 3 407 29 63 c35 76 104 142 179 171 44 18 70 21 177
                18 113 -2 130 -5 175 -29z"/>
                <path d="M2483 3706 c-92 -30 -166 -97 -210 -191 -24 -51 -28 -73 -28 -145 0
                -72 4 -93 27 -140 46 -93 140 -172 233 -194 56 -14 151 -7 208 14 110 41 206
                162 222 281 20 141 -67 295 -203 360 -58 28 -186 36 -249 15z m212 -85 c168
                -76 216 -287 95 -423 -106 -121 -285 -125 -392 -10 -60 64 -82 124 -76 205 9
                104 64 184 158 226 59 27 159 28 215 2z"/>
                <path d="M1442 2118 c-17 -17 -17 -479 0 -496 17 -17 479 -17 496 0 17 17 17
                479 0 496 -17 17 -479 17 -496 0z m428 -248 l0 -180 -180 0 -180 0 0 180 0
                180 180 0 180 0 0 -180z"/>
                <path d="M2136 2114 c-14 -13 -16 -49 -16 -243 0 -166 3 -232 13 -244 11 -16
                36 -17 257 -15 l245 3 3 244 c2 171 -1 248 -9 257 -9 11 -59 14 -245 14 -198
                0 -235 -2 -248 -16z m434 -244 l0 -180 -185 0 -185 0 0 180 0 180 185 0 185 0
                0 -180z"/>
                <path d="M1447 1418 c-16 -12 -17 -37 -15 -258 l3 -245 244 -3 c171 -2 248 1
                257 9 11 9 14 59 14 245 0 198 -2 235 -16 248 -13 14 -49 16 -243 16 -166 0
                -232 -3 -244 -12z m423 -253 l0 -185 -180 0 -180 0 0 185 0 185 180 0 180 0 0
                -185z"/>
                <path d="M2136 1408 c-13 -19 -16 -60 -16 -243 0 -161 3 -226 13 -238 11 -16
                36 -17 257 -15 l245 3 3 244 c2 171 -1 248 -9 257 -9 11 -59 14 -245 14 -229
                0 -233 0 -248 -22z m432 -240 l-3 -183 -180 0 -180 0 -3 183 -2 182 185 0 185
                0 -2 -182z"/>
                <path d="M574 1979 c-120 -16 -234 -100 -290 -214 -26 -54 -29 -70 -29 -160 0
                -89 3 -106 28 -156 40 -82 98 -143 170 -179 202 -99 425 -23 520 178 29 60 32
                77 32 157 0 77 -4 98 -27 148 -37 79 -78 129 -137 166 -83 54 -170 73 -267 60z
                m183 -101 c186 -87 230 -336 85 -483 -140 -142 -381 -109 -477 66 -37 68 -46
                177 -21 243 66 171 252 250 413 174z"/>
                </g>
            </svg>
            <span>
                <?php echo PearTheme::lang('Home','Inicio','家','Página inicial')?>
            </span>
        </a>
        <div class="item_ui" data-target="destinations">
            <svg version="1.0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.000000 512.000000"
                preserveAspectRatio="xMidYMid meet">

                <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"
                fill="#000000" stroke="none">
                <path d="M2320 5105 c-450 -56 -843 -248 -1166 -570 -586 -585 -753 -1279
                -494 -2056 179 -537 550 -1102 1169 -1778 63 -69 242 -254 398 -411 l282 -285
                50 0 51 0 221 220 c550 548 928 991 1204 1410 638 969 715 1815 229 2541 -221
                330 -508 586 -836 744 -346 167 -733 231 -1108 185z m586 -259 c447 -94 804
                -328 1099 -721 330 -439 415 -923 258 -1470 -178 -624 -631 -1276 -1495 -2151
                l-208 -212 -208 212 c-393 398 -648 687 -875 991 -555 742 -775 1382 -672
                1950 33 187 121 401 235 575 319 484 765 774 1310 850 36 5 148 7 250 5 149
                -3 208 -9 306 -29z"/>
                <path d="M2390 3885 c-206 -44 -375 -146 -511 -308 -258 -307 -265 -771 -15
                -1095 115 -150 278 -258 473 -314 113 -33 333 -32 448 0 313 89 537 314 627
                629 19 66 23 102 22 228 0 135 -3 159 -28 240 -74 243 -239 438 -461 545 -55
                27 -129 56 -165 65 -89 23 -305 29 -390 10z m380 -260 c206 -76 356 -241 410
                -451 87 -338 -124 -687 -466 -774 -338 -87 -687 124 -774 466 -89 347 138 707
                495 784 22 5 90 8 150 6 89 -3 124 -9 185 -31z"/>
                </g>
            </svg>
            <span>
                <?php echo PearTheme::lang('Destinations','Destinos','目的地','Destinos')?>
            </span>
        </div>
        <div class="item_ui" data-target="packages">
            <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                width="512.000000pt" height="512.000000pt" viewBox="0 0 512.000000 512.000000"
                preserveAspectRatio="xMidYMid meet">

                <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"
                fill="#000000" stroke="none">
                <path d="M3421 4424 c-90 -24 -171 -73 -252 -154 -240 -238 -251 -562 -29
                -865 l50 -69 -308 -123 c-168 -68 -314 -123 -322 -123 -8 0 -229 86 -491 191
                l-477 190 -363 -181 c-356 -178 -414 -214 -445 -272 -7 -14 -97 -525 -198
                -1134 -182 -1091 -185 -1109 -168 -1139 38 -64 35 -65 532 134 l453 182 578
                -193 579 -193 579 193 579 193 453 -181 c503 -201 497 -200 531 -130 16 34 13
                54 -167 1134 -101 605 -189 1112 -195 1126 -23 54 -75 93 -245 177 -93 47
                -172 87 -174 89 -2 2 28 45 66 96 128 170 171 274 180 438 6 115 -11 199 -61
                297 -82 159 -210 268 -375 317 -69 20 -235 20 -310 0z m274 -79 c143 -38 268
                -141 336 -280 105 -216 60 -430 -147 -690 -145 -181 -186 -244 -248 -378 l-60
                -128 -62 129 c-71 150 -129 241 -209 332 -156 177 -235 352 -235 520 0 325
                316 575 625 495z m-1615 -1161 l440 -176 0 -1115 c0 -888 -3 -1114 -12 -1111
                -7 3 -239 80 -515 172 -277 92 -503 171 -503 175 0 5 20 53 44 109 53 121 103
                199 225 352 108 134 172 238 203 330 19 55 23 86 23 200 0 116 -3 145 -24 203
                -51 149 -171 283 -313 350 -38 17 -68 36 -68 42 0 6 11 143 25 305 14 162 25
                305 25 317 0 13 2 23 5 23 3 0 203 -79 445 -176z m-560 -143 c-11 -152 -23
                -285 -25 -296 -4 -19 -10 -20 -77 -17 -216 11 -443 -128 -546 -335 -53 -108
                -66 -172 -59 -303 9 -180 53 -274 237 -510 54 -69 115 -152 136 -185 34 -53
                116 -225 126 -263 2 -9 -130 -67 -406 -177 -226 -91 -411 -163 -412 -162 -2 2
                79 494 179 1094 171 1025 184 1093 207 1118 14 15 164 97 340 185 239 120 316
                154 318 143 2 -9 -6 -140 -18 -292z m1800 133 c29 -41 81 -137 117 -212 36
                -75 73 -146 83 -157 16 -17 27 -122 84 -815 37 -437 66 -809 66 -826 l0 -32
                -520 -171 c-286 -95 -527 -174 -535 -177 -13 -5 -15 18 -15 169 l0 174 93 27
                c96 27 119 43 110 77 -9 32 -28 33 -112 10 -43 -11 -81 -21 -85 -21 -3 0 -6
                402 -6 894 l0 894 323 129 c206 83 326 127 334 121 6 -5 34 -43 63 -84z m729
                -59 c159 -80 190 -99 204 -127 15 -29 382 -2187 373 -2195 -2 -2 -853 335
                -864 342 -1 1 -33 373 -71 826 -57 677 -67 827 -56 839 7 8 39 74 72 145 49
                108 139 265 151 265 2 0 88 -43 191 -95z m-2524 -490 c181 -48 327 -196 370
                -376 47 -200 -27 -410 -225 -634 -77 -88 -140 -189 -210 -338 -30 -64 -57
                -117 -60 -117 -3 0 -27 50 -54 111 -56 127 -100 198 -201 324 -164 206 -213
                291 -239 418 -28 134 -16 228 44 347 61 121 206 241 326 269 62 14 185 12 249
                -4z"/>
                <path d="M3458 4171 c-76 -30 -124 -75 -160 -149 -29 -58 -33 -77 -33 -142 1
                -99 29 -163 101 -229 142 -130 366 -104 469 53 106 161 52 370 -118 458 -60
                31 -193 36 -259 9z m223 -88 c35 -19 64 -43 84 -71 28 -40 30 -50 30 -131 0
                -78 -3 -92 -27 -129 -55 -83 -168 -120 -265 -88 -132 44 -191 195 -127 324 56
                112 188 153 305 95z"/>
                <path d="M1640 1220 c-23 -42 19 -70 104 -70 37 0 56 15 56 45 0 35 -20 45
                -87 45 -52 0 -64 -3 -73 -20z"/>
                <path d="M2044 1195 c-11 -43 8 -52 126 -60 116 -8 140 -2 140 36 0 40 -25 49
                -146 49 -113 0 -114 0 -120 -25z"/>
                <path d="M3350 2731 c-48 -29 -61 -59 -35 -81 31 -25 145 29 145 69 0 47 -45
                52 -110 12z"/>
                <path d="M3027 2542 c-45 -49 -63 -194 -29 -225 11 -10 26 -14 40 -10 26 6 24
                2 27 73 1 34 10 71 24 98 17 33 19 47 11 62 -13 25 -52 26 -73 2z"/>
                <path d="M3026 2059 c-17 -10 -18 -20 -11 -123 4 -61 12 -117 17 -123 15 -19
                56 -16 67 5 16 30 -5 224 -26 239 -20 15 -23 15 -47 2z"/>
                <path d="M3062 1548 c-7 -7 -12 -37 -12 -67 0 -34 -8 -73 -20 -99 -21 -46 -18
                -68 11 -77 29 -9 55 11 74 57 21 50 24 160 5 183 -15 18 -42 19 -58 3z"/>
                <path d="M1304 2466 c-88 -28 -169 -107 -200 -193 -18 -52 -17 -160 2 -217 22
                -64 100 -148 164 -175 153 -66 325 -11 404 129 29 51 31 62 31 155 0 110 -13
                148 -76 219 -67 77 -222 116 -325 82z m189 -91 c127 -53 175 -212 100 -333
                -82 -133 -295 -136 -382 -5 -102 154 2 353 185 353 34 0 77 -7 97 -15z"/>
                </g>
            </svg>
            <span>
                <?php echo PearTheme::lang('Packages','Paquetes','套餐','Pacotes')?>
            </span>
        </div>
        <div class="item_ui" data-target="search">
            <svg version="1.0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.000000 512.000000"   
                preserveAspectRatio="xMidYMid meet">

                <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"
                fill="#000000" stroke="none">
                <path d="M1820 4789 c-927 -93 -1656 -821 -1750 -1748 -43 -431 69 -885 310
                -1251 485 -736 1401 -1057 2230 -780 135 44 274 107 381 173 56 34 97 51 155
                62 180 37 331 108 467 219 l56 45 83 -76 c46 -41 85 -80 87 -85 2 -5 -6 -19
                -17 -31 -52 -55 -67 -167 -33 -242 19 -42 91 -112 496 -484 262 -240 304 -266
                425 -265 100 1 174 30 241 95 117 114 141 292 56 427 -34 54 -696 670 -751
                699 -81 43 -197 22 -266 -47 l-38 -38 -85 76 c-47 43 -86 80 -86 84 -1 4 19
                38 43 75 62 97 89 155 124 265 61 190 65 404 11 599 -18 64 -20 90 -14 204 28
                538 -181 1073 -569 1460 -332 331 -740 522 -1206 564 -130 12 -227 12 -350 0z
                m-255 -251 c-99 -109 -222 -316 -280 -470 l-18 -48 -303 0 c-167 0 -304 4
                -304 9 0 12 176 180 245 232 170 130 363 233 550 292 103 33 139 43 158 46 5
                0 -17 -27 -48 -61z m999 11 c259 -85 488 -224 689 -418 32 -31 67 -68 78 -83
                l20 -28 -304 0 -305 0 -23 58 c-64 163 -178 352 -279 465 -62 68 -66 68 124 6z
                m-634 -244 l0 -285 -246 0 -245 0 7 23 c13 42 96 201 142 271 66 100 177 208
                254 245 35 17 69 31 76 31 9 0 12 -64 12 -285z m235 254 c118 -56 246 -205
                345 -403 33 -66 60 -123 60 -128 0 -4 -110 -8 -245 -8 l-245 0 0 286 0 285 23
                -6 c12 -4 40 -15 62 -26z m-959 -716 c-64 -216 -111 -512 -123 -770 l-6 -143
                -430 0 -429 0 7 87 c9 115 47 291 85 405 38 111 123 289 179 376 l41 62 340 0
                c320 0 341 -1 336 -17z m724 -448 l0 -465 -350 0 -350 0 5 98 c10 152 34 367
                56 482 19 101 75 326 85 342 3 4 129 8 280 8 l274 0 0 -465z m742 315 c20 -80
                43 -190 52 -245 9 -55 18 -112 21 -127 4 -25 1 -28 -38 -38 -198 -50 -357
                -140 -500 -282 -50 -49 -97 -88 -108 -88 -18 0 -19 13 -19 465 l0 465 278 -2
                277 -3 37 -145z m845 93 c101 -158 201 -406 237 -588 20 -101 39 -265 32 -272
                -3 -3 -45 31 -93 76 -110 101 -183 152 -298 206 -136 65 -309 105 -452 105
                -39 0 -43 2 -43 24 0 42 -40 258 -71 378 -16 64 -29 119 -29 122 0 3 153 6
                340 6 l340 0 37 -57z m-421 -644 c368 -65 656 -344 729 -708 23 -113 16 -315
                -14 -416 -80 -267 -271 -482 -520 -584 -117 -49 -211 -66 -351 -65 -140 1
                -219 16 -336 65 -477 198 -687 763 -457 1224 122 243 350 420 613 476 97 20
                248 24 336 8z m-2014 -513 c13 -246 49 -491 103 -699 14 -53 25 -99 25 -102 0
                -3 -153 -5 -339 -5 l-340 0 -45 73 c-141 227 -239 519 -262 785 l-7 82 429 -2
                429 -3 7 -129z m846 16 c2 -71 -3 -142 -13 -193 -19 -104 -19 -284 0 -388 9
                -45 15 -116 13 -159 l-3 -77 -272 -3 -271 -2 -16 47 c-30 92 -75 299 -95 438
                -22 155 -44 432 -35 446 3 5 146 8 347 7 l342 -3 3 -113z m-649 -1009 c54
                -152 186 -374 289 -485 l57 -61 -35 8 c-203 44 -485 179 -675 324 -68 52 -255
                230 -255 243 0 4 136 8 303 8 l303 0 13 -37z m649 -250 c2 -233 0 -283 -11
                -283 -8 0 -43 14 -78 32 -81 40 -188 145 -258 253 -51 77 -141 254 -141 275 0
                7 82 9 243 8 l242 -3 3 -282z m289 120 c35 -35 91 -81 123 -103 33 -23 60 -44
                60 -47 0 -16 -90 -120 -140 -161 -53 -43 -141 -92 -167 -92 -10 0 -13 62 -13
                278 l1 277 36 -45 c20 -25 65 -73 100 -107z m416 -248 c43 -14 87 -25 97 -25
                41 0 17 -19 -66 -54 -77 -32 -244 -86 -266 -86 -5 0 20 33 56 74 35 40 69 83
                75 95 14 26 9 26 104 -4z"/>
                </g>
            </svg>
            <span>
                <?php echo PearTheme::lang('Search','Buscar','搜索','Pesquisar')?>
            </span>
        </div>
        <div class="item_ui" data-target="more">
            <svg version="1.0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.000000 512.000000"
                preserveAspectRatio="xMidYMid meet">

                <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"
                fill="#000000" stroke="none">
                <path d="M811 3025 c-36 -8 -88 -26 -117 -40 -62 -30 -138 -109 -165 -171 -63
                -142 -63 -366 0 -508 27 -62 103 -141 165 -171 147 -72 385 -72 533 0 145 72
                224 247 210 469 -14 220 -104 352 -278 408 -85 27 -259 33 -348 13z"/>
                <path d="M2411 3025 c-36 -8 -88 -26 -117 -40 -62 -30 -138 -109 -165 -171
                -63 -142 -63 -366 0 -508 27 -62 103 -141 165 -171 147 -72 385 -72 533 0 145
                72 224 247 210 469 -14 220 -104 352 -278 408 -85 27 -259 33 -348 13z"/>
                <path d="M4011 3025 c-36 -8 -88 -26 -117 -40 -62 -30 -138 -109 -165 -171
                -63 -142 -63 -366 0 -508 27 -62 103 -141 165 -171 147 -72 385 -72 533 0 145
                72 224 247 210 469 -14 220 -104 352 -278 408 -85 27 -259 33 -348 13z"/>
                </g>
            </svg>
            <span>
                <?php echo PearTheme::lang('More','Más','更多的','Mais')?>
            </span>
        </div>
    </div>
    <div class="ui_details" id="destinations">
        <div class="title_ui">
            <h3><?php echo PearTheme::lang('Destinations','Destinos','目的地','Destinos')?></h3>
            <i class="bi bi-x cerrar_ui"></i>
        </div>
        <div class="content">
            <div class="template_menu_ui" id="copy-destination-header">
            <!-- copy-destination-header - crear una copia de este div en el menu de navegacion de un tour -->
                <div class="accordion-group">
                    <?php
                        $args = array(
                            'post_type' => 'page',
                            'posts_per_page' => 5,
                            'order' => 'ASC',
                            'post__in' => array(282, 290, 294, 298)
                        );
                        $toursofperu_query = new WP_Query($args);

                        if ($toursofperu_query->have_posts()) :
                            while ($toursofperu_query->have_posts()) : $toursofperu_query->the_post();
                                $categoria = get_post_meta(get_the_ID(), 'custom_field_titulo_menu2', true);
                                $titulo = get_post_meta(get_the_ID(), 'custom_field_titulo_menu', true);
                    ?>
                    <button class="accordion">
                        <h3>
                            <?php echo $titulo ?>
                        </h3>
                    </button>
                    <div class="panel">
                        <ul>
                            <?php
                                $toursofperu = get_posts([
                                    'post_type' => 'tour',
                                    'numberposts' => -1, //cantidad de entradas
                                    'order' => 'desc',
                                    'ignore_sticky_posts' => 0,
                                    'category_name' => $categoria
                                ]);

                                foreach ($toursofperu as $post) :
                            ?>
                                    <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                            <?php  endforeach;
                                wp_reset_postdata();
                            ?>
                        </ul>
                    </div>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                    endif;
                    ?>    
                </div>
            </div>
        </div>
    </div>
    <div class="ui_details" id="search">
        <div class="title_ui">
            <h3><?php echo PearTheme::lang('Quick Link','Buscar tour, destinos','搜索旅游、目的地','Link rápido')?>...</h3>
            <i class="bi bi-x cerrar_ui"></i>
        </div>
        <div class="content">
            <form role="search" method="get" class="search_form" action="<?php echo home_url( '/' ); ?>">
                <i class="bi bi-search"></i>
                <input type="search" 
                       class="search-field" 
                       placeholder="<?php echo PearTheme::lang('Search','Buscar en','寻找','Pesquisar') ?>..." 
                       name="s" />
                <input type="hidden" name="post_type" value="tour" />
            </form>
            <div id="search-results"></div>
        </div>
    </div>
    <div class="ui_details" id="more">
        <div class="title_ui">
            <h3><?php echo PearTheme::lang('Quick Link','Enlace rápido','快速链接','Link rápido')?></h3>
            <i class="bi bi-x cerrar_ui"></i>
        </div>
        <div class="content">
            <div>
                <ul>
                    <?php
                        $args = array(
                            'post_type' => 'page',
                            'posts_per_page' => -1,
                            'order' => 'ASC',
                            'post__in' => array(333, 324, 331, 329, 327, 335,420)
                        );
                        $toursofperu_query = new WP_Query($args);

                        if ($toursofperu_query->have_posts()) :
                            while ($toursofperu_query->have_posts()) : $toursofperu_query->the_post();
                        ?>
                    <li>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </li>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                    endif;
                    ?>
                </ul>
            </div>
        </div>
    </div>
    <div class="ui_details" id="packages">
        <div class="title_ui">
            <h3><?php echo PearTheme::lang('Packages Peru','Paquetes Perú','秘鲁旅游套餐','Pacotes Peru')?></h3>
            <i class="bi bi-x cerrar_ui"></i>
        </div>
        <div class="content">
            <div>
                <ul>
                    <?php
                        $toursofperu = get_posts([
                            'post_type' => 'tour',
                            'numberposts' => -1, //cantidad de entradas
                            'order' => 'desc',
                            'ignore_sticky_posts' => 0,
                            'category_name' => 'packages'
                        ]);

                        foreach ($toursofperu as $post) :
                    ?>
                        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                    <?php  endforeach;
                        wp_reset_postdata();
                    ?>
                </ul>
            </div>
        </div>
    </div>
</div>

<a href="https://wa.link/q4fys2" target="_black" class="whatsap"><i class="bi bi-whatsapp"></i><?php echo PearTheme::lang('Chat with us','Chatea con nosotros','与我们聊天','Converse conosco') ?></a> 

<script>
    let auxUIMegamenu = document.querySelectorAll(".item_ui");
    let auxDetailsUIMegamenu = document.querySelectorAll(".ui_details");
    const removeActiveDetailsUIMEgamenu = function(){
        auxDetailsUIMegamenu.forEach(e=>e.classList.remove("active"))
    }
    const removeActiveUIMEgamenu = function(){
        auxUIMegamenu.forEach(e=>e.classList.remove("active"))
    }
    auxUIMegamenu.forEach((item)=>{
        item.addEventListener("click",function(){
            removeActiveDetailsUIMEgamenu();
            removeActiveUIMEgamenu();
        })
    })
</script>