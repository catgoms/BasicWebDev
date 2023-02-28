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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="http://localhost/basicwebdev/style.css">
    <link href="http://localhost/basicwebdev/bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet">
</head>
 
<body id="target">
    <div class="container">
        <header class="jumbotron text-center">
            <img src="https://media.istockphoto.com/id/153238484/photo/polar-bear-cub-ursus-maritimus-3-months-old-standing.jpg?s=612x612&w=0&k=20&c=nEvMlp6lUHOWuo1NzuutlHH-U-IEdpH23K5CHK0Y1aQ=" alt="bear" class="img-circle" id="logo" />
            <h1><a href="http://localhost/basicwebdev/index.php">JavaScript</a></h1>
        </header>
        
        <div class="row">
            <nav class="col-md-3">
            <ol class="nav nav-pills nav-stacked">
                <?php
                while($row = mysqli_fetch_assoc($result)) {
                    echo '<li><a href ="http://localhost/basicwebdev/index.php?id='.$row['id'].'">'.htmlspecialchars($row['title']).'</a></li>'."\n";
                }       
                ?>
            </ol>
            </nav>

            <div class="col-md-9">
            <article>
            <form action="process.php" method="POST">

                <div class="form-group">
                    <label for="form-title">Title</label>
                    <input type="text" class="form-control" name="title" id="form-title" placeholder="Enter title">
                </div>
                <div class="form-group">
                    <label for="form-author">Author</label>
                    <input type="text" class="form-control" name="author" id="form-author" placeholder="Enter author name">
                </div>
                <div class="form-group">
                    <label for="form-description">Description</label>
                    <textarea name="description" id="form_description" class="form-control" placeholder="Enter description" rows="10"></textarea>
                </div>
                <input type="submit" name="name" class="btn btn-default btn-lg">
            </form>
            </article>
            <hr>
            <div id="control">
                <div class="btn-group" role="group" aria-label="...">
                    <input type="button" value="White" id="white_btn" class="btn btn-default btn-lg" />
                    <input type="button" value="Black" id="black_btn" class="btn btn-default btn-lg" />
                </div>
                <a href="http://localhost/basicwebdev/write.php" class="btn btn-success btn-lg">Write</a>
            </div>
            </div>
        </div>
    </div>
    

    <script src="http://localhost/basicwebdev/script.js"></script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="http://localhost/basicwebdev/bootstrap-3.3.4-dist/js/bootstrap.min.js"></script>
</body>
</html>