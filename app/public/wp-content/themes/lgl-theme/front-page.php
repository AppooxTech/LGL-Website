<?php
$template_uri = get_template_directory_uri();

$carousel_contents = [['header' => 'HYSPIM', 'description' => 'HYSPIM DESC', 'image' => (string) $template_uri . '/images/HYSPIM.png']];

?>

<div class="header-container">
    <?php get_header(); ?>
</div>

<div class="main-body">
    <!-- <img width="100%" src="<?php echo get_template_directory_uri(); ?>/images/spectral-camera.jpg" alt="Business Logo"> -->
    <?php get_template_part("components/carousel", '', ['contents' => $carousel_contents]); ?>
    <div class="aboutus-container aboutus-background">
        <h1 class="aboutus">Our mission is to turn your idea into reality</h1>
        <p class="aboutus">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit.
            Quibusdam inventore deleniti illum soluta eaque esse cum neque, eos aliquid necessitatibus velit,
            voluptatem magnam voluptatibus dolorem nemo ex natus veniam molestias?Lorem, ipsum dolor sit amet consectetur adipisicing elit.
            Quibusdam inventore deleniti illum soluta eaque esse cum neque, eos aliquid necessitatibus velit,
            voluptatem magnam voluptatibus dolorem nemo ex natus veniam molestias?Lorem, ipsum dolor sit amet consectetur adipisicing elit.
            Quibusdam inventore deleniti illum soluta eaque esse cum neque, eos aliquid necessitatibus velit,
            voluptatem magnam voluptatibus dolorem nemo ex natus veniam molestias?Lorem, ipsum dolor sit amet consectetur adipisicing elit.
            Quibusdam inventore deleniti illum soluta eaque esse cum neque, eos aliquid necessitatibus velit,
            voluptatem magnam voluptatibus dolorem nemo ex natus veniam molestias?
        </p>
    </div>
    <div class="services-container services-background">
        <article class="services">
            <section class="services-first">
                <h1 class="services">
                    services
                </h1>
                <p class="services">
                    Our expertise is in the fields of optical engineering, optical design, and prototyping optomechanical instruments.
                    Light Guide in Lund AB (LGL AB) is involved in a range of activities including Optics and Opto-Mechanics, designing and
                    manufacturing of instruments and procurement of instruments, design, and manufacturing of vision systems, and milling & machining services.
                </p>
            </section>
            <section class="services-second">
                <h2 class="services">
                    LGL AB provides services for universities and industries such as
                </h2>
                <ul class="services">
                    <li>Prototyping optomechanical systems.</li>
                    <li>Vision system design.</li>
                    <li>High-Quality Reliable CNC Machining Service at Low Cost</li>
                    <li>Design of optical systems using Zemax software.</li>
                    <li>Consulting in setting up the educational optical laboratories, undergraduate and graduate labs.</li>
                    <li>Consulting in the procurement of laboratory instruments and materials.</li>
                </ul>
            </section>
        </article>
    </div>


    <?php
    get_footer();
    ?>
</div>

<style>
    div.services-container.services-background {
        background-image: url('<?php echo get_template_directory_uri(); ?>/images/abstract1.jpg');
    }
    
    div.aboutus-container.aboutus-background {
        background-image: url('<?php echo get_template_directory_uri() ?>/images/abstract2.jpg');
    }
</style>