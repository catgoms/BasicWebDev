<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
 
<body>
    &lt;script&gt;alert("Hello");&lt;/script&gt;
    <?php
        echo htmlspecialchars('<script>alert(1);</script>');
    ?>
</body>
</html>