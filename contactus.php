<!doctype html>

<html lang="en">

<head>

	<title> Cheeky Face Entertainments </title>
	<link rel="stylesheet" type="text/css" href="assets/css/main_style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/forms.css">
	<link rel="stylesheet" type="text/css" href="assets/css/responsive_design.css">
	<link href='https://fonts.googleapis.com/css?family=Amatic+SC:400,700|Chewy' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="assets/js/script.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">


</head>

<body>
	
<?php include("header.html"); ?>

		<br><br><br>
		<p>If you would like to recieve a quote please fill in the form below, or alternatively send us an email <a href="mailto:info@cheekyfaceentertainments.co.uk">here</a></p>
		<br><p> * = required field</p>
		<br><br><br>

<?php
// define variables and set to empty values
$nameErr = $emailErr = $numberErr =  $locationErr = $dateErr = $timesErr = $childrenErr = "";
$name = $email = $number = $location = $date = $times = $children = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	if (empty($_POST["yourname"])) {
   		$nameErr = "Name is required";
  	} else {
    	$name = test_input($_POST["yourname"]);
    	 // check if name only contains letters and whitespace
  		if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      		$nameErr = "Only letters and white space allowed"; 
    	}
  	}

 	if (empty($_POST["youremail"])) {
 		$emailErr = "Email is required";
 	} else {
 		$email = test_input($_POST["youremail"]);
 		 // check if e-mail address is well-formed
    	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      		$emailErr = "Invalid email format"; 
    	}
 	}

	$number = test_input($_POST["yournum"]);
 	
 	if (empty($_POST["location"])){
 		$locationErr = "Location is required";
 	} else {
 		$location = test_input($_POST["location"]);
 	}

 	if (empty($_POST["date"])){
 		$dateErr = "Date is required";
 	} else {
 		$date = test_input($_POST["date"]);
 	}
 	
 	if (empty($_POST["times"])){
 		$timesErr = "Time is required";
 	} else {
		$times = test_input($_POST["times"]);
	}

	if (empty($_POST["children_num"])){
		$childrenErr = "Number of guests is required";
	} else {
		$children = test_input($_POST["children_num"]);
	}
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">

			<label for="yourname">Your name</label><br>
			<input class="form_input" type="text" name="yourname" value="<?php $name;?>">
			<span class="error">* <?php echo $nameErr;?></span>
			<br><br>

			<label for="youremail">Your Email</label><br>
			<input class="form_input" type="text" name="youremail" value="<?php $email; ?>">
			<span class="error">* <?php echo $emailErr;?></span>
			<br><br>

			<label for="yournum">Your phone number</label><br>
			<input class="form_input" type="text" name="yournum" value ="<?php $number; ?>">

			<br><br>

			<label for="location">Location of event</label><br>
			<input class="form_input" type="text" name="location" value ="<?php $location; ?>">
			<span class="error">* <?php echo $locationErr;?></span>
			<br><br>

			<label for="date">Date of event</label><br>
			<input class="form_input" type="text" name="date" value ="<?php $date; ?>">
			<span class="error">* <?php echo $dateErr;?></span>
			<br><br>

			<label for="times">Times (if known)</label><br>
			<input class="form_input" type="text" name="times"b value ="<?php $times; ?>">

			<br><br>

			<label for="children_num">Number of guests expected</label><br>
			<input class="form_input" type="text" name="children_num"  value ="<?php $children; ?>">
			<span class="error">* <?php echo $childrenErr;?></span>
			<br><BR><br>

			<p>Services wanted: *</p><br>
			<input type="checkbox" name="fp_cb" value="facepainting">Face painting<br>
			<input type="checkbox" name="bm_cb" value="balloon">Balloon Modelling<br>
			<input type="checkbox" name="gt_cb" value="glittertat">Glitter Tattoos<br>
			<input type="checkbox" name="bp_cb" value="bodypaint">Body Painting<br>

			<br><br><br>

			<label for="other_info">Any other information</label><br>
			<textarea rows="6" cols="70" name="other_info"></textarea>

			<br><br>

			<input id="form_but" type="submit" value="Send">

		</form>

	</div> <!-- /container -->

<?php include("footer.html") ?>

</body>

</html>