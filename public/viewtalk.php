<?php

$speakers = array();

$filenames = array();
$iterator = new DirectoryIterator('../speaker_data');
foreach ($iterator as $fileinfo) {
   if ($fileinfo->isFile()) {
      $filenames[] = $fileinfo->getFilename();
   }
}
sort($filenames);

foreach ($filenames as $filename) {
  include '../speaker_data/' . $filename;
}

$speaker = array(
    'name' => 'Unknown Speaker',
    'image' => 'http://www.truenorthphp.ca/img/no-pic.jpg',
    'city' => '',
    'country' => 'Canada',
    'bio' => '',
);

$talk = array(
    'title' => 'Whoooops',
    'text' => "It seems we've made a bit of a boo boo and forgotten to include this speaker's information and talk description",
);
// I am aware this is sort of ridiculous, but I want to reuse the speaker data that is being forked on github.  If I planned it a bit better, I would have organized the talks separate from the speakers
foreach ($speakers as $speaker_profile) {
   foreach ($speaker_profile['talks'] as $speaker_talk) {
      if ($_GET['name'] == strtolower(preg_replace('/[^A-Za-z0-9]/','_',$speaker_talk['title']))) {
         $speaker = $speaker_profile;
         $talk = $speaker_talk;
         break 2; // we should now have valid $speaker and $talk variables
      }
   }
}
?><!DOCTYPE html>
<html>
   <head>
      <title>True North PHP Conference - November 6-8, 2014 - Toronto, Canada</title>
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
                     alt="<?php echo ($speaker['city'] ? $speaker['city'] . ', ' : '') , $speaker['country']; ?>"
                     title="<?php echo ($speaker['city'] ? $speaker['city'] . ', ' : '') , $speaker['country']; ?>"
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
                     <?php echo preg_replace('|<br ?/?>|','</p><p>',nl2br($talk['text'])); ?>
                  <p>
               </div>
            </div>
         </div>
      </div>
   </body>
</html>
