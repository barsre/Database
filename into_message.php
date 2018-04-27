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
        
    <section class="messages">
        <?php $message = $database->query('SELECT profile.image, message.mes, message.message_from FROM message JOIN profile ON message.message_from=profile.name AND message.message_to="Tony Stark" AND message.message_from="'.$_POST['message_from'].'" OR message.message_from=profile.name AND message.message_from="Tony Stark" AND message.message_to="'.$_POST['message_from'].'"');?>
        <h1>Your chat with <?php echo $_POST['message_from'];?>:</h1>
        <ol>
        <?php foreach ($message as $messages) { ?>
            <li>
                <img src="<?php echo $messages['image'];?>">
                <p><?php echo $messages['message_from'];?>: <?php echo $messages['mes'];?></p>
            </li>
        <?php } ?> 
        </ol>
    </section>
    
    <section class="send">
        <form action="process_message.php" method="post">
            <input class="none" type="text" name="message_from" value="Tony Stark">
            <input class="none" type="text" name="message_to" value="<?php echo $_POST['message_from'];?>">
            <input type="text"  placeholder="Your message..."  name="mes">
            <input type="submit" name="submit" value="Send">
        </form>
    </section>
    
</body>
</html>