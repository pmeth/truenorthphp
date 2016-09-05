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

$css = array('bootstrap/css/bootstrap.css', 'css/truenorth.css');
if (isset($extra_css)) {
  $css = array_merge($css, $extra_css);
}
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
<!DOCTYPE html>
<html>
   <head>
      <meta charset="UTF-8">
      <title>True North PHP Conference - November 3-5, 2016 - Toronto, Canada</title>
      <?php foreach ($css as $name): ?>
      <link rel="stylesheet" href="<?php echo $name ?>">
      <?php endforeach; ?>
      <link href='http://fonts.googleapis.com/css?family=Buenard|Muli' rel='stylesheet' type='text/css'>
   </head>
   <body>
<?php include 'navigation.php'; ?>
