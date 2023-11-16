
<?php
    get_header();
 ?>
 <section class="container">
    
    
    <?php 

    $topic = get_the_title();
    $content = get_the_content();
    ?>
    <title><?php echo $topic ?></title>
    <section class="blog-topic">
        
        <h1><?php echo $topic ?></h1>
        <!-- <div class="sub-info">
            <time></time>
        </div> -->
    </section>
    
    
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

</section>
<?php
    get_footer();
 ?>