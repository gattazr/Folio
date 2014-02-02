<?php 
include ('templates/page_header.php');
include ('templates/headmenu.php');
include ('templates/info_card.php');
?>



<html>
	<?php
	open_page_header('Project');
	$src = base_url('assets/html5gallery/html5gallery.js');
	echo "<script src=$src></script>";
	close_page_header();?>
	<body>
		<?php headmenu(); ?>
		<div class="container theme-showcase" role="main">

			<div class="jumbotron">
                <img style="overflow:hidden;" src="<?php echo $project[0]['logo']; ?> " height="50%" width="100%"/>
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
        user_info_card($user, 4);
        foreach($collaborators as $row){
            user_info_card($row, 4);
        } 
    ?>
  	</div>	
			

	</body>
<html>
