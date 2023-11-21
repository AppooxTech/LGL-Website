<?php
$contents = [];
$button_txt = 'text';

if (isset($args)) {
    if (isset($args['button_txt'])) {
        $button_text = $args['button_txt'];
    }
    if (isset($args['contents'])) {
        $contents = $args['contents'];
    }
}
?>

<div class="carousel-container">
    <?php foreach ($contents as $content_object) : ?>
        <button class="carousel-btn" role="button">
            <img src="<?php echo get_template_directory_uri(); ?>/images/icons/left-chevron.png" alt="left">
        </button>
        <div class="content-container">
            <div class="left-content-container">
                <h1 class="content-header">
                    <?php echo $content_object['header']; ?>
                </h1>
                <p class="content-description">
                    <?php echo $content_object['description']; ?>
                </p>
                <?php get_template_part("components/button", "", ["button_txt" => "$button_txt"]); ?>
            </div>
            <div class="right-content-container content-image-container" hidden="false">
                <div class='content-image' hidden="false" ></div>
            </div>
        </div>
        <button class="carousel-btn" role="button">
            <img src="<?php echo get_template_directory_uri() ?>/images/icons/right-chevron.png" alt="right">
        </button>
    <?php endforeach; ?>
</div>