<?php
// Add to functions.php

// Register Applications Custom Post Type
function create_application_post_type() {
    $labels = array(
        'name'                  => _x('Applications', 'Post Type General Name', 'textdomain'),
        'singular_name'         => _x('Application', 'Post Type Singular Name', 'textdomain'),
        'menu_name'             => __('Applications', 'textdomain'),
        'name_admin_bar'        => __('Application', 'textdomain'),
        'archives'              => __('Application Archives', 'textdomain'),
        'attributes'            => __('Application Attributes', 'textdomain'),
        'parent_item_colon'     => __('Parent Application:', 'textdomain'),
        'all_items'             => __('All Applications', 'textdomain'),
        'add_new_item'          => __('Add New Application', 'textdomain'),
        'add_new'               => __('Add New', 'textdomain'),
        'new_item'              => __('New Application', 'textdomain'),
        'edit_item'             => __('Edit Application', 'textdomain'),
        'update_item'           => __('Update Application', 'textdomain'),
        'view_item'             => __('View Application', 'textdomain'),
        'view_items'            => __('View Applications', 'textdomain'),
        'search_items'          => __('Search Application', 'textdomain'),
        'not_found'             => __('Not found', 'textdomain'),
        'not_found_in_trash'    => __('Not found in Trash', 'textdomain'),
    );
    
    $args = array(
        'label'                 => __('Application', 'textdomain'),
        'description'           => __('Product applications/categories', 'textdomain'),
        'labels'                => $labels,
        'supports'              => array('title', 'editor', 'revisions'),
        'hierarchical'          => true,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 4,
        'menu_icon'             => 'dashicons-building',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
        'show_in_rest'          => true,
        'rewrite'               => array('slug' => 'applications'),
    );
    
    register_post_type('application', $args);
}
add_action('init', 'create_application_post_type', 0);

// Register Product Series Custom Post Type
function create_product_series_post_type() {
    $labels = array(
        'name'                  => _x('Product Series', 'Post Type General Name', 'textdomain'),
        'singular_name'         => _x('Product Series', 'Post Type Singular Name', 'textdomain'),
        'menu_name'             => __('Product Series', 'textdomain'),
        'name_admin_bar'        => __('Product Series', 'textdomain'),
        'archives'              => __('Product Series Archives', 'textdomain'),
        'attributes'            => __('Product Series Attributes', 'textdomain'),
        'parent_item_colon'     => __('Parent Series:', 'textdomain'),
        'all_items'             => __('All Product Series', 'textdomain'),
        'add_new_item'          => __('Add New Product Series', 'textdomain'),
        'add_new'               => __('Add New', 'textdomain'),
        'new_item'              => __('New Product Series', 'textdomain'),
        'edit_item'             => __('Edit Product Series', 'textdomain'),
        'update_item'           => __('Update Product Series', 'textdomain'),
        'view_item'             => __('View Product Series', 'textdomain'),
        'view_items'            => __('View Product Series', 'textdomain'),
        'search_items'          => __('Search Product Series', 'textdomain'),
        'not_found'             => __('Not found', 'textdomain'),
        'not_found_in_trash'    => __('Not found in Trash', 'textdomain'),
    );
    
    $args = array(
        'label'                 => __('Product Series', 'textdomain'),
        'description'           => __('Product series/families', 'textdomain'),
        'labels'                => $labels,
        'supports'              => array('title', 'revisions'),
        'hierarchical'          => true,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-portfolio',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
        'show_in_rest'          => true,
        'rewrite'               => array('slug' => 'product-series'),
    );
    
    register_post_type('product_series', $args);
}
add_action('init', 'create_product_series_post_type', 0);

