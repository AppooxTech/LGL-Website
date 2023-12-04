
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
    $tags_filter = "";

    $dom = new DOMDocument;
    libxml_use_internal_errors(true);
    $dom->loadHTML(mb_convert_encoding($content, 'HTML-ENTITIES', 'UTF-8'), LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
    libxml_clear_errors();
    // $images = $dom->getElementsByTagName('img');
    // $paragraphs = $dom->getElementsByTagName('p');

    $images = $dom->getElementsByTagName('img');
    $figures = $dom->getElementsByTagName('figure');
    if ($images->length > 0) {
        $firstImage = $images->item(0);
        $firstFigure = $figures->item(0);
        // Get existing classes
        $existingClasses = $firstImage->getAttribute('class');
        // Append new class 'cover-img'
        $newClasses = $existingClasses . ' cover-img';
        $firstImage->setAttribute('class', $newClasses);
        $firstImage->parentNode->removeChild($firstImage);
        $firstFigure->parentNode->removeChild($firstFigure);

    }

    $modifiedContent = $dom->saveHTML();

    ?>
    <title><?php echo $topic ?></title>
    <section class="blog-topic">
        <div><?php echo $dom->saveHTML($firstImage); ?></div>
        
        <h1> <?php echo $topic ?></h1>
        <div class="sub-topic-info">
            <time><?php echo $post_date ?></time>
            <p class="rmv-margin">Author: <?php echo $author ?></p>
            <p class="rmv-margin">Tags: 
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
            </p>
            
        </div>
    </section>

    <section class="blog-body">
    
        <div class="content-container">
            <?php 
            
            // Display text
            echo '<p>' . $modifiedContent . '</p>';
            ?>
        </div>
    </section>
        <?php 
            $related_blogs = new WP_Query(array( 'tag' => $tags_filter ))

         ?>

        <div class="related-blog-container">
            <div>
                <p class="related-blogs-title">Related Blogs</p>
            </div>
            <div class= "related-blog-content">
            <?php 
                $related_counter= 0;
                if ($related_blogs->have_posts()) {
                    while ($related_blogs->have_posts()) {
                        $related_counter++;
                        $related_blogs->the_post();
                        if (get_the_title() != $topic && $related_counter < 3){
                            $sub_content = get_the_content();
                            $dom = new DOMDocument;
                            libxml_use_internal_errors(true);
                            $dom->loadHTML($sub_content);
                            libxml_clear_errors();
                            $images = $dom->getElementsByTagName('img');
                            $paragraphs = $dom->getElementsByTagName('p');
                            ?>
                            <a class="related-blogs" href="<?php echo get_permalink(); ?>">
                                
                            
                                <div class="relate-blogs-img">
                                    <?php echo $dom->saveHTML($images->item(0)); ?>
                                </div>
                                
                                <div class="related-blogs-details">
                                    <h2 class="details"><?php echo get_the_title(); ?></h2>
                                    <tags>
                                    <?php 
                                        $tags = get_the_tags();
                                        $tags_count = count($tags);
                                        foreach ($tags as $index => $tag) {
                                            echo $tag->name;
                                            if ($index < $tags_count - 1) {
                                                echo ', ';
                                            }
                                        }
                                    ?>
                                    </tags>
                                    <div class="date-author">
                                        <p class="details"><?php echo get_the_time('jS M Y'); ?></p>
                                        <p class="details"> <?php echo get_the_author(); ?></p>
                                    </div>
                                </div>

                                
                            </a>
                            <?php 
                        }
                    }
                }
             ?>
        </div>
        </div>

    
</section>
<?php
        endwhile;
    endif;
    get_footer();
 ?>