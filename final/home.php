<?php
session_start();
$name = $_SESSION['name'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>WELCOME <?php echo $name ?></h1>
    <form action="logout.php">
        <button >LOGOUT</button>
    </form>
</body>
</html>