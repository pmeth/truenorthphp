<?php
$page = 'speakers';
$speakers = array();

$filenames = array();
$iterator = new DirectoryIterator('../speaker_data');
foreach ($iterator as $fileinfo) {
   if ($fileinfo->isFile() && $fileinfo->getExtension() == 'php') {
      $filenames[] = $fileinfo->getFilename();
   }
}
sort($filenames);

foreach ($filenames as $filename) {
  include '../speaker_data/' . $filename;
}

?>
<!doctype html>
<html class="no-js" lang="en">
<?php include '../page_header.php' ?>
	<body id="top">
		<!--[if lt IE 9]>
			<p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
		<![endif]-->
<?php include '../navigation.php' ?>
<div class="key-visual">

    <h1 class="page-title"><span>Speaker Information</span></h1>

</div>
<?php //include '../logo.php' ?>
</header>
<main role="main" class="content">
<section class="section-default">
<ol class="speaker-shortlinks">
    <?php foreach ($speakers as $speaker) : ?>
    <li><a href="#<?php echo strtolower(preg_replace('/\s+/', '', $speaker['name']))?>"><?php echo $speaker['name'] ?></a></li>
    <?php endforeach; ?>
</ol>
<div class="speaker-card">
    <div class="swiper-navigation">
        <button type="button" class="swiper-button-prev"></button>
        <button type="button" class="swiper-button-next"></button>
        <div class="swiper-pagination"></div>
    </div>

    <ul class="speaker-card__list">
    <?php foreach ($speakers as $speaker) : ?>

        <?php $speaker_id = strtolower(preg_replace('/\s+/', '', $speaker['name'])) ?>
        <li class="speaker-card__slide">
            <div class="speaker-card__item" id="<?php echo $speaker_id ?>">
                <h3 class="speaker-card__name"><?php echo $speaker['name']?></h3>
                <img class="speaker-card__img" src="<?php echo $speaker['image']?>" alt="Picture of <?php echo $speaker['name']?>" width="200" height="200">
                <div class="speaker-card__info">
                    <?php echo $speaker['bio'] ?>
                </div>
                <div class="talks">
                    <h4 class="talks__heading">Talks</h4>
                    <ul class="talks__list">
                        <?php foreach ($speaker['talks'] as $idx => $talk) : ?>
                        <?php $talk_id = $speaker_id . $idx ?>
                        <li class="talks__item">
                            <h3 class="talks__title"><?php echo $talk['title']?></h3>
                            <input class="talks__checkbox" type="checkbox" id="unique_id<?php echo $talk_id ?>">
                            <label class="talks__readmore" for="unique_id<?php echo $talk_id ?>">Talk Content</label>
                            <div class="talks__description">
                                <?php echo $talk['text'] ?>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </li>
        <?php endforeach; ?>
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
<?php include '../footer.php' ?>
	</body>
</html>
