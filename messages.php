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
        <a href="send_message.php">Send new message</a>
    </section>
    
    <section class="message">
        
        <h1>Inbox</h1>
        
        <?php $message = $database->query('SELECT profile.image, message.message_from, COUNT(message.message_from) FROM message JOIN profile ON message.message_from=profile.name AND message.message_to="Tony Stark" GROUP BY message.message_from');?>
        <ol>
        <?php foreach ($message as $messages) { ?>
            <li>
                <img src="<?php echo $messages['image'];?>">
                <p><?php echo $messages['message_from'];?></p>
                <p>Amount of messages: <?php echo $messages['COUNT(message.message_from)'];?></p>
                <form action="into_message.php" method="post">
                    <input class="none" type="text" name="message_from" value="<?php echo $messages['message_from'];?>">
                    <input type="submit" name="submit" value="Go to chat">
                </form>
            </li>
        <?php } ?> 
        </ol>
        
        <h1>Outbox</h1>
        
        <?php $message = $database->query('SELECT * FROM message JOIN profile ON message.message_to=profile.name AND message.message_from="Tony Stark" GROUP BY message.message_to');?>
        <ol>
        <?php foreach ($message as $messages) { ?>
            <li>
                <img src="<?php echo $messages['image'];?>">
                <p><?php echo $messages['message_to'];?></p>
                <span></span>
                <form action="into_message.php" method="post">
                    <input class="none" type="text" name="message_from" value="<?php echo $messages['message_to'];?>">
                    <input type="submit" name="submit" value="Go to dhat">
                </form>
            </li>
        <?php } ?> 
        </ol>
    </section>
    
</body>
</html>