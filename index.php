<?php include_once ("includes/header.php"); ?>
<?php include_once ("includes/top_header.php"); ?>
<?php include_once ("includes/menu.php"); ?>

<!-- MAIN SLIDER -->
<div class="slider">
    <div class="slide active" style="background-image: url('assets/image/slider2.jpeg');">
        <div class="overlay"></div>
        <div class="text">
            <h2>Slide 1 Title</h2>
            <p>Slide 1 Description</p>
        </div>
    </div>
    <div class="slide" style="background-image: url('assets/image/slider1.jpeg');">
        <div class="overlay"></div>
        <div class="text">
            <h2>Slide 2 Title</h2>
            <p>Slide 2 Description</p>
        </div>
    </div>
    <div class="slide" style="background-image: url('assets/image/slider3.jpeg');">
        <div class="overlay"></div>
        <div class="text">
            <h2>Slide 3 Title</h2>
            <p>Slide 3 Description</p>
        </div>
    </div>
    <div class="navigation">
        <button class="prev">❮</button>
        <button class="next">❯</button>
    </div>
</div>
<!-- END MAIN SLIDER -->

<!-- SLICK SLIDER -->
<div class="sliders-container text-center">
    <div class="sliders">
        <div class="item-sliders"><img src="assets/image/slider1.jpeg" alt=""></div>
        <div class="item-sliders"><img src="assets/image/slider2.jpeg" alt=""></div>
        <div class="item-sliders"><img src="assets/image/slider3.jpeg" alt=""></div>
        <div class="item-sliders"><img src="assets/image/slider1.jpeg" alt=""></div>
        <div class="item-sliders"><img src="assets/image/slider2.jpeg" alt=""></div>
        <div class="item-sliders"><img src="assets/image/slider3.jpeg" alt=""></div>
    </div>
</div>

<!-- OBJECTIVES -->
<div class="objectives" data-aos="fade-up" data-aos-duration="1500">
    <div class="container mx-4 text-center">
        <p class="p-bg text-center">𝓕𝓸𝓻 𝓨𝓸𝓾𝓻 𝓢𝓾𝓬𝓬𝓮𝓼𝓼</p>
        <p class="pt-5 p-headings">
            Experience our dynamic consultancy, where expert instructors and personalized strategies <br> propel you
            towards success in your goals.</p>
        <div class="row">
            <div class="col-lg-4 objectives-item">
                <div class="icon">
                    <i class="fa-regular fa-lightbulb"></i>
                </div>
                <div class="heading">
                    We innovate
                </div>
                <div class="content">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. A nulla ratione laudantium commodi eius
                        magni, </p>
                </div>
                <div class="read-more-btn">
                    <a href="">Read More..</a>
                </div>
            </div>
            <div class="col-lg-4 objectives-item">
                <div class="icon">
                    <i class="fa-solid fa-chart-line"></i>
                </div>
                <div class="heading">
                    Performance
                </div>
                <div class="content">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. A nulla ratione laudantium commodi eius
                        magni,</p>
                </div>
                <div class="read-more-btn">
                    <a href="">Read More..</a>
                </div>
            </div>
            <div class="col-lg-4 objectives-item">
                <div class="icon">
                    <i class="fa-solid fa-truck-ramp-box"></i>
                </div>
                <div class="heading">
                    A Full Service
                </div>
                <div class="content">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. A nulla ratione laudantium commodi eius
                        magni, </p>
                </div>
                <div class="read-more-btn">
                    <a href="">Read More..</a>
                </div>
            </div>

        </div>

    </div>
</div>


<!-- WHY CHOOSE US -->
<div class="why-choose-us py-5" data-aos="fade-down" data-aos-duration="1500">
    <div class="container text-center py-5">
        <p class="p-bg text-center">success</p>
        <p data-aos="fade-left" data-aos-duration="1500" class="pt-5 p-headings text-center">
            WHY CHOOSE US</p>
        <div class="row">
            <div class="col-5">
                <ul>
                    <?php
                    for ($i = 0; $i < 5; $i++) {
                        ?>
                        <li list-id="best<?php echo $i; ?>" class="<?php echo $i === 0 ? 'active' : ''; ?>">Best Facilities
                            <?php echo $i; ?>
                        </li>
                        <?php
                    }
                    ?>
                </ul>
            </div>
            <div class="col-7 ps-5 text-center">
                <?php
                for ($i = 0; $i < 5; $i++) {
                    ?>
                    <div data-aos="zoom-in" data-aos-duration="1500" data-id="best<?php echo $i; ?>"
                        class="<?php echo $i === 0 ? '' : 'hidden'; ?>">
                        <h5>Heading <?php echo $i; ?></h5>
                        <p>Details about Best Facilities <?php echo $i; ?>.</p>
                        <img src="" alt="why-choose-us-image">
                    </div>
                    <?php
                }
                ?>

            </div>
        </div>
    </div>
