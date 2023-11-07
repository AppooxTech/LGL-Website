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
    <div class="container input <?php echo $half_size ? "half" : "full"; ?>">
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

<style>
    div.container {
        display: flex;
        transition: all 150ms linear;
        padding-left: 12px;
        max-width: 400px;
        min-width: 200px;
        outline: 2px solid var(--grey);
    }

    div.input {
        height: 50px;
        align-items: center;
    }

    div.full {
        width: 400px;
    }

    div.half {
        width: 200px;
    }

    div.textarea {
        aspect-ratio: square;
        min-height: 400px;
        align-items: start;
        padding-top: 10px;
        padding-bottom: 10px;
        padding-right: 12px;
        word-wrap: break-word;
    }

    div.focused {
        outline: 4px solid var(--dark-grey);
    }

    input#custom-input,
    textarea#custom-input {
        appearance: none;
        border: none;
        visibility: none;
        width: 100%;
        caret-color: var(--dark-grey);
    }

    input#custom-input {
        height: 90%;
    }

    textarea#custom-input {
        height: 100%;
        resize: none;
    }

    input#custom-input:focus,
    textarea#custom-input:focus {
        caret-shape: underscore;
        caret-color: var(--primary);
        border: none;
        outline: none;
        appearance: none;
        font-size: medium;
    }

    input#custom-input::placeholder,
    textarea#custom-input::placeholder {
        color: var(--light-grey);
        font-weight: 700;
        transition: all 100ms linear;
        font-size: medium;
    }
</style>