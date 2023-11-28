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
        wp_enqueue_style('custom-button-styles', get_template_directory_uri() . '/CSS/custom-components/custom-button.css');
        wp_enqueue_style('custom-input-styles', get_template_directory_uri() . '/CSS/custom-components/custom-input.css');
        wp_enqueue_style('custom-carousel-styles', get_template_directory_uri() . '/CSS/custom-components/custom-carousel.css');
    }
}

add_filter('single_template', 'custom_single_template');
add_action('wp_enqueue_scripts','add_custom_components_css');





add_action('wp_enqueue_scripts', 'enqueue_header_css');
add_action('wp_enqueue_scripts', 'enqueue_footer_css', 999);
add_action('wp_enqueue_scripts', 'enqueue_specific_css');
add_action('wp_enqueue_scripts', 'enqueue_front_page_css');
add_action( 'wp_enqueue_scripts', 'products_css' );
// add_action('wp_enqueue_scripts', 'add_global_css');


function enqueue_jquery() {
    wp_enqueue_script('jquery');
}

function filter_posts() {
    $tag = isset($_POST['tag']) ? sanitize_text_field($_POST['tag']) : '';

    $args_all = array(
        'category_name' => 'blog',
        'post_type' => 'post',
        'posts_per_page' => -1,
    );

    $args_filtered = array(
        'category_name' => 'blog',
        'tag' => $tag,
        'post_type' => 'post',
        'posts_per_page' => -1,
    );

    $all_blogs_query = new WP_Query($args_all);
    $filtered_blogs_query = new WP_Query($args_filtered);

    ob_start();

    // Show all blog posts
    if ($all_blogs_query->have_posts()) {
        while ($all_blogs_query->have_posts()) {
            $all_blogs_query->the_post();
            $content = get_the_content();
            $dom = new DOMDocument;
            libxml_use_internal_errors(true);
            $dom->loadHTML($content);
            libxml_clear_errors();
            $images = $dom->getElementsByTagName('img');
            $paragraphs = $dom->getElementsByTagName('p');
            ?>
                <a class="blog-item" href="<?php echo $permalink ?>">
                    <?php echo $dom->saveHTML($images->item(0)); ?>
                    
                    <div class="blog-item-text">
                        <h1><?php the_title(); ?></h1>
                        <p><?php the_excerpt() ?></p>
                        
                        <div class="blog-item-details">
                            
                            <date><?php the_time('jS M Y'); ?></date>
                            <p>By: <?php the_author(); ?></p>
                        </div>
                        
                        
                    </div>
                </a>
            <?php
        }
        wp_reset_postdata();
    } else {
        echo 'No posts found';
    }

    $all_content = ob_get_clean();
    ob_start();

    // Show filtered blog posts
    if ($filtered_blogs_query->have_posts()) {
        while ($filtered_blogs_query->have_posts()) {
            $filtered_blogs_query->the_post();
            $content = get_the_content();
            $dom = new DOMDocument;
            libxml_use_internal_errors(true);
            $dom->loadHTML($content);
            libxml_clear_errors();
            $images = $dom->getElementsByTagName('img');
            $paragraphs = $dom->getElementsByTagName('p');
            ?>
                <a class="blog-item" href="<?php echo $permalink ?>">
                    <?php echo $dom->saveHTML($images->item(0)); ?>
                    
                    <div class="blog-item-text">
                        <h1><?php the_title(); ?></h1>
                        <p><?php the_excerpt() ?></p>
                        
                        <div class="blog-item-details">
                            
                            <date><?php the_time('jS M Y'); ?></date>
                            <p>By: <?php the_author(); ?></p>
                        </div>
                        
                        
                    </div>
                </a>
            <?php
        }
        wp_reset_postdata();
    } else {
        echo 'No posts found';
    }

    $filtered_content = ob_get_clean();

    wp_send_json(array('all' => $all_content, 'filtered' => $filtered_content));
}


add_action('wp_ajax_filter_posts', 'filter_posts');
add_action('wp_ajax_nopriv_filter_posts', 'filter_posts');


add_action('wp_enqueue_scripts', 'enqueue_jquery');
add_action('wp_ajax_filter_posts', 'filter_posts');
add_action('wp_ajax_nopriv_filter_posts', 'filter_posts');


