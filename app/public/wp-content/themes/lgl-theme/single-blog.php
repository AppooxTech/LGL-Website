
<?php
    get_header();
    
    if (have_posts()) :
        while (have_posts()) : the_post();
           // Your code here

 ?>
 <section class="container">
    
    
    <?php 
    $post_date = get_the_time('jS M Y');
    $topic = get_the_title();
    $tags = get_the_tags();
    $author = get_the_author();
    $content = get_the_content();
    $tags_filter = ""
    ?>
    <title><?php echo $topic ?></title>
    <section class="blog-topic">
        <h1> <?php echo $topic ?></h1>
        <div class="sub-topic-info">
            <time><?php echo $post_date ?></time>
            <p>Author: <?php echo $author ?></p>
            <p>Tags: </p>
            <tags>
                <?php 
                $tags_count = count($tags);
                foreach ($tags as $index => $tag) {
                    echo $tag->name;
                    $tags_filter .= $tag->name;
                    if ($index < $tags_count - 1) {
                        $tags_filter .= ",";
                        echo ', ';
                    }
                }
                 ?>
            </tags>
            
        </div>
    </section>

    <section class="blog-body">
    
        <div class="content-container">
            <?php 
            // Extract image URLs
            $imageUrls = [];
            preg_match_all('/<img src="([^"]*)" alt="([^"]*)" \/>/', $content, $matches);
            foreach ($matches[1] as $imageUrl) {
                $imageUrl = '<img src="' . $imageUrl . '" alt="" />';
                array_push($imageUrls, $imageUrl);
            }
            
            // Extract text content
            $textContent = preg_replace('/<img src="([^"]*)" alt="([^"]*)" \/>/', '', $content);
            
            // Display images
            foreach ($imageUrls as $imageUrl) {
                echo $imageUrl;
            }
            
            // Display text
            echo '<p>' . $textContent . '</p>';
            ?>
        </div>

        <?php 
            $related_blogs = new WP_Query(array( 'tag' => $tags_filter ))

         ?>

        <div class="related-blog-container">
            <?php 
                $related_counter= 0;
                if ($related_blogs->have_posts()) {
                    while ($related_blogs->have_posts()) {
                        $related_counter++;
                        $related_blogs->the_post();
                        if (get_the_title() != $topic && $related_counter < 5){
                            ?>
                                <div class="related-blogs">
                                    <h2><?php echo get_the_title(); ?></h2>
                                    <div class="date-author">
                                        <p><?php echo get_the_time('jS M Y'); ?></p>
                                        <p><?php echo get_the_author(); ?></p>
                                        <p><?php echo $tags_filter ?></p>
                                    </div>

                                </div>
                                
                            <?php 
                        }
                    }
                }
             ?>
        </div>

    </section>
</section>
<?php
        endwhile;
    endif;
    get_footer();
 ?>