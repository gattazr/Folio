<?php
function headmenu(){
	$CI =& get_instance();
	$isLogged = true;
	if ( ! $CI->session->userdata('username')) { 
		$isLogged = false;
	}
?>
<style>
body{
	padding-top: 70px;
	padding-bottom: 30px;
}
</style>
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<a class="navbar-brand" href=<?php echo base_url('');?>>Folio</a>
		</div>
		<div class="navbar-collapse collapse navbar-right">
			<form class="navbar-form navbar-right" role="form" method='get' action='.'>
				<div class="form-group">
					<input type="text" placeholder="search" class="form-control" style="padding-right: 0px; cursor: auto;">
				</div>
				<button type="submit" class="btn btn-success">Search</button>
			</form>
		</div>
		<div class="navbar-collapse collapse navbar-right">
			<ul class="nav navbar-nav">
				<li><a href=<?php echo base_url('index.php/search/');?>>Projects</a></li>
				<li><a href=<?php echo base_url('index.php/project/add_project');?>>Start a project</a></li>
				<?php
				if($isLogged){
				?>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">You <b class="caret"></b></a>
						<ul class="dropdown-menu dropdown-menu-left">
							<li><a href=<?php echo base_url('index.php/user/profile');?>>Profile</a></li>
							<li><a href=<?php echo base_url('index.php/user/sign_out');?>>Sign out</a></li>
						</ul>
					</li>
				<?php
				}else{
				?>
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown">Login <b class="caret"></b></a>				
						<div class="dropdown-menu dropdown-menu-left" style="padding: 15px; padding-bottom: 15px;">
							<form class="navbar-right" method='POST' action=<?php echo base_url('index.php/user/sign_in');?> role="form">
								<input type="text" size='50' name='mail' placeholder="Email" class="form-control" autocomplete="off" keyev="true" clickev="true" style="padding-right: 5px;margin-bottom: 10px;">
								<input type="password" size='50' name='password' placeholder="Password" class="form-control" autocomplete="off" keyev="true" clickev="true" style="padding-right: 5px;margin-bottom: 10px;">
								<button type="submit" class="btn btn-success" style="width:100%;">Sign in</button>
							</form>
							<a href=<?php echo base_url('index.php/user/sign_up');?>><button class="btn btn-info" style="width:100%">Register</button></a>
						</div>
					</li>
				<?php 
				}
				?>
			</ul>
		</div><!--/.nav-collapse -->
	</div>
</div>
<script>
$(function() {
	// Setup drop down menu
	$('.dropdown-toggle').dropdown();

	// Fix input element click problem
	$('.dropdown input, .dropdown label').click(function(e) {
		e.stopPropagation();
	});
});
$('ul.nav li.dropdown').hover(function(e) {
	$(this).find('.dropdown-menu').fadeIn();
}, function(e) {
	$(this).find('.dropdown-menu').fadeOut();
});
</script>

<?php
}
?>