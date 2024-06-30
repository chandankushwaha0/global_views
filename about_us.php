<?php include_once ("includes/header.php"); ?>
<?php include_once ("includes/top_header.php"); ?>
<?php include_once ("includes/menu.php"); ?>
<?php include_once ("includes/first_banner.php"); ?>

<?php 

if( isset( $_GET['page'] ) ) {

    $page = $_GET['page'];
    $real_page  = ucwords( str_replace("-", " ", $page ) );
    page_name( $real_page );
}

?>
<!-- Who Are We -->
<section class="who-are-we py-3 py-md-5">
    <div class="container">
        <div class="row gy-3 gy-md-4 gy-lg-0 align-items-lg-center">
            <div class="col-12 col-lg-6 col-xl-5 image" data-aos="fade-right" data-aos-duration="1000">
                <div class="image-cursor"><i class="fa-solid fa-turn-up"></i></div>
                <img class="img-fluid" style=" height: 400px" loading="lazy" src="assets/image/slider1.jpeg"
                    alt="AboutUs">
            </div>
            <div class="col-12 col-lg-6 col-xl-7" data-aos="fade-left" data-aos-duration="1000">
                <div class="row justify-content-xl-center">
                    <div class="col-12 col-xl-11">
                        <h3 class="mb-3">Who Are We?</h3>
                        <p class="lead fs-4 text-secondary mb-3">We help people to build incredible brands and superior
                            products. Our perspective is to furnish outstanding captivating services.</p>
                        <p class="mb-5">We are a fast-growing company, but we have never lost sight of our core values.
                            We believe in collaboration, innovation, and customer satisfaction. We are always looking
                            for new ways to improve our products and services.</p>
                        <div class="row gy-4 gy-md-0 gx-xxl-5X">
                            <div class="col-12 col-md-6">
                                <div class="d-flex">
                                    <div class="me-4" style="color: #FF6E05;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                            fill="currentColor" class="bi bi-gear-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h2 class="h4 mb-3">Versatile Brand</h2>
                                        <p class="text-secondary mb-0">We are crafting a digital method that subsists
                                            life across all mediums.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="d-flex">
                                    <div class="me-4" style="color: #FF6E05;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                            fill="currentColor" class="bi bi-fire" viewBox="0 0 16 16">
                                            <path
                                                d="M8 16c3.314 0 6-2 6-5.5 0-1.5-.5-4-2.5-6 .25 1.5-1.25 2-1.25 2C11 4 9 .5 6 0c.357 2 .5 4-2 6-1.25 1-2 2.729-2 4.5C2 14 4.686 16 8 16Zm0-1c-1.657 0-3-1-3-2.75 0-.75.25-2 1.25-3C6.125 10 7 10.5 7 10.5c-.375-1.25.5-3.25 2-3.5-.179 1-.25 2 1 3 .625.5 1 1.364 1 2.25C11 14 9.657 15 8 15Z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h2 class="h4 mb-3">Digital Agency</h2>
                                        <p class="text-secondary mb-0">We believe in innovation by merging primary with
                                            elaborate ideas.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<!-- mission, vission and objectives -->
<div class="mission pt-3 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1500">
                <ul class="d-flex d-block">
                    <li class="our-mission"><span>Our Mission</span></li>
                    <li class="our-vission"><span>Our Vission</span></li>
                </ul>
                <div id="mission-content" class="mission-content">
                    <ul>
                        <li><i class="fa-solid fa-arrow-right"></i> Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit. Facere quisquam, a fugit blanditiis necessitatibus illum commodi quibusdam, adipisci
                            dolores, incidunt iste voluptatem enim deserunt error similique quia libero qui porro.</li>
                        <li><i class="fa-solid fa-arrow-right"></i> Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Vero veritatis ab nesciunt, earum enim eius placeat, debitis dignissimos praesentium
                            aut aliquid. Eos libero veniam dignissimos soluta cupiditate ad ab expedita.</li>
                    </ul>
                </div>
                <div id="vission-content" class="vission-content d-none">
                    <ul>
                        <li><i class="fa-solid fa-arrow-right"></i>vission Lorem ipsum dolor sit amet, consectetur
                            adipisicing elit. Facere quisquam, a fugit blanditiis necessitatibus illum commodi
                            quibusdam, adipisci dolores, incidunt iste voluptatem enim deserunt error similique quia
                            libero qui porro.</li>
                        <li><i class="fa-solid fa-arrow-right"></i> Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Vero veritatis ab nesciunt, earum enim eius placeat, debitis dignissimos praesentium
                            aut aliquid. Eos libero veniam dignissimos soluta cupiditate ad ab expedita.</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-6 text-left" data-aos="zoom-in" data-aos-duration="1500">
                <img src="assets/image/slider2.jpeg" class="img-fluid" alt="">
            </div>
        </div>
    </div>
</div>



<!-- pillar of our consultancy -->
<div class="pillar">
    <div class="container">
        <div class="row text-center">
            <div class="col-3 h1">
                <h1>1</h1>
            </div>
            <div class="col-6 pillar1">
                <h4>Objectives 1</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi consequatur dolores explicabo
                    cupiditate culpa? Doloribus ipsam, tempore minima, laborum similique sed dolorum molestias dolore
                    laboriosam tenetur accusamus architecto ab saepe!</p>
            </div>
            <div class="col-3">
                <img src="assets/image/arrow-right.jpg" class="img-fluid" alt="">
            </div>
        </div>
        <div class="row text-center">
            <div class="col-3">
            <img src="assets/image/arrow-left.jpg" class="img-fluid image2" alt="">
            </div>
            <div class="col-6 pillar1">
                <h4>Objectives 2</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi consequatur dolores explicabo
                    cupiditate culpa? Doloribus ipsam, tempore minima, laborum similique sed dolorum molestias dolore
                    laboriosam tenetur accusamus architecto ab saepe!</p>
            </div>

            <div class="col-3 h1">
                <h1>2</h1>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-3 h1">
                <h1>3</h1>
            </div>
            <div class="col-6 pillar1">
                <h4>Objectives 3</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi consequatur dolores explicabo
                    cupiditate culpa? Doloribus ipsam, tempore minima, laborum similique sed dolorum molestias dolore
                    laboriosam tenetur accusamus architecto ab saepe!</p>
            </div>
            <div class="col-3">
            <img src="assets/image/arrow-right.jpg" class="img-fluid" alt="">
            </div>
        </div>
        <div class="row text-center">
            <div class="col-3">
            </div>
            <div class="col-6 pillar1">
                <h4>Objectives 4</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi consequatur dolores explicabo
                    cupiditate culpa? Doloribus ipsam, tempore minima, laborum similique sed dolorum molestias dolore
                    laboriosam tenetur accusamus architecto ab saepe!</p>
            </div>

            <div class="col-3 h1">
                <h1>4</h1>
            </div>
        </div>
    </div>
</div>
<?php include_once ("includes/suscriber.php"); ?>
<?php include_once ("apply_now.php"); ?>

<?php include_once ("includes/footer.php"); ?>

