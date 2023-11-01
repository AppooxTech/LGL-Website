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
            <ul class="navbar-items">
                <li><a href="<?php echo site_url() ?>">Home</a></li>
                <li class="dropdown"> <!-- Added class "dropdown" here -->
                    Products
                    <div class="dropdown-content">
                        <div class="row">
                            <div class="column">
                                <div class="category">Category 1</div>
                                <div class="item">Item 1.1</div>
                                <div class="item">Item 1.2</div>
                            </div>
                            <div class="column">
                                <div class="category">Category 2</div>
                                <div class="item">Item 2.1</div>
                                <div class="item">Item 2.2</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="column">
                                <div class="category">Category 3</div>
                                <div class="item">Item 3.1</div>
                                <div class "item">Item 3.2</div>
                            </div>
                            <div class="column">
                                <div class="category">Category 4</div>
                                <div class="item">Item 4.1</div>
                                <div class "item">Item 4.2</div>
                            </div>
                        </div>
                    </div>
                </li>
                <li><a href="<?php echo site_url("/contact-us-page") ?>">Contact Us</a></li>
                <li><a href="<?php echo site_url("/blogs-page") ?>">Blog</a></li>
            </ul>
        </nav>
    </header>
    <hr> <!-- remove this in the end -->
</body>
