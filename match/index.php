<!DOCTYPE html>

<html>
	<head>
		<title>MUSTANG MATCH</title>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link href='css/match.css' rel='stylesheet' type='text/css'>
		<link href='/match/css/animate.css' rel='stylesheet' type='text/css'>
		<link href='/match/css/waypoints.css' rel='stylesheet' type='text/css'>
	</head>
	
	<body>
		<?php
			include("navbar.php");
		?>
		<section class='banner_section'>
			<div class='banner_area'>
				<div class='banner_heading'>
					<section class="os-animation animated bounceInUp" data-os-animation="bounceInUp" data-os-animation-delay="0s" style="animation-delay: 0s;">
						<h1 class='white banner_text'>Find Your Mustang Match</h1>
					</section>
					<section class="text-center os-animation animated bounceInUp" data-os-animation="bounceInUp" data-os-animation-delay=".1s" style="animation-delay: .1s;">
						<a class='start-btn' href='match_form.php'>Match Me</a>
			    	</section>
				</div>
			</div>
		</section>
		<section class='info_section'>
			<div class='info_area'>
				<div class='col-md-4 days_up_area'>
	   				<h3 class='text-center'>Days Up</h3>
	   				<hr>
	   				<h1 class='text-center' id='daysNum'>100</h1>
	   			</div>
	   			<div class='col-md-4 vists_area'>
	   				<h3 class='text-center'>#'s Matched</h3>
	   				<hr>
	   				<h1 class='text-center' id='matchNum'>100</h1>
	   			</div>
	   			<div class='col-md-4 mostmatched_area'>
	   				<h3 class='text-center'>Highest Match</h3>
	   				<hr>
	   				<h1 class='text-center' id='highNum'>100</h1>
	   			</div>
			</div>
		</section>
	    	<!--<div class="container-fluid main_area">
		    		<div class='banner_area'>
		    			<div class='banner_heading text-center'>
		    				
		    				<section class="os-animation animated bounceInUp" data-os-animation="bounceInUp" data-os-animation-delay=".1s" style="animation-delay: 0.1s;">
								<a class="start-btn" href="#get-started">Get Started</a>
							</section>
		    				<!--<a class='no-select' href='match_form.php'>
		    					<button class='btn btn-warning banner_button'>Match Me</button>
		    				</a>-->
	    	
	    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
		<script src="/match/js/jquery.waypoints.min.js"></script>
		<script src="/match/js/waypoints.js"></script>
		<script src='/match/js/countUp.js'></script>
		<script>
			var days_up = document.getElementById('daysNum');
			var high_num = document.getElementById('highNum');
			var match_num = document.getElementById('matchNum');
			
			var countOne = new CountUp(days_up, 0, 1000);
			var countTwo = new CountUp(high_num, 0, 100);
			var countThree = new CountUp(match_num, 0, 100);
			
			if(!countOne.error)
			{
				countOne.start();
			}
			
			if(!countTwo.error)
			{
				countTwo.start();
			}
			
			if(!countThree.error)
			{
				countThree.start();
			}
		</script>
	</body>
</html>