// Register Products Custom Post Type
function create_product_post_type() {
    $labels = array(
        'name'                  => _x('Products', 'Post Type General Name', 'textdomain'),
        'singular_name'         => _x('Product', 'Post Type Singular Name', 'textdomain'),
        'menu_name'             => __('Products', 'textdomain'),
        'name_admin_bar'        => __('Product', 'textdomain'),
        'archives'              => __('Product Archives', 'textdomain'),
        'attributes'            => __('Product Attributes', 'textdomain'),
        'parent_item_colon'     => __('Parent Product:', 'textdomain'),
        'all_items'             => __('All Products', 'textdomain'),
        'add_new_item'          => __('Add New Product', 'textdomain'),
        'add_new'               => __('Add New', 'textdomain'),
        'new_item'              => __('New Product', 'textdomain'),
        'edit_item'             => __('Edit Product', 'textdomain'),
        'update_item'           => __('Update Product', 'textdomain'),
        'view_item'             => __('View Product', 'textdomain'),
        'view_items'            => __('View Products', 'textdomain'),
        'search_items'          => __('Search Product', 'textdomain'),
        'not_found'             => __('Not found', 'textdomain'),
        'not_found_in_trash'    => __('Not found in Trash', 'textdomain'),
        'featured_image'        => __('Featured Image', 'textdomain'),
        'set_featured_image'    => __('Set featured image', 'textdomain'),
        'remove_featured_image' => __('Remove featured image', 'textdomain'),
        'use_featured_image'    => __('Use as featured image', 'textdomain'),
        'insert_into_item'      => __('Insert into product', 'textdomain'),
        'uploaded_to_this_item' => __('Uploaded to this product', 'textdomain'),
        'items_list'            => __('Products list', 'textdomain'),
        'items_list_navigation' => __('Products list navigation', 'textdomain'),
        'filter_items_list'     => __('Filter products list', 'textdomain'),
    );
    
    $args = array(
        'label'                 => __('Product', 'textdomain'),
        'description'           => __('Product catalog items', 'textdomain'),
        'labels'                => $labels,
        'supports'              => array('title', 'thumbnail', 'revisions'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 6,
        'menu_icon'             => 'dashicons-products',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
        'show_in_rest'          => true,
        'rewrite'               => array('slug' => 'products'),
    );
    
    register_post_type('custom_product', $args);
}
add_action('init', 'create_product_post_type', 0);

// Register Projects Custom Post Type
function create_project_post_type() {
    $labels = array(
        'name'                  => _x('Projects', 'Post Type General Name', 'textdomain'),
        'singular_name'         => _x('Project', 'Post Type Singular Name', 'textdomain'),
        'menu_name'             => __('Projects', 'textdomain'),
        'name_admin_bar'        => __('Project', 'textdomain'),
        'archives'              => __('Project Archives', 'textdomain'),
        'attributes'            => __('Project Attributes', 'textdomain'),
        'parent_item_colon'     => __('Parent Project:', 'textdomain'),
        'all_items'             => __('All Projects', 'textdomain'),
        'add_new_item'          => __('Add New Project', 'textdomain'),
        'add_new'               => __('Add New', 'textdomain'),
        'new_item'              => __('New Project', 'textdomain'),
        'edit_item'             => __('Edit Project', 'textdomain'),
        'update_item'           => __('Update Project', 'textdomain'),
        'view_item'             => __('View Project', 'textdomain'),
        'view_items'            => __('View Projects', 'textdomain'),
        'search_items'          => __('Search Project', 'textdomain'),
        'not_found'             => __('Not found', 'textdomain'),
        'not_found_in_trash'    => __('Not found in Trash', 'textdomain'),
    );
    
    $args = array(
        'label'                 => __('Project', 'textdomain'),
        'description'           => __('Project items', 'textdomain'),
        'labels'                => $labels,
        'supports'              => array('title', 'editor', 'revisions'),
        'hierarchical'          => true,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 4,
        'menu_icon'             => 'dashicons-building',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
        'show_in_rest'          => true,
        'rewrite'               => array('slug' => 'projects'),
    );
    
    register_post_type('project', $args);
}
add_action('init', 'create_project_post_type', 0);


// ACF Field Groups Registration
function register_acf_fields() {
    if (function_exists('acf_add_local_field_group')) {
        // Application Fields
        acf_add_local_field_group(array(
            'key' => 'group_application_fields',
            'title' => 'Application Details',
            'fields' => array(
                array(
                    'key' => 'field_application_description',
                    'label' => 'Application Description',
                    'name' => 'application_description',
                    'type' => 'textarea',
                    'rows' => 4,
                ),
                array(
                    'key' => 'field_application_image',
                    'label' => 'Application Image',
                    'name' => 'application_image',
                    'type' => 'image',
                    'return_format' => 'array',
                    'preview_size' => 'medium',
                ),
                array(
                    'key' => 'field_application_features',
                    'label' => 'Key Features',
                    'name' => 'application_features',
                    'type' => 'repeater',
                    'layout' => 'table',
                    'sub_fields' => array(
                        array(
                            'key' => 'field_feature_name',
                            'label' => 'Feature',
                            'name' => 'feature_name',
                            'type' => 'text',
                        ),
                        array(
                            'key' => 'field_feature_description',
                            'label' => 'Description',
                            'name' => 'feature_description',
                            'type' => 'textarea',
                            'rows' => 2,
                        ),
                    ),
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'application',
                    ),
                ),
            ),
            'menu_order' => 0,
            'position' => 'normal',
            'style' => 'default',
        ));
        
        // Product Series Fields
        acf_add_local_field_group(array(
            'key' => 'group_product_series_fields',
            'title' => 'Product Series Details',
            'fields' => array(
                array(
                    'key' => 'field_series_application',
                    'label' => 'Application',
                    'name' => 'series_application',
                    'type' => 'post_object',
                    'post_type' => array('application'),
                    'return_format' => 'object',
                    'ui' => 1,
                    'required' => 1,
                    'multiple' => 1,
                ),
                array(
                    'key' => 'field_series_code',
                    'label' => 'Series Code',
                    'name' => 'series_code',
                    'type' => 'text',
                    'placeholder' => 'e.g., LED-REC-001',
                ),
                array(
                    'key' => 'field_series_description',
                    'label' => 'Series Description',
                    'name' => 'series_description',
                    'type' => 'textarea',
                    'rows' => 4,
                ),
                array(
                    'key' => 'field_series_image',
                    'label' => 'Series Image',
                    'name' => 'series_image',
                    'type' => 'image',
                    'return_format' => 'array',
                    'preview_size' => 'medium',
                ),
                array(
                    'key' => 'field_series_brochure',
                    'label' => 'Series Brochure',
                    'name' => 'series_brochure',
                    'type' => 'file',
                    'return_format' => 'array',
                    'mime_types' => 'pdf',
                ),
                array(
                    'key' => 'field_series_features',
                    'label' => 'Series Features',
                    'name' => 'series_features',
                    'type' => 'repeater',
                    'layout' => 'table',
                    'sub_fields' => array(
                        array(
                            'key' => 'field_series_feature_name',
                            'label' => 'Feature',
                            'name' => 'feature_name',
                            'type' => 'text',
                        ),
                        array(
                            'key' => 'field_series_feature_value',
                            'label' => 'Value',
                            'name' => 'feature_value',
                            'type' => 'text',
                        ),
                    ),
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'product_series',
                    ),
                ),
            ),
            'menu_order' => 0,
            'position' => 'normal',
            'style' => 'default',
        ));
        
        // Product Fields (Updated with Series relationship)
        acf_add_local_field_group(array(
            'key' => 'group_product_specifications',
            'title' => 'Product Specifications',
            'fields' => array(
                // Product Series Relationship
                array(
                    'key' => 'field_product_series',
                    'label' => 'Product Series',
                    'name' => 'product_series',
                    'type' => 'post_object',
                    'post_type' => array('product_series'),
                    'return_format' => 'object',
                    'ui' => 1,
                    'required' => 1,
                ),
                // Product Code
                array(
                    'key' => 'field_product_code',
                    'label' => 'Product Code',
                    'name' => 'product_code',
                    'type' => 'text',
                    'placeholder' => 'e.g., LED-REC-001-596-BK',
                ),
                // Build Type
                array(
                    'key' => 'field_build_type',
                    'label' => 'Build Type',
                    'name' => 'build_type',
                    'type' => 'select',
                    'choices' => array(
                        'recessed' => 'Recessed',
                        'surface' => 'Surface',
                        'pendant' => 'Pendant',
                        'track' => 'Track',
                    ),
                    'default_value' => 'recessed',
                    'ui' => 1,
                    'ajax' => 1,
                ),
                // Dimensions
                array(
                    'key' => 'field_dimensions',
                    'label' => 'Dimensions (mm)',
                    'name' => 'dimensions',
                    'type' => 'text',
                    'placeholder' => '596X596X13,5',
                    'prepend' => 'mm',
                ),
                // Frame Color
                array(
                    'key' => 'field_frame_color',
                    'label' => 'Frame Color',
                    'name' => 'frame_color',
                    'type' => 'select',
                    'choices' => array(
                        'black' => 'Black',
                        'white' => 'White',
                        'silver' => 'Silver',
                        'bronze' => 'Bronze',
                        'custom' => 'Custom',
                    ),
                    'default_value' => 'black',
                    'ui' => 1,
                ),
                // Optics
                array(
                    'key' => 'field_optics',
                    'label' => 'Optics',
                    'name' => 'optics',
                    'type' => 'text',
                    'placeholder' => 'OP',
                ),
                // CRI
                array(
                    'key' => 'field_cri',
                    'label' => 'CRI',
                    'name' => 'cri',
                    'type' => 'number',
                    'min' => 70,
                    'max' => 100,
                    'default_value' => 90,
                    'append' => 'CRI',
                ),
                // CCT
                array(
                    'key' => 'field_cct',
                    'label' => 'CCT',
                    'name' => 'cct',
                    'type' => 'select',
                    'choices' => array(
                        '2700' => '2700K (Warm White)',
                        '3000' => '3000K (Warm White)',
                        '4000' => '4000K (Neutral White)',
                        '5000' => '5000K (Cool White)',
                        '6500' => '6500K (Daylight)',
                    ),
                    'default_value' => '4000',
                    'ui' => 1,
                ),
                // Lumen Output
                array(
                    'key' => 'field_lumen_output',
                    'label' => 'Lumen Output',
                    'name' => 'lumen_output',
                    'type' => 'text',
                    'placeholder' => '3000 - 5500',
                    'append' => 'lm',
                ),
                // Power Supply Unit
                array(
                    'key' => 'field_power_supply_unit',
                    'label' => 'Power Supply Unit',
                    'name' => 'power_supply_unit',
                    'type' => 'select',
                    'choices' => array(
                        'dali' => 'DALI',
                        'dimmable' => 'Dimmable',
                        'non_dimmable' => 'Non-Dimmable',
                        'emergency' => 'Emergency',
                    ),
                    'default_value' => 'dali',
                    'ui' => 1,
                ),
                // Connectivity
                array(
                    'key' => 'field_connectivity',
                    'label' => 'Connectivity',
                    'name' => 'connectivity',
                    'type' => 'checkbox',
                    'choices' => array(
                        'bluetooth' => 'Bluetooth',
                        'wifi' => 'WiFi',
                        'zigbee' => 'Zigbee',
                        'wired' => 'Wired',
                    ),
                    'default_value' => array('bluetooth'),
                ),
                // Emergency Kit
                array(
                    'key' => 'field_emergency_kit',
                    'label' => 'Emergency Kit',
                    'name' => 'emergency_kit',
                    'type' => 'select',
                    'choices' => array(
                        '1_hour' => '1 Hour',
                        '2_hours' => '2 Hours',
                        '3_hours' => '3 Hours',
                        'none' => 'None',
                    ),
                    'default_value' => '1_hour',
                    'ui' => 1,
                ),
                // Protection Grade
                array(
                    'key' => 'field_protection_grade',
                    'label' => 'Protection Grade',
                    'name' => 'protection_grade',
                    'type' => 'select',
                    'choices' => array(
                        'ip20' => 'IP20',
                        'ip44' => 'IP44',
                        'ip54' => 'IP54',
                        'ip65' => 'IP65',
                        'ip67' => 'IP67',
                    ),
                    'default_value' => 'ip54',
                    'ui' => 1,
                ),
                // Accessories
                array(
                    'key' => 'field_accessories',
                    'label' => 'Accessories',
                    'name' => 'accessories',
                    'type' => 'checkbox',
                    'choices' => array(
                        'cable' => 'Cable',
                        'adaptor' => 'Adaptor',
                        'mounting_kit' => 'Mounting Kit',
                        'remote_control' => 'Remote Control',
                        'sensor' => 'Sensor',
                    ),
                    'default_value' => array('cable', 'adaptor'),
                ),
                // Price (for salesman)
                array(
                    'key' => 'field_product_price',
                    'label' => 'Price',
                    'name' => 'product_price',
                    'type' => 'number',
                    'min' => 0,
                    'step' => 0.01,
                    'prepend' => '$',
                ),
                // Stock Status
                array(
                    'key' => 'field_stock_status',
                    'label' => 'Stock Status',
                    'name' => 'stock_status',
                    'type' => 'select',
                    'choices' => array(
                        'in_stock' => 'In Stock',
                        'out_of_stock' => 'Out of Stock',
                        'on_order' => 'On Order',
                        'discontinued' => 'Discontinued',
                    ),
                    'default_value' => 'in_stock',
                    'ui' => 1,
                ),
                // Product Images Gallery
                array(
                    'key' => 'field_product_gallery',
                    'label' => 'Product Gallery',
                    'name' => 'product_gallery',
                    'type' => 'gallery',
                    'min' => 1,
                    'max' => 10,
                    'preview_size' => 'medium',
                    'library' => 'all',
                ),
                // Technical Documentation
                array(
                    'key' => 'field_technical_docs',
                    'label' => 'Technical Documentation',
                    'name' => 'technical_docs',
                    'type' => 'file',
                    'return_format' => 'array',
                    'library' => 'all',
                    'mime_types' => 'pdf,doc,docx',
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'custom_product',
                    ),
                ),
            ),
            'menu_order' => 0,
            'position' => 'normal',
            'style' => 'default',
            'label_placement' => 'top',
            'instruction_placement' => 'label',
        ));

        // Project Fields
        acf_add_local_field_group(array(
            'key' => 'group_project_fields',
            'title' => 'Project Details',
            'fields' => [
                [
                    'key' => 'field_project_description',
                    'label' => 'Description',
                    'name' => 'description',
                    'type' => 'wysiwyg',
                ],
                [
                    'key' => 'field_project_block_builder',
                    'label' => 'Block Builder Content',
                    'name' => 'block_builder_content',
                    'type' => 'flexible_content',
                    'layouts' => [
                        // Define layouts as desired, or leave empty for editor use
                    ],
                ],
                [
                    'key' => 'field_project_country',
                    'label' => 'Country',
                    'name' => 'country',
                    'type' => 'text',
                ],
                [
                    'key' => 'field_project_architect',
                    'label' => 'Architect',
                    'name' => 'architect',
                    'type' => 'text',
                ],
                [
                    'key' => 'field_project_lighting_design',
                    'label' => 'Lighting Design',
                    'name' => 'lighting_design',
                    'type' => 'text',
                ],
                [
                    'key' => 'field_project_photographer',
                    'label' => 'Photographer',
                    'name' => 'photographer',
                    'type' => 'text',
                ],
                [
                    'key' => 'field_project_applications',
                    'label' => 'Applications',
                    'name' => 'applications',
                    'type' => 'relationship',
                    'post_type' => ['application'],
                    'return_format' => 'object',
                    'multiple' => 1,
                ],
                [
                    'key' => 'field_project_product_series',
                    'label' => 'Product Series Used',
                    'name' => 'product_series_used',
                    'type' => 'relationship',
                    'post_type' => ['product_series'],
                    'return_format' => 'object',
                    'multiple' => 1,
                ],
            ],
            'location' => array(
                array(
                    array(
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'project',
                    ),
                ),
            ),
            'menu_order' => 0,
            'position' => 'normal',
            'style' => 'default',
            'label_placement' => 'top',
            'instruction_placement' => 'label',
        ));
    }
}
add_action('acf/init', 'register_acf_fields');

