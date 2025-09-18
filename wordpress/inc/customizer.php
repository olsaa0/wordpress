<?php
function wpdevs_costomizer( $wp_customize){
    $wp_customize->add_section(
        'sec_copyright',
        array(
            'title'=>'copyright settings',
            'description'=>'copyright settings'
        )
        );

        $wp_customize->add_settings(
            'set_copyright',
            array(
                'type'=>'theme_mod',
                'default'=>'copyright X - All rights reserved',
                'sanitize_callback'=>'sanitize_text_field'
            )
            );

            $wp_customize->add_control(
                'set_copyright',
                array(
                    'label'=>'copyright information',
                    'description'=>'please, type your copyright here',
                    'section'=>'sec_copyright',
                    'type'=>'text'
                )
                );
}
add_action('customizer_register', 'wpdevs_customizer');
?>