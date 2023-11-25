<?php
$button_txt = 'Button';
$on_click = null;

if (isset($args)) {
    if (isset($args['button_txt'])) {
        $button_txt = $args['button_txt'];
    }
    if (isset($args['on_click'])) {
        $on_click = $args['on_click'];
    }
}
?>

<button id="custom-button" onmousedown="on_mouse_down()" onmouseup="on_mouse_up()" onclick="<?php ($on_click) ? call_user_func($on_click) : '' ?>"><?php echo esc_html($button_txt) ?></button>

<script>
    const button = document.getElementById('custom-button');

    function on_mouse_down() {
        button.classList.add('clicked');
    }

    function on_mouse_up() {
        button.classList.remove('clicked');
    }
</script>

<style>
    button {
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

    button:hover {
        outline-width: 4px;
        outline-color: var(--dark);
        border-color: var(--light);
        color: var(--light);
        background-color: var(--dark);
    }

    button.clicked {
        border-width: 6px;
    }
</style>