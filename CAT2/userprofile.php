<?php
session_start();
require_once("connect.php");
$mysqli= require __DIR__ ."/connect.php";
$id=$_SESSION['user_id']  

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="cat2.css">
</head>
<body>
    <div class="container">
        <div class="profile">
            <?php
            $select=$mysqli->query("SELECT * FROM users WHERE id='$id'") or die('query failed');
            if(mysqli_num_rows($select)>0){
                $fetch=mysqli_fetch_assoc($select);
            }
            ?>
            <h3><?php echo'Hey' .' '.$fetch['uname']; ?></h3>
            <a href="updateprofile.php" class="button">Update Profile</a>
            <a href="home.php" class="button">Go back</a>
        </div>
    </div>
</body>
</html>