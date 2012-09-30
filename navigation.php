      <div class="navbar navbar-fixed-top">
         <div class="container">
            <ul class="nav pull-right">
               <li class="<?php echo $page == 'index' ? 'active' : ''; ?>">
                  <a href="index.php">Home</a>
               </li>
               <li class="<?php echo $page == 'venue' ? 'active' : ''; ?>">
                  <a href="venue.php">Venue</a>
               </li>
               <li class="<?php echo $page == 'schedule' ? 'active' : ''; ?>">
                  <a href="schedule.php">Schedule</a>
               </li>
               <li class="<?php echo $page == 'speakers' ? 'active' : ''; ?>">
                  <a href="speakers.php">Speakers</a>
               </li>
               <li class="<?php echo $page == 'sponsors' ? 'active' : ''; ?>">
                  <a href="sponsors.php">Sponsors</a>
               </li>
               <li id="buy-tickets" class="<?php echo $page == 'tickets' ? 'active' : ''; ?>">
                  <a href="tickets.php">Buy Tickets</a>
               </li>
            </ul>
         </div>
      </div>
      <div class="header-wrapper">
         <div class="container">
            <div class="homelink-wrapper"><a href="/"><div class="homelink"></div></a></div>
<?php if ($page == 'index') : ?>
            <div class="ribbon-wrapper">
               <div class="ribbon-front">
                   <h2>Toronto, Canada :: November 2 &amp; 3, 2012 :: <a href="tickets.php"><span class="earlybird"><?php if (time() < strtotime('2012-10-01')) echo 'Early Bird ';?>Tickets on Sale Now</span></a></h2>
               </div>
               <div class="ribbon-edge-topleft"></div>
               <div class="ribbon-edge-topright"></div>
               <div class="ribbon-edge-bottomleft"></div>
               <div class="ribbon-edge-bottomright"></div>
               <div class="ribbon-back-left"></div>
               <div class="ribbon-back-right"></div>
            </div>
<?php endif; ?>
         </div>
      </div>
