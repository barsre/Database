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
        <span></span>
    </section>
    
    <section class="like_you">
        <?php $like = $database->query('SELECT * FROM profile JOIN liked ON profile.name=liked.like_from AND liked.like_to="Tony Stark"');?>
        <h1>People who like your profile:</h1>
        <ol>
        <?php foreach ($like as $likes) { ?>
            <li>
                <img src="<?php echo $likes['image'];?>">
                <p><?php echo $likes['name'];?></p>
                <p>Alias: <?php echo $likes['alias'];?></p>
                <p>Age: <?php echo $likes['age'];?></p>
                <p>About:<br><?php echo $likes['about'];?></p>
                <form action="profile.php" method="post">
                    <input class="none" type="text" name="name" value="<?php echo $likes['name'];?>">
                    <input type="submit" name="submit" value="Check Profile">
                </form>
                <div>
                    <form action="process_like.php" method="post">
                        <input class="none" type="text" name="like_from" value="Tony Stark">
                        <input class="none" type="text" name="like_to" value="<?php echo $likes['name'];?>">
                        <input type="submit" name="submit" value="Like Back">
                    </form>
                    <p><?php
                        $liked = $database->query('SELECT * FROM liked WHERE liked.like_to="'.$likes['name'].'" AND liked.like_from="Tony Stark"');
                        foreach ($liked as $result) {
                            if ($result['like_from'] = "Tony Stark") {
                                echo "You have already liked this profile";
                            }
                        }
                    ?></p>
                </div>
            </li>
        <?php } ?> 
        </ol>
    </section>

</body>
</html>