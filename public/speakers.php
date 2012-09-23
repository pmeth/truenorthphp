<?php
$page = 'speakers';
$speakers = array(
// Start Speaker : Chris Hartjes
  array(
    'name' => 'Chris Hartjes',
    'twitter' => 'grmpyprogrammer',
    'image' => 'http://www.gravatar.com/avatar/27601bca8f38e75cbcf9d2dc843f0b32?s=200',
    'bio' => 'This is some information about the speaker. Maybe we might see something about their experience or involvement in the open source community.',
    'talks' => array(
      array(
        'title' => 'Some kind of talk that the speaker will be speaking about',
        'description' => 'This is a description of the first talk. In this talk you would probably expect to learn a little something about a topic and maybe even find the next tool in your arsenal.',
      ),
      array(
        'title' => 'This would be the second talk that the speaker is giving',
        'description' => 'This is a description of the second talk. In this talk you would probably expect to learn a little something about a topic and maybe even find the next tool in your arsenal.',
      ),
    ),
  ),
// End Speaker : Chris Hartjes

// Start Speaker : Peter Meth
  array(
    'name' => 'Peter Meth',
    'twitter' => 'mrpmeth',
    'image' => 'http://www.gravatar.com/avatar/72ee8b1e25eed29e20e4039657741053?s=200',
    'bio' => 'This is some information about the speaker. Maybe we might see something about their experience or involvement in the open source community.',
    'talks' => array(
      array(
        'title' => 'Some kind of talk that the speaker will be speaking about',
        'description' => 'This is a description of the first talk. In this talk you would probably expect to learn a little something about a topic and maybe even find the next tool in your arsenal.',
      ),
      array(
        'title' => 'This would be the second talk that the speaker is giving',
        'description' => 'This is a description of the second talk. In this talk you would probably expect to learn a little something about a topic and maybe even find the next tool in your arsenal.',
      ),
    ),
  ),
// End Speaker : Peter Meth

);
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
                  <img src="<?php echo $speaker['image']; ?>" width="200" height="200" />
               </div>
               <div class="span9">
                  <h3><?php
                     echo $speaker['name'];
                     if (!empty($speaker['twitter'])) {
                        echo ' [<a href="https://twitter.com/' . $speaker['twitter'] . '">@' . $speaker['twitter'] . '</a>]';
                     }
                  ?></h3>
                  <p>
                    <?php echo $speaker['bio']; ?>
                  </p>
                  <h3>Talks</h3>
   <?php foreach ($speaker['talks'] as $talk) : ?>
                    <h4><?php echo $talk['title']; ?></h4>
                    <p>
                      <?php echo $talk['description']; ?>
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
