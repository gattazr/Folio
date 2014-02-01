<?php 
include ('templates/page_header.php');
include ('templates/headmenu.php');
include ('templates/info_card.php');
?>



<html>
	<?php
	open_page_header('template page');
	close_page_header();?>
	<body>
		<?php headmenu(); ?>
		<div class="container theme-showcase" role="main">

			<div class="row">
				<div class="col-sm-5">
					<div class="page-header">
        				<h2> <?php echo $users['firstname']." ".$users['lastname']?></h2>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-5">
					<div class="page-image">
        					<img src=<?php echo $users['avatar']; ?> 
								alt="Smiley face" width="320" height="320">	
					</div>
				</div>

				<div class="col-sm-3">
					<div class="panel-heading">
						<h3 class="panel-title">Information</h3>
					</div>
					<div class="panel-body">
						<ul class="nav bs-sidebar">
							<li>UserName: <?php echo $users['username']; ?></li>
							<li>City: <?php echo $users['city']; ?></li>
							<li>Country: <?php echo $users['country']; ?></li>
						</ul>
					</div>
				</div>
				

				<div class="col-sm-4">
					<div class="panel-heading">
						<h3 class="panel-title">Skills</h3>
					</div>
					<div class="panel-body">
						<?php
						if($skills){
						?>
						<ul class="nav bs-sidebar">
							<?php
							foreach ($skills as $skill ) {
								echo '<li>'.$skill['name'].': '.$skill['level'].'</li>';
							}
							?>
						</ul>
						<?php
						}
						?>
					</div>
				</div>	
			</div>		

			
		

			
			
			<!--if this user is the one signed in say 'My Projects', otherwise say 'Their Projects' -->
			<div class="page-header">
        		<h2>My Projects</h2>
			</div>



	<div class="row">
	<?php
		foreach($projects as $key => $project){
			project_info_card($project,4);
		} 
		?>
  	</div>	
			

	</body>
<html>
