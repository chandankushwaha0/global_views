<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slick sliders Example</title>
    <!-- Slick CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <!-- Custom CSS -->
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        .sliders-container {
            width: 80%;
            margin: 0 auto;
            position: relative;
        }
        .item-sliders {
            text-align: center;
            color: #fff;
            background: #3498db;
            padding: 40px 0;
            font-size: 24px;
            border: 1px solid #ddd;
            box-shadow: 0 2px 5px rgba(0,0,0,0.3);
            transition: transform 0.3s, box-shadow 0.3s, filter 0.3s, opacity 0.3s;
        }
        .slick-center .item-sliders {
            transform: scale(1.2); /* Larger scale for center slide */
            box-shadow: 0 4px 15px rgba(0,0,0,0.3);
            z-index: 1;
        }
        .slick-prev, .slick-next {
            font-size: 0;
            line-height: 0;
            position: absolute;
            top: 50%;
            display: block;
            width: 30px;
            height: 30px;
            padding: 0;
            transform: translate(0, -50%);
            cursor: pointer;
            color: transparent;
            border: none;
            outline: none;
            background: transparent;
        }
        .slick-prev:hover, .slick-next:hover,
        .slick-prev:focus, .slick-next:focus {
            color: transparent;
            outline: none;
            background: transparent;
        }
        .slick-prev:before, .slick-next:before {
            font-family: 'slick';
            font-size: 30px;
            line-height: 1;
            opacity: .75;
            color: black;
        }
        .slick-prev {
            left: -35px;
        }
        .slick-next {
            right: -35px;
        }
        .slick-prev:before {
            content: '←';
        }
        .slick-next:before {
            content: '→';
        }
    </style>
</head>
<body>

<div class="sliders-container">
    <button class="slick-prev">Previous</button>
    <div class="sliders">
        <div class="item-sliders">Slide 1</div>
        <div class="item-sliders">Slide 2</div>
        <div class="item-sliders">Slide 3</div>
        <div class="item-sliders">Slide 4</div>
        <div class="item-sliders">Slide 5</div>
        <div class="item-sliders">Slide 6</div>
    </div>
    <button class="slick-next">Next</button>
</div>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Slick JS -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<!-- Custom JS -->
<script type="text/javascript">
    $(document).ready(function(){
        $('.sliders').slick({
            dots: true,
            infinite: true,
            speed: 500,
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            centerMode: true, /* Enable center mode */
            centerPadding: '0', /* No padding around center slide */
            prevArrow: $('.slick-prev'),
            nextArrow: $('.slick-next'),
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 3, /* Show 3 slides for tablet */
                        slidesToScroll: 1,
                        infinite: true,
                        dots: true,
                        centerMode: true,
                        centerPadding: '0',
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1, /* Show 1 slide for mobile */
                        slidesToScroll: 1,
                        centerMode: true,
                        centerPadding: '0',
                    }
                }
            ]
        });

        $('.item-sliders').hover(function() {
            $('.item-sliders').not(this).addClass('blurred');
        }, function() {
            $('.item-sliders').removeClass('blurred');
        });
    });
</script>

</body>
</html>
