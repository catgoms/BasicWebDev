<?php
    $conn = mysqli_connect("localhost:3307", "root", "admin1");
    mysqli_select_db($conn, "opentutorials");
    $sql ="INSERT INTO topic(title,description,author,created) VALUES('".$_POST['title']."', '".$_POST['description']."', '".$_POST['author']."', now())";
    $result = mysqli_query($conn, $sql);
    header('Location: http://localhost/basicwebdev/index.php');
?>