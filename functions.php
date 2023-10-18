<?php

function ajouter_fiche_de_style() {
    wp_enqueue_style('stylesheet', get_template_directory_uri() . "/style.css");
    wp_enqueue_script('scripts',get_template_directory_uri() . "/assets/js/header.js");
}

add_action('wp_enqueue_scripts','ajouter_fiche_de_style');

