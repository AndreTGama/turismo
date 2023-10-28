<?php

function adicionar_fontes_personalizadas()
{
	wp_enqueue_style('fonte-personalizada', get_template_directory_uri() . '/assets/fonts/great_vibes/GreatVibes-Regular.ttf');
}
add_action('init', 'adicionar_fontes_personalizadas');


function paraty_turismo_register_styles()
{
	wp_enqueue_style('paraty-turismo', get_template_directory_uri() . '/assets/dist/css/index.css');
}
add_action('init', 'paraty_turismo_register_styles');

function paraty_turismo_register_script()
{
	wp_enqueue_script('paraty-turismo', get_template_directory_uri() . '/assets/dist/js/paraty-turismo.min.js');
}
add_action('init', 'paraty_turismo_register_script');
