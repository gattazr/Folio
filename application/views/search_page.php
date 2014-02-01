<?php 
include ('templates/page_header.php');
include ('templates/headmenu.php');
include ('templates/info_card.php');
?>


<html>
	<?php
	open_page_header('Search projects');
	
	close_page_header();
    ?>
	<body>
    <?php headmenu(); ?>
	<div class="container">
        <div class="row">
            <div class="col-sm-3">
            </div>
            <div class="col-sm-9">
                <div class="page-header">
                    <h2>All Projects</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3" style="background-color:#EDEDED;">
                <?php

                foreach($categories as &$category){?>
                    <div class="span3">
                        <h3><a href=<?php echo base_url('index.php/search/project/'.$category['id']) ?>> <?php echo $category['name']; ?></a></h3>
                    </div>
            <?php } ?>
            </div>
            <div class="col-sm-9">

                <?php
                foreach($projects as $project){
                    project_info_card($project, 4);
                }
                ?>
                </div>
            </div>
      	</div>
	</body>
<html>
