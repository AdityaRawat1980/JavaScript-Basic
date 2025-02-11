<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $str1 = "My self aditya";
    echo $str1;
    echo strlen($str1),"<br>";
    echo strstr($str1,"e"),"<br>";
    echo strpos($str1,"ad"),"<br>";
    echo substr($str1,1,5),"<br>";
    echo strrev($str1),"<br>";
    echo str_replace("My self","I am",$str1),"<br>";
    echo strtoupper($str1),"<br>";
    echo strtolower($str1),"<br>";
    echo ucfirst($str1),"<br>";
    echo lcfirst($str1),"<br>";
    ?>
</body>
</html>