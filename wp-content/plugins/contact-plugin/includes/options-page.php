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
        Field::make( 'text', 'contact_plugin_recipients', __( 'Recipient Email' ) )
        ->set_attribute( 'placeholder', 'eg. your@email.com' )
        ->set_help_text( 'The email that the form is submitted to' ),
        Field::make( 'textarea', 'contact_plugin_message', __( 'Confirmation Message' ) )
        ->set_attribute( 'placeholder', 'Enter confirmation message' )
        ->set_help_text( 'Type the message you want the submitter to receive')
    ) );
}