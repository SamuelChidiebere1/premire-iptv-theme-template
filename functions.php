<?php
// Enqueue styles and scripts
function premire_iptv_enqueue_scripts() {
    wp_enqueue_style('montserrat-font', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap', array(), null);
    wp_enqueue_style('premire-custom-style', get_template_directory_uri() . '/assets/css/custom.css', array(), '1.0');
    wp_enqueue_script('premire-custom-js', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'premire_iptv_enqueue_scripts');

// Register ACF fields group
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
    'key' => 'group_premire_iptv_content',
    'title' => 'IPTV Landing Content',
    'fields' => array(
        array(
            'key' => 'field_hero_title',
            'label' => 'Hero Title',
            'name' => 'hero_title',
            'type' => 'text',
        ),
        array(
            'key' => 'field_hero_subtitle',
            'label' => 'Hero Subtitle',
            'name' => 'hero_subtitle',
            'type' => 'textarea',
        ),
        array(
            'key' => 'field_hero_button_label',
            'label' => 'Hero Button Label',
            'name' => 'hero_button_label',
            'type' => 'text',
        ),
        array(
            'key' => 'field_hero_button_link',
            'label' => 'Hero Button Link',
            'name' => 'hero_button_link',
            'type' => 'url',
        ),
        array(
            'key' => 'field_feature_cards',
            'label' => 'Feature Cards',
            'name' => 'feature_cards',
            'type' => 'repeater',
            'sub_fields' => array(
                array(
                    'key' => 'field_feature_card_text',
                    'label' => 'Card Text',
                    'name' => 'card_text',
                    'type' => 'textarea',
                ),
            ),
        ),
        array(
            'key' => 'field_plans',
            'label' => 'Pricing Plans',
            'name' => 'plans',
            'type' => 'repeater',
            'sub_fields' => array(
                array(
                    'key' => 'field_plan_name',
                    'label' => 'Plan Name',
                    'name' => 'plan_name',
                    'type' => 'text',
                ),
                array(
                    'key' => 'field_plan_price',
                    'label' => 'Price',
                    'name' => 'plan_price',
                    'type' => 'text',
                ),
                array(
                    'key' => 'field_plan_features',
                    'label' => 'Features List (one per line)',
                    'name' => 'plan_features',
                    'type' => 'textarea',
                ),
                array(
                    'key' => 'field_plan_link',
                    'label' => 'Button Link',
                    'name' => 'plan_link',
                    'type' => 'url',
                ),
                array(
                    'key' => 'field_plan_button_label',
                    'label' => 'Button Label',
                    'name' => 'plan_button_label',
                    'type' => 'text',
                ),
            ),
        ),
        array(
            'key' => 'field_faq',
            'label' => 'FAQ Items',
            'name' => 'faq_items',
            'type' => 'repeater',
            'sub_fields' => array(
                array(
                    'key' => 'field_faq_question',
                    'label' => 'Question',
                    'name' => 'question',
                    'type' => 'text',
                ),
                array(
                    'key' => 'field_faq_answer',
                    'label' => 'Answer',
                    'name' => 'answer',
                    'type' => 'textarea',
                ),
            ),
        ),
    ),
    'location' => array(
        array(
            array(
                'param' => 'page_template',
                'operator' => '==',
                'value' => 'index.php',
            ),
        ),
    ),
));

endif;