// Helper functions for hierarchical relationships
function get_product_hierarchy($product_id = null) {
    if (!$product_id) {
        global $post;
        $product_id = $post->ID;
    }
    
    $hierarchy = array();
    
    // Get Product Series
    $series = get_field('product_series', $product_id);
    if ($series) {
        $hierarchy['series'] = $series;
        
        // Get Application from Series
        $applications = get_field('series_application', $series->ID);
        if ($applications) {
            $hierarchy['applications'] = $applications;
        }
    }
    
    return $hierarchy;
}

function get_products_by_series($series_id) {
    $products = get_posts(array(
        'post_type' => 'custom_product',
        'meta_query' => array(
            array(
                'key' => 'product_series',
                'value' => $series_id,
                'compare' => '='
            )
        ),
        'posts_per_page' => -1,
        'orderby' => 'title',
        'order' => 'ASC'
    ));
    
    return $products;
}

function get_series_by_application($application_id) {
    $series = get_posts(array(
        'post_type' => 'product_series',
        'meta_query' => array(
            array(
                'key' => 'series_application',
                'value' => $application_id,
                'compare' => 'LIKE'
            )
        ),
        'posts_per_page' => -1,
        'orderby' => 'title',
        'order' => 'ASC'
    ));

    return $series;
}

function get_all_products_by_application($application_id) {
    $products = array();
    $series = get_series_by_application($application_id);
    
    foreach ($series as $serie) {
        $serie_products = get_products_by_series($serie->ID);
        $products = array_merge($products, $serie_products);
    }
    
    return $products;
}

