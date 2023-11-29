<?php
$carousel_contents = [
    [
        'name' => 'HYSPIM',
        'description' => 'HYSPIM DESC lorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumasdadasdasdlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsum',
        'image' => get_template_directory_uri() . '/images/img2.jpg'
    ],
    [
        'name' => 'HYSPIM',
        'description' => 'HYSPIM DESC lorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumasdadasdasdlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsum',
        'image' => get_template_directory_uri() . '/images/img4.jpg'
    ]
];
?>

<div class="front-page-container">
    <?php get_header(); ?>
    <section class="body-container">
        <?php get_template_part("components/carousel", '', ['contents' => $carousel_contents]); ?>
        <div class="aboutus-container aboutus-background">
            <h1 class="aboutus">Our mission is to turn your idea into reality</h1>
            <section class="aboutus">
                <p class="aboutus">
                    Our expertise is in the fields of optical engineering, optical design, and prototyping
                    optomechanical
                    instruments. Light Guide in Lund AB (LGL AB) is involved in a range of activities including Optics
                    and
                    Opto-Mechanics, designing and manufacturing of instruments and procurement of instruments, design,
                    and
                    manufacturing of vision systems, and milling & machining services.
                    LGL is a leading trademark in the field of hyperspectral imaging, based in Sweden. With over 11
                    years of
                    experience in the industry, LGL is dedicated to developing innovative applications and solutions
                    around
                    hyperspectral imaging technology. The company is committed to turning your ideas into reality by
                    offering customized products that cater to the specific needs of each customer.
                    LGL takes pride in offering products that are the result of years of extensive testing, debugging,
                    and
                    optimization. The company's expertise in hyperspectral imaging enables them to provide reliable and
                    high-quality products that meet the most demanding requirements of their customers.
                    LGL comprehensive control and data collection software for their hyperspectral imagers, which is
                    available in both Python and MATLAB. This software is designed to simplify the imaging process,
                    providing users with an intuitive interface that allows them to focus on the task at hand. The
                    software
                    is constantly updated, ensuring that it remains compatible with the latest imaging technology and
                    software.
                    Whether you are looking for a customized solution or a ready-to-use product, LGL the expertise to
                    meet
                    your needs
                </p>
            </section>
        </div>
        <div class="services-container services-background">
            <section class="services-first">
                <h1 class="services">
                    services
                </h1>
                <p class="services">
                    Our expertise is in the fields of optical engineering, optical design, and prototyping
                    optomechanical instruments.
                    Light Guide in Lund AB (LGL AB) is involved in a range of activities including Optics and
                    Opto-Mechanics, designing and
                    manufacturing of instruments and procurement of instruments, design, and manufacturing of vision
                    systems, and milling & machining services.
                </p>
            </section>
            <h2 class="services">
                LGL AB provides services for universities and industries such as
            </h2>
            <ul class="services">
                <li>Prototyping optomechanical systems.</li>
                <li>Vision system design.</li>
                <li>High-Quality Reliable CNC Machining Service at Low Cost</li>
                <li>Design of optical systems using Zemax software.</li>
                <li>Consulting in setting up the educational optical laboratories, undergraduate and graduate
                    labs.
                </li>
                <li>Consulting in the procurement of laboratory instruments and materials.</li>
            </ul>
    </section>
    <section class="footer-container">
        <?php get_footer(); ?>
    </section>
</div>

<style>
    div.aboutus-container.aboutus-background::before {
        content: '';
        width: 100%;
        height: 100%;
        background-image: url(<?php echo get_template_directory_uri() . '/images/img1.jpg' ?>);
        background-size: cover;
        background-position: 80% 0;
        position: fixed;
        filter: brightness(50%);
        top: 0px;
        left: 0px;
        z-index: -1;
    }
</style>