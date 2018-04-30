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
        <a href="likes.php">Back to People who likes you</a>
    </section>
    
    <section class="profile">
        <?php $profile = $database->query('SELECT * FROM profile WHERE name="'.$_POST['name'].'"');?>
        <h1><?php echo $_POST['name'];?>'s Profile:</h1>
        <?php foreach ($profile as $profiles) { ?>
            <div class="profile__grid">
                <div>
                    <h3>Name: <?php echo $profiles['name'];?></h3>
                    <h3>Alias: <?php echo $profiles['alias'];?></h3>
                    <h3>Age: <?php echo $profiles['age'];?></h3>
                    <p>About<br><?php echo $profiles['about'];?></p>
                    <p>Powers: <?php echo $profiles['power'];?></p>
                    <p class="profile__grid__margin"><?php
                        $liked = $database->query('SELECT * FROM liked WHERE liked.like_to="'.$profiles['name'].'" AND liked.like_from="Tony Stark"');
                        foreach ($liked as $result) {
                            if ($result['like_from'] = "Tony Stark") {
                                echo "You have already liked this profile";
                            }
                        }
                    ?></p>
                    <div class="profile__grid__button">
                        <form action="process_like.php" method="post">
                            <input class="none" type="text" name="like_from" value="Tony Stark">
                            <input class="none" type="text" name="like_to" value="<?php echo $profiles['name'];?>">
                            <input type="submit" name="submit" value="Like">
                        </form>
                        <form action="into_message.php" method="post">
                            <input class="none" type="text" name="message_from" value="<?php echo $profiles['name'];?>">
                            <input type="submit" name="submit" value="Send a message">
                        </form>
                    </div>
                </div>
                <img src="<?php echo $profiles['image'];?>">
            </div>
        <?php } ?> 
    </section>
    
</body>
</html>