function display_product_breadcrumb($product_id = null) {
    if (!$product_id) {
        global $post;
        $product_id = $post->ID;
    }
    
    $hierarchy = get_product_hierarchy($product_id);
    $breadcrumb = array();
    
    if (isset($hierarchy['application'])) {
        $breadcrumb[] = '<a href="' . get_permalink($hierarchy['application']->ID) . '">' . $hierarchy['application']->post_title . '</a>';
    }
    
    if (isset($hierarchy['series'])) {
        $breadcrumb[] = '<a href="' . get_permalink($hierarchy['series']->ID) . '">' . $hierarchy['series']->post_title . '</a>';
    }
    
    $breadcrumb[] = get_the_title($product_id);
    
    return '<nav class="product-breadcrumb">' . implode(' > ', $breadcrumb) . '</nav>';
}

function get_product_specifications($post_id = null) {
    if (!$post_id) {
        global $post;
        $post_id = $post->ID;
    }
    
    $specs = array();
    
    $fields = array(
        'product_code' => 'Product Code',
        'build_type' => 'Build Type',
        'dimensions' => 'Dimensions (mm)',
        'frame_color' => 'Frame Color',
        'optics' => 'Optics',
        'cri' => 'CRI',
        'cct' => 'CCT',
        'lumen_output' => 'Lumen Output',
        'power_supply_unit' => 'Power Supply Unit',
        'connectivity' => 'Connectivity',
        'emergency_kit' => 'Emergency Kit',
        'protection_grade' => 'Protection Grade',
        'accessories' => 'Accessories',
        'stock_status' => 'Stock Status',
    );
    
    foreach ($fields as $field => $label) {
        $value = get_field($field, $post_id);
        if ($value) {
            $specs[$field] = array(
                'label' => $label,
                'value' => $value
            );
        }
    }
    
    return $specs;
}

