<?php
$place_holder = 'place holder';
$type = 'input';
$half_size = true;

if (isset($args)) {
    if (isset($args['place_holder'])) {
        $place_holder = $args['place_holder'];
    }
    if (isset($args['type'])) {
        $type = $args['type'];
    }
    if (isset($args['half_size'])) {
        $half_size = $args['half_size'];
    }
}
?>

<?php if ($type === 'search') : ?>
    <div class="custom-input-container input <?php echo $half_size ? "half" : "full"; ?>">
        <input id="custom-input" style="width: 90%;" onfocus="on_focus()" onblur="on_blur()" placeholder="<?php echo $place_holder ?>" type="input">
        <img src="<?php echo get_template_directory_uri(); ?>/images/icons/icons8-search-50.png" alt="search-icon" width="30" role="button">
    </div>
<?php elseif ($type === 'input') : ?>
    <div class="input container <?php echo $half_size ? "half" : "full"; ?>">
        <input id="custom-input" onfocus="on_focus()" onblur="on_blur()" placeholder="<?php echo $place_holder ?>" type="input">
    </div>
<?php elseif ($type === 'textarea') : ?>
    <div class="textarea container">
        <textarea id="custom-input" cols="30" rows="10" placeholder="<?php echo $place_holder ?>" onfocus="on_focus()" onblur="on_blur()"></textarea>
    </div>
<?php endif; ?>

<script>
    const input = document.getElementById('custom-input');

    function on_focus() {
        input.parentElement.classList.add('focused');
    }

    function on_blur() {
        input.parentElement.classList.remove('focused');
    }
</script>