<div class="header-container">
    <?php
    get_header();
    ?>
</div>

<div class="main-body">
    <!-- <img width="100%" src="<?php echo get_template_directory_uri(); ?>/images/spectral-camera.jpg" alt="Business Logo"> -->
    <div class="carousel-container">
        in development
    </div>
    <div class="aboutus-container">
        <h1 class="aboutus">Our mission is to turn your idea into reality</h1>
        <p class="aboutus" >Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quibusdam inventore deleniti illum soluta eaque esse cum neque, eos aliquid necessitatibus velit, voluptatem magnam voluptatibus dolorem nemo ex natus veniam molestias?Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quibusdam inventore deleniti illum soluta eaque esse cum neque, eos aliquid necessitatibus velit, voluptatem magnam voluptatibus dolorem nemo ex natus veniam molestias?Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quibusdam inventore deleniti illum soluta eaque esse cum neque, eos aliquid necessitatibus velit, voluptatem magnam voluptatibus dolorem nemo ex natus veniam molestias?Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quibusdam inventore deleniti illum soluta eaque esse cum neque, eos aliquid necessitatibus velit, voluptatem magnam voluptatibus dolorem nemo ex natus veniam molestias?</p>
    </div>
    <div class="services-container">
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
    div.main-body {
        width: 100vw;
        display: flex;
        flex-direction: column;
        height: max-content;
        min-height: 100vh;
        justify-content: space-between;
    }

    div.header-container {
        width: 100vw;
        height: max-content;

    }

    div.carousel-container {
        width: 100%;
        height: 900px;
        text-align: center;
        color: var(--dark);
        text-align: center;
        display: flex;
        justify-content: center;

    }

    div.aboutus-container {
        height: 500px;
        width: 100vw;
        display: flex;
        flex-direction: column;
        border-top: solid 3px var(--dark);
        background-color: var(--secondary);
        padding-left: 15%;
        padding-right: 15%;
        gap: 12px;
    }

    h1.aboutus {
        text-align: center;
        font-size: 3vw;
        width: 100%;
        color: var(--light);
    }

    p.aboutus {
        font-size: 1.8vw;
    }

    div.services-container {
        width: 100%;
        height: max-content;
        padding-top: 10px;
        padding-bottom: 20px;
        padding-left: 10px;
        padding-right: 10px;
        text-align: center;
        display: flex;
        justify-content: center;
        align-items: center;
        border-top: solid 3px var(--dark);
        background-color: var(--primary);
        padding-left: 5%;
        padding-right: 5%;
    }

    article.services {
        color: var(--dark);
    }

    section.services-first {
        margin-bottom: 20px;
    }

    h1.services {
        font-size: 3vw;
        font-weight: bolder;
        text-align: center;
        color: var(---dark);
        margin-bottom: 10px;
    }

    p.services {
        font-size: 1.5vw;
        font-weight: 500;
        text-align: left;
        text-indent: 5px;
        color: var(--dark-grey);
    }

    h2.services {
        font-size: 2vw;
        font-weight: 800;
        text-align: left;
        color: var(--light);
        margin-bottom: 10px;
    }

    ul.services {
        font-size: 1.3vw;
        font-weight: 700;
        text-align: left;
        list-style-type: square;
        list-style: none;
        padding: 0;
        margin-left: 5%;
    }

    ul.services>li::before {
        content: "\2023";
        /* Unicode for a bullet point */
        color: var(--light);
        display: inline-block;
        width: 1em;
        margin-left: -1em;
    }
</style>
