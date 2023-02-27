<?php
    $conn = mysqli_connect("localhost:3307", "root", "admin1");
    mysqli_select_db($conn, "opentutorials");
    $sql = "SELECT * FROM user WHERE name='".$_GET['name']."' AND password='".$_GET['password']."'";
    echo $sql;
    $result = mysqli_query($conn, "SELECT * FROM topic");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
 
<body>
    <?php
    $password = $_GET['password'];
    if ($password == "1111") {
        echo "Hello User";
    } else {
        echo "Who are you?";
    }
    ?>
</body>
</html>