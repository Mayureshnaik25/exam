<?php
    $conn=mysqli_connect("localhost","root","","final");
    if(!$conn){
        echo"error".mysqli_connect_error();
    }
?>