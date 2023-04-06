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
    <title>Home</title>
    <link rel="stylesheet" href="cat2.css">
    <script src="https://kit.fontawesome.com/333c1941e5.js" crossorigin="anonymous"></script>
</head>
<body>
<header>
        <a href="#" class="logo"><span>Home</span>Page</a>
        <nav class="navbar">
            <a href="userprofile.php">View Profile</a><i class="fas fa-user"></i>
        </div>
        </nav>
        <div class="logout"> 
                <p>Click here to: <a href="logout.php">log Out</a></p>
            </div>
    </header>
</body>
</html>