function display_product_specifications($post_id = null) {
    $specs = get_product_specifications($post_id);
    
    if (empty($specs)) {
        return '';
    }
    
    $output = '<div class="product-specifications">';
    $output .= '<h3>Product Specifications</h3>';
    $output .= '<table class="specs-table">';
    
    foreach ($specs as $field => $data) {
        $output .= '<tr>';
        $output .= '<th>' . esc_html($data['label']) . '</th>';
        
        if (is_array($data['value'])) {
            $output .= '<td>' . implode(', ', $data['value']) . '</td>';
        } else {
            $output .= '<td>' . esc_html($data['value']) . '</td>';
        }
        
        $output .= '</tr>';
    }
    
    $output .= '</table>';
    $output .= '</div>';
    
    return $output;
}

// Admin customizations
function add_custom_admin_columns() {
    // Products admin columns
    add_filter('manage_custom_product_posts_columns', 'product_admin_columns');
    add_action('manage_custom_product_posts_custom_column', 'product_admin_column_content', 10, 2);
    
    // Product Series admin columns
    add_filter('manage_product_series_posts_columns', 'product_series_admin_columns');
    add_action('manage_product_series_posts_custom_column', 'product_series_admin_column_content', 10, 2);
    
    // Applications admin columns
    add_filter('manage_application_posts_columns', 'application_admin_columns');
    add_action('manage_application_posts_custom_column', 'application_admin_column_content', 10, 2);
}
add_action('init', 'add_custom_admin_columns');

