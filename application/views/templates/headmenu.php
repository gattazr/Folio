<?php
function headmenu($aMenu = ''){


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
			<a class="navbar-brand" href=<?php echo BASE_URL;?>>Folio</a>
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
				<li><a href="../index.php/project/all/">Projects</a></li>
				<li><a href="../index.php/project/new/">Start a project</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">You <b class="caret"></b></a>
					<ul class="dropdown-menu dropdown-menu-left">
						<li><a href="#">Profile</a></li>
						<li><a href="#">Sign out</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown">Login <b class="caret"></b></a>				
					<div class="dropdown-menu dropdown-menu-left" style="padding: 15px; padding-bottom: 0px;">
						<form class="navbar-right" method='POST' action='/user/sign_in' role="form">
							<input type="text" name='mail' placeholder="Email" class="form-control" autocomplete="off" keyev="true" clickev="true" style="padding-right: 5px;margin-bottom: 10px;">
							<input type="password" name='password' placeholder="Password" class="form-control" autocomplete="off" keyev="true" clickev="true" style="padding-right: 5px;margin-bottom: 10px;">
							<button type="submit" class="btn btn-success" style="width:100%">Sign in</button>
						</form>
					</div>
				</li>
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