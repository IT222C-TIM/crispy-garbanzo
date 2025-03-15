<?php
function writemessage() {
    echo "WELCOME TO MY PAGE HEELOOO";
    echo "<br> hellow im jOHn";
}

function familyName($fname){
    echo "$fname Refsnes. <br>";
}


function familybday($fname,$year){
    echo "$fname Refsnes. Born in $year <br>";
}
    

function setHeight($minHeight = 50){
    echo "THe Height is " . $minHeight ."<br>";
}

function sum($x,$y){
    $z = $x + $y;
    return $z;
}
    
?>