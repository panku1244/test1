<!DOCTYPE>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Untitled Document</title>
</head>
<body>
	<?php
	$zz = $_POST['id'];
	$fname = $_POST['firstname'];
	$lname = $_POST['dob'];
	$mname = $_POST['age'];
	$address = $_POST['address'];
	$contct = $_POST['city'];
	$comment = $_POST['state'];

	include('connection.php');

	$query = 'UPDATE people set first_name ="'.$fname.'",
	dob ="'.$lname.'", age="'.$mname.'",
	address="'.$address.'",	city="'.$contct.'", 
	state="'.$comment.'" WHERE
	people_id ="'.$zz.'"';
	$result = mysqli_query($db, $query) or die(mysqli_error($db));

	?>	
	<script type="text/javascript">
		alert("Update Successfull.");
		window.location = "index.php";
	</script>
</body>
</html>