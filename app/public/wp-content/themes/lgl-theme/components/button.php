<?php
// include('C:\Users\kurosh\Local Sites\LGL-Website\app\public\wp-content\themes\lgl-theme\components\utils\random_hex_generator.php
$button_txt = 'Button';
$on_click = null;
$custom_class = '';
$button_id = generate_random_hex();

if(isset($args)) {
    if(isset($args['button_txt'])) {
        $button_txt = $args['button_txt'];
    }
    if(isset($args['on_click'])) {
        $on_click = $args['on_click'];
    }
    if(isset($args['custom_class'])) {
        $custom_class = $args['custom_class'];
    }
}
?>

<button id="<?php echo $button_id; ?>" class="<?php echo $custom_class; ?> custom-button"
    onmousedown="on_mouse_down('<?php echo $button_id; ?>')" onmouseup="on_mouse_up('<?php echo $button_id; ?>')"
    onclick="<?php ($on_click) ? call_user_func($on_click) : '' ?>">
    <?php echo esc_html($button_txt) ?>
</button>

<script>
    function on_mouse_down(id) {
        const button = document.getElementById(id);
        button.classList.add('clicked');
        console.log(button);
    }

    function on_mouse_up(id) {
        const button = document.getElementById(id);
        button.classList.remove('clicked');
    }
</script>

<style>
    button.custom-button {
        outline: 2px solid var(--dark);
        border: 2px solid var(--dark);
        background-color: var(--light);
        text-align: center;
        color: var(--dark);
        min-width: 150px;
        min-height: 70px;
        transition: all 100ms linear;
        font-size: x-large;
    }

    button.custom-button:hover {
        outline-width: 4px;
        outline-color: var(--dark);
        border-color: var(--light);
        color: var(--light);
        background-color: var(--dark);
    }

    button.custom-button.clicked {
        border-width: 6px;
    }
</style>