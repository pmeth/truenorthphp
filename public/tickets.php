<!doctype html>
<html class="no-js" lang="en">
<?php include '../page_header.php' ?>
<?php include '../view.php' ?>
	<body id="top">
		<!--[if lt IE 9]>
			<p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
		<![endif]-->
<?php include '../navigation.php' ?>
<div class="key-visual">

    <h1 class="page-title"><span>Tickets</span></h1>

</div>
<?php //include '../logo.php' ?>
</header>
<main role="main" class="content">
               <div class="span12">
                  <p>There are only 250 tickets available for True North PHP, so buy your tickets early before they sell out.</p>
<?php if ($view->ticket->getSaleState() === Ticket::SOON) : ?>
                  <p>Early bird tickets are on sale soon.</p>
<?php elseif ($view->ticket->getSaleState() === Ticket::EARLY) : ?>
                  <p>Early bird tickets are just $<?= $view->ticket->getEarlyPrice() ?> until <?= $view->ticket->getEarlyEnd()->format('F j') ?>.</p>
<?php elseif ($view->ticket->getSaleState() === Ticket::OPEN) : ?>
                  <p>Tickets are just $<?= $view->ticket->getRegularPrice() ?> until event day.</p>
<?php elseif ($view->ticket->getSaleState() === Ticket::CLOSED) : ?>
                  <p>Tickets sales have ended. See you next year.</p>
<?php endif; ?>
                  <p>
                      <ul>
                          <li>Conference/Early Bird ticket gives you access to tutorial day on Thursday, November 3 plus all the sessions and events on Friday November 4 and Saturday November 5.</li>
                      </ul>
                  </p>
                  <p style="color:red; font-weight:bold">** Please note that all ticket sales are final and we are unable to offer refunds.</p>
               </div>
               <div class="span12">
                  <hr>
               </div>
<?php if ($view->ticket->getSaleState() === Ticket::EARLY
          || $view->ticket->getSaleState() === Ticket::OPEN) : ?>
               <div class="span12" >
                  <iframe
                     src="//eventbrite.ca/tickets-external?eid=26990188380&ref=etckt"
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
                     <a
                         class="powered-by-eb"
                         style="color: #dddddd; text-decoration: none;"
                         target="_blank"
                         href="http://www.eventbrite.ca/r/etckt"
                     >Powered by Eventbrite</a>
                  </div>
               </div>
<?php endif; ?>
            </div>
         </div>
      </div>
<?php include '../footer.php'; ?>
   </body>
</html>
