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
            echo file_get_contents('list.txt');
            ?>
        </ol>
    </nav>

    <div id="control">
        <input type="button" value="white" id="white_btn" />
        <input type="button" value="black" id="black_btn" />
    </div>

    <article>
        <?php
        if(!empty($_GET['id'])) {
            echo file_get_contents($_GET['id'].'.txt');
        }
        ?>
    </article>

    <script src="http://localhost/basicwebdev/script.js"></script>
</body>
</html>