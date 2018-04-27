<!DOCTYPE html>
<html>
    
<head>
	<title>Super Dating</title>
	<link rel="stylesheet" type="text/css" href="scss/styles.css">
</head>
    
<body>
    
    <?php
        // ensure that php errors are displayed
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);

        // Include and initiate the database class (you only have to do this once)
        include('classes/database.php');
        $database = new Database;
        $database->connect();
    ?>
    
    <header>
        <h1>Super Dating</h1>
        <h2>For Super Lovers</h2>
    </header>
    
    <section class="menu">
        <a href="index.php">Back to Frontpage</a>
        <a href="messages.php">Back to Messages</a>
    </section>
    
    <section class="send_new">
        <?php $profile = $database->query('SELECT profile.name FROM profile WHERE profile.name!="Tony Stark"');?>
        <form action="process_message.php" method="post">
            <input class="none" type="text" name="message_from" value="Tony Stark">
            <select name="message_to">
                <?php foreach ($profile as $profiles) { ?>
                    <option value="<?php echo $profiles['name'];?>"><?php echo $profiles['name'];?></option>
                <?php } ?>
            </select>
            <input type="text" name="mes">
            <input type="submit" name="submit" value="Send">
        </form>
    </section>
    
</body>
</html>