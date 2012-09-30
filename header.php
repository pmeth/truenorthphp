<?php
  $css = array('bootstrap/css/bootstrap.css', 'css/truenorth.css');
  if (isset($extra_css)) {
    $css = array_merge($css, $extra_css);
  }
?>
<!DOCTYPE html>
<html>
   <head>
      <title>True North PHP Conference - November 2-3 - Toronto, Canada</title>
      <?php foreach ($css as $name) { ?>
      <link rel="stylesheet" href="<?php echo $name ?>">
      <?php } ?>
      <link href='http://fonts.googleapis.com/css?family=Buenard|Muli' rel='stylesheet' type='text/css'>
   </head>
   <body>
<?php include 'navigation.php'; ?>
