<?php //Generic Modular Content Template for Posts and Pages
function remove_meta_boxes() {
    remove_meta_box('postcustom', 'page', 'normal'); //Custom fields metabox
    remove_meta_box('commentstatusdiv', 'page', 'normal'); //Comments status metabox (discussion)
    remove_meta_box('commentsdiv', 'page', 'normal'); //Comments metabox
    remove_meta_box('trackbacksdiv', 'page', 'normal'); //Trackbacks metabox
    remove_meta_box('authordiv', 'page', 'normal'); //Author metabox
    remove_meta_box('slugdiv', 'page', 'normal'); //Slug metabox
    // remove_meta_box('postexcerpt', 'page', 'normal'); //Excerpt metabox
    remove_meta_box('postimagediv', 'page', 'side'); //Featured image metabox
}
add_action( 'admin_menu' , 'remove_meta_boxes' );
$pages = new Cuztom_Post_Type('page');
$pages->add_meta_box(
    'banner',
    'Hero Banner', 
    array(
        array(
            'name'          => 'image',
            'label'         => 'Banner Image',
            'description'   => 'Dimensions 1200px x 800px',
            'type'          => 'image',
        ),
        array(
            'name'          => 'logo',
            'label'         => 'Logo/Icon',
            'description'   => '',
            'type'          => 'image',
        ),
        array(
            'name'          => 'heading',
            'label'         => 'Main Heading',
            'description'   => '',
            'type'          => 'text',
            
        ),
        array(
            'name'          => 'subheading',
            'label'         => 'Subheading',
            'description'   => '',
            'type'          => 'text'  
        ),
        array(
            'name'          => 'ctatext',
            'label'         => 'CTA Text',
            'description'   => '',
            'type'          => 'text'  
        ),
        array(
            'name'          => 'ctalink',
            'label'         => 'CTA Link',
            'description'   => '',
            'type'          => 'text'  
        )
    )
);

$pages->add_meta_box(
    'actions',
    'Actions',
    array(
        'bundle', 
        array(
            array(
                'name'          => 'image',
                'label'         => 'Image',
                'description'   => 'Dimensions 500px x 500px',
                'type'          => 'image',
            ),
            array(
                'name'          => 'heading',
                'label'         => 'Heading',
                'description'   => '',
                'type'          => 'text',
            ),
            array(
                'name'          => 'text',
                'label'         => 'Text',
                'description'   => '',
                'type'          => 'textarea',        
            ),
            array(
                'name'          => 'url',
                'label'         => 'Link',
                'description'   => '',
                'type'          => 'text',      
            )
        )
    )
);

$pages->add_meta_box(
    'test',
    'Testimonial <i>(Optional)</i>',
    array(
        array(
        'name'          => 'select',
        'label'         => 'Select a testimonial',
        'description'   => '',
        'type'          => 'post_select',
        'args'          => array(
            'post_type' => 'testimonial',
            'show_option_none' => "Select a testimonial",
            )
        )
    )
);

$pages->add_meta_box(
    'cta',
    'Call to Action', 
    array(
        array(
            'name'          => 'image',
            'label'         => 'Image',
            'description'   => 'Dimensions 500px x 500px',
            'type'          => 'image',
        ),
        array(
            'name'          => 'name',
            'label'         => 'Name',
            'description'   => '',
            'type'          => 'text',
        ),
        array(
            'name'          => 'title',
            'label'         => 'Title',
            'description'   => '',
            'type'          => 'text',
        ),
        array(
            'name'          => 'number',
            'label'         => 'Phone Number',
            'description'   => '',
            'type'          => 'text',
        ),
        array(
            'name'          => 'numlink',
            'label'         => 'Number Link',
            'description'   => '',
            'type'          => 'text',
        ),
        array(
            'name'          => 'blink',
            'label'         => 'Button Link',
            'description'   => '',
            'type'          => 'text',
        ),
        array(
            'name'          => 'btext',
            'label'         => 'Button Text',
            'description'   => '',
            'type'          => 'text',
        )
    )
);


?>