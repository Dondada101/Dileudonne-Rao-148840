<?php
$is_invalid=false;
if($_SERVER["REQUEST_METHOD"]==="POST"){
        $mysqli= require __DIR__ ."/connect.php";
        $sql= sprintf("SELECT * FROM users
                      WHERE  uemail='%s'",
                      $mysqli-> real_escape_string($_POST["uemail"]));

        $result=$mysqli->query($sql);
        $user=$result -> fetch_assoc();
        if($user){
            if(password_verify($_POST["password"], $user["upassword"])){
                session_start();
                session_regenerate_id();
                $_SESSION["user_id"] = $user["id"];
                header("Location: home.php");
                exit;
            }
        }
$is_invalid=true;
exit;
}