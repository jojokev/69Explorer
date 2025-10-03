<?php

require_once(get_template_directory() . "/class/form.php");
require_once(get_template_directory() . "/class/single.php");
require_once(get_template_directory() . "/class/acordeon.php");
require_once(get_template_directory() . "/class/shorcode.php");
require_once(get_template_directory() . "/class/gallery.php");
require_once(get_template_directory() . "/class/acf.php");

// require_once(get_template_directory() . "/inc/src/pear-setting.php");
// require_once(get_template_directory() . "/inc/src/pear-template.php");
// require_once(get_template_directory() . "/inc/src/pear-email.php");

//
// comentarios
//
// Desactivar comentarios en todas las publicaciones
add_filter( 'comments_open', '__return_false', 20, 2 );
add_filter( 'pings_open', '__return_false', 20, 2 );

// Ocultar la sección de comentarios en el frontend
add_filter( 'comments_array', '__return_empty_array', 10, 2 );
//obtiene el idioma actual
if (!defined('APP_LANG'))
    define('APP_LANG', substr(get_bloginfo('language'), 0, 2));
//declaramos una constante con la ruta con la carpeta delas imagenes
if (!defined('IMGS_URL'))
    define('IMGS_URL', get_template_directory_uri() . '/assets/imagenes/');
//declaramos una constante con la ruta con la carpeta delas videos
if (!defined('videos_URL'))
    define('videos_URL', get_template_directory_uri() . '/videos/');
// Includes
include( get_template_directory() . '/includes/enqueue.php') ;

function dotiavatar_function() {
    return '<img src="https://appletravelperu.com/wp-content/uploads/2022/08/cropped-Recurso-2-1536x409.png" 
   alt="doti-avatar" width="96" height="96" class="left-align" />';
}
add_shortcode('dotiavatar', 'dotiavatar_function');
// Hooks
add_action('wp_enqueue_scripts', 'enqueueAssets');
add_theme_support( 'post-thumbnails' ); //a単ade la imagen por defecto
// carga el aarchivo de idioma
load_theme_textdomain(
    'incaterra',
    get_template_directory() . '/languages'
);
//

add_action('wp_ajax_data_fetch' , 'data_fetch');
add_action('wp_ajax_nopriv_data_fetch','data_fetch');
function data_fetch(){

    $the_query = new WP_Query( array( 'posts_per_page' => 3, 's' => esc_attr( $_POST['keyword'] ), 'post_type' => array('page','post') ) );
    if( $the_query->have_posts() ) :
        echo '<ul>';
        while( $the_query->have_posts() ): $the_query->the_post(); ?>

            <li class="content-fetch">
                <a href="<?php echo esc_url( post_permalink() ); ?>">
                    <div class="recomendaciones">

                    <img src="<?php echo (get_the_post_thumbnail_url(get_the_ID(), 'medium_large')); ?>" alt="<?php the_title();?>">
                    <div class="titulo-recomendaciones">
                        <h3><?php the_title();?></h3>
                    </div>

                    </div>
                </a>
            </li>

        <?php endwhile;
       echo '</ul>';
        wp_reset_postdata();  
    endif;

    die();
}

//registrar menus
register_nav_menus(
    array(
        'primary' => esc_html__( 'Primary menu', 'twentytwentyone' )
    )
);

function incatrailspecialist_setup(){
    //soporte de umagenes destacadas
    add_theme_support('title-tag');
    add_theme_support( 'automatic-feed-links' );
}

add_action('after_setup_theme','incatrailspecialist_setup');
add_filter('the_content','do_shortcode');

// Activando el soporte para los sidebar
if (function_exists('register_sidebar')) {
    /**
     * Creates a sidebar
     * @param string|array  Builds Sidebar based off of 'name' and 'id' values.
     */

    register_sidebar(array(
        'id' => 1,
        'name'=>'blog_widge'
    ));

}

add_theme_support( 'custom-logo' );

