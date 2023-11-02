<!DOCTYPE html>

<html <?php language_attributes(); ?>>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <meta charset="<?php bloginfo("charset")?>">
        <meta name="viewport" content="width=device-width, initial-scale, initial-scale=1">
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
    <header>
    <nav class="header-navbar">
        <div class="navbar">
            <a href="<?php echo site_url() ?>">
                <img width="150" height="90" src="<?php echo get_template_directory_uri(); ?>/images/LGL-New-Logo.png" alt="Business Logo">
            </a>
            
            <div class="blog-products">
                <div class="dropdown navbar-item"> <!-- Added class "dropdown" here -->
                    <div class="product-container">
                        <p class="product-dropdown navbar-item">Products</p>
                        <!-- <svg class="dropdown-icon" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 320 512">! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc.<path d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z"/></svg> -->
                        <i class="fa-solid fa-chevron-down fa-fade dropdown-icon" style="color: #511f46;"></i>
                    </div>
                    
                    <div class="dropdown-content">
                    <div class="row">
                        <div class="column">
                            <div class="category">Devices</div>
                            <div class="item dropdown-text">Item 1</div>
                            <div class="item dropdown-text">Item 2</div>
                        </div>
                        <div class="column">
                            <div class="category">Softwares</div>
                            <div class="item dropdown-text">Item 1</div>
                            <div class="item dropdown-text">Item 2</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="column">
                            <div class="category">Lab Equipment</div>
                            <div class="item dropdown-text">Item 1</div>
                            <div class="item dropdown-text">Item 2</div>
                        </div>
                        <div class="column">
                            <div class="category">Optomechanics</div>
                            <div class="item dropdown-text">Item 1</div>
                            <div class="item dropdown-text">Item 2</div>
                        </div>
                    </div>
                    </div>
                </div>
                <a class="navbar-item" href="<?php echo site_url("/blogs-page") ?>">Blog</a>
                <a class="contact-us navbar-item" href="<?php echo site_url("/contact-us-page") ?>">Contact Us</a>
            </div>
        </div>
        <div class="navbar">
            <a class="navbar-item sign-in" href="#">Sign In</a>
            
        </div>
    </nav>

    </header>
    <hr> <!-- remove this in the end -->
    </body>
