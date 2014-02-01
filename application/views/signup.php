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
		<div class="container theme-showcase" role="main" >
		

	<div class="row">
				<div class="col-sm-6" >
					<form action=<?php echo base_url('index.php/user/new_user');?> method="post">
						<input type="text" name="name" placeholder="Username"><br><br>
						<input type="text" name="email" placeholder="Email"><br><br>
						<input type="password" name="password" placeholder="Password"><br><br>
						<input type="password" name="confpass" placeholder="Confirm Password"><br><br><br>
					<input type="text" name="First Name" placeholder="First Name"><br><br>
					<input type="text" name="Last Name" placeholder="Last Name"><br><br><br>
					<input type="text" name="city" placeholder="City"><br><br>
					<input type="text" name="country" placeholder="Country"><br><br>
					Choose a Profile Picture
					<input type="file" name="avatar" placeholder="Avatar"><br><br>

					<input type="submit" value="SignUp">
							<input type="reset" value="Clear">
					</form>
				</div>

				<!--<div class='col-sm-6' style="background-image:url(<?php echo base_url('assets/folioDesign.png');?>);">
				</div>-->
		
	</div>
					





	</body>
<html>
