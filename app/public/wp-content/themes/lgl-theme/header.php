<!DOCTYPE html>

<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo("charset")?>">
        <meta name="viewport" content="width=device-width, initial-scale, initial-scale=1">
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <header>
            <nav>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li class="dropdown">
                        <a href="#">Products</a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Category 1</a></li>
                            <li><a href="#">Category 2</a></li>
                            <li><a href="#">Category 3</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Blog</a></li>
                </ul>
            </nav>
        </header>
