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

			<div class="jumbotron">
				<h1>Template test page</h1>
				<p>This is a simple example of Jumbotron</p>
			</div>

			<div class="page-header">
        		<h2>Popular</h2>
			</div>
			<div class="row">
				<?php
                    foreach ($popularResult as $row) { 
                        project_info_card($row, 4);
                    }
                ?>
			</div>

			<div class="page-header">
        		<h2>Recent</h2>
			</div>
			<div class="row">
				<?php
                    foreach ($recentResult as $row) {
                        project_info_card($row, 4);
                    }
                ?>
			</div>

			<div class="page-header">
        		<h2>Local</h2>
			</div>
			<div class="row">
				<?php
                    foreach ($localResult as $row) { 
                        project_info_card($row, 4);
                    }
                ?>
			</div>


		</div>
	</body>
<html>
