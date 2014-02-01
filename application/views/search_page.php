<?php 
include ('templates/page_header.php');
include ('templates/headmenu.php');
?>


<html>

    <title>Project Search Page</title>

	<?php
	open_page_header('template page');
	
	close_page_header();
?>

	<body>

<?php headmenu(); ?>
	<div class="container">



        <div class="row">



            <div class="col-sm-3" style="background-color:#EDEDED;float:right;" align="center">
                <?php

                $categories = array('Art','Comics','Design','Photography','Technology','Theatre','Web Development');
                

                foreach($categoryArray as &$category){?>
                <div class="span3"><h3><a href="<?php echo $category['name'] ?>"> <?php echo $category['name']; ?></a></h3></div>
                <?php } ?>


            </div>

            <div class="col-sm-9">
                        <!--if this user is the one signed in say 'My Projects', otherwise say 'Their Projects' -->
                    <div class="page-header">
                   		<h2>All Projects</h2>

                    </div>
            </div>


		    <ul class="dropdown-menu dropdown-menu-left">
			    <li><a href=<?php echo base_url('index.php/user/profile');?>>Profile</a></li>
			    <li><a href=<?php echo base_url('index.php/user/sign_out');?>>Sign out</a></li>
		    </ul>


            <div class="col-sm-9">

                    <?php
                        $projects = array(1, 2,3,4,5); //1 for now but will be array of members later. Always has at least one.
                        foreach($projects as &$project)
                        {?>
	                        <div class="col-sm-4">
		                        <div class="panel panel-default">
			                        <div class="panel-heading">
				
				                        <h3 class="panel-title">Project</h3>
			                        </div>
			                        <div class="panel-body">
			                        <img />

			                        </div>
		                        </div>
	                        </div>
                    <?php } ?>
            </div>

        </div>

  	</div>	
			

	</body>
<html>
