<?php 
include ('templates/page_header.php');
include ('templates/headmenu.php');
include ('templates/info_card.php');
?>



<html>
	<?php
	open_page_header('Register');
	
	close_page_header();?>
	<body>
	<?php headmenu(); ?>
		<div class="container theme-showcase" role="main" >
		

	<div class="page-header">
		<?php
			$title = ($user['id']==0)? 'Register' : 'Edit';
			echo "<h2>$title</h2>";
		?>
	</div>
	<div class="row">
				<div class="col-sm-6" >
					<?php
					$action = ($user['id']==0)? base_url('index.php/user/new_user') :base_url('index.php/user/save_user') ;
					?>
						<form action=<?php echo $action?> method="post">
						<input type="text" name="name" placeholder="Username" value=<?php echo $user['username']; ?>><br><br>
						<input type="text" name="email" placeholder="Email" value=<?php echo $user['email']; ?>><br><br>
						<input type="password" name="password" placeholder="Password"><br><br><br>
						<input type="password" name="confpass" placeholder="Confirm Password"><br><br><br>
					<input type="text" name="firstname" placeholder="First Name" value=<?php echo $user['firstname']; ?>><br><br>
					<input type="text" name="lastname" placeholder="Last Name" value=<?php echo $user['lastname']; ?>><br><br><br>
					<input type="text" name="city" placeholder="City" value=<?php echo $user['city']; ?>><br><br>
					<input type="text" name="country" placeholder="Country" value=<?php echo $user['country']; ?>><br><br>
					Choose a Profile Picture
					<input type="file" name="avatar" placeholder="Avatar"> value=<?php echo $user['avatar']; ?><br><br>

					<?php
					$submit = ($user['id']==0)? 'SignUp' : 'Save' ;
					?>
					<input type="submit" value="<?php echo $submit;?>">
							<input type="reset" value="Clear">
					</form>
				</div>
	</div>
					





	</body>
<html>
