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
function Runningsum() {
    $Sum = 0; 
    $inputs = []; 
  
    if (isset($_POST['numbers'])) {
        $inputs = explode(",", $_POST['numbers']);
  
        foreach ($inputs as $input) {
            $input = trim($input);
            $N = (float) $input; 
  
            if ($N < 0) {
                break; 
            }
  
            $Sum += $N; 
        }
    }
  
    return $Sum;
  }
    
  //9. A function that reads two values determines the largest value and prints the largest value with an identifying message
function findLargest($num1, $num2) {
    // if ($num1 > $num2) {
    //     echo "The largest value is: $num1";
    // } elseif ($num2 > $num1) {
    //     echo "The largest value is: $num2";
    // } else {
    //     echo "Both values are equal: $num1";
    // }

    $final = MAX($num1,$num2);

    echo "The largest value is: $final";
}

function getQuotient($dividend, $divisor) {
    if ($divisor == 0) {
        return "Error: Divisor cannot be zero.";
    } else {
        $quotient = $dividend / $divisor;
        return "The quotient of $dividend divided by $divisor is: $quotient";
    }
}

function fibonacci($n,$v1,$v2) {
    $fib = [$v1, 1];
    for ($i = 2; $i < $n; $i++) {
        $fib[] = $fib[$i - 1] + $fib[$i - 2];
    }
    return $fib;
}



?>

