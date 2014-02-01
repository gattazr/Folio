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

			<div class="jumbotron">
				<h1>Main Project Logo</h1>
				<p>This is for our main logo for the project</p>
			</div>

			

			<div class="row">
				<div class="col-sm-9">
					<div class="page-header">
        				<h2>About This Project</h2>					
					</div>
				</div>

				<div class="col-sm-3">
					<div class="span7 text-right">	<button type="button" class="btn btn-primary">Join Project</button> </div>
				</div>				

			</div>

			<div class="row">
				<div class="col-sm-9">
			<p>
			<!--This is the description -->
					"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam aliquet fermentum felis ut fermentum. Duis bibendum fermentum nisl interdum iaculis. Suspendisse ac ligula eget dolor tempus auctor. Morbi arcu neque, tincidunt vel lacinia ac, dignissim id turpis. Nulla facilisi. Nulla laoreet libero dui, at ullamcorper felis vehicula vitae. Donec volutpat turpis arcu, at adipiscing mauris commodo id. Mauris at neque vel est convallis posuere non in eros. Mauris in lobortis lacus. Aenean non tortor in lectus auctor lobortis vel vel eros. Maecenas quis tempor neque, eu bibendum nulla. Proin viverra ligula non facilisis lacinia. Duis eget aliquam nibh. Integer aliquet pellentesque turpis, ultrices molestie nisi egestas vel."
			</p>
				</div>

				<div class="col-sm-3">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Information</h3>
						</div>
						<div class="panel-body">
							<ul class="nav bs-sidebar">
								<li>Category: CATEGORY</li>
								<li>Created On: CDATE</li>
								<li>Updated: DATE</li>
								<li>Status: STATUS</li>
							</ul>
						</div>
					</div>
				</div>
			</div>


			<div class="row">
				
				<div class="col-sm-9">
					
						
						
							<div class="html5gallery" data-skin="light" data-width="640" data-height="640" style="display:none;">
							<!-- Add images to Gallery Right Here!!-->
  							<a href="https://dl.dropboxusercontent.com/u/15980708/IMG_3581.JPG">
							<img src="https://dl.dropboxusercontent.com/u/15980708/IMG_3581.JPG" alt="Computer Work"></a>
  							<a href="https://dl.dropboxusercontent.com/u/15980708/IMG_3583.JPG">
							<img src="https://dl.dropboxusercontent.com/u/15980708/IMG_3583.JPG" alt="Collaboration"></a>
							</div>
						
					
				</div>
				
				
			</div>

	<?php
		$needed = array(1, 2, 3, 4, 5, 6); //1 for now but will be array of neededs later. could be null
		if ($needed != Null)
		{?>
			
					<div class="page-header">
        				<h2>Needed <button type="button" class="btn btn-primary">Join Project</button> </h2>	
					</div>	

			<div class="row">
			<?php

				

				foreach($needed as &$need)
				{?>

		
						<div class="col-sm-4">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title">Skill</h3>
								</div>
								<div class="panel-body">
									 Description of skill
								</div>
							</div>
						</div>
		

			<?php } ?>
			

		  	</div>				



	<?php }?>
		
			<div class="page-header">
        		<h2>Members</h2>
			</div>
	<div class="row">
	<?php

		$members = array(1, 2); //1 for now but will be array of members later. Always has at least one.

		foreach($members as &$member)
		{?>

				<div class="col-sm-4">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Member</h3>
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
