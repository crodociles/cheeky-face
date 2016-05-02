<!doctype html>

<html lang="en">

<head>

	<title> Cheeky Face Entertainments </title>
	<link rel="stylesheet" type="text/css" href="assets/css/main_style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/responsive_design.css">
	<link href='https://fonts.googleapis.com/css?family=Amatic+SC:400,700|Chewy' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/gallery.css">
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="assets/js/script.js"></script>
	<script type="text/javascript" src="assets/js/gallery.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">


</head>

<body>

<?php include("header.html"); ?>

		<br><br>

		<h1>Body Painting Gallery</h1>

		<br><Br>

		<div id="pic_row">

		</div> <!-- /pic_row_one -->

	</div> <!-- /container -->


<script type="text/javascript">

	$(document).ready(function(){

		for(i = 1; i < 11; i++){

			var x = "body_" + i + ".jpg";

			$("#pic_row").append("<div class='gallery_thumb'><a href='assets/img/body/"+ x + "'><img class='pic_thumb' src='assets/img/body/" + x + "' alt='Body painting pic'></a></div>");

		};

	});

</script>

<div id="return">

	<a href="gallery.php">

		<p> <- Return to main gallery</p>
	
	</a>

</div>

<?php include("footer.html") ?>

</body>

</html>