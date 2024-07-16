<?php

// HEder Customizer setting Start
function my_theme_customize_header_register($wp_customize)
{
    // Add a new setting for the header action button URL
    $wp_customize->add_setting('header_action_button_url', array(
        'default' => '#',
        'sanitize_callback' => 'esc_url_raw',
    )
    );

    // Add a new setting for the header action button text
    $wp_customize->add_setting('header_action_button_text', array(
        'default' => __('Sign Up', 'text_domain'),
        'sanitize_callback' => 'sanitize_text_field',
    )
    );

    // Add a new control for the header action button URL
    $wp_customize->add_control('header_action_button_url', array(
        'label' => __('Header Action Button URL', 'text_domain'),
        'section' => 'title_tagline', // This is the Site Identity section
        'settings' => 'header_action_button_url',
        'type' => 'url',
    )
    );

    // Add a new control for the header action button text
    $wp_customize->add_control('header_action_button_text', array(
        'label' => __('Header Action Button Text', 'text_domain'),
        'section' => 'title_tagline', // This is the Site Identity section
        'settings' => 'header_action_button_text',
        'type' => 'text',
    )
    );
}

add_action('customize_register', 'my_theme_customize_header_register');

// Header Customizer Setting End



// function my_theme_customize_register($wp_customize) {
//     // Existing header action button settings and controls
//     $wp_customize->add_setting('header_action_button_url', array(
//         'default'           => '#',
//         'sanitize_callback' => 'esc_url_raw',
//     ));

//     $wp_customize->add_setting('header_action_button_text', array(
//         'default'           => __('Sign Up', 'text_domain'),
//         'sanitize_callback' => 'sanitize_text_field',
//     ));

//     $wp_customize->add_control('header_action_button_url', array(
//         'label'       => __('Header Action Button URL', 'text_domain'),
//         'section'     => 'title_tagline',
//         'settings'    => 'header_action_button_url',
//         'type'        => 'url',
//     ));

//     $wp_customize->add_control('header_action_button_text', array(
//         'label'       => __('Header Action Button Text', 'text_domain'),
//         'section'     => 'title_tagline',
//         'settings'    => 'header_action_button_text',
//         'type'        => 'text',
//     ));

//     // Add a new setting for the footer logo
//     $wp_customize->add_setting('footer_logo', array(
//         'default'           => '',
//         'sanitize_callback' => 'esc_url_raw',
//     ));

//     // Add a new control for the footer logo
//     $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'footer_logo', array(
//         'label'       => __('Footer Logo', 'text_domain'),
//         'section'     => 'title_tagline', // You can create a new section if you prefer
//         'settings'    => 'footer_logo',
//     )));
// }

// add_action('customize_register', 'my_theme_customize_register');





