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
									img.src = src;

								}
								resizeImage(320,320, <?php echo '\''.$users['avatar'].'\'';?>);
							</script>
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
		if($projects){
			foreach($projects as $key => $project){
				project_info_card($project,4);
			}
		}
		?>
  	</div>	
			

	</body>
<html>
