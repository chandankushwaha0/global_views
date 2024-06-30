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


<div class="blogs">
    <div class="container pt-5 ms-5">
        <div class="row">
            <div class="col-lg-12" data-aos="zoom-in" data-aos-duration="1500">
                <div class="blog-items d-flex">
                <img src="assets/image/slider2.jpeg" width="30%" class="img-fluid rounded px-2" alt="">
                <div class="px-3">
                    <h4>Blog Titles</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta deserunt asperiores aliquam, quam animi laboriosam veritatis praesentium tempore. Distinctio alias aspernatur neque consectetur, voluptate porro fugiat iure accusamus consequatur blanditiis.</p>
                    <p>By : <a href="index.php">globalviews</a></p>
                    <p>On <?php echo date("l jS \of F Y h:i:s A") . "<br>"; ?></p>
                </div>
                </div>
            </div>
            <div class="col-lg-12" data-aos="zoom-in" data-aos-duration="1500">
                <div class="blog-items d-flex">
                <img src="assets/image/slider2.jpeg" width="30%" class="img-fluid rounded px-2" alt="">
                <div class="px-3">
                    <h4>Blog Titles</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta deserunt asperiores aliquam, quam animi laboriosam veritatis praesentium tempore. Distinctio alias aspernatur neque consectetur, voluptate porro fugiat iure accusamus consequatur blanditiis.</p>
                    <p>By : <a href="index.php">globalviews</a></p>
                    <p>On <?php echo date("l jS \of F Y h:i:s A") . "<br>"; ?></p>
                </div>
                </div>
            </div>
            <div class="col-lg-12" data-aos="zoom-in" data-aos-duration="1500">
                <div class="blog-items d-flex">
                <img src="assets/image/slider2.jpeg" width="30%" class="img-fluid rounded px-2" alt="">
                <div class="px-3">
                    <h4>Blog Titles</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta deserunt asperiores aliquam, quam animi laboriosam veritatis praesentium tempore. Distinctio alias aspernatur neque consectetur, voluptate porro fugiat iure accusamus consequatur blanditiis.</p>
                    <p>By : <a href="index.php">globalviews</a></p>
                    <p>On <?php echo date("l jS \of F Y h:i:s A") . "<br>"; ?></p>
                </div>
                </div>
            </div>
            <div class="col-lg-12" data-aos="zoom-in" data-aos-duration="1500">
                <div class="blog-items d-flex">
                <img src="assets/image/slider2.jpeg" width="30%" class="img-fluid rounded px-2" alt="">
                <div class="px-3">
                    <h4>Blog Titles</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta deserunt asperiores aliquam, quam animi laboriosam veritatis praesentium tempore. Distinctio alias aspernatur neque consectetur, voluptate porro fugiat iure accusamus consequatur blanditiis.</p>
                    <p>By : <a href="index.php">globalviews</a></p>
                    <p>On <?php echo date("l jS \of F Y h:i:s A") . "<br>"; ?></p>
                </div>
                </div>
            </div>
            <div class="col-lg-12" data-aos="zoom-in" data-aos-duration="1500">
                <div class="blog-items d-flex">
                <img src="assets/image/slider2.jpeg" width="30%" class="img-fluid rounded px-2" alt="">
                <div class="px-3">
                    <h4>Blog Titles</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta deserunt asperiores aliquam, quam animi laboriosam veritatis praesentium tempore. Distinctio alias aspernatur neque consectetur, voluptate porro fugiat iure accusamus consequatur blanditiis.</p>
                    <p>By : <a href="index.php">globalviews</a></p>
                    <p>On <?php echo date("l jS \of F Y h:i:s A") . "<br>"; ?></p>
                </div>
                </div>
            </div>
            <div class="col-lg-12" data-aos="zoom-in" data-aos-duration="1500">
                <div class="blog-items d-flex">
                <img src="assets/image/slider2.jpeg" width="30%" class="img-fluid rounded px-2" alt="">
                <div class="px-3">
                    <h4>Blog Titles</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta deserunt asperiores aliquam, quam animi laboriosam veritatis praesentium tempore. Distinctio alias aspernatur neque consectetur, voluptate porro fugiat iure accusamus consequatur blanditiis.</p>
                    <p>By : <a href="index.php">globalviews</a></p>
                    <p>On <?php echo date("l jS \of F Y h:i:s A") . "<br>"; ?></p>
                </div>
                </div>
            </div>
            
        </div>
    </div>
</div>


<?php include_once ("includes/suscriber.php"); ?>
<?php include_once ("apply_now.php"); ?>

<?php include_once ("includes/footer.php"); ?>
