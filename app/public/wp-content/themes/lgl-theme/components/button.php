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

<button class="custom-button" id="<?php echo $button_txt; ?>" onmousedown="on_mouse_down('<?php echo $button_txt ?>')" onmouseup="on_mouse_up('<?php echo $button_txt ?>')" onclick="<?php ($on_click) ? call_user_func($on_click) : '' ?>"><?php echo esc_html($button_txt) ?></button>

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