/******** new class */
class PearTheme {
    public static function lang($ingles = null, $espanol = null, $chino = null, $portugues = null) {
        if(APP_LANG === 'en'){
            return $ingles;
        }
        elseif (APP_LANG === 'es') {
            return $espanol;
        }
        elseif (APP_LANG === 'pt') {
            return $portugues;
        }
        else{
            return $chino;  
        }
    }
    public static function days($days){
        if(APP_LANG === 'en'){
            if($days == 1/2){
                return "1/2 Half day";
            } elseif ($days == 1) {
                return "1 Day";
            }elseif($days == 2){
                $nights = $days - 1;
                return "$days Days / $nights Night";
            }
            else {
                $nights = $days - 1;
                return "$days Days / $nights Nights";
            }
        }
        elseif (APP_LANG === 'es') {
            if($days == 1/2){
                return "1/2 Medio Día";
            } elseif ($days == 1) {
                return "1 Día";
            }elseif($days == 2){
                $nights = $days - 1;
                return "$days Días / $nights Noche";
            }
            else {
                $nights = $days - 1;
                return "$days Días / $nights Noches";
            }
        }
        elseif (APP_LANG === 'pt') {
            if($days == 1/2){
                return "1/2 Meio Dia";
            } elseif ($days == 1) {
                return "1 Dia";
            }elseif($days == 2){
                $nights = $days - 1;
                return "$days Dias / $nights Noite";
            }
            else {
                $nights = $days - 1;
                return "$days Dias / $nights Noites";
            }
        }
        else{
            if($days == 1/2){
                return "1/2 半天";
            } elseif ($days == 1) {
                return "1 天";
            }elseif($days == 2){
                $nights = $days - 1;
                return "$days 天 / $nights 夜";
            }
            else {
                $nights = $days - 1;
                return "$days 天 / $nights 夜";
            }
        }
    }
}

// /********* */

function cptui_register_my_cpts_tour()
{
    $labels = array(
        "name" => __('Tour', '69explorer'),
        "singular_name" => __('tour', '69explorer'),
    );

    $args = array(
        'label'               => __('Tour', '69explorer'),
        'labels'              => $labels,
        'description'         => "",
        'rest_base'           => "",
        'map_meta_cap'        => true,
        'query_var'           => true,
        'supports'            => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields'),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
        'show_in_rest'        => true,
        'taxonomies'          => array( 'category' ),
    );

    register_post_type("tour", $args);

}

add_action('init', 'cptui_register_my_cpts_tour');


function cptui_register_my_cpts_blog()
{

    $labels = array(
        "name" => __('Blog', 'samcorporation'),
        "singular_name" => __('blog', 'samcorporation'),
    );

    $args = array(


        'label' => __('Blog', 'samcorporation'),
        'labels' => $labels,
        'description' => "",
        'rest_base' => "",
        'map_meta_cap' => true,
        'query_var' => true,
        'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'has_archive'         => false,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
        'show_in_rest'        => true,
    );
     
    register_post_type("blog", $args);
}

add_action('init', 'cptui_register_my_cpts_blog');

function cptui_register_my_cpts_faqs()
{

    $labels = array(
        "name" => __('Faqs', '69explorer'),
        "singular_name" => __('faqs', '69explorer'),
    );

    $args = array(
        'label' => __('Faqs', '69explorer'),
        'labels' => $labels,
        'description' => "",
        'rest_base' => "",
        'map_meta_cap' => true,
        'query_var' => true,
        'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'has_archive'         => false,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
        'show_in_rest'        => true,
    );
     
    register_post_type("faqs", $args);
}

add_action('init', 'cptui_register_my_cpts_faqs');

// shordcode para agregar div

function agregarclase( $atts, $content = null ) {
    $atts = shortcode_atts([
        'class' => '',
        'id' => '',
    ], $atts);

    return '<div class="' . esc_attr($atts['class']) . '" id="' . esc_attr($atts['id']) . '">' . do_shortcode($content) . '</div>';
}

add_shortcode('div', 'agregarclase');

function agregarclase2( $atts, $content = null ) {
    $atts = shortcode_atts([
        'class' => '',
        'id' => '',
    ], $atts);

    return '<div class="' . esc_attr($atts['class']) . '" id="' . esc_attr($atts['id']) . '">' . do_shortcode($content) . '</div>';
}

add_shortcode('div2', 'agregarclase2');


add_filter('wpseo_breadcrumb_links', function($links) {
    if (!empty($links)) {
        array_unshift($links, array(
            'url' => home_url('/'),
            'text' => 'Inicio'
        ));
    }
    return $links;
});

// Buscador de tours

