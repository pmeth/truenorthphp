<?php


// Now load in our talks
$fp = fopen('../speaker_data/talks.csv', 'r');
$talks = array();

while (($data = fgetcsv($fp, 10000, ",")) !== false) {
    $speaker[$data[1]] = $data[0];
    $talks[$data[1]] = array(
        'title' => $data[1],
        'speaker' => str_replace(' ', '_', $data[0]),
        'description' => $data[2]
    );
}

$talk = $talks[$_GET['name']];

// Find the speaker we want
$speakers = array();
include "../speaker_data/{$talk['speaker']}.php";
$speaker = $speakers[0];
    
?><!DOCTYPE html>
<html>
   <head>
      <title>True North PHP Conference - November 7-9, 2013 - Toronto, Canada</title>
         <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
         <link rel="stylesheet" href="css/truenorth.css">
         <link href="http://fonts.googleapis.com/css?family=Buenard|Muli" rel="stylesheet" type="text/css">
   </head>
   <body>
      <div class="content-wrapper">
         <div class="container">
            <hr>
            <div class="row">
               <div class="span3">
                  <img
                     src="<?php echo $speaker['image']; ?>"
                     width="200" height="200"
                     alt="<?php echo $speaker['name']; ?>"
                     title="<?php echo $speaker['name']; ?>"
                  >
               </div>
               <div class="span7">
                  <h3>
                  <img
                     class="country-flag"
                     src="img/flags/<?php echo $speaker['country']; ?>.png"
                     width="24" height="24"
                     alt="<?php echo ($speaker['city'] ? $speaker['city'] . ', ' : '') . $speaker['country']; ?>"
                     title="<?php echo ($speaker['city'] ? $speaker['city'] . ', ' : '') . $speaker['country']; ?>"
                  >
                     <?php echo $speaker['name']; ?>
   <?php if (!empty($speaker['twitter'])) : ?>
                     [<a href="https://twitter.com/<?php echo $speaker['twitter']; ?>">@<?php echo $speaker['twitter']; ?></a>]
   <?php endif; ?>
                  </h3>
                  <p>
                    <?php echo preg_replace('|<br ?/?>|','</p><p>',nl2br($speaker['bio'])); ?>
                  </p>
                  <h3><?php echo $talk['title']; ?></h3>
                  <p>
                     <?php echo preg_replace('|<br ?/?>|','</p><p>',nl2br($talk['description'])); ?>
                  <p>
               </div>
            </div>
         </div>
      </div>
   </body>
</html>
