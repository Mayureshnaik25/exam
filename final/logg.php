<?php
    session_start();
    include("dbconn.php");
    $email = $_REQUEST['email'];
    $pass = $_REQUEST['pass'];
    $qur = "select * from ftbl";
    $res=mysqli_query($conn,$qur);
    $found=false;
    if(mysqli_num_rows($res)>0){
        while($row=mysqli_fetch_assoc($res)){
            if($email==$row['email']&&$pass==$row['pass']){
                $_SESSION['name']=$row['name'];
                $found=true;
                echo "found";
                header("location:home.php");
            }
        }
        if(!$found){
            echo '<script>
            alert("Invalid Email or Password.");
            window.location.href="log.php";
            </script>';
        }
    }else{
        echo "0 results";
    } 
?>