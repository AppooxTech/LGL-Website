
<?php
    get_header();
    
    if (have_posts()) :
        while (have_posts()) : the_post();
           // Your code here

 ?>
 <section class="container">
    
    
    <?php 

    $topic = get_the_title();
    $tags = get_the_tags();
    $author = get_the_author();
    $content = get_the_content();
    ?>
    <title><?php echo $topic ?></title>
    <section class="blog-topic">
        <h1> <?php echo $topic ?></h1>
        <div class="sub-topic-info">
            <time>26th Oct 2023</time>
            <p>Author: <?php echo $author ?></p>
            <p>Tags: </p>
            <tags>
                <?php 
                $tags_count = count($tags);
                foreach ($tags as $index => $tag) {
                    echo $tag->name;
                    if ($index < $tags_count - 1) {
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
            $related_blogs = new WP_Query(array( 'tag' => "announcement" ))

         ?>

        <div class="related-blog-container">
            <?php 
                if ($related_blogs->have_posts()) {
                    while ($related_blogs->have_posts()) {
                        $related_blogs->the_post();
                        if (get_the_title() != $topic){
                            ?>
                                <div class="related-blogs">
                                    <h2><?php echo get_the_title(); ?></h2>
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