function search_by_title_only_for_tours( $search, $wp_query ) {
    global $wpdb;

    // Aplicar solo si es búsqueda y el post_type es tour
    if ( ! $wp_query->is_search() || $wp_query->get('post_type') !== 'tour' ) {
        return $search;
    }

    // Obtener el término buscado
    $search_term = $wp_query->query_vars['s'];

    if ( ! $search_term ) {
        return $search;
    }

    // Sobrescribir la búsqueda solo a títulos
    $search  = $wpdb->prepare(
        " AND {$wpdb->posts}.post_title LIKE %s ",
        '%' . $wpdb->esc_like( $search_term ) . '%'
    );

    return $search;
}
add_filter( 'posts_search', 'search_by_title_only_for_tours', 10, 2 );

// shordcode para crear estructura de los Highlights de un tour
$countHigh = 1;
function highlightsTour($atts, $content = null){
    global $countHigh;
    $content = do_shortcode($content);

    $textHtml = '<div class="d-flex align-items-start highlights-tour__item">
                  <span class="highlights-tour__circle me-2 mt-2">'.$countHigh.'</span>
                  <div class="border-bottom p-2 w-100">';
    $textHtml.= $content;
    $textHtml.= '</div>
                </div>';
    $countHigh++;
    return $textHtml;
}
add_shortcode('highlight', 'highlightsTour');

// shordcode para crear estructura de los itineario de un tour 2025
function itinerary($atts, $content = null){
    $content = do_shortcode( $content);
    $textHtml = '<div class="position-relative mb-3" id="accordion-itinerario">
                    <span class="itinerary-tour__line"></span>';
    $textHtml.= $content;
    $textHtml.= '</div>';
    return $textHtml;
}

$countItinerary = 0;

function diaItinerario($atts, $content = null){
    global $countItinerary;
    $show = "";
    $expand = "false";
    if($countItinerary===0){
        $expand = "true";
        $show = "show";
    }
    $atts = shortcode_atts([
        'titulo' => '',
        'ultimo' => ''
    ], $atts);

    $svg = '<div class="bg-primary me-3 itinerary-tour__circle d-flex justify-content-center align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="23" viewBox="0 0 18 23" fill="none">
                  <path d="M17 9.74805C17 14.741 11.461 19.941 9.601 21.547C9.42772 21.6773 9.2168 21.7478 9 21.7478C8.7832 21.7478 8.57228 21.6773 8.399 21.547C6.539 19.941 1 14.741 1 9.74805C1 7.62631 1.84285 5.59148 3.34315 4.09119C4.84344 2.5909 6.87827 1.74805 9 1.74805C11.1217 1.74805 13.1566 2.5909 14.6569 4.09119C16.1571 5.59148 17 7.62631 17 9.74805Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M9 12.748C10.6569 12.748 12 11.4049 12 9.74805C12 8.09119 10.6569 6.74805 9 6.74805C7.34315 6.74805 6 8.09119 6 9.74805C6 11.4049 7.34315 12.748 9 12.748Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>';

    if($countItinerary>0){
        $svg = '<div class="me-3 itinerary-tour__point d-flex justify-content-center align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="5" height="6" viewBox="0 0 5 6" fill="none">
                      <path d="M2.33333 4.08122C3.06971 4.08122 3.66667 3.48426 3.66667 2.74788C3.66667 2.0115 3.06971 1.41455 2.33333 1.41455C1.59695 1.41455 1 2.0115 1 2.74788C1 3.48426 1.59695 4.08122 2.33333 4.08122Z" stroke="#E91E3E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>';
    }

    if(esc_attr($atts['ultimo'])){
        $svg = '<div class="bg-primary me-3 itinerary-tour__circle d-flex justify-content-center align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="23" viewBox="0 0 20 23" fill="none">
                      <path d="M9.99968 12.415V1.41504L17.9997 5.41504L9.99968 9.41504M18.5607 9.63704C19.0928 11.2772 19.1426 13.0357 18.7041 14.7033C18.2656 16.3709 17.3573 17.8775 16.0872 19.0437C14.8172 20.21 13.2388 20.9868 11.5399 21.2819C9.84104 21.5769 8.09316 21.3777 6.50424 20.7079C4.91532 20.0382 3.55224 18.9261 2.57717 17.5039C1.6021 16.0818 1.05609 14.4095 1.00409 12.686C0.9521 10.9624 1.39631 9.26026 2.28388 7.78193C3.17145 6.3036 4.46502 5.11135 6.01068 4.34704M6.00168 9.41204C5.50059 10.0791 5.17436 10.8609 5.05272 11.6862C4.93109 12.5116 5.01791 13.3543 5.30528 14.1375C5.59265 14.9207 6.07143 15.6196 6.69801 16.1704C7.32458 16.7212 8.07903 17.1065 8.89261 17.2912C9.7062 17.4759 10.5531 17.454 11.356 17.2276C12.159 17.0012 12.8926 16.5775 13.4899 15.9951C14.0872 15.4127 14.5293 14.6901 14.7759 13.8931C15.0225 13.0961 15.0657 12.25 14.9017 11.432" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>';
    }

    $content = do_shortcode( $content);
    $textHtml = '<div class="itinerary-tour__item accordion-item">
                <div class="accordion-header d-flex justify-content-start align-items-center">
                   '. $svg .'
                  <button class="itinerary-tour__button w-100 px-3 ps-0 py-3 bg-white text-start" type="button" data-bs-toggle="collapse" data-bs-target="#itinerary-day-'.$countItinerary.'" aria-expanded="'.$expand.'" aria-controls="itinerary-day-'.$countItinerary.'">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="h5 fw-bold-600 m-0">'. esc_attr($atts['titulo']) .'</h3>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                          <g clip-path="url(#clip0_63_4649)">
                            <path d="M6.6665 10.7479H13.3332M9.99984 7.41455V14.0812M18.3332 10.7479C18.3332 15.3503 14.6022 19.0812 9.99984 19.0812C5.39746 19.0812 1.6665 15.3503 1.6665 10.7479C1.6665 6.14551 5.39746 2.41455 9.99984 2.41455C14.6022 2.41455 18.3332 6.14551 18.3332 10.7479Z" stroke="#E91E3E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                          </g>
                          <defs>
                            <clipPath id="clip0_63_4649">
                              <rect width="20" height="20" fill="white" transform="translate(0 0.748047)"/>
                            </clipPath>
                          </defs>
                        </svg>
                    </div>
                  </button>
                </div>
                <div id="itinerary-day-'.$countItinerary.'" class="accordion-collapse collapse '. $show .'">
                  <div class="accordion-body py-4 pe-3 ms-5 border-bottom">';
    $textHtml.= $content;
    $textHtml.= '</div>
                </div>
              </div>';
    $countItinerary++;
    return $textHtml;
}

