<?php
$contents = [];

if (isset($args) && isset($contents)) {
    $contents = $args['contents'];
}
?>

<div class="carousel-container">
    <button class="carousel-btn" onclick="scroll_view('left');">
        <img src="<?php echo get_template_directory_uri(); ?>/images/icons/icons8-chevron-left-50.png" alt="left">
    </button>
    <div id="carousel-view">
        <?php foreach ($contents as $content): ?>
            <div class="carousel-single-content-container">
                <div class="carousel-content-description-container">
                    <h2 class="carousel-content-description-header">
                        <?php echo esc_html($content['name']); ?>
                    </h2>
                    <p class="carousel-content-description-body">
                        <?php echo esc_html($content['description']); ?>
                    </p>
                    <div class="content-btn-container">
                        <?php get_template_part('components/button', 'carousel_content_button', ['button_txt' => 'View Product', 'custom_class' => 'carousel-content-button']); ?>
                    </div>
                </div>
                <div class="carousel-content-image-container">
                    <img src="<? echo $content['image']; ?>" alt="Header">
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <button class="carousel-btn" onclick="scroll_view('right');">
        <img src="<?php echo get_template_directory_uri(); ?>/images/icons/icons8-chevron-right-50.png" alt="right">
    </button>
</div>

<script>
    const carousel_view = document.getElementById('carousel-view');

    const scroll_view = (scroll_direction) => {
        // Increase the scroll amount for better visibility
        const scrollAmount = 10; // Adjust this value as needed

        if (scroll_direction === 'left') {
            carousel_view.scrollBy(-1000, 0);
        } else if (scroll_direction === 'right') {
            carousel_view.scrollBy(scrollAmount, 0);
        }
    }
</script>