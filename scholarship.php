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

<div class="scholarship" style="background: #FFAD73;  padding: 80px 0;">
    <div class="scholarship-form">
        <div class="container d-flex justify-content-center text-center">
            <div class="card col-8 px-3 py-4" data-aos="zoom-in" data-aos-duration="1500">
                <h4 class="card-title text-center text-uppercase">Scholarship&nbsp; Form</h4>
                <form action="">
                    <div class="card-body">
                        <h6 class="information">Please provide following information.</h6>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group my-3">
                                    <!-- <label for="name">Name</label> --> <input class="form-control" type="text"
                                        placeholder="Full Name">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="input-group"> <input class="form-control" type="text"
                                            placeholder="Mobile">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 my-3">
                                <div class="form-group">
                                    <div class="input-group"> <input class="form-control" type="text"
                                            placeholder="Email">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 my-3">
                                <div class="form-group">
                                    <div class="input-group"> <input class="form-control" type="number"
                                            placeholder="Number of candidates">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 my-3">
                                <div class="form-group">
                                    <div class="input-group"> <input class="form-control" type="text"
                                            placeholder="Your Places">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 mt-2 mb-4">
                                <div class="form-group">
                                    <div>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Interested Country</option>
                                            <option value="Austrilia">Austrilia</option>
                                            <option value="Canada">Canada</option>
                                            <option value="USA">USA</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 my-3">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Leave a comment here"
                                        id="floatingTextarea2" style="height: 100px"></textarea>
                                    <h5 for="floatingTextarea2" class="">Have you been to "Global views" before?</h5>
                                </div>
                            </div>
                        </div>
                        <div class="radio  d-flex justify-content-center">

                            <input type="radio" id="Yes" name="fav_language" value="YES">
                            <label for="Yes" class="">Yes</label><br>
                            <input type="radio" id="No" name="fav_language" value="No">
                            <label for="No">No</label>
                        </div>
                        <div class="row agreement">
                            <p>By registering you agree to be contacted by GlobalViews Internatinal Education Services Consultancy with its product and services.</p>
                        </div>
                        <div class="d-grid gap-2 py-3">
                            <button class="btn btn-primary" type="button">Apply</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include_once ("apply_now.php"); ?>
<?php include_once ("includes/footer.php"); ?>

