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
        		<h2>Popular</h2>
			</div>
			<div class="row">
				<?php
                    foreach ($popularResult as $row) { ?>
                        <div class="col-sm-4">
					        <div class="panel panel-default">
						    <div class="panel-heading">
							    <h3 class="panel-title"><?php echo $row['name'];?></h3>
						    </div>
						    <div class="panel-body">
                                <div class="panel-image">
                                    <img src="<?php echo $row['logo'];?>"/>
                                </div>
                                <div class="panel-text">
                                    <?php echo $row['description'];?>
                                </div>
						    </div>
					    </div>
				    </div><!-- /.col-sm-4 -->
                <?php
                    }
                ?>
			</div>

			<div class="page-header">
        		<h2>Recent</h2>
			</div>
			<div class="row">
				<?php
                    foreach ($recentResult as $row) { ?>
                        <div class="col-sm-4">
					        <div class="panel panel-default">
						    <div class="panel-heading">
							    <h3 class="panel-title"><?php echo $row['name'];?></h3>
						    </div>
						    <div class="panel-body">
                                <div class="panel-image">
                                    <img src="<?php echo $row['logo'];?>"/>
                                </div>
                                <div class="panel-text">
                                    <?php echo $row['description'];?>
                                </div>
						    </div>
					    </div>
				    </div><!-- /.col-sm-4 -->
                <?php
                    }
                ?>
			</div>

			<div class="page-header">
        		<h2>Local</h2>
			</div>
			<div class="row">
				<?php
                    foreach ($localResult as $row) { ?>
                        <div class="col-sm-4">
					        <div class="panel panel-default">
						    <div class="panel-heading">
							    <h3 class="panel-title"><?php echo $row['name'];?></h3>
						    </div>
						    <div class="panel-body">
                                <div class="panel-image">
                                    <img src="<?php echo $row['logo'];?>"/>
                                </div>
                                <div class="panel-text">
                                    <?php echo $row['description'];?>
                                </div>
						    </div>
					    </div>
				    </div><!-- /.col-sm-4 -->
                <?php
                    }
                ?>
			</div>


		</div>
	</body>
<html>
