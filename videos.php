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

<div class="videos  pt-5 pb-3">
    <div class="container">
        <h4 class="text-center">Our Videos</h4>
        <div id="content" class="content">
            <div class="row">
                <div class="col-lg-3 py-3">
                    <div class="video_container">
                        <video class="video-fluid" controls>
                            <source src="assets/video/1.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <div class="video_overlay">
                            <i class="fa fa-eye"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 py-3">
                    <div class="video_container">
                        <video class="video-fluid" controls>
                            <source src="assets/video/2.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <div class="video_overlay">
                            <i class="fa fa-eye"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 py-3">
                    <div class="video_container">
                        <video class="video-fluid" controls>
                            <source src="assets/video/3.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <div class="video_overlay">
                            <i class="fa fa-eye"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- Background video_overlay -->
<div id="background-video_overlay" class="background-video_overlay d-none"></div>

<!-- video_popup container -->
<div id="video-video_popup" class="video_popup d-none">
    <span class="video_close">&times;</span>
    <video class="video_popup-content" id="video_popup-video" controls>
        <source id="video_popup-video-source" src="" type="video/mp4">
        Your browser does not support the video tag.
    </video>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const imgContainers = document.querySelectorAll('.video_container');
        const video_popup = document.getElementById('video-video_popup');
        const video_popupVideo = document.getElementById('video_popup-video');
        const video_popupVideoSource = document.getElementById('video_popup-video-source');
        const video_closeBtn = document.querySelector('.video_close');
        const content = document.getElementById('content');
        const backgroundvideo_overlay = document.getElementById('background-video_overlay');

        imgContainers.forEach(container => {
            container.addEventListener('click', function () {
                const videoSrc = this.querySelector('video source').src;
                video_popupVideoSource.src = videoSrc;
                video_popupVideo.load();
                video_popup.classList.remove('d-none');
                backgroundvideo_overlay.classList.remove('d-none');
                content.classList.add('video_blured_background');
            });
        });

        video_closeBtn.addEventListener('click', function () {
            video_popup.classList.add('d-none');
            backgroundvideo_overlay.classList.add('d-none');
            content.classList.remove('video_blured_background');
            video_popupVideo.pause();
        });

        // video_close video_popup when clicking outside the video
        backgroundvideo_overlay.addEventListener('click', function () {
            video_popup.classList.add('d-none');
            backgroundvideo_overlay.classList.add('d-none');
            content.classList.remove('video_blured_background');
            video_popupVideo.pause();
        });
    });

</script>
<?php include_once ("includes/suscriber.php"); ?>
<?php  include_once("apply_now.php"); ?>

<?php include_once ("includes/footer.php"); ?>

