<?php
$page = 'schedule';
$extra_css = array(
    'js/fancyapps-fancyBox-2bb0da9/source/jquery.fancybox.css?v=2.1.0',
    'css/schedule.css',
);
?>
<?php include '../header.php'; ?>
      <div class="content-wrapper">
         <div class="container">
            <div class="row">
               <div class="span12">
                  <div class="page-header">
                     <h1>True North PHP Conference Schedule</h1>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="span12" >
<?php include '../schedule.php'; ?>
               </div>
            </div>
            <hr>
         </div>
      </div>
      <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
      <script type="text/javascript" src="js/fancyapps-fancyBox-2bb0da9/source/jquery.fancybox.js?v=2.1.0"></script>
      <script type="text/javascript">
         $(document).ready(function() {
            $(".fancybox").fancybox();
         });
      </script>
<?php include '../footer.php'; ?>
   </body>
</html>
