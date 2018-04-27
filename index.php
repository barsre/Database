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
    
    <section class="your_profile">
        <?php $profile = $database->query('SELECT * FROM profile WHERE profile_id="1"');?>
        <?php foreach ($profile as $profiles) { ?>
        <div>
            <h1>Your Profile:</h1>
            <h3>Name: <?php echo $profiles['name'];?></h3>
            <h3>Alias: <?php echo $profiles['alias'];?></h3>
            <h3>Age: <?php echo $profiles['age'];?></h3>
            <p>About:<br><?php echo $profiles['about'];?></p>
            <p>Power: <?php echo $profiles['power'];?></p>
        </div>
        <img src="<?php echo $profiles['image'];?>">
        <?php } ?> 
    </section>
    
    <section class="menu">
        <a href="messages.php">Inbox</a>
        <a href="likes.php">People who likes you</a>
    </section>    
    
    <h1>Other heroes:</h1>
    
    <section class="selection">
        <?php $selection = $database->query('SELECT * FROM profile WHERE profile_id != "1"');?>
        <?php foreach ($selection as $select) { ?>
            <div>
                <p><?php echo $select['name'];?></p>
                <p>Alias: <?php echo $select['alias'];?></p>
                <p>Age: <?php echo $select['age'];?></p>
                <img src="<?php echo $select['image'];?>">
                <form action="profile.php" method="post">
                    <input class="none" type="text" name="name" value="<?php echo $select['name'];?>">
                    <input type="submit" name="submit" value="Go to profile">
                </form>
            </div>
        <?php } ?> 
    </section>
    
</body>
</html>