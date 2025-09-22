<?php
// ****************
//encabezado
//********************** */
get_header();
?>

<?php
$pageSlug = get_post_field('ID');

// selecciona la plantilla de acuerdo ala pagina
switch ($pageSlug) {
    case '7':
        // mostrar el indice o entrada del blog
        get_template_part('template-parts/content', 'index');
        break;
    case '603':
        // mostrar el indice o entrada del blog
        get_template_part('template-parts/content', 'index');
        break;
    case '2873':
        // mostrar el indice o entrada del blog
        get_template_part('template-parts/content', 'index');
        break;
    case '4045':
    // mostrar el home pt
    get_template_part('template-parts/content', 'index');
        break;
    case '335':
        // mostrar el indice o entrada del blog
        get_template_part('template-parts/content', 'blog');
        break;
    case '1229':
        // mostrar el indice o entrada del blog
        get_template_part('template-parts/content', 'blog');
        break;
    case '4050':
        // mostrar el indice o entrada del blog en pt
        get_template_part('template-parts/content', 'blog');
        break;
    default:
        // plantilla de pagina por defecto
        while (have_posts()) : the_post();
            // carga la pantilla
            get_template_part('template-parts/content', 'plantilla');
        endwhile;
        break;
}
?>

<?php
// ****************
//foooter
//********************** */
get_footer();
?>