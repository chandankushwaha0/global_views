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


<div class="pictures  pt-5 pb-3">
    <div class="container">
        <h4 class="text-center">Our Pictures</h4>
        <div id="content" class="content">
            <div class="row">
                <div class="col-lg-3 py-3">
                    <div class="img-container">
                        <img src="assets/image/slider1.jpeg" class="img-fluid" alt="">
                        <div class="image_overlay">
                            <i class="fa fa-eye"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 py-3">
                    <div class="img-container">
                        <img src="assets/image/slider2.jpeg" class="img-fluid" alt="">
                        <div class="image_overlay">
                            <i class="fa fa-eye"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 py-3">
                    <div class="img-container">
                        <img src="assets/image/slider3.jpeg" class="img-fluid" alt="">
                        <div class="image_overlay">
                            <i class="fa fa-eye"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>









    </div>
</div>
<!-- Background image_overlay -->
<div id="background-image_overlay" class="background-image_overlay d-none"></div>

<!-- Popup container -->
<div id="image-image_popup" class="image_popup d-none">
    <span class="image_close">&times;</span>
    <img class="image_popup-content" id="image_popup-img">
</div>
<script>

    </script>
<?php include_once ("includes/suscriber.php"); ?>
    <?php  include_once("apply_now.php"); ?>

<?php include_once ("includes/footer.php"); ?>

