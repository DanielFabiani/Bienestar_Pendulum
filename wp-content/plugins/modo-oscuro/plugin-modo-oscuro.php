<?php

//Plugin name: Modo Oscuro
//Descrption: Activa el modo oscuro en tu Theme
//Version: 1.0
//Author: Daniel Fabiani
//Author URI: https://github.com/danielfabiani

function estilos_plugins(){

    $estilos_url = plugin_dir_url( __FILE__ );
    wp_enqueue_style( 'modo_oscuro', $estilos_url.'/assets/css/estilos.css', '', '1.0', 'all' );
}

add_action( 'wp_enqueue_scripts', 'estilos_plugins');