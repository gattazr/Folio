<?php 
include ('templates/page_header.php');
include ('templates/headmenu.php');
?>



<html>
	<?php
	open_page_header('template page');
	
	//This is for the image browser.. works because Im welcome page....
	echo '<script type="text/javascript" src="assets/html5gallery/html5gallery.js"></script>';
	close_page_header();?>
	<body>
		<?php headmenu(); ?>
		<div class="container theme-showcase" role="main">

			<div class="row">
				<div class="col-sm-5">
					<div class="page-header">
        				<h2> First Last</h2>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-5">
					<div class="page-image">
        					<img src="https://dl.dropboxusercontent.com/u/15980708/IMG_3416.jpg" 
								alt="Smiley face" width="320" height="320">	
					</div>
				</div>

				<div class="col-sm-3" style="border->
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Information</h3>
						</div>
						<div class="panel-body">
							<ul class="nav bs-sidebar">
								<li>UserName: USERNAME</li>
								<li>City: CITY</li>
								<li>Country: COUNTRY</li>
							</ul>
						</div>
					</div>
				

				<div class="col-sm-4" style="border->
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Skills</h3>
						</div>
						<div class="panel-body">
							<ul class="nav bs-sidebar">
								<li>Web Development: 5 Years</li>
								<li>C, C++: 10 Years</li>
								<li>Graphic Design: 20 Years</li>
								<li>iOS Development: 7 Years</li>
							</ul>
						</div>
					</div>

				</div>			

			
		

			
			
			<!--if this user is the one signed in say 'My Projects', otherwise say 'Their Projects' -->
			<div class="page-header">
        		<h2>My Projects</h2>
			</div>



	<div class="row">
	<?php

		$projects = array(1, 2); //1 for now but will be array of members later. Always has at least one.

		foreach($projects as &$project)
		{?>

				<div class="col-sm-4">
					<div class="panel panel-default">
						<div class="panel-heading">
							
							<h3 class="panel-title">Project</h3>
						</div>
						<div class="panel-body">
						<img />

						</div>
					</div>
				</div>
			

	<?php } ?>
  	</div>	
			

	</body>
<html>
