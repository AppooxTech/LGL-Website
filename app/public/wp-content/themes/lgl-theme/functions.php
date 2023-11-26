<?php

function enqueue_front_page_css()
{
    if (is_front_page()) {
        wp_enqueue_style('front-page-style', get_template_directory_uri() . '/CSS/front-page.css');
    }
}

function enqueue_header_css()
{
    wp_enqueue_style('header-style', get_template_directory_uri() . '/CSS/header.css');
}

function enqueue_footer_css()
{
    wp_enqueue_style('footer-style', get_template_directory_uri() . '/CSS/footer.css');
}

function custom_single_template($single_template)
{
    if (in_category('blog')) {
        // For posts in the "Blog" category, use single-blog.php
        return locate_template('single-blog.php');
    } elseif (in_category('product')) {
        // For posts in the "Product" category, use single-product.php
        return locate_template('single-product.php');
    } elseif (in_category('software')) {
        // For posts in the "Product" category, use single-product.php
        return locate_template('single-software.php');
    }
    return $single_template; // For other posts, use the default single.php
}

function enqueue_specific_css()
{
    if (is_page('products-page')) {
        wp_enqueue_style('products-style', get_template_directory_uri() . '/CSS/products.css');
    } elseif (is_home()) {
        wp_enqueue_style('blogs-styles', get_template_directory_uri() . '/CSS/blog-list.css');
    } elseif (is_page('software-page')) {
        wp_enqueue_style('software-styles', get_template_directory_uri() . '/CSS/software.css');
    } elseif (is_page('contact-us-page')) {
        wp_enqueue_style('contact-us-styles', get_template_directory_uri() . '/CSS/contact-us.css');
    }

    if(in_category('blog')) {
        wp_enqueue_style('products-style', get_template_directory_uri() . '/CSS/blog-view.css');
    }
    // elseif(in_category('product')){
    //     wp_enqueue_style('products-style', get_template_directory_uri() . '/CSS/products.css');
    // }
    // Add more conditions for other pages as needed
}


function add_global_css()
{
    wp_enqueue_style('global-css', get_template_directory_uri() . './style.css');
}

function products_css() {
    if ( in_category('product')) {
        wp_enqueue_style('product-styles', get_template_directory_uri() . '/CSS/products.css');
    }
}

add_filter('single_template', 'custom_single_template');
add_action('wp_enqueue_scripts', 'enqueue_specific_css');
add_action('wp_enqueue_scripts', 'enqueue_front_page_css');
add_action('wp_enqueue_scripts', 'enqueue_header_css');
add_action('wp_enqueue_scripts', 'enqueue_footer_css', 999);
add_filter('single_template', 'custom_single_template');
add_action('wp_enqueue_scripts', 'enqueue_specific_css');
add_action('wp_enqueue_scripts', 'enqueue_front_page_css');
add_action( 'wp_enqueue_scripts', 'products_css' );
// add_action('wp_enqueue_scripts', 'add_global_css');


function enqueue_jquery() {
    wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts', 'enqueue_jquery');


function filter_posts() {
    $tag = isset($_POST['tag']) ? sanitize_text_field($_POST['tag']) : '';

    $args = array(
        'category_name' => 'blog',
        'tag' => $tag,
        'post_type' => 'post',
        'posts_per_page' => -1,
    );

    $blog_query = new WP_Query($args);

    // The Loop
    if ($blog_query->have_posts()) {
        while ($blog_query->have_posts()) {
            $blog_query->the_post();
            ?>
            <div class="blog-post">
                <h2><?php the_title(); ?></h2>
                <div class="post-content">
                    <?php the_content(); ?>
                </div>
            </div>
            <?php
        }
        /* Restore original Post Data */
        wp_reset_postdata();
    } else {
        // No posts found
        echo 'No posts found';
    }

    die();
}

add_action('wp_ajax_filter_posts', 'filter_posts');
add_action('wp_ajax_nopriv_filter_posts', 'filter_posts');