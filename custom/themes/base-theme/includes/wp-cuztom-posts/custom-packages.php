<?php //Connect CPT
$args = array(
    'has_archive' => true,
    'menu_icon' => 'dashicons-groups', //http://melchoyce.github.io/dashicons/
    'supports'  => array( 'title', 'editor', 'page-attributes' ),
    'taxonomies' => array('category'),
    'show_in_rest' => true
    );
$pack = register_cuztom_post_type('Package', $args);

$pack->add_meta_box(
    'details',
    'Details', 
    array(
        array(
            'name'          => 'image',
            'label'         => 'Image',
            'description'   => 'Dimensions 500px x 500px',
            'type'          => 'image',
            ),
        array(
            'name'          => 'price',
            'label'         => 'Price',
            'description'   => '',
            'type'          => 'text',
        ),
        array(
            'name'          => 'blurb',
            'label'         => 'Summary',
            'description'   => 'Once sentence intro to package.',
            'type'          => 'wysiwyg',
        ),
        array(
            'name'          => 'points',
            'label'         => 'Points',
            'description'   => '',
            'type'          => 'text',
            'repeatable'	=> true,
        ),
    )
);

?>