function product_admin_columns($columns) {
    $columns['product_series'] = 'Product Series';
    $columns['application'] = 'Application';
    $columns['product_code'] = 'Product Code';
    $columns['price'] = 'Price';
    $columns['stock_status'] = 'Stock Status';
    return $columns;
}

function product_admin_column_content($column, $post_id) {
    switch ($column) {
        case 'product_series':
            $series = get_field('product_series', $post_id);
            if ($series) {
                echo '<a href="' . get_edit_post_link($series->ID) . '">' . $series->post_title . '</a>';
            }
            break;
        case 'application':
            $hierarchy = get_product_hierarchy($post_id);
            if (isset($hierarchy['applications'])) {
                foreach ($hierarchy['applications'] as $application) {
                    echo '<a href="' . get_edit_post_link($application->ID) . '">' . $application->post_title . '</a>, ';
                }
            }
            break;
        case 'product_code':
            echo get_field('product_code', $post_id);
            break;
        case 'price':
            $price = get_field('product_price', $post_id);
            echo $price ? number_format($price, 2) : '-';
            break;
        case 'stock_status':
            $status = get_field('stock_status', $post_id);
            $status_labels = array(
                'in_stock' => 'In Stock',
                'out_of_stock' => 'Out of Stock',
                'on_order' => 'On Order',
                'discontinued' => 'Discontinued'
            );
            echo isset($status_labels[$status]) ? $status_labels[$status] : $status;
            break;
    }
}

