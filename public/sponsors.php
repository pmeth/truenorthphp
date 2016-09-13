<!doctype html>
<html class="no-js" lang="en">
<?php include '../page_header.php' ?>
	<body id="top">
		<!--[if lt IE 9]>
			<p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
		<![endif]-->
<?php include '../navigation.php' ?>
<div class="key-visual">

    <h1 class="page-title"><span>Sponsors</span></h1>

</div>

<section class="section-default">

	<h2 class="section-title">Current Sponsors</h2>
	<p class="subline">Platium, Gold, Silver and Bronze Level</p>


	<div class="speaker-card">
		<div class="swiper-navigation">
			<button type="button" class="swiper-button-prev"></button>
			<button type="button" class="swiper-button-next"></button>
			<div class="swiper-pagination"></div>
		</div>
		<ul class="speaker-card__list">


			<li class="speaker-card__slide">

				<div class="speaker-card__item">

					<h3 class="speaker-card__name">Microsoft Azure</h3>

					<img class="speaker-card__img" src="/img/sponsors/azure-logo.png" alt="Microsoft Azure" width="200" height="200">

					<div class="speaker-card__info">
                        <h3>Platinum Sponsor</h3>
                        <p>
                        Microsoft Azure is open, flexible and a scalable platform which is a great choice for app creation. Azure supports virtual machines on several Linux flavors such as CentOS, Ubuntu, Suse. Not only does it support open platforms but also open development tools. Support for the various development tools is pretty exhaustive. For example, look into what we have in store for Azure and PHP at the <a href="http://azure.microsoft.com/en-us/develop/php/" target="_blank">PHP Development Centre</a>, a rich resource for tutorials and documentation, which will enable you to get started with development on the cloud. Also look into the support for <a href="https://visualstudiogallery.msdn.microsoft.com/6eb51f05-ef01-4513-ac83-4c5f50c95fb5" target="_blank">PHP tools for Visual Studio</a>, which provides a well known editor for PHP, HTML/JAVA/CSS support and most importantly integration with Azure itself.<br>
                    <br>
                    <a href="http://blogs.msdn.com/b/cdndevs/archive/2014/10/31/its-all-about-being-open.aspx">Read more...</a>
                </p>
					</div>
				</div>
			</li>
			<li class="speaker-card__slide">
				<div class="speaker-card__item">
					<h3 class="speaker-card__name">Delvia</h3>
					<img class="speaker-card__img" src="img/sponsors/delvia-logo.png" alt="Delvia" width="200" height="200">
					<div class="speaker-card__info">
                        <h3>Silver Sponsor</h3>
						<p>Delvia started when several senior developers, linux system administrators and DevOps engineers got to talking about our observations about the software development industry. We agreed that companies universally have issues hiring and keeping the right people in the area of DevOps. We also agreed that developers, operations peoplre and devops engineers employed by large companies can have a tendency to not keep their skills up to date and thus have a difficult time adapting to a rapidly changing development landscape.
                        </p>
                        <p>
As a result of this conversation we concluded that we should join together. Using our vast experience we could provide a better alternative and offer it to businesses of all sizes. We made a resolution to acquire the best talent, use the best tools and provide the necessary training to stay on top of the DevOps industry.</p>
					</div>
				</div>
			</li>
			<li class="speaker-card__slide">
					<h3 class="speaker-card__name">Grumpy Learning</h3>
					<img class="speaker-card__img" src="img/sponsors/grumpy-learning.png" alt="Grumpy Learning" width="200" height="200">
                    <h3>Silver Sponsor</h3>
					<div class="speaker-card__info">
                        <p>
                            Let a grumpy programmer teach you how to get better at testing your PHP code.
                        </p>
                        <p>
                            Vist <a href="https://grumpy-learning.com">https://grumpy-learning.com</a> to learn more.
                        </p>
					</div>
				</div>
			</li>
		</ul>
		<div class="swiper-navigation">
			<button type="button" class="swiper-button-prev"></button>
			<button type="button" class="swiper-button-next"></button>
			<div class="swiper-pagination"></div>
		</div>
	</div>
</section>
<script>

var mq = window.matchMedia("(max-width: 767px)");
var mySwiper;
var mySwiperConf = {
	loop: true,
	pagination: '.swiper-pagination',
	// Navigation arrows
	nextButton: '.swiper-button-next',
	prevButton: '.swiper-button-prev',
	slideClass: 'speaker-card__slide',
	wrapperClass: 'speaker-card__list',
	paginationType: 'fraction'
}

var handleMq = function(mq){

	if ( mq.matches ) {
		mySwiper = new Swiper ('.speaker-card', mySwiperConf);
	}
	else if( mySwiper ) {

		mySwiper.destroy(true,true);
		mySwiper = undefined;
		document.querySelector('.speaker-card__slide').removeAttribute('style');
		document.querySelector('.speaker-card__list').removeAttribute('style');
	}
}

mq.addListener(handleMq);
handleMq(mq);
</script>


<section class="section-default">

	<h2>Community Level Sponsors</h2>
	<div class="swiper-container swiper--sponsor-widget">
	<!-- Additional required wrapper -->
	<div class="swiper-wrapper">
		<!-- Slides -->
        <!--
		<div class="swiper-slide">
			<img src="img/sponsors/vehikl-logo.png" alt="vehikl-logo">
		</div>
        -->
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

</section>

<section class="section-default">
	<section class="section-highlight">
		<h2>Sponsor Information</h2>
		<p>As a sponsor of True North PHP, you are helping to promote the PHP development community in and around Toronto. Several sponsorship levels are available. Please download the prospectus and contact us at conference@truenorthphp.ca to express your intention to sponsor our event.</p>

		<p><a href="files/TrueNorthPHP_Sponsorship-Prospectus.pdf" class="btn">Download The Sponsorship Prospectus</a></p>
	</section>
</section>

                <div class="badge">
	<svg width="80" height="85" viewBox="0 0 80 85" class="badge__sign">
		<path d="M19 65.8l3.5-8c.4-1 .2-1.2-.4-1.7L1 41l-1-1 6.4-2-3.7-14 14 3.6 2-6.4L29 35.4h.2l-3.7-25 6.4 3.3L40 0l8 13.6 6.3-3.5-3.7 25.6h.2l10.6-14 1.8 6.3 14-3.8-3.6 14 6.4 2-1 .8-21 15c-.7.6-1 1-.5 1.8l3 7 .3 1-19.3-2.2.3 20.6h-2.4l.3-20.7L19 65.8" fill="#E5172C"/>
	</svg>

	<h1 class="badge__title">True North PHP Conference 2016</h1>
	<div class="badge__location">
		Toronto, Canada <time class="badge__time">November 3 – 5, 2016</time>
	</div>
	<a href="" class="link-more">Get Your Tickets Here</a>
</div>


<?php require '../footer.php'; ?>
   </body>
</html>
