<?php

/**
 * Registra stilos y scripts
 */
function enqueueAssets() {

    removeUnnecessaryAssets();
    registerStyles();
    registerScripts();

    // ---------------------------------------
    // Registra estilos

    wp_enqueue_style('main');
    // wp_enqueue_style('app');
    // ---------------------------------------
    // resgistra scripts

    wp_enqueue_script('main');
    // wp_enqueue_script('app');
}

/**
 * registra hojas de estilos
 */
function registerStyles() {
    wp_register_style(
        'main',
        get_template_directory_uri() .'/assets/css/main.css',
        false,
        '4.4.4'
    );
    /* wp_register_style(
        'app',
        get_template_directory_uri() .'/assets/css/app.css',
        false,
        '4.2.1'
    );*/

    // Encolar los estilos para que se apliquen
    wp_enqueue_style('main');
    //wp_enqueue_style('app');
    wp_enqueue_style('styles');
}
add_action('wp_enqueue_scripts', 'registerStyles');


/**
 * Registra scripts de javascript
 */
function registerScripts() {

    wp_register_script(
        'main',
        get_template_directory_uri() . '/assets/js/main.js',
        [],
        '4.4.3',
        true
    );

    /* wp_register_script(
        'app',
        get_template_directory_uri() . '/assets/js/app.js',
        [],
        '4.3.1',
        true
    ); */
}

/**
 * quita recursos inecesarios de la cola (styles , scripts)
 */
function removeUnnecessaryAssets() {

    // quita embed.js
    wp_deregister_script('wp-embed');

    // quita el jquery
    wp_deregister_script('jquery');

    // quita hoja de styles libreria
    // wp_dequeue_style('wp-block-library');
}