function product_series_admin_columns($columns) {
    $columns['application'] = 'Application';
    $columns['series_code'] = 'Series Code';
    $columns['product_count'] = 'Products';
    return $columns;
}

function product_series_admin_column_content($column, $post_id) {
    switch ($column) {
        case 'application':
            $applications = get_field('series_application', $post_id);
            if ($applications) {
                foreach ($applications as $application) {
                    echo '<a href="' . get_edit_post_link($application->ID) . '">' . $application->post_title . '</a>,  ';
                }
            }
            break;
        case 'series_code':
            echo get_field('series_code', $post_id);
            break;
        case 'product_count':
            $products = get_products_by_series($post_id);
            echo count($products);
            break;
    }
}

function application_admin_columns($columns) {
    $columns['series_count'] = 'Series';
    $columns['product_count'] = 'Products';
    return $columns;
}

function application_admin_column_content($column, $post_id) {
    switch ($column) {
        case 'series_count':
            $series = get_series_by_application($post_id);
            echo count($series);
            break;
        case 'product_count':
            $products = get_all_products_by_application($post_id);
            echo count($products);
            break;
    }
}

// Add custom admin menu organization
function organize_admin_menu() {
    add_menu_page(
        'Product Catalog',
        'Product Catalog',
        'manage_options',
        'product-catalog',
        '',
        'dashicons-grid-view',
        3
    );
    
    add_submenu_page(
        'product-catalog',
        'Applications',
        'Applications',
        'manage_options',
        'edit.php?post_type=application'
    );
    
    add_submenu_page(
        'product-catalog',
        'Product Series',
        'Product Series',
        'manage_options',
        'edit.php?post_type=product_series'
    );
    
    add_submenu_page(
        'product-catalog',
        'Products',
        'Products',
        'manage_options',
        'edit.php?post_type=custom_product'
    );
}
add_action('admin_menu', 'organize_admin_menu');

