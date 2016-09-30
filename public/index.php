<!doctype html>
<html class="no-js" lang="en">
<?php include '../page_header.php' ?>
    <body id="top">
        <!--[if lt IE 9]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->
<?php include '../navigation.php' ?>
<?php include '../logo.php' ?>
</header>

            <main role="main" class="content">


<section class="section-default">

    <h2 class="section-title">A 3-day community-driven conference for PHP developers featuring well known speakers from around the world</h2>

    <div class="grid-50-50">
        <div class="grid__item">
            <h3>All About Community</h3>
            <p>We are firm believers that the PHP community is second to none. We also believe that Toronto has an awesome PHP community and deserves an equally awesome conference. Those beliefs are what inspired us to create True North PHP, a conference designed to showcase Toronto's talent and give back to the community that has given us so much.</p>
            <p><a href="http://www.confcodeofconduct.com/">Please read our Code of Conduct</a></p>
        </div>
        <div class="grid__item">
            <h3>World Class Speakers</h3>
            <p>Part of our mission is to bring you a great lineup of speakers. To accomplish that we are reaching out to PHP experts from Toronto and around the world. We are sure you will recognize many of them as being leaders of the PHP community, respected authors and renowned public speakers. We also want to give newer speakers the opportunity to showcase their expertise. All-in-all True North PHP promises to feature a spectacular lineup of engaging and high quality talks that you won't soon forget.</p>
        </div>
    </div>

    <section class="section-highlight">

    <h2 class="section-title">@truenorthphp  #tnphp</h2>
    <p class="subline"><a href="https://twitter.com/truenorthphp">Follow us on Twitter</a> | <a href="https://www.facebook.com/TrueNorthConference/">Join us on Facebook</a></p>
</section>


</section>


<section class="section-default">

    <h2 class="section-title">Our Sponsors in 2016</h2>

    <div class="swiper-container swiper--sponsor-widget">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide">
            <img src="img/sponsors/vehikl-logo.png" alt="vehikl-logo">
        </div>

        <div class="swiper-slide">
            <img src="img/sponsors/azure-logo.png" alt="azure-logo">
        </div>

        <div class="swiper-slide">
            <img src="img/sponsors/wonderproxy-logo.png" alt="wonderproxy-logo">
        </div>

        <div class="swiper-slide">
            <img src="img/sponsors/testlauncher-logo.png" alt="testlauncher-logo">
        </div>

        <div class="swiper-slide">
            <img src="img/sponsors/delvia-logo.png" alt="delvia-logo">
        </div>

        <div class="swiper-slide">
            <img src="img/sponsors/grumpy-learning.png" alt="grumpy-learning-logo">
        </div>

        <div class="swiper-slide">
            <img src="img/sponsors/noerdisch-logo.svg" alt="noerdisch-logo">
        </div>
    </div>
    <!-- If we need pagination -->


    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>

</div>

<script>
var mySwiper = new Swiper ('.swiper-container', {
    loop: true,

    // If we need pagination
    // pagination: '.swiper-pagination',

    // Navigation arrows
    nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',

    paginationClickable: true,
    slidesPerView: 2,
    // slidesPerGroup: 4,

    breakpoints: {
        1024: {
            slidesPerView: 2,
            // slidesPerGroup: 4
        },
        768: {
            slidesPerView: 2,
            // slidesPerGroup: 3
        },
        640: {
            slidesPerView: 2,
            // slidesPerGroup: 2
        },
        480: {
            slidesPerView: 1,
            // slidesPerGroup: 1
        }
    }

})
</script>


    <p><a href="sponsors.php" class="btn">More About The Sponsors</a> <a href="https://truenorthphp.ca/files/TrueNorthPHP_Sponsorship-Prospectus.pdf" class="btn">Download The Sponsorship Prospectus</a></p>
</section>


<section class="section-highlight">
<?php
// Load all our speakers details so we can view them
foreach(glob("../speaker_data/*.php") as $filename) {
    include $filename;
}
?>

    <h2 class="section-title">We are very excited to feature the following Speakers and Talks at the True North PHP Conference</h2>

    <!-- Slider main container -->
    <div class="swiper-container swiper--speaker-widget">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <?php foreach ($speakers as $speaker) : ?>
                <a class="swiper-slide" href="speakers.php#<?php echo strtolower(preg_replace('/\s+/', '', $speaker['name']))?>">
                    <img class="speaker-widget__img" src="<?php echo $speaker['image'] ?>" alt="<?php echo $speaker['name']?>">
                    <h3 class="speaker-widget__name"><?php echo $speaker['name'] ?></h3>
                </a>
            <?php endforeach; ?>
        </div>
        <!-- If we need pagination -->


        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>

    </div>

    <script>
    var mySwiper = new Swiper ('.swiper-container', {
        loop: true,

        // If we need pagination
        // pagination: '.swiper-pagination',

        // Navigation arrows
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',

        paginationClickable: true,
        slidesPerView: 4,
        // slidesPerGroup: 4,

        breakpoints: {
            1024: {
                slidesPerView: 4,
                // slidesPerGroup: 4
            },
            768: {
                slidesPerView: 3,
                // slidesPerGroup: 3
            },
            640: {
                slidesPerView: 2,
                // slidesPerGroup: 2
            },
            480: {
                slidesPerView: 1,
                // slidesPerGroup: 1
            }
        }

    })
    </script>

    <p><a href="speakers.php" class="btn">More About The Speakers</a> <a href="schedule.php" class="btn">Schedule Of All Talks</a></p>
</section>


            </main>
<?php include '../footer.php' ?>
    </body>
</html>
