<?php
    $conn = mysqli_connect("localhost:3307", "root", "admin1");
    mysqli_select_db($conn, "opentutorials");
    $name = mysqli_real_escape_string($conn, $_GET['name']);
    $password = mysqli_real_escape_string($conn, $_GET['password']);
    $sql = "SELECT * FROM user WHERE name='".$_GET['name']."' AND password='".$_GET['password']."'";
    echo $sql;
    $result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
 
<body>
    <?php
    if ($result->num_rows == "0") {
        echo "Who are you?";
    } else {
        echo "Hello User";
    }
    ?>
</body>
</html>