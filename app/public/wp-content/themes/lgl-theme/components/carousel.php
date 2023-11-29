<?php
$contents = [];

if (isset($args) && isset($contents)) {
    $contets = $args['contents'];
}
?>

<div class="carousel-container">
    <?php foreach ($contets as $content): ?>
        <button class="carousel-btn">
            <img src="<?php echo get_template_directory_uri(); ?>/images/icons/icons8-chevron-left-50.png" alt="left">
        </button>
        <div class="carousel-view">
            <div class="carousel-contents-container">
                <div class="carousel-single-content-container">
                    <div class="carousel-content-description-container">
                        <h2 class="carousel-content-description-header">
                            <?php echo esc_html($content['name']); ?>
                        </h2>
                        <p class="carousel-content-description-body">
                            <?php echo esc_html($content['description']); ?>
                        </p>
                        <?php get_template_part('components/button', 'carousel_content_button', ['button_txt' => 'View Product', 'custom_class' => 'carousel-content-button']); ?>
                    </div>
                    <div class="carousel-content-image-container">
                        <img src="<? echo $content['image']; ?>" alt="Header">
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-btn">
            <img src="<?php echo get_template_directory_uri(); ?>/images/icons/icons8-chevron-right-50.png" alt="right">
        </button>
    <?php endforeach; ?>
</div>