<!DOCTYPE html>
<html>
<head>
	<title>processing</title>
	<link rel="stylesheet" type="text/css" href="scss/styles.css">
</head>
<body>
<?php
	
	// check what is received through POST
	// var_dump($_POST); die();
	include('classes/database.php');
	$database = new Database;
	$database->connect();


	//- - - Add new movie - - - 

	// First, prepare the SQL
	$sql = "INSERT INTO liked (
							like_to,
							like_from 
						) 
			VALUES (?,?)";
	
	// Secondly, add values
	$values = array(
		$_POST['like_to'],
		$_POST['like_from'],
	);

	// Call prepared function to execute the above
	$database->prepared($sql,$values);

?>

<h1>Profile liked</h1>

<section class="menu">
    <a href="likes.php">Go back to liked profiles</a>
    <span></span>
</section>
    
</body>
</html>