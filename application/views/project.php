<?php 
include ('templates/page_header.php');
include ('templates/headmenu.php');
include ('templates/info_card.php');
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
               <!-- replace main project logo with below to get image from db
                <h1><?php //$project[0]['logo']?></h1>-->
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
                <?php echo $project[0]['description'];?>
			</p>
				</div>

				<div class="col-sm-3">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Information</h3>
						</div>
						<div class="panel-body">
							<ul class="nav bs-sidebar">
								<li>Category: <?php echo $information[0]['name'];?></li>
								<li>Created On: <?php echo $information[0]['startdate'];?></li>
								<li>Updated: DATE</li>
								<li>Status: <?php echo $information[0]['status'];?></li>
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
		if (count($skill) != 0)
		{?>
			
					<div class="page-header">
        				<h2>Needed <button type="button" class="btn btn-primary">Join Project</button> </h2>	
					</div>	

			<div class="row">
			<?php

				foreach($skill as $row) {
                    skill_info_card($row, 4);
			    } 
            ?>
		  	</div>				



	<?php }?>
		
			<div class="page-header">
        		<h2>Members</h2>
			</div>
	<div class="row">
	<?php

		foreach($collaborators as $row){
            user_info_card($row, 4);
        } 
    ?>
  	</div>	
			

	</body>
<html>
