<?php 
include ('templates/page_header.php');
include ('templates/headmenu.php');
?>

<html>
	<?php
	open_page_header('template page');
	close_page_header();?>
	<body>
		<?php headmenu(); ?>
		<div class="container theme-showcase" role="main">

			<div class="jumbotron">
				<h1>Template test page</h1>
				<p>This is a simple example of Jumbotron</p>
			</div>

			<div class="page-header">
        		<h2>Template test page</h2>
			</div>
			<div class="row">
				<div class="col-sm-4">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">A project</h3>
						</div>
						<div class="panel-body">
							and its description
						</div>
					</div>
				</div><!-- /.col-sm-4 -->
				<div class="col-sm-4">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">another project</h3>
						</div>
						<div class="panel-body">
							and another description
						</div>
					</div>
				</div><!-- /.col-sm-4 -->
				<div class="col-sm-4">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">and and another project</h3>
						</div>
						<div class="panel-body">
							and and another description
						</div>
					</div>
				</div><!-- /.col-sm-4 -->
			</div>
		</div>
	</body>
<html>