<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
 
<body>
    <h1>JavaScript</h1>
    <ul>
    <script charset="utf-8">
        list = new Array("Ben", "Sam", "Alice", "Danielle", "Jade");
        i = 0;
        while(i < list.length) {
            document.write("<li>"+list[i]+"</li>");
            i = i + 1;
        }
    </script>
    </ul>
    
    <h1>php</h1>
    <ul>
    <?php
        $list = array("Diluc", "Venti", "Jean", "Eula");
        $i = 0;
        while($i < count($list)) {
            echo "<li>".$list[$i]."</li>";
            $i = $i + 1;
        }
    ?>
    </ul>
</body>
</html>