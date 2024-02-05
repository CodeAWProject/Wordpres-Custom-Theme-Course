<?php 

use Carbon_Fields\Field;
use Carbon_Fields\Container;


add_action('after_setup_theme', 'load_carbon_fields');
add_action('carbon_fields_register_fields', 'create_option_page');

function load_carbon_fields()
{
    \Carbon_Fields\Carbon_Fields::boot();
}

function create_option_page()
{
    Container::make( 'theme_options', __( 'Theme Options' ) )
    ->add_fields( array(
        Field::make( 'text', 'contact_plugin_recipients', __( 'Recipient Email' ) ),
    ) );
}