add_shortcode('itinerario', 'itinerary');
add_shortcode('dia', 'diaItinerario');

// shordcode para crear estructura de los includes de un tour
function includeTour($atts, $content = null){
    $atts = shortcode_atts([
        'titulo' => '',
    ], $atts);

    $content = do_shortcode($content);

    $textHtml = '<div class="row border-bottom py-4">
                <div class="mb-3 mb-md-0 col-12 col-md-4">
                    <div class="d-flex">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                          <path d="M21.8011 10.415C22.2578 12.6563 21.9323 14.9865 20.879 17.0168C19.8256 19.0472 18.108 20.6551 16.0126 21.5723C13.9172 22.4896 11.5707 22.6608 9.3644 22.0574C7.15807 21.454 5.22529 20.1124 3.88838 18.2564C2.55146 16.4005 1.89122 14.1423 2.01776 11.8584C2.14431 9.57456 3.04998 7.40312 4.58375 5.7062C6.11752 4.00928 8.18668 2.88946 10.4462 2.53348C12.7056 2.1775 15.0189 2.60689 17.0001 3.75003M9.0001 11.415L12.0001 14.415L22.0001 4.41503" stroke="#01B31F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <h3 class="h5 fw-bold m-0 ms-2">'.esc_attr($atts['titulo']).'</h3>
                    </div>
                </div>
                <div class="col-12 col-md-8">';
    $textHtml.= $content;
    $textHtml.= '</div>
            </div>';
    return $textHtml;
}
add_shortcode('incluye', 'includeTour');

// shordcode para crear estructura de las recomendaciones de un tour
function recommendTour($atts, $content = null){
    $atts = shortcode_atts([
        'titulo' => '',
    ], $atts);

    $content = do_shortcode($content);

    $textHtml = '<div class="row border-bottom py-4">
                <div class="mb-3 mb-md-0 col-12 col-md-4">
                    <div class="d-flex">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                          <path d="M21.8011 10.415C22.2578 12.6563 21.9323 14.9865 20.879 17.0168C19.8256 19.0472 18.108 20.6551 16.0126 21.5723C13.9172 22.4896 11.5707 22.6608 9.3644 22.0574C7.15807 21.454 5.22529 20.1124 3.88838 18.2564C2.55146 16.4005 1.89122 14.1423 2.01776 11.8584C2.14431 9.57456 3.04998 7.40312 4.58375 5.7062C6.11752 4.00928 8.18668 2.88946 10.4462 2.53348C12.7056 2.1775 15.0189 2.60689 17.0001 3.75003M9.0001 11.415L12.0001 14.415L22.0001 4.41503" stroke="#FF8800" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <h3 class="h5 fw-bold m-0 ms-2">'.esc_attr($atts['titulo']).'</h3>
                    </div>
                </div>
                <div class="col-12 col-md-8">';
    $textHtml.= $content;
    $textHtml.= '</div>
            </div>';
    return $textHtml;
}
add_shortcode('recomendacion', 'recommendTour');

