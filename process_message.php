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
	$sql = "INSERT INTO message (
							message_from, 
							message_to, 
				            mes
						) 
			VALUES (?,?,?)";
	
	// Secondly, add values
	$values = array(
		$_POST['message_from'],
		$_POST['message_to'],
		$_POST['mes']
	);

	// Call prepared function to execute the above
	$database->prepared($sql,$values);

?>
    
    <section class="send">
        <h1>Message send</h1>
        <form action="into_message.php" method="post">
            <input class="none" type="text" name="message_from" value="<?php echo $_POST['message_to'];?>">
            <input type="submit" name="submit" value="Go back">
        </form>
    </section>
    
</body>
</html>