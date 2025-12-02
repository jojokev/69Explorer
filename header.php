<!DOCTYPE html>
<html lang=<?php echo APP_LANG === "en" ? "en" : (APP_LANG === "es" ? "es" : (APP_LANG === "pt" ? "pt" : "zh-CN")); ?> class="no-js">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, minimum-scale=1.0">
    <meta name="theme-color" content="#E91E3E">

    <meta name="google-site-verification" content="d62BGVQjleiztK-fTswTuEB4xWPTnmkzCMn6codh-QM" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <?php wp_head(); ?>

    <!-- clarity  -->
    <script type="text/javascript">
        (function(c, l, a, r, i, t, y) {
            c[a] = c[a] || function() {
                (c[a].q = c[a].q || []).push(arguments)
            };
            t = l.createElement(r);
            t.async = 1;
            t.src = "https://www.clarity.ms/tag/" + i;
            y = l.getElementsByTagName(r)[0];
            y.parentNode.insertBefore(t, y);
        })(window, document, "clarity", "script", "qr8tdbgf4o");
    </script>

</head>

<body>

    <div class="bg-dark p-2 p-lg-3">
        <div class="container-xl">
            <span class="m-0 d-flex justify-content-center align-items-center text-white flex-column flex-md-row">
                <span class="me-2 text-center mb-2 mb-md-0">
                    <svg class="mb-1" xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 17 17" fill="none">
                        <path d="M6.49992 8.49967L7.83325 9.83301L10.4999 7.16634M1.83325 6.49967C2.36368 6.49967 2.87239 6.71039 3.24747 7.08546C3.62254 7.46053 3.83325 7.96924 3.83325 8.49967C3.83325 9.03011 3.62254 9.53882 3.24747 9.91389C2.87239 10.289 2.36368 10.4997 1.83325 10.4997V11.833C1.83325 12.1866 1.97373 12.5258 2.22378 12.7758C2.47382 13.0259 2.81296 13.1663 3.16659 13.1663H13.8333C14.1869 13.1663 14.526 13.0259 14.7761 12.7758C15.0261 12.5258 15.1666 12.1866 15.1666 11.833V10.4997C14.6362 10.4997 14.1274 10.289 13.7524 9.91389C13.3773 9.53882 13.1666 9.03011 13.1666 8.49967C13.1666 7.96924 13.3773 7.46053 13.7524 7.08546C14.1274 6.71039 14.6362 6.49967 15.1666 6.49967V5.16634C15.1666 4.81272 15.0261 4.47358 14.7761 4.22353C14.526 3.97348 14.1869 3.83301 13.8333 3.83301H3.16659C2.81296 3.83301 2.47382 3.97348 2.22378 4.22353C1.97373 4.47358 1.83325 4.81272 1.83325 5.16634V6.49967Z" stroke="#FF8800" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <strong class="me-2" style="color: #F80;"><?php echo PearTheme::lang('Inca Trail 2026', 'Camino Inca 2026', '印加古道2026', 'Trilha Inca 2026') ?></strong>
                    – <?php echo PearTheme::lang('Limited spots! Book in advance & secure your place', '¡Plazas limitadas! Reserve con antelación y asegúrese su plaza.', '名额有限！提前预约，锁定席位', 'Os ingressos para Machu Picchu estão esgotados? Não se preocupe, a trilha Inca de 2 dias para Machu Picchu ainda está disponível!.') ?>
                </span>
                <a href="<?php echo esc_url(get_permalink(pll_get_post(94))); ?>" class="btn bg-primary text-white py-1 px-2 fw-bold-600">
                    <?php echo PearTheme::lang('Secure Your Spot', 'Asegura tu plaza', '锁定席位', 'Garanta o seu lugar') ?>
                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12.2661 7.99958L9.02693 4.85852L9.72307 4.14062L14.2183 8.49958L9.72307 12.8585L9.02693 12.1406L12.2661 8.99958H2.5V7.99958H12.2661Z" fill="white" />
                    </svg>
                </a>
            </span>
        </div>
    </div>

    <header class="">
        <div class="container-xl">
            <div class="d-flex justify-content-between align-items-center border-bottom py-2 py-md-3 flex-column flex-lg-row">
                <div class="logo d-none d-lg-block">
                    <a href="<?php echo APP_LANG == 'en' ? esc_url(get_permalink(7)) : (APP_LANG == 'es' ? esc_url(get_permalink(603)) : (APP_LANG == 'pt' ? esc_url(get_permalink(4045)) : esc_url(get_permalink(2873)))); ?>" aria-label="Link to Home Page">
                        <?php echo wp_get_attachment_image(544, 'full-size', null, array('class' => 'wx-250 h-auto')) ?>
                    </a>
                </div>
                <div class="p-0 d-flex jutify-content-center flex-wrap px-2 order-2 order-lg-1">
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
                <div class="content-nav-page w-auto order-1 order-lg-2">
                    <div class="items-links-header d-flex align-items-center justify-content-center justify-content-lg-end text-center mb-2">
                        <div class="d-flex flex-row align-content-center">
                            <div class="" id="copy-links-header">
                                <!-- copy-links-header - crear una copia de este div en el menu de navegacion de un tour -->
                                <a href="<?php echo  get_permalink(pll_get_post(927)); ?>" class="text-dark text-decoration-none py-2 py-sm-0 px-2 border-end fw-bold-600"><?php echo PearTheme::lang('Inca Trail Availability', 'Disponibilidad del Camino Inca', '查询可用性', 'Disponibilidade da Trilha Inca') ?></a>
                                <a href="<?php echo  get_permalink(pll_get_post(5355)); ?>" class="text-dark text-decoration-none py-2 py-sm-0 px-2 border-end fw-bold-600"><?php echo PearTheme::lang('Tailor-Made', 'Tours Personalizados', '量身定制', 'Pacotes Personalizados') ?></a>
                                <a href="<?php if (APP_LANG === 'en' || APP_LANG === 'es' || APP_LANG === 'pt') {
                                                echo  get_permalink(pll_get_post(562));
                                            } else {
                                                echo  get_permalink(pll_get_post(3122));
                                            } ?>" class="text-dark text-decoration-none py-2 py-sm-0 px-2 border-end fw-bold-600"><?php echo PearTheme::lang('Circuits', 'Circuitos', '新赛道', 'Circuitos') ?></a>
                                <a href="<?php echo  get_permalink(pll_get_post(420)); ?>" class="text-dark text-decoration-none py-2 py-sm-0 px-2 border-end fw-bold-600"><?php echo PearTheme::lang('Payments', 'Pagos', '支付', 'Pagamentos') ?></a>
                                <a href="<?php echo  get_permalink(pll_get_post(335)); ?>" class="text-dark text-decoration-none py-2 py-sm-0 px-2 fw-bold-600"><?php echo PearTheme::lang('Blogs', 'Blogs', '我们的博客', 'Blogs') ?></a>
                            </div>
                            <div class="lang-dropdown position-relative m-0" id="content-languages-page">
                                <ul class="m-0 p-0" id="language-page" lang="<?php echo PearTheme::lang('en', 'es', 'zh', 'pt') ?>"></ul>
                                <ul id="languages-options">
                                    <?php pll_the_languages(array('show_flags' => 1, 'show_names' => 1, 'display_names_as'  => 'slug')); ?>
                                </ul>
                                <i class="bi bi-arrow-down"></i>
                            </div>
                        </div>
                        <script>
                            let $wrapperLangPage = document.getElementById("content-languages-page");
                            let $langSelectedPage = document.getElementById("language-page");
                            let $languagesOptionsPage = document.getElementById("languages-options");
                            if ($langSelectedPage.getAttribute("lang") === "en") $langSelectedPage.appendChild($languagesOptionsPage.children[0]);
                            if ($langSelectedPage.getAttribute("lang") === "es") $langSelectedPage.appendChild($languagesOptionsPage.children[1]);
                            if ($langSelectedPage.getAttribute("lang") === "zh") $langSelectedPage.appendChild($languagesOptionsPage.children[2]);
                            if ($langSelectedPage.getAttribute("lang") === "pt") $langSelectedPage.appendChild($languagesOptionsPage.children[3]);
                            $langSelectedPage.querySelector("a").setAttribute("href", "#");
                        </script>
                    </div>
                    <div class="d-none items-links-header d-lg-flex justify-content-center justify-content-lg-end">
                        <a href="https://api.whatsapp.com/send?phone=51961721125&text=Hello%2C%20Explorer%2069!%20%F0%9F%8C%8D" target="_blank" rel="nofollow" class="fs-95 text-dark fw-bold-600 py-2 py-sm-0">
                            <svg class="me-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <g clip-path="url(#clip0_182_534)">
                                    <path d="M9.22125 11.045C9.35894 11.1082 9.51405 11.1227 9.66105 11.086C9.80804 11.0492 9.93814 10.9636 10.0299 10.843L10.2666 10.533C10.3908 10.3674 10.5518 10.233 10.737 10.1404C10.9221 10.0479 11.1263 9.99967 11.3333 9.99967H13.3333C13.6869 9.99967 14.026 10.1402 14.2761 10.3902C14.5261 10.6402 14.6666 10.9794 14.6666 11.333V13.333C14.6666 13.6866 14.5261 14.0258 14.2761 14.2758C14.026 14.5259 13.6869 14.6663 13.3333 14.6663C10.1507 14.6663 7.09841 13.4021 4.84797 11.1516C2.59753 8.90119 1.33325 5.84894 1.33325 2.66634C1.33325 2.31272 1.47373 1.97358 1.72378 1.72353C1.97382 1.47348 2.31296 1.33301 2.66659 1.33301H4.66659C5.02021 1.33301 5.35935 1.47348 5.60939 1.72353C5.85944 1.97358 5.99992 2.31272 5.99992 2.66634V4.66634C5.99992 4.87333 5.95173 5.07749 5.85915 5.26263C5.76658 5.44777 5.63218 5.60881 5.46658 5.73301L5.15458 5.96701C5.0322 6.06046 4.94593 6.1934 4.91045 6.34324C4.87496 6.49308 4.89244 6.65059 4.95992 6.78901C5.87104 8.63958 7.36953 10.1362 9.22125 11.045Z" stroke="#E91E3E" stroke-linecap="round" stroke-linejoin="round" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_182_534">
                                        <rect width="16" height="16" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                            +51 961 721 125
                        </a>
                        <a href="mailto:info@69explorer.com" class="fs-95 text-dark fw-bold-600 py-2 py-sm-0">
                            <svg class="me-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path d="M11.3333 12.6667C11.3333 13.0203 11.1928 13.3594 10.9427 13.6095C10.6927 13.8595 10.3535 14 9.99992 14H2.66659C2.31296 14 1.97382 13.8595 1.72378 13.6095C1.47373 13.3594 1.33325 13.0203 1.33325 12.6667V7.33333C1.33326 7.09929 1.39487 6.86937 1.51189 6.66669C1.62892 6.464 1.79723 6.29569 1.99992 6.17867M14.6666 3.66667L10.3873 6.45267C10.1723 6.59078 9.92211 6.66421 9.66658 6.66421C9.41105 6.66421 9.16091 6.59078 8.94592 6.45267L4.66659 3.66667M5.99992 2H13.3333C14.0696 2 14.6666 2.59695 14.6666 3.33333V8.66667C14.6666 9.40305 14.0696 10 13.3333 10H5.99992C5.26354 10 4.66659 9.40305 4.66659 8.66667V3.33333C4.66659 2.59695 5.26354 2 5.99992 2Z" stroke="#E91E3E" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            info@69explorer.com
                        </a>
                        <a href="https://www.tripadvisor.com.pe/Attraction_Review-g294314-d27140492-Reviews-69_Explorer_Peru-Cusco_Cusco_Region.html" target="_blank" class="d-flex align-items-center fs-95 text-tripadvisor fw-bold-600 py-2 py-sm-0">
                            <svg class="me-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path d="M11.745 7.43055C11.0105 7.43055 10.4155 8.02605 10.4155 8.76005C10.4155 9.49405 11.011 10.0895 11.745 10.0895C12.4795 10.0895 13.0745 9.49405 13.0745 8.76005C13.0745 8.51505 13.0085 8.28605 12.893 8.08905L12.8965 8.09555C12.6625 7.69555 12.2345 7.43055 11.745 7.43055ZM4.25245 7.43055C3.51795 7.43055 2.92295 8.02605 2.92295 8.76005C2.92295 9.49405 3.51845 10.0895 4.25245 10.0895C4.98695 10.0895 5.58195 9.49405 5.58195 8.76005C5.58195 8.51505 5.51595 8.28605 5.40045 8.08905L5.40395 8.09555C5.16995 7.69555 4.74195 7.43055 4.25245 7.43055ZM11.745 6.22455C11.7455 6.22455 11.7455 6.22455 11.746 6.22455C13.146 6.22455 14.281 7.35955 14.281 8.75955C14.281 10.1595 13.146 11.2945 11.746 11.2945C10.346 11.2945 9.21095 10.1595 9.21095 8.75955C9.21095 8.29305 9.33695 7.85605 9.55645 7.48055L9.54995 7.49255C9.99595 6.72905 10.8115 6.22505 11.745 6.22455ZM4.25245 6.22305C5.65295 6.22305 6.78845 7.35855 6.78845 8.75905C6.78845 10.1595 5.65295 11.295 4.25245 11.295C2.85195 11.295 1.71645 10.1595 1.71645 8.75905C1.71645 8.29205 1.84245 7.85455 2.06245 7.47905L2.05595 7.49105C2.50245 6.72755 3.31845 6.22305 4.25245 6.22305ZM7.99995 4.41005C9.01595 4.41055 9.98295 4.61805 10.862 4.99255L10.814 4.97455C9.22745 5.51955 8.09045 6.95955 7.99995 8.67705L7.99945 8.68705C7.90945 6.95955 6.77195 5.51905 5.21445 4.98305L5.18545 4.97455C6.01645 4.61855 6.98395 4.41155 7.99945 4.41105L7.99995 4.41005ZM8.00395 3.18555C8.00295 3.18555 8.00145 3.18555 8.00045 3.18555C6.21795 3.18555 4.56395 3.73505 3.19845 4.67455L3.22695 4.65605H0.501953L1.72845 5.99005C0.974453 6.67805 0.503453 7.66455 0.503453 8.76105C0.503453 10.83 2.18095 12.5075 4.24995 12.5075C5.23545 12.5075 6.13195 12.127 6.80095 11.505L6.79845 11.507L7.99945 12.814L9.20045 11.508C9.86695 12.1275 10.7635 12.508 11.749 12.508C13.8185 12.508 15.496 10.8305 15.496 8.76105C15.496 7.66455 15.025 6.67755 14.274 5.99255L14.271 5.99005L15.4975 4.65605H12.7795C11.443 3.73555 9.78945 3.18605 8.00695 3.18605C8.00545 3.18605 8.00445 3.18605 8.00295 3.18605L8.00395 3.18555Z" fill="#00852F" />
                            </svg>
                            <?php echo PearTheme::lang('Reviews', 'Reseñas', '评论', 'Avaliações') ?>
                        </a>
                        <a href="<?php echo  get_permalink(pll_get_post(324)); ?>" class="d-flex align-items-center fs-95 fw-bold-600 py-2 py-sm-0 d-inline-block d-lg-none d-xl-inline-block">
                            <?php echo PearTheme::lang('Inquire Now', 'Contáctenos', '联系我们', 'Contato') ?>
                            <i class="bi bi-arrow-right ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <nav class="bg-primary">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'container'      => 'div',
                'container_class' => 'navigation-page py-2',
                'menu_class'     => 'd-flex justify-content-center position-relative',
            ));
            ?>
        </nav>
    </header>

    <navigation id="responsive-menu" class="p-2 bg-white align-items-center justify-content-between position-sticky top-0 border-bottom d-flex d-lg-none">
        <a href="<?php echo APP_LANG == 'en' ? esc_url(get_permalink(7)) : (APP_LANG == 'es' ? esc_url(get_permalink(603)) : (APP_LANG == 'pt' ? esc_url(get_permalink(4045)) : esc_url(get_permalink(2873)))); ?>" aria-label="Link to Home Page">
            <?php echo wp_get_attachment_image(544, 'full-size', null, array('class' => 'wx-130 h-auto')) ?>
        </a>
        <div class="">
            <a href="mailto:info@69explorer.com" class="py-2 px-3 bg-light rounded-2 me-2"><i class="bi bi-envelope"></i></a>
            <a href="https://api.whatsapp.com/send?phone=51961721125&text=Hello%2C%20Explorer%2069!%20%F0%9F%8C%8D" target="_blank" rel="nofollow" class="py-2 px-3 bg-light rounded-2 me-2"><i class="bi bi-telephone-forward"></i></a>
            <a href="https://www.tripadvisor.com.pe/Attraction_Review-g294314-d27140492-Reviews-69_Explorer_Peru-Cusco_Cusco_Region.html" target="_blank" rel="nofollow" class="py-2 px-3 bg-light rounded-2">
                <svg class="mb-1" style="scale: 1.4;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                    <path d="M11.745 7.43055C11.0105 7.43055 10.4155 8.02605 10.4155 8.76005C10.4155 9.49405 11.011 10.0895 11.745 10.0895C12.4795 10.0895 13.0745 9.49405 13.0745 8.76005C13.0745 8.51505 13.0085 8.28605 12.893 8.08905L12.8965 8.09555C12.6625 7.69555 12.2345 7.43055 11.745 7.43055ZM4.25245 7.43055C3.51795 7.43055 2.92295 8.02605 2.92295 8.76005C2.92295 9.49405 3.51845 10.0895 4.25245 10.0895C4.98695 10.0895 5.58195 9.49405 5.58195 8.76005C5.58195 8.51505 5.51595 8.28605 5.40045 8.08905L5.40395 8.09555C5.16995 7.69555 4.74195 7.43055 4.25245 7.43055ZM11.745 6.22455C11.7455 6.22455 11.7455 6.22455 11.746 6.22455C13.146 6.22455 14.281 7.35955 14.281 8.75955C14.281 10.1595 13.146 11.2945 11.746 11.2945C10.346 11.2945 9.21095 10.1595 9.21095 8.75955C9.21095 8.29305 9.33695 7.85605 9.55645 7.48055L9.54995 7.49255C9.99595 6.72905 10.8115 6.22505 11.745 6.22455ZM4.25245 6.22305C5.65295 6.22305 6.78845 7.35855 6.78845 8.75905C6.78845 10.1595 5.65295 11.295 4.25245 11.295C2.85195 11.295 1.71645 10.1595 1.71645 8.75905C1.71645 8.29205 1.84245 7.85455 2.06245 7.47905L2.05595 7.49105C2.50245 6.72755 3.31845 6.22305 4.25245 6.22305ZM7.99995 4.41005C9.01595 4.41055 9.98295 4.61805 10.862 4.99255L10.814 4.97455C9.22745 5.51955 8.09045 6.95955 7.99995 8.67705L7.99945 8.68705C7.90945 6.95955 6.77195 5.51905 5.21445 4.98305L5.18545 4.97455C6.01645 4.61855 6.98395 4.41155 7.99945 4.41105L7.99995 4.41005ZM8.00395 3.18555C8.00295 3.18555 8.00145 3.18555 8.00045 3.18555C6.21795 3.18555 4.56395 3.73505 3.19845 4.67455L3.22695 4.65605H0.501953L1.72845 5.99005C0.974453 6.67805 0.503453 7.66455 0.503453 8.76105C0.503453 10.83 2.18095 12.5075 4.24995 12.5075C5.23545 12.5075 6.13195 12.127 6.80095 11.505L6.79845 11.507L7.99945 12.814L9.20045 11.508C9.86695 12.1275 10.7635 12.508 11.749 12.508C13.8185 12.508 15.496 10.8305 15.496 8.76105C15.496 7.66455 15.025 6.67755 14.274 5.99255L14.271 5.99005L15.4975 4.65605H12.7795C11.443 3.73555 9.78945 3.18605 8.00695 3.18605C8.00545 3.18605 8.00445 3.18605 8.00295 3.18605L8.00395 3.18555Z" fill="#00852F" />
                </svg>
            </a>
        </div>
        <a href="#" class="py-1 px-3 bg-primary rounded-2" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions"><i class="bi bi-list-nested fs-5 text-white"></i></a>
    </navigation>

    <!-- Menu Responsive -->
    <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
        <div class="offcanvas-header">
            <a href="<?php echo APP_LANG == 'en' ? esc_url(get_permalink(7)) : (APP_LANG == 'es' ? esc_url(get_permalink(603)) : (APP_LANG == 'pt' ? esc_url(get_permalink(4045)) : esc_url(get_permalink(2873)))); ?>" aria-label="Link to Home Page">
                <?php echo wp_get_attachment_image(544, 'full-size', null, array('class' => 'wx-130 h-auto')) ?>
            </a>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="ui_details position-relative opacity-100 visible top-0 p-0 h-auto mb-4" id="destinations">
                <div class="title_ui">
                    <h3><?php echo PearTheme::lang('Destinations', 'Destinos', '目的地', 'Destinos') ?></h3>
                </div>
                <div class="content">
                    <div class="template_menu_ui mt-0" id="copy-destination-header">
                        <!-- copy-destination-header - crear una copia de este div en el menu de navegacion de un tour -->
                        <div class="accordion-group">
                            <?php
                            $args = array(
                                'post_type' => 'page',
                                'posts_per_page' => 5,
                                'order' => 'ASC',
                                'post__in' => array(282, 290, 294, 298, 296)
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
                                            <?php endforeach;
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
        </div>
    </div>

    <a href="https://wa.link/q4fys2" target="_black" class="whatsap"><i class="bi bi-whatsapp"></i><?php echo PearTheme::lang('Chat with us', 'Chatea con nosotros', '与我们聊天', 'Converse conosco') ?></a>

    <script>
        let auxUIMegamenu = document.querySelectorAll(".item_ui");
        let auxDetailsUIMegamenu = document.querySelectorAll(".ui_details");
        const removeActiveDetailsUIMEgamenu = function() {
            auxDetailsUIMegamenu.forEach(e => e.classList.remove("active"))
        }
        const removeActiveUIMEgamenu = function() {
            auxUIMegamenu.forEach(e => e.classList.remove("active"))
        }
        auxUIMegamenu.forEach((item) => {
            item.addEventListener("click", function() {
                removeActiveDetailsUIMEgamenu();
                removeActiveUIMEgamenu();
            })
        })
    </script>