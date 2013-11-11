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
                  <p>
                     Well, the 2013 edition of True North PHP is over, but you can still relive the event by purchasing Video on Demand (VoD) tickets.
                  </p>
                  </p>
                     We are still going through the footage that we captured, so we do not have a full inventory of which videos are part of the package, however a Video on Demand ticket will give you full access to all videos that were captured as soon as they are available.
                  </p>
                  </p>
                     Click the <b>Buy Now</b> button below to start the purchase of VoD tickets.
                  </p>
                  <p>
                  <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                     <input type="hidden" name="cmd" value="_s-xclick">
                     <input type="hidden" name="hosted_button_id" value="9AJ5D4HPNQJRE">
                     <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                     <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                  </form>
                  </p>
               </div>
               <!-- disabled until ticket sales start
                  <div class="span12">
                     <p>There are only 250 tickets available for True North PHP, so buy your tickets early before they sell out.</p>
                        <?php if (time() < strtotime('2013-10-01')) : ?>
                        <p>Early bird tickets are just $175 until October 1.</p>
                        <?php else : ?>
                        <p>Tickets are just $250 until event day.</p>
                        <?php endif; ?>
                     <p>Each ticket gives you access to all the events on Friday November 8 and Saturday November 9.  Tutorial day tickets give you access to all sessions on Thursday, November 7.</p>
                     <p style="color:red; font-weight:bold">** Please note that all ticket sales are final and we are unable to offer refunds.</p>
                  </div>
                  <div class="span12">
                     <hr>
                  </div>
                  <div class="span12" >
                     <iframe
                        src="http://www.eventbrite.ca/tickets-external?eid=6821905503&ref=etckt"
                        frameborder="0"
                        height="256"
                        width="100%"
                        vspace="0"
                        hspace="0"
                        marginheight="5"
                        marginwidth="5"
                        scrolling="auto"
                        allowtransparency="true"
                        ></iframe>
                     <div style="font-family:Helvetica, Arial; font-size:10px; margin:2px; width:100%; text-align:left;" >
                        <a style="color:#ddd; text-decoration:none;" target="_blank" href="http://www.eventbrite.ca/r/etckt">Online event registration</a>
                        <span style="color:#ddd;">for</span>
                        <a style="color:#ddd; text-decoration:none;" target="_blank" href="http://http://truenorthphp.eventbrite.ca?ref=etckt">True North PHP Conference</a>
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
