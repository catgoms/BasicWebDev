<?php
    require("config/config.php");
    require("lib/db.php");
    $conn = db_init($config["host"], $config["duser"], $config["dpw"], $config["dname"]);
    $result = mysqli_query($conn, "SELECT * FROM topic");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="http://localhost/basicwebdev/style.css">
</head>
 
<body id="target">
    <header>
        <img src="https://media.istockphoto.com/id/153238484/photo/polar-bear-cub-ursus-maritimus-3-months-old-standing.jpg?s=612x612&w=0&k=20&c=nEvMlp6lUHOWuo1NzuutlHH-U-IEdpH23K5CHK0Y1aQ=" alt="bear" />
        <h1><a href="http://localhost/basicwebdev/index.php">JavaScript</a></h1>
    </header>
    
    <nav>
        <ol>
            <?php
            while($row = mysqli_fetch_assoc($result)) {
                echo '<li><a href ="http://localhost/basicwebdev/index.php?id='.$row['id'].'">'.htmlspecialchars($row['title']).'</a></li>'."\n";
            }       
            ?>
        </ol>
    </nav>

    <div id="control">
        <input type="button" value="white" id="white_btn" />
        <input type="button" value="black" id="black_btn" />
        <a href="http://localhost/basicwebdev/write.php">Write</a>
    </div>

    <article>
        <?php
        if (empty($_GET['id']) === false) {
            $sql = "SELECT topic.id,title,name,description FROM topic LEFT JOIN user ON topic.author=user.id WHERE topic.id=".$_GET['id'];
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            echo '<h2>'.htmlspecialchars($row['title']).'</h2>';
            echo '<p>'.htmlspecialchars($row['name']).'</p>';
            echo strip_tags($row['description'], '<a><h1><h2><h3><h4><h5><ol><ul><li><p>');
        }
        
        ?>
    </article>

    <script src="http://localhost/basicwebdev/script.js"></script>
</body>
</html>