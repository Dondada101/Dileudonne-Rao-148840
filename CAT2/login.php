<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="cat2.css">
    <script src="https://kit.fontawesome.com/333c1941e5.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="lbground">
        <div>
            <h1>Hello welcome to Login Page</h1>
            <form class="form" action="log.php" method="post">
                <h2>Login</h2>
                <div class="ifield"><i class="fa-solid fa-envelope"></i>
                <input type="email" name="uemail" placeholder="Enter Email" required></div>
                <div class="ifield"><i class="fa-solid fa-lock"></i>
                <input type="password" name="password" placeholder="Enter Password" required></div>
                <input type="submit" name="submit" value="Login" class="button">
        </form>
        </div>
    </div>
</body>
</html>