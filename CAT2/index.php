<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="cat2.css">
    <script src="https://kit.fontawesome.com/333c1941e5.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="bground">
        <form class="form" action="su.php" method="post">
            <h2>Sign Up</h2>
            <div class="ifield"><i class="fa-solid fa-user"></i>
            <input type="text" name="uname" placeholder="Enter Username" ></div>
            <div class="ifield"><i class="fa-solid fa-envelope"></i>
            <input type="email" name="uemail" placeholder="Enter Email" ></div>
            <div class="ifield"><i class="fa-solid fa-lock"></i>
            <input type="password" name="password" placeholder="Enter Password" ></div>
            <div class="ifield"><i class="fa-solid fa-check"></i>
            <input type="password" name="cpassword" placeholder="Confirm Password">
            <i class="fas fa-exclamation-circle f-icon"></i>
                         <i class="far fa-check-circle s-icon"></i>
                         <div class="error"></div></div>
            <input type="submit" name="submit" value="Sign Up" class="button">
            <p>Already have an account <a href="login.php">Login</a></p>
</form>
    </div>
</body>
</html>