$countFAQ = 0;
// shordcode para crear estructura de las preguntas frecuentes de un tour
function faqsTour($atts, $content = null){
    $atts = shortcode_atts([
        'titulo' => '',
    ], $atts);

    global $countFAQ;

    $show = "";
    $expand = "false";
    if($countFAQ===0){
        $expand = "true";
        $show = "show";
    }

    $content = do_shortcode($content);

    $textHtml = '<div class="faqs-tour__item rounded-3 border mb-3">
                    <div class="px-3 py-3 rounded-3 w-100">
                      <div class="faqs-tour__button d-flex justify-content-between align-items-center" type="button" data-bs-toggle="collapse" data-bs-target="#faq-'.$countFAQ.'" aria-expanded="'.$expand.'" aria-controls="faq-'.$countFAQ.'">
                        <h3 class="m-0 h5 fw-bold-600">'.esc_attr($atts['titulo']).'</h3>
                        <i class="bi bi-chevron-down h5"></i>
                      </div>
                    </div>
                    <div id="faq-'.$countFAQ.'" class="accordion-collapse collapse '.$show.'" data-bs-parent="#accordionExample">
                      <div class="px-3 py-3 pt-0">
                      ';
    $textHtml.= $content;
    $textHtml.= '</div>
                </div>
            </div>';
    $countFAQ++;
    return $textHtml;
}
add_shortcode('pregunta', 'faqsTour');

// shordcode para crear estructura de los pasos de reserva del template availability
function availabilityStep($atts, $content = null){
    $atts = shortcode_atts([
        'icono' => '',
        'titulo' => '',
    ], $atts);

    $icono= '<i class="bi bi-ticket-perforated h2 text-primary mb-2 d-block"></i>';
    if(esc_attr($atts['icono'] == "2")){
        $icono= '<i class="bi bi-calendar2-check-fill h2 text-primary mb-2 d-block"></i>';
    }
    if(esc_attr($atts['icono'] == "3")){
        $icono='<i class="bi bi-card-checklist h2 text-primary mb-2 d-block"></i>';
    }

    $content = do_shortcode($content);
    $textHtml = '<div class="col-12 col-sm-6 col-lg-4 text-center">
                   '. $icono .'
                   <div>
                   <p class="fs-5 mb-2"><strong class="fw-bold-600">'. esc_attr($atts['titulo'])  .'</strong></p>
                   '. $content .'</div>
            </div>
    ';
    return $textHtml;
}
add_shortcode('step', 'availabilityStep');

// shordcode para crear estructura de los pasos de reserva del template availability
function contentAvailabilityPasos($atts, $content = null){

}
add_shortcode('availabilityStep', 'contentAvailabilityPasos');
$countAvailability = 1;
function availabilityPasos($atts, $content = null){
    global $countAvailability;

    $atts = shortcode_atts([
        'titulo' => '',
    ], $atts);

    $show = $countAvailability==1?"show":"";
    $collapse = $countAvailability==1?"true":"false";
    $content = do_shortcode($content);
    $textHtml = '<div class="accordion-item">
                    <h2 class="accordion-header d-flex">
                      <button class="bg-light w-100 px-3 py-3 border-0 fs-6 fw-bold-600 text-start d-flex justify-content-between align-items-center" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-'. $countAvailability .'" aria-expanded="'. $collapse .'" aria-controls="collapse-"'. $countAvailability .'>
                        '. esc_attr($atts['titulo'])  .'
                        <i class="bi bi-plus h5"></i>
                      </button>
                    </h2>
                    <div id="collapse-'. $countAvailability .'" class="accordion-collapse collapse '. $show .'" data-bs-parent="#accordionExample">
                      <div class="accordion-body text-start">
                        '. $content .'
                      </div>
                    </div>
                  </div>
    ';
    $countAvailability++;
    return $textHtml;
}
add_shortcode('paso', 'availabilityPasos');