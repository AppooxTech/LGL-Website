<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <meta charset="<?php bloginfo("charset") ?>">
  <meta name="viewport" content="width=device-width, initial-scale, initial-scale=1">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <nav class="navbar-container">
    <div class="logo-container">
      <img src="<?php echo get_template_directory_uri(); ?>/images/LGL-New-Logo.png" alt="Business-Logo" class="logo">
      <span class="seo-hidden-text">LGL Light Guide Lund</span>
    </div>
    <div class="navigation-buttons-container">
      <div class="dropdown-container">
        <div class="hide" id="dropdown" onmouseleave="on_mouse_leave();">
          <div class="first section">
            <h3 class="section-header">Section</h3>
            <span class="section-item" role="button" onclick="on_click();">item 1</span>
            <span class="section-item" role="button" onclick="on_click();">item 2</span>
            <span class="section-item" role="button" onclick="on_click();">item 3</span>
          </div>
          <div class="second section">
            <h3 class="section-header">Section</h3>
            <span class="section-item" role="button" onclick="on_click();">item 1</span>
            <span class="section-item" role="button" onclick="on_click();">item 2</span>
            <span class="section-item" role="button" onclick="on_click();">item 3</span>
          </div>
          <div class="third section">
            <h2 class="section-header">Section</h3>
              <span class="section-item" role="button" onclick="on_click();">item 1</span>
              <span class="section-item" role="button" onclick="on_click();">item 2</span>
              <span class="section-item" role="button" onclick="on_click();">item 3</span>
          </div>
        </div>
        <div class="navigation-button" role="button" onclick="on_click();">
          <span class="navigation-button">Products</span>
          <img id="down-chev" src="<?php echo get_template_directory_uri(); ?>/images/icons/icons8-chevron-down-30.png"
            width="20" alt="down">
        </div>
      </div>
      <span class="navigation-button" role="button">Blogs</span>
      <span class="navigation-button" role="button">Contact Us</span>

    </div>
    <div class="signin-button-container">
      <!-- <?php echo get_template_part("components/button", "sign-in-button", ["button_txt" => 'Sign in']); ?> -->
    </div>
  </nav>
</body>

<script>
  const drop_down = document.getElementById('dropdown');
  const down_chev = document.getElementById('down-chev');

  const on_click = () => {
    if (drop_down.classList.contains('hide')) {
      drop_down.classList.remove('hide');
      down_chev.classList.add('rotated');
    } else if (!drop_down.classList.contains('hide')) {
      drop_down.classList.add('hide');
      down_chev.classList.remove('rotated')
    }
  }

  const on_mouse_leave = () => {
    timeout = setTimeout(() => {
      if (!drop_down.classList.contains('hide')) {
        drop_down.classList.add('hide');
        down_chev.classList.remove('rotated')
      }
      clearTimeout(timeout);
    }, 200)
  }
</script>