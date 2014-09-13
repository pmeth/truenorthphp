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
<?php include '../header.php'; ?>
      <div class="content-wrapper">
         <div class="container">
            <div class="row">
               <div class="span12">
                  <div class="page-header">
                     <h1>Speaker Information</h1>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="span12" >
                  We are very excited to feature the following Speakers and Talks at the True North PHP Conference.
               </div>
            </div>
            <hr>
<?php foreach ($speakers as $speaker) : ?>
            <div class="row">
               <div class="span3">
                  <img
                     src="<?php echo $speaker['image']; ?>"
                     width="200" height="200"
                     alt="<?php echo $speaker['name']; ?>"
                     title="<?php echo $speaker['name']; ?>"
                  >
               </div>
               <div class="span9">
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
                  <h3>Talks</h3>
   <?php foreach ($speaker['talks'] as $talk) : ?>
                    <h4><?php echo htmlentities($talk['title']); ?></h4>
                    <p>
                      <?php echo preg_replace('|<br ?/?>|','</p><p>',nl2br($talk['text'])); ?>
                    <p>
   <?php endforeach; ?>
               </div>
            </div>
            <hr>
<?php endforeach; ?>
         </div>
      </div>
<?php include '../footer.php'; ?>
   </body>
</html>
