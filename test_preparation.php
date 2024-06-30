
    <?php include_once ("includes/header.php"); ?>
    <?php include_once ("includes/top_header.php"); ?>
    <?php include_once ("includes/menu.php"); ?>
    <?php include_once ("includes/first_banner.php"); ?>

    <?php
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
        $real_page = ucwords(str_replace("-", " ", $page));
        page_name($real_page);
    }
    ?>

<div class="test-overview py-5 mx-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h4 class="py-3 text-primary">Test Overview</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores dolorum ad in, vel, voluptas
                        sapiente sunt temporibus aliquam eligendi quis inventore suscipit, alias accusantium nesciunt ullam?
                        Inventore, dolorem iusto? Adipisci.</p>
                </div>
                <div class="col-lg-4" id="form-container">
                    <form action="">
                        <div class="input-group mb-4">
                            <input type="text" class="form-control" placeholder="Username" aria-label="Username"
                                aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-4">
                            <input type="email" class="form-control" placeholder="Email" aria-label="Email"
                                aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-4">
                            <input type="number" class="form-control" placeholder="Phone Number" aria-label="Phone Number"
                                aria-describedby="basic-addon1">
                        </div>
                        <div class="mb-4">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Select Interested Classes</option>
                                <option value="IELTS">IELTS</option>
                                <option value="PTE">PTE</option>
                            </select>
                        </div>
                        <div class="form-check mb-4">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Yes, I would like to receive information on study abroad news and events from Globalviews.
                            </label>
                        </div>
                        <div class="recaptcha-container">
                            <div class="recaptcha-box">
                                <input type="checkbox" id="recaptcha-checkbox">
                                <label for="recaptcha-checkbox" class="recaptcha-label">I'm not a robot</label>
                                <div class="recaptcha-spinner" id="spinner" style="display: none;"></div>
                            </div>
                            <div id="recaptcha-status" class="recaptcha-status"></div>
                        </div>
                        <div class="py-3 text-center">
                        <div class="btn btn-primary  text-uppercase">Sumbit</div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <h5 class="text-center py-2">How many types of IELTS tests are there?</h5>
                <div class="col-lg-6 px-5 pb-3">
                        <h6>1. Test Academic</h6>
                        <p>The IELTS Academic Test is suitable for individuals planning to enroll in international universities for undergraduate or postgraduate programs or those aiming to begin their professional journey in a foreign country. This test is specifically designed to evaluate the English language proficiency of candidates who intend to pursue higher education in an English-speaking nation.</p>
                </div>
                <div class="col-lg-6 px-5 pb-3">
                        <h6>2. Test Academic</h6>
                        <p>The IELTS Academic Test is suitable for individuals planning to enroll in international universities for undergraduate or postgraduate programs or those aiming to begin their professional journey in a foreign country. This test is specifically designed to evaluate the English language proficiency of candidates who intend to pursue higher education in an English-speaking nation.</p>
                </div>
                <p>Both types of tests include four sections: Listening, Speaking, Reading, and Writing. The Listening and Speaking sections are the same for both tests, while there are slight variations in the Reading and Writing sections based on the test type.</p>
            </div>
            <div class="row pt-5">
                <div class="col-lg-8">
                    <div class="">
                        <img src="assets/image/banner1.png" height="100px" width="100%" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include_once ("includes/suscriber.php"); ?>
    <?php include_once ("apply_now.php"); ?>
    <?php include_once ("includes/footer.php"); ?>
