<?php
$page = 'index';
$extra_css = array('css/index.css');
?>
<?php include '../header.php'; ?>
      <div class="content-wrapper">
         <div class="container">
            <div class="row marketing">
               <div class="span8">
                  <div class="row">
                     <div class="span4">
                        <img class="bs-icon" src="img/glyphicons/png/glyphicons_244_conversation.png">
                        <h2>All About Community</h2>
                        We are firm believers that the PHP community is second to none.  We also believe that Toronto has an awesome PHP community and deserves an equally awesome conference.  Those beliefs are what inspired us to create True North PHP, a conference designed to showcase Toronto's talent and give back to the community that has given us so much.
                     </div>
                     <div class="span4">
                        <img class="bs-icon" src="img/glyphicons/png/glyphicons_022_fire.png">
                        <h2>World Class Speakers</h2>
                        Part of our mission is to bring you a great lineup of speakers.  To accomplish that we are reaching out to PHP experts from Toronto and around the world.  We are sure you will recognize many of them as being leaders of the PHP community, respected authors and renowned public speakers.  We also want to give newer speakers the opportunity to showcase their expertise.  All-in-all True North PHP promises to feature a spectacular lineup of engaging and high quality talks that you won't soon forget.
                     </div>
                  </div>
                  <div class="row">
                     <hr>
                     <div class="span8 centered-text">
                        <h1 style="float: left;">Speakers have been announced</h1>
                        <a href="speakers.php" class="btn btn-large btn-warning">View the List</a>
                     </div>
                  </div>
                  <div class="row">
                     <hr>
                  </div>
                  <div class="row">
                     <div class="span8 centered-text">
                        <h1 style="float:left">Tickets just $150 for both days </h1>
                        <h6>Hurry, prices go up Oct 1st!</h6>
                        <a href="tickets.php" class="btn btn-large btn-success">Order Your Tickets Now</a>
                     </div>
                  </div>
               </div>
               <div class="span4">
                  <div id="twitter2" class="twitter"></div>
               </div>
            </div>
         </div>
      </div>
<?php include '../footer.php'; ?>
      <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.js"></script>
      <script type="text/javascript" src="http://malsup.github.com/jquery.corner.js"></script>
      <script type="text/javascript" src="http://malsup.github.com/chili-1.7.pack.js"></script>
      <script type="text/javascript" src="js/jquery.twitter.search.js"></script>
      <script type="text/javascript">

         $(document).ready(function() {
            $('#twitter2').twitterSearch({
               term: 'truenorthphp',
               title: 'Tweets for <a href="https://twitter.com/#!/search/realtime/%40truenorthphp">@TrueNorthPHP</a>',
               bird: false,
               css: {
                  img: { width: '30px', height: '30px' }
               }
            });

         });

      </script>
   </body>
</html>
