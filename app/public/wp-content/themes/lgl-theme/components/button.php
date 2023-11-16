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

<button id="<?php echo $button_txt; ?>" onmousedown="on_mouse_down('<?php echo $button_txt ?>')" onmouseup="on_mouse_up('<?php echo $button_txt ?>')" onclick="<?php ($on_click) ? call_user_func($on_click) : '' ?>"><?php echo esc_html($button_txt) ?></button>

<script>
    function on_mouse_down(id) {
        let button = document.getElementById(id);

        button.classList.add('clicked');
        console.log(id);
    }

    function on_mouse_up(id) {
        let button = document.getElementById(id);
        button.classList.remove('clicked');
    }
</script>

<style>
    button {
        outline: 2px solid var(--dark);
        border: 2px solid var(--dark);
        border-radius: 10px;
        background-color: var(--light);
        text-align: center;
        color: var(--dark);
        min-width: 150px;
        min-height: 70px;
        transition: all 100ms linear;
        font-size: x-large;
        width: 100%;
        height: 100%;
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