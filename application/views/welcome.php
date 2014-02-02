<?php 
include ('templates/page_header.php');
include ('templates/headmenu.php');
include ('templates/info_card.php');
?>

<html>
	<?php
	open_page_header('Welcome to Folio!');
	close_page_header();?>
	<body>
		<?php headmenu(); ?>
		<div class="container theme-showcase" role="main">

			<div class="jumbotron">
			<img src='<?php echo base_url('/assets/folioDesign.png');?>' width=100%>
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
