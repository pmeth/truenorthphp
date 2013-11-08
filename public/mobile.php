<?php
//Mobile Redirect Message screen

//set cookie so they aren't bugged again for 2 hours
setcookie('mobileNoPrompt','noPrompt',time() + 7200); // 7200 = 2 hours
?>
<!DOCTYPE html>
<html>
   <head>
      <title>True North PHP Conference - November 7-9, 2013 - Toronto, Canada</title>

        <link rel="stylesheet" href="css/bootstrap.min.css">
       <link rel="stylesheet" href="css/mobile.css">

      <link href='http://fonts.googleapis.com/css?family=Buenard|Muli' rel='stylesheet' type='text/css'>
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

   </head>
   <body>

   <div id='mobileAsk'>
       <div class='mobileLogo'>
           <img src='img/TNPHPlogo-mobile.png' />
       </div>
       <h3>A mobile web app is available</h3>
       <h3>Would you like to go there now?</h3>
       <div class='mobileBtnArea'><a href='http://eventmobi.com/truenorthphp/' class='btn btn-primary'>Go Mobile</a> <a href='/index.php' class='btn'>Close this</a></div>
       <a class='mobileSponsor' href='http://eventmobi.com/'>Mobile site courtesy of sponsor<br/> <img src='img/eventmobi_logo.png' /></a>
   </div>
   </body>
</html>
