<?php 
include ('templates/page_header.php');
include ('templates/headmenu.php');
?>



<html>
	<?php
	open_page_header('template page');
	
	//This is for the image browser.. works because Im welcome page....
	
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

							<canvas id="myCanvas" width="320" height="320"></canvas>
							
							<script>
							function resizeImage(xSize, ySize, src)
							{
							var canvas = document.getElementById('myCanvas');
							var context = canvas.getContext('2d');
							var x;
							var y;
							var width;
							var height;
							var img = new Image();

							img.onload = function()
							{
								if(img.height < img.width)
								{
									height = xSize;
									width = (img.width*ySize)/img.height;
									y = (img.width/2) - (width/2);
									x = (img.height/2) - (height/2);
								}
								else
								{
									width = ySize;
									height = (img.height*ySize)/img.width;
									y = (img.width/2) - (width/2);
									x = (img.height/2) - (height/2);

								}
								context.drawImage(img, x, y, width, height);
							}
							//img.src = 'http://www.html5canvastutorials.com/demos/assets/darth-vader.jpg';
							img.src = src;

							}
							resizeImage(320,320,'http://www.html5canvastutorials.com/demos/assets/darth-vader.jpg');
							</script>

        					<!--<img src="https://dl.dropboxusercontent.com/u/15980708/IMG_3416.jpg" 
								alt="Smiley face" width="320" height="320">	-->
					</div>
				</div>

				<div class="col-sm-3">
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
				

				<div class="col-sm-4">
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
