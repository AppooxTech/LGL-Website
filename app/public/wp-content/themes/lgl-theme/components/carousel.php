<?php 
    $contents = [];

    if(isset($args) && isset($contents)){
        $contets = $args['contents'];
    }
?>

<div class="carousel-container">
    <?php foreach($contets as $content): ?>
    <div class="carousel-view">
        <button class="carousel-btn">
            <img src="<?php echo get_template_directory_uri(); ?>/images/icons/icons8-chevron-left-50" alt="left">
        </button>
        <div class="carousel-content">
            <div class="content-description-container">
                <h2 class="content-description-heade"><?php $content['name'] ?></h2>
                <p class="content-description-body"><?php $content['description']; ?></p>
            </div>
            <div class="content-image-container">
                <img src="<? echo $content['image']; ?>" alt="Header">
            </div>
        </div>
        <button class="carousel-btn">
            <img src="<?php echo get_template_directory_uri(); ?>/images/icons/icons8-chevron-right-50" alt="right">
        </button>
    </div>
    <?php endforeach; ?>
</div>