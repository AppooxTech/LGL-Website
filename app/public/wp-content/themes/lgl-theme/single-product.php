<?php
    get_header();
    if (have_posts()) :
        while (have_posts()) : the_post();
 ?>   
 <div class="root-container">
            <?php 
            // $content = get_the_content();
            // // Extract image URLs
            // $imageUrls = [];
            // preg_match_all('/<img src="([^"]*)" alt="([^"]*)" \/>/', $content, $matches);
            // foreach ($matches[1] as $imageUrl) {
            //     $imageUrl = '<img src="' . $imageUrl . '" alt="" />';
            //     array_push($imageUrls, $imageUrl);
            // }
            
            // // Extract text content
            // $textContent = preg_replace('/<img src="([^"]*)" alt="([^"]*)" \/>/', '', $content);
            
            // // Display images
            // foreach ($imageUrls as $imageUrl) {
            //     echo $imageUrl;
            // }
            
            // // Display text
            // echo '<p>' . $textContent . '</p>';


            $content = get_the_content();
            $dom = new DOMDocument;
            libxml_use_internal_errors(true);
            $dom->loadHTML($content);
            libxml_clear_errors();
        
            $images = $dom->getElementsByTagName('img');
            $paragraphs = $dom->getElementsByTagName('p');
        
            // Display the very first image without a pairing
            if ($images->length > 0) {
                echo '<div class="main-image">';
                echo $dom->saveHTML($images->item(0));
                echo '</div>';
            }
        
            // Display the very first <p> tag without a pairing
            if ($paragraphs->length > 0) {
                echo '<div class="product-description-container">';
                echo $dom->saveHTML($paragraphs->item(0));
                echo '</div>';
            }
            
            // For loop to loop through the images and paragraphs to display them in the correct format
            for ($index = 1; $index < min($images->length, $paragraphs->length); $index++) {
                // Determine odd or even class for the container div
                $sectionClass = ($index % 2 === 0) ? 'even-section' : 'odd-section';
                $side = ($index % 2 === 0) ? 'even' : 'odd';
        
                // Create a new div container for each image and text pair
                echo '<div class="image-text-container ' . $side. '-section' . '">';
        
                // Display the image without a div for the first image
                echo '<div class="'.$side.'-section-img">';
                echo $dom->saveHTML($images->item($index));
                echo '</div>'; // Close image-container
        
                // Display the text within a div
                echo '<div class="'.$side.'-section-text">';
                // If there is a corresponding <p>, display it
                echo $dom->saveHTML($paragraphs->item($index));
                echo '</div>'; // Close text-container
        
                echo '</div>'; // Close image-text-container
            }
    
            ?>
    </div>
    
    <?php //the_content(); ?>

<?php
        endwhile;
    endif;
    get_footer();
 ?>