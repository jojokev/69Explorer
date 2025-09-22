<?php
// ****************
//encabezado
//********************** */
get_header();
?>
<?php
// Inicia el loop
if (have_posts()) {
    echo '<h1>' . post_type_archive_title('', false) . '</h1>'; // Muestra el título del archivo de tipo de contenido personalizado

    // Empieza el bucle
    while (have_posts()) {
        the_post(); // Establece la publicación actual

        // Aquí defines cómo mostrar cada publicación
        // Por ejemplo, puedes mostrar el título y un extracto de la publicación
        echo '<div class="post">';
        echo '<h2><a href="' . get_permalink() . '">' . get_the_title() . '</a></h2>';
        echo '<p>' . get_the_excerpt() . '</p>';
        echo '</div>';
    }

    // Finaliza el bucle
    // Puedes agregar paginación aquí si tienes más publicaciones para mostrar

    // Paginación de publicaciones
    the_posts_pagination();
} else {
    // Si no hay publicaciones, muestra un mensaje
    echo '<p>No se encontraron tours.</p>';
}
?>


<?php
// ****************
//foooter
//********************** */
get_footer();
?>