</div>


<!-- OUR CLASSES -->
<div class="our-classes">
    <div class="container">
        <h2>Our Classes</h2>
        <div class="row">
            <div class="col-lg-3">
                <img id="class-image" src="assets/image/slider1.jpeg" class="img-fluid" alt="">
            </div>
            <div class="col-lg-7 class-content" id="class-content">
                <h4 id="class-title">BCA</h4>
                <p id="class-description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odit sunt ipsa,
                    neque veritatis consectetur recusandae facilis voluptate dolor delectus suscipit repellat commodi
                    magnam temporibus! Nihil ipsam ut possimus perferendis provident.</p>
                <a href=""><button class="btn">Read more...</button></a>
                <div class="click-btn">
                    <button id="prev-btn"><i class="fa-solid fa-less-than"></i></button>
                    <button id="next-btn" class="greater"><i class="fa-solid fa-greater-than"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- TESTIMONIALS -->
<div class="testimonials">
    <!-- <div class="container"> -->
    <div class="testimonials-words">
        <h4>Words to appreciation by <br>our amezings students</h4>
        <hr class="text-center">
        <!-- </div> -->
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 text-center" data-aos="zoom-in" data-aos-duration="1500">
                <div class="items">
                    <img src="assets/image/slider1.jpeg" alt="students" class="img-fluid">
                    <h6 class="py-2 text-primary text-uppercase">Name</h6>
                    <p><i class="fa-solid fa-quote-left"></i>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rem, asperiores autem. Eos labore,
                        asperiores dolores laboriosam perferendis consectetur vitae saepe nulla, voluptatem sunt aliquam
                        voluptatibus mollitia veritatis in placeat qui?</p>
                </div>
            </div>
            <div class="col-lg-6 text-center" data-aos="zoom-out" data-aos-duration="1500">
                <div class="items">
                    <img src="assets/image/slider1.jpeg" alt="students" class="img-fluid">
                    <h6 class="py-2 text-primary text-uppercase">Name</h6>
                    <p><i class="fa-solid fa-quote-left"></i>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rem, asperiores autem. Eos labore,
                        asperiores dolores laboriosam perferendis consectetur vitae saepe nulla, voluptatem sunt aliquam
                        voluptatibus mollitia veritatis in placeat qui?</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php  include_once("includes/suscriber.php"); ?>
<?php  include_once("apply_now.php"); ?>



<script>

    // PHP-generated data
    const classes = [
        <?php for ($i = 0; $i < 3; $i++): ?>
                    {
                image: 'assets/image/slider<?php echo $i + 1; ?>.jpeg',
                title: 'Class Title <?php echo $i + 1; ?>',
                description: 'Description for class <?php echo $i + 1; ?>. Lorem ipsum dolor sit, amet consectetur adipisicing elit.'
            },
        <?php endfor; ?>
    ];

    let classIndex = 0;

    function updateClassContent(index) {
        const classData = classes[index];
        document.getElementById('class-image').src = classData.image;
        document.getElementById('class-title').innerText = classData.title;
        document.getElementById('class-description').innerText = classData.description;
    }

    document.getElementById('prev-btn').addEventListener('click', function () {
        classIndex = (classIndex > 0) ? classIndex - 1 : classes.length - 1;
        updateClassContent(classIndex);
    });

    document.getElementById('next-btn').addEventListener('click', function () {
        classIndex = (classIndex < classes.length - 1) ? classIndex + 1 : 0;
        updateClassContent(classIndex);
    });

    // Initialize with the first class
    updateClassContent(classIndex);
</script>


<?php include_once ("includes/footer.php"); ?>


