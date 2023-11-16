
<?php
    get_header();
 ?>
 <section class="container">
    
    
    <?php 
    $content = get_the_content();
    
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