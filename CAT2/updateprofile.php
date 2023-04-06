<?php
require_once("connect.php");
session_start();
$mysqli= require __DIR__ ."/connect.php";
$id=$_SESSION['user_id'];
 if(isset($_POST['updateprof'])){
    $u_name=$mysqli->real_escape_string($_POST['update_name']);
    $u_email=$mysqli->real_escape_string($_POST['update_email']);
    $sql=$mysqli->query("UPDATE users SET uname='$u_name', uemail= '$u_email' WHERE  id='$id'") or die('Query Failed');
    $oldpw=$_POST['oldpw'];
    $uppw=$mysqli->real_escape_string($_POST['uppw']);
    echo password_verify($uppw,$oldpw);
    $newpw=$mysqli->real_escape_string($_POST['newpw']);
    $cpw=$mysqli->real_escape_string($_POST['cpw']);
    if(!empty($uppw)||!empty($newpw)||!empty($cpw)){
        if(!password_verify($_POST["uppw"], $oldpw)){
            $message[]="Confirmed";
        }elseif($cpw!=$newpw){
            $message[]="Confirm and New Password must match!";
        }else{
            $cfpw=password_hash(($_POST['cpw']),PASSWORD_DEFAULT);
            $sql=$mysqli->query("UPDATE users SET upassword= '$cfpw' WHERE  id='$id'") or die('Query Failed');
            $message[]='Password Update Was Successful';
        }
    }
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Update</title>
    <link rel="stylesheet" href="cat2.css">
</head>
<body>
    <div class="u-profile"> 
    <?php
            $select=$mysqli->query("SELECT * FROM users WHERE id='$id'") or die('query failed');
            if(mysqli_num_rows($select)>0){
                $fetch=mysqli_fetch_assoc($select);
            }
            ?>
            <form action="" method="post">
                <div class="flex">
                    <h3>Update Profile</h3>
                    <?php
                if(isset($message)){
                    foreach($message as $message){
                        echo '<div class="message">'.$message.'</div>';
                    }
                }
                ?>
                    <div class="inputbox">
                        <span>Username:</span>
                        <input type="text" name="update_name" value="<?php echo $fetch['uname']?>" class="ufield">
                        <span>Your Email:</span>
                        <input type="text" name="update_email" value="<?php echo $fetch['uemail']?>" class="ufield">
                    </div>
                    <div class="inputbox">
                        <input type="hidden" name="oldpw" value="<?php echo $fetch['upassword']?>" class="ufield" required>
                        <span>Old Password</span>
                        <input type="password" name="uppw" placeholder="Enter Previous Password" class="ufield" required>
                        <span>New Password</span>
                        <input type="password" name="newpw" placeholder="Enter New Password" class="ufield" required>
                        <span>Confirm Password</span>
                        <input type="password" name="cpw" placeholder="Confirm Entered Password" class="ufield">
                    </div>
                </div>
                <div class="btn">
                    <input type="submit" value="Update Profile" name="updateprof" class="button">
                    <a href="home.php" class="button">Exit</a>
                </div>
            </form>
    </div>  
</body>
</html>