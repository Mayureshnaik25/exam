<?php
    include("dbconn.php");
    $name = $_REQUEST['name'];
    $age = $_REQUEST['age'];
    $email = $_REQUEST['email'];
    $pass = $_REQUEST['pass'];
    $qur = "insert into ftbl values('$name','$email',$age,'$pass')";
    if(mysqli_query($conn,$qur)){
        echo"succcessful";
        header("location:log.php");
    }else{
        echo mysqli_error();
    }
?>