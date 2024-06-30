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

<div class="contact-banner">
    <div class="container pt-5">
        <div class="row">
            <div class="col-lg-5 " data-aos="fade-right" data-aos-duration="1000">
                <img src="assets/image/mail_background.jpg" alt="" class="img-fluid" width="90%">
            </div>
            <div class="col-lg-5 py-5 mx-5" data-aos="fade-left" data-aos-duration="1000">
                <form action="" class="">
                    <h4 class="text-center  fst-italic">Get in Touch</h4>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Username" aria-label="Username"
                            aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Email" aria-label="Username"
                            aria-describedby="basic-addon1">
                    </div>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
                            style="height: 100px"></textarea>
                        <label for="floatingTextarea2">Comments</label>
                    </div>
                    <div class="d-grid gap-2 my-3">
                        <button class="btn btn-primary" type="button">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="contact_us py-5 text-center">
    <div class="container cards text-center">
        <div class="row">
            <div class="col-lg-4 rounded" data-aos="zoom-in" data-aos-duration="1000">
                <div class="icon"><i class="fa-solid fa-phone"></i></div>
                <div class="heading text-capitalize">
                    <h3>call us now</h3>
                </div>
                <div class="information">9800000000</div>
            </div>
            <div class="col-lg-4 rounded" data-aos="zoom-in" data-aos-duration="1000">
                <div class="icon"><i class="fa-solid fa-envelope"></i></div>
                <div class="heading text-capitalize">
                    <h3>Email for help</h3>
                </div>
                <div class="information">globalviews@gmail.com</div>
            </div>
            <div class="col-lg-4 rounded" data-aos="zoom-in" data-aos-duration="1000">
                <div class="icon"><i class="fa-solid fa-location-dot"></i></div>
                <div class="heading text-capitalize">
                    <h3>Location</h3>
                </div>
                <div class="information">Buddhanagar, Kathmandu, Nepal</div>
            </div>
        </div>
    </div>

    </div>



    <div class="map rounded text-center py-3">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14130.927050714707!2d85.32951860188965!3d27.69468421903351!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb199a06c2eaf9%3A0xc5670a9173e161de!2sNew%20Baneshwor%2C%20Kathmandu%2044600!5e0!3m2!1sen!2snp!4v1713780095786!5m2!1sen!2snp"
            width="1120" height="450" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <?php  include_once("includes/suscriber.php"); ?>
    <?php  include_once("apply_now.php"); ?>
<?php
include_once ("includes/footer.php");

?>

