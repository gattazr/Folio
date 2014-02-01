<?php
function open_page_header($aTitle){
	?>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php echo $aTitle;?></title>
		<!-- Bootstrap core CSS -->
		<link href="dist/css/bootstrap.min.css" rel="stylesheet">
		<!-- Bootstrap theme -->
		<link href="dist/css/bootstrap-theme.min.css" rel="stylesheet">

		<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    	<script src="dist/js/bootstrap.min.js"></script>
	<?
}

function page_add_css($aCssFile){
	?>
	<!-- Custom styles for this template -->
		<link href=<?php echo "\"".$aCssFile."\""?> rel="stylesheet">
	<?
}
function close_page_header(){
	?>
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<?php

}
?>
