<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    include 'function.php';

    writemessage();

    echo "<hr>";
    
    familyName("Jani");
    familyName("Hege");
    familyName("Stale");
    familyName("Kai Jim");
    familyName("Borge");

    echo "<hr>";
    
    familybday("Hege","1975");
    familybday("Stale","1978");
    familybday("Kai Jim","1983");

    echo "<hr>";

    setHeight(350);
    setHeight();
    setHeight(135);
    setHeight(80);


    echo "<hr>";

    echo "5 + 10 =".sum(5,10)."<br>";
    echo "7 + 13 =".sum(7,13)."<br>";
    echo "2 + 4 =".sum(2,4)."<br>";

    ?>
</body>
</html>