<?php include_once ("includes/header.php"); ?>
<?php include_once ("includes/top_header.php"); ?>
<?php include_once ("includes/menu.php"); ?>


<div class="apply-btn">
    <button class="btn">Apply Now</button>
</div>
<div class="apply-now-overlay d-none"></div>
<div class="apply-now d-none">
    <div class="container d-flex justify-content-center text-center">
        <div class="card col-8 px-3 py-4 apply-form-content" data-aos="zoom-in" data-aos-duration="1500">
            <span class="close-apply-form">X</span>
            <h4 class="card-title text-center text-uppercase">Apply Now</h4>
            <form action="">
                <div class="card-body">
                    <h6 class="information">Please provide the following information.</h6>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group my-3">
                                <input class="form-control" type="text" placeholder="Full Name">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="input-group">
                                    <input class="form-control" type="number" placeholder="Mobile">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 my-3">
                            <div class="form-group">
                                <div class="input-group">
                                    <input class="form-control" type="email" placeholder="Email">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 mt-2 mb-4">
                            <div class="form-group">
                                <div>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Select Classes</option>
                                        <option value="IELTS">IELTS</option>
                                        <option value="PTE">PTE</option>
                                        <option value="TOEFEL">TOEFEL</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-grid gap-2">
                        <button class="btn btn-primary" type="button">Apply</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<?php include_once ("includes/footer.php"); ?>