// Add custom user roles for salesman
function add_salesman_role() {
    add_role('salesman', 'Salesman', array(
        'read' => true,
        'view_prices' => true,
        'access_catalog' => true,
        'read_private_posts' => true,
        'read_private_pages' => true,
    ));
}
add_action('init', 'add_salesman_role');

// Price visibility functions
function can_view_prices($user_id = null) {
    if (!$user_id) {
        $user_id = get_current_user_id();
    }
    
    if (!$user_id) {
        return false;
    }
    
    $user = get_user_by('id', $user_id);
    return $user && (in_array('salesman', $user->roles) || in_array('administrator', $user->roles));
}

function display_product_price($product_id = null) {
    if (!$product_id) {
        global $post;
        $product_id = $post->ID;
    }
    
    if (!can_view_prices()) {
        return '<div class="price-login-required">
                    <p>Please <a href="' . wp_login_url() . '">log in</a> to view prices</p>
                </div>';
    }
    
    $price = get_field('product_price', $product_id);
    if ($price) {
        return '<div class="product-price">
                    <span class="price-label">Price:</span>
                    <span class="price-value">' . number_format($price, 2) . '</span>
                </div>';
    }
    
    return '<div class="price-contact">
                <p>Contact for pricing</p>
            </div>';
}

// Search functionality
function extend_search_to_custom_fields($query) {
    if (!is_admin() && $query->is_main_query() && $query->is_search()) {
        $query->set('post_type', array('custom_product', 'product_series', 'application'));
        
        // Add meta query for custom fields
        $meta_query = array(
            'relation' => 'OR',
            array(
                'key' => 'product_code',
                'value' => $query->get('s'),
                'compare' => 'LIKE'
            ),
            array(
                'key' => 'series_code',
                'value' => $query->get('s'),
                'compare' => 'LIKE'
            ),
            array(
                'key' => 'dimensions',
                'value' => $query->get('s'),
                'compare' => 'LIKE'
            ),
        );
        
        $query->set('meta_query', $meta_query);
    }
}
add_action('pre_get_posts', 'extend_search_to_custom_fields');

// Flush rewrite rules on activation
function flush_rewrite_rules_on_activation() {
    create_application_post_type();
    create_product_series_post_type();
    create_product_post_type();
    create_product_taxonomies();
    add_salesman_role();
    flush_rewrite_rules();
}
register_activation_hook(__FILE__, 'flush_rewrite_rules_on_activation');
?>