<?php
    get_header();
    // if (have_posts()) :
    //     while (have_posts()) : the_post();

    $tags = get_tags();

    // Display tags as a horizontal bar
    echo '<div class="blog-list-container">';
    echo '<div class="tags-bar">';
    echo '<p class="tag-title"> Tags: </p>';
    echo '<a href="#" class="tag-filter" data-tag="all">All</a>';
    foreach ($tags as $tag) {
        $tag_link = get_tag_link($tag->term_id);
        echo '<a href="#" class="tag-filter" data-tag="' . esc_attr($tag->slug) . '">' . $tag->name . '</a>';
    }
    echo '</div>';
    ?>
    
    <div id="blog-posts-container" class="blog-posts-container">
        <?php
        // The Query for blog posts without tag filter
        $args = array(
            'category_name' => 'blog',
            'post_type' => 'post',
            'posts_per_page' => -1,
        );
    
        $blog_query = new WP_Query($args);
    
        // The Loop
        if ($blog_query->have_posts()) {
            while ($blog_query->have_posts()) {
                $blog_query->the_post();
                $content = get_the_content();
                $dom = new DOMDocument;
                $permalink = get_the_permalink();
                libxml_use_internal_errors(true);
                $dom->loadHTML($content);
                libxml_clear_errors();
                $images = $dom->getElementsByTagName('img');
                $paragraphs = $dom->getElementsByTagName('p');
                $tags = get_the_tags();
                ?>
                <a class="blog-item" href="<?php echo $permalink ?>">
                    <?php echo $dom->saveHTML($images->item(0)); ?>
                    
                    <div class="blog-item-text">
                        <h1><?php the_title(); ?></h1>
                        <p><?php the_excerpt() ?></p>

                        <div class="blog-item-details">
                            
                            <date><?php the_time('jS M Y'); ?></date>
                            <tags>
                                <?php 
                                $tags_count = count($tags);
                                foreach ($tags as $index => $tag) {
                                    echo $tag->name;
                                    if ($index < $tags_count - 1) {
                                        echo ', ';
                                    };
                                };
                                ?>
                            </tags>
                        </div>
                        
                        
                    </div>
                </a>
                <?php
            }
            /* Restore original Post Data */
            wp_reset_postdata();
        } else {
            // No posts found
            echo 'No posts found';
        }
        ?>
    </div>
    
    <script>
jQuery(document).ready(function ($) {
    $('.tag-filter').on('click', function (e) {
        e.preventDefault();
        var tag = $(this).data('tag');

        $.ajax({
            type: 'POST',
            url: '<?php echo admin_url('admin-ajax.php'); ?>',
            data: {
                action: 'filter_posts',
                tag: tag,
            },
            success: function (response) {
                if (tag === 'all') {
                    // Show all blog posts
                    $('#blog-posts-container').html(response.all);
                } else {
                    // Show filtered blog posts
                    $('#blog-posts-container').html(response.filtered);
                }
            },
        });
    });
});
</script>
  

 

<?php
echo '</div>';
    get_footer();

 ?>