<?php

$template_directory_uri = get_template_directory_uri();

$normal_template = <<<TEXT
    
  <div class="logo-container">
      <img src="$template_directory_uri/images/LGL-New-Logo.png" alt="Business-Logo" class="logo">
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
          <img id="down-chev" src=" $template_directory_uri/images/icons/icons8-chevron-down-30.png"
            width="20" alt="down">
        </div>
      </div>
      <span class="navigation-button" role="button">Blogs</span>
      <span class="navigation-button" role="button">Contact Us</span>

    </div>
    <div class="signin-button-container">
      <!-- put sig in button here -->
    </div>
  TEXT;

$mobile_template = <<<TEXT
  <div class="logo-container">
      <img src="$template_directory_uri/images/LGL-New-Logo.png" alt="Business-Logo" class="logo">
      <span class="seo-hidden-text">LGL Light Guide Lund</span>
    </div>
    <div class="menu-icon-container" onclick="on_click_menu();">
      <img src="$template_directory_uri/images/icons/icons8-menu.svg" alt="menu" width="35" id="menu-icon">
    </div>
    <div id="backdrop" class="hide" onclick="on_click_menu();">
    </div>
    <div id="menu-container" class="hide">
      <div class="menu">
        <button class="menu-button onclick="on_click_menu();">
          products
          <img src="$template_directory_uri/images/icons/icons8-chevron-down-30.png" width="20">
        </button>
        <button class="menu-button onclick="on_click_menu();">
          Blogs
        </button>
        <button class="menu-button onclick="on_click_menu();">
          Contact us
        </button>
      </div>
    </div>
  TEXT;

?>

<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <meta charset="<?php bloginfo("charset") ?>">
  <meta name="viewport" content="width=device-width, initial-scale, initial-scale=1">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> onload="set_template()">
  <nav class="navbar-container" id="navbar"></nav>
</body>

<script>
  const navbar = document.getElementById('navbar');
  let html_template;
  let drop_down;
  let down_chev;
  let menu_icon;
  let backdrop;
  let menu_container;


  const set_template = () => {
    const parser = new DOMParser();

    if (window.innerWidth > 430) {
      html_template = parser.parseFromString(`<?php echo $normal_template ?>`, "text/html");
      drop_down = html_template.getElementById('dropdown');
      down_chev = html_template.getElementById('down_chev');
    }

    else {
      html_template = parser.parseFromString(`<?php echo $mobile_template ?>`, "text/html");
      menu_icon = html_template.getElementById('menu_icon');
      backdrop = html_template.getElementById('backdrop');
      menu_container = html_template.getElementById('menu-container');
    }

    navbar.append(...html_template.body.children)
  }

  const on_click = () => {
    if (drop_down.classList.contains('hide')) {
      drop_down.classList.remove('hide');
      down_chev.classList.add('rotated');
    } else if (!drop_down.classList.contains('hide')) {
      drop_down.classList.add('hide');
      down_chev.classList.remove('rotated');
    }
  }

  const on_click_menu = () => {
    if (backdrop.classList.contains('hide')) {
      backdrop.classList.remove('hide');
      setTimeout(() => menu_container.classList.remove('hide'), 100)
    } else {
      menu_container.classList.add('hide');
      setTimeout(() => backdrop.classList.add('hide'), 100)
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