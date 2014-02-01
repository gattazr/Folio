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
					<form action=<?php echo base_url('index.php/project/new_project');?> method="post">
						<input type="text" name="name" placeholder="Project name"><br><br>
						<input type="text" name="description" placeholder="description"><br><br>
                        Choose a Project Logo
						<input type="file" name="logo" placeholder="Logo"><br><br>
						<input type="text" name="startdate" placeholder="Start date (e.g. 2014-01-31)"><br><br>
						<input type="text" name="enddate" placeholder="End date (e.g. 2014-01-31)"><br><br>
				<!--	<input type="text" name="category" placeholder="Category"><br><br> -->
                        <select name="category_id">
                        <?php
                        $options = $categoryArray;
                        foreach($options as $category){
                        echo '<option value="';
                        echo $category['id'];
                        echo '">';
                        echo $category['name'];
                        echo '</option><br>';
                        } ?>
                        </select>
                    <input type="hidden" name="project_id" value="0">
                    <input type="hidden" name="owner_id" value="<?php echo $id ?>">
					<input type="submit" name="submitted" value="Add Project">
							<input type="reset" value="Clear">
					</form>
				</div>
		
	</div>
					





	</body>
<html>
