<?php
ini_set('date.timezone', 'America/Toronto');
date_default_timezone_set('America/Toronto');

class Ticket
{
    const SOON  = 1;
    const EARLY = 2;
    const OPEN  = 3;
    const OVER  = 4;

    private $earlyStart;
    private $earlyEnd;
    private $salesEnd;
    private $earlyPrice;
    private $regularPrice;

    public function __construct(DateTime $earlyStart, DateTime $earlyEnd, DateTime $salesEnd, $earlyPrice, $regularPrice)
    {
        $this->earlyStart = $earlyStart;
        $this->earlyEnd = $earlyEnd;
        $this->salesEnd = $salesEnd;
        $this->earlyPrice = $earlyPrice;
        $this->regularPrice = $regularPrice;
    }

    public function getSaleState()
    {
        $today = new DateTime;
        if ($today < $this->earlyStart) {
            return $this::SOON;
        }
        if ($today < $this->earlyEnd) {
            return $this::EARLY;
        }
        if ($today < $this->salesEnd) {
            return $this::OPEN;
        }

        return $this::OVER;
    }

    public function getEarlyPrice()
    {
        return $this->earlyPrice;
    }

    public function getRegularPrice()
    {
        return $this->regularPrice;
    }

    public function getEarlyEnd()
    {
        return $this->earlyEnd;
    }
}

class View
{

}

$view = new View;

$view->ticket = new Ticket(
    new DateTime('2016-08-15'),
    new DateTime('2016-10-01'),
    new DateTime('2016-11-07'),
    250,
    300
);

$view->cfpOpen = false;
$view->speakersAnnounced = true;
$view->scheduleAnnounced = true;

// Check for Mobile Browser

if (!isset($_COOKIE['mobileNoPrompt'])){

  require_once 'vendor/mobiledetect/mobiledetectlib/Mobile_Detect.php';
  $detect = new Mobile_Detect();
  if ($detect->isMobile()) {
    // if mobile Device move to mobile prompt page

    //header('Location: mobile.php');
    //exit;
  }
}

header('Content-Type: text/html; charset=UTF-8');
?>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>Index</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="apple-touch-icon" href="apple-touch-icon.png">
		<!-- Place favicon.ico in the root directory -->
		<link href="https://fonts.googleapis.com/css?family=Bree+Serif|Muli:300,400,400i" rel="stylesheet">
		<link rel="stylesheet" href="./css/style.css">
		<script src="https://cdn.polyfill.io/v2/polyfill.min.js"></script>
		<script src="./js/main.js"></script>
		<script src="js/vendor/swiper.min.js"></script>
	</head>
    <body id="top">
<?php include 'navigation.php'; ?>
<div class="key-visual">

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
