<!DOCTYPE html>

<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo("charset")?>">
        <meta name="viewport" content="width=device-width, initial-scale, initial-scale=1">
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
    <header>
    <nav class="header-navbar">
        <div class="navbar">
            <a href="<?php echo site_url() ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/images/LGL-Logo-removebg.png" alt="Business Logo">
            </a>
            
            <div class="blog-products">
                <div class="dropdown navbar-item"> <!-- Added class "dropdown" here -->
                    Products
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
                <a class="contact-us" href="<?php echo site_url("/contact-us-page") ?>">Contact Us</a>
            </div>
        </div>
        <div class="navbar">
            <a class="navbar-item sign-in" href="#">Sign In</a>
            
        </div>
    </nav>

    </header>
    <hr> <!-- remove this in the end -->
    </body>
