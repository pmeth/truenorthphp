<?php
ini_set('date.timezone', 'America/Toronto');
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

    header('Location: mobile.php');
    exit;
  }
}

header('Content-Type: text/html; charset=UTF-8');
?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="UTF-8">
      <title>True North PHP Conference - November 7-9, 2013 - Toronto, Canada</title>
      <?php foreach ($css as $name): ?>
      <link rel="stylesheet" href="<?php echo $name ?>">
      <?php endforeach; ?>
      <link href='http://fonts.googleapis.com/css?family=Buenard|Muli' rel='stylesheet' type='text/css'>
   </head>
   <body>
<?php include 'navigation.php'; ?>
