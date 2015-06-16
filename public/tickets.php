<?php
$page = 'tickets';
?>
<?php include '../header.php'; ?>
      <div class="content-wrapper">
         <div class="container">
            <div class="row">
               <div class="span12">
                  <div class="page-header">
                     <h1>Buy Tickets</h1>
                  </div>
               </div>
               <div class="span12">
                  <p>There are only 250 tickets available for True North PHP, so buy your tickets early before they sell out.</p>
<?php if (time() < strtotime('2015-10-01')) : ?>
                  <p>Early bird tickets are just $225 until October 1.</p>
<?php else : ?>
                  <p>Tickets are just $275 until event day.</p>
<?php endif; ?>
                  <p>
				      <ul>
					      <li>Conference/Early Bird ticket gives you access to all the events on Friday November 6 and Saturday November 7.</li>
				          <li>Tutorial day tickets give you access to all sessions on Thursday, November 5.</li>
                      </ul>
                  </p>
                  <p style="color:red; font-weight:bold">** Please note that all ticket sales are final and we are unable to offer refunds.</p>
               </div>
               <div class="span12">
                  <hr>
               </div>
			   <!--
               <div class="span12" >
                  <iframe
                     src="//eventbrite.ca/tickets-external?eid=13016932997&ref=etckt"
                     frameborder="0"
                     height="352"
                     width="100%"
                     vspace="0"
                     hspace="0"
                     marginheight="5"
                     marginwidth="5"
                     scrolling="auto"
                     allowtransparency="true"
                     ></iframe>
                  <div style="font-family:Helvetica, Arial; font-size:10px; padding:5px 0 5px; margin:2px; width:100%; text-align:left;" >
                     <a style="color:#ddd; text-decoration:none;" target="_blank" href="http://www.eventbrite.ca/r/etckt">Event registration</a>
                     <span style="color:#ddd;">for</span>
                     <a style="color:#ddd; text-decoration:none;" target="_blank" href="https://www.eventbrite.ca/e/true-north-php-conference-2014-tickets-13016932997?ref=etckt">True North PHP Conference 2014</a>
                     <span style="color:#ddd;">powered by</span> <a style="color:#ddd; text-decoration:none;" target="_blank" href="http://www.eventbrite.ca?ref=etckt">Eventbrite</a>
                  </div>
               </div>
			   -->
            </div>
         </div>
      </div>
<?php include '../footer.php'; ?>
   </body>
</html>