function my_theme_customize_footer_register($wp_customize)
{
    // Add a new section for Footer Settings
    $wp_customize->add_section('footer_settings', array(
        'title' => __('Footer Settings', 'text_domain'),
        'priority' => 130, // Position of the section in the Customizer
    )
    );

    // Add a new setting for the footer logo
    $wp_customize->add_setting('footer_logo', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    )
    );

    // Add a new control for the footer logo
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'footer_logo', array(
        'label' => __('Footer Logo', 'text_domain'),
        'section' => 'footer_settings',
        'settings' => 'footer_logo',
    )
    ));

    // Add a new setting for the footer description
    $wp_customize->add_setting('footer_description', array(
        'default' => __('Getting an accurate diagnosis can be one of the most impactful experiences that you can have.', 'text_domain'),
        'sanitize_callback' => 'sanitize_text_field',
    )
    );

    // Add a new control for the footer description
    $wp_customize->add_control('footer_description', array(
        'label' => __('Footer Description', 'text_domain'),
        'section' => 'footer_settings',
        'settings' => 'footer_description',
        'type' => 'textarea',
    )
    );





    // Footer social url
    // Add a setting for Facebook URL
    $wp_customize->add_setting('facebook_url', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    )
    );

    // Add a control for Facebook URL
    $wp_customize->add_control('facebook_url', array(
        'label' => __('Facebook URL', 'text_domain'),
        'section' => 'footer_settings',
        'settings' => 'facebook_url',
        'type' => 'text',
    )
    );

    // Add a setting for Instagram URL
    $wp_customize->add_setting('instagram_url', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    )
    );

    // Add a control for Instagram URL
    $wp_customize->add_control('instagram_url', array(
        'label' => __('Instagram URL', 'text_domain'),
        'section' => 'footer_settings',
        'settings' => 'instagram_url',
        'type' => 'text',
    )
    );

    // Add a setting for YouTube URL
    $wp_customize->add_setting('youtube_url', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    )
    );

    // Add a control for YouTube URL
    $wp_customize->add_control('youtube_url', array(
        'label' => __('YouTube URL', 'text_domain'),
        'section' => 'footer_settings',
        'settings' => 'youtube_url',
        'type' => 'text',
    )
    );

    // Add a setting for LinkedIn URL
    $wp_customize->add_setting('linkedin_url', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    )
    );

    // Add a control for LinkedIn URL
    $wp_customize->add_control('linkedin_url', array(
        'label' => __('LinkedIn URL', 'text_domain'),
        'section' => 'footer_settings',
        'settings' => 'linkedin_url',
        'type' => 'text',
    )
    );





    $wp_customize->add_setting(
        'footer_menu_heading_1',
        array(
            'default' => 'Quick Links',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    $wp_customize->add_control(
        'footer_menu_heading_1',
        array(
            'label' => __('Footer Menu Heading 1', 'theme'),
            'section' => 'footer_settings',
            'type' => 'text',
        )
    );
    $wp_customize->add_setting(
        'footer_menu_1',
        array(
            'default' => '',
            'sanitize_callback' => 'wp_kses_post',
        )
    );

    $wp_customize->add_control(
        'footer_menu_1',
        array(
            'label' => __('Quick Links Menu', 'theme'),
            'section' => 'footer_settings',
            'type' => 'select',
            'choices' => get_menus_dropdown(),
        )
    );




    
    $wp_customize->add_setting(
        'footer_menu_heading_2',
        array(
            'default' => 'Other Pages',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    $wp_customize->add_control(
        'footer_menu_heading_2',
        array(
            'label' => __('Footer Menu Heading 2', 'theme'),
            'section' => 'footer_settings',
            'type' => 'text',
        )
    );
    $wp_customize->add_setting(
        'footer_menu_2',
        array(
            'default' => '',
            'sanitize_callback' => 'wp_kses_post',
        )
    );

    $wp_customize->add_control(
        'footer_menu_2',
        array(
            'label' => __('Other Pages Menu', 'theme'),
            'section' => 'footer_settings',
            'type' => 'select',
            'choices' => get_menus_dropdown(),
        )
    );



    $wp_customize->add_setting(
        'contact_info',
        array(
            // 'default' => 'Other Pages',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    $wp_customize->add_control(
        'contact_info',
        array(
            'label' => __('Contact Info Heading', 'theme'),
            'section' => 'footer_settings',
            'type' => 'text',
        )
    );


    $wp_customize->add_setting(
        'address',
        array(
            'default' => 'Jl. Raya Mas Ubud No. 86, Gianyar, Bali, Indonesia – 80225',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    $wp_customize->add_control(
        'contact_info',
        array(
            'label' => __('Address', 'theme'),
            'section' => 'footer_settings',
            'type' => 'textarea',
        )
    );



}


function get_menus_dropdown()
{
    $menus = get_terms('nav_menu', array('hide_empty' => true));
    $menu_dropdown = array();
    foreach ($menus as $menu) {
        $menu_dropdown[$menu->term_id] = $menu->name;
    }
    return $menu_dropdown;
}

add_action('customize_register', 'my_theme_customize_footer_register');





