<?php
if(isset($_GET['page'])){
	if($_GET['page'] == 'reg'){
		$route = 'registration';
	}else if($_GET['page'] == 'main'){
		$route = 'main';
	} else {
		$route = 'registration';
	}
} else {
	$route = 'registration';
}
?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Excellence</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	</head>
	<body class="img" style="">
	<?php 
		include_once $route.".php";
	?>
	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

