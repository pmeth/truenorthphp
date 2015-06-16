      <div class="navbar navbar-fixed-top">
         <div class="container">
            <ul class="nav pull-right">
               <li class="<?php echo $page == 'index' ? 'active' : ''; ?>">
                  <a href="index.php">Home</a>
               </li>
               <li class="<?php echo $page == 'venue' ? 'active' : ''; ?>">
                  <a href="venue.php">Venue</a>
               </li>
               <?php if (time() >= strtotime('2015-09-01')) : ?>
	               <li class="<?php echo $page == 'schedule' ? 'active' : ''; ?>">
	                  <a href="schedule.php">Schedule</a>
	               </li>
	               <li class="<?php echo $page == 'speakers' ? 'active' : ''; ?>">
	                  <a href="speakers.php">Speakers</a>
	               </li>
			   <?php endif; ?>
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
				<h2>
					Toronto, Canada ::
					November 5 - 7, 2015 ::
					<span class="earlybird">
						<?php if (time() < strtotime('2015-09-01')) : ?>
							Early Bird Tickets on Sale Soon
						<?php elseif (time() < strtotime('2015-10-01')) : ?>
							<a href="tickets.php">Early Bird Tickets on Sale Now</a>
						<?php else : ?>
							<a href="tickets.php">Tickets on Sale Now</a>
						<?php endif; ?>
					</span>
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
