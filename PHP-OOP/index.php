<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

include 'class.php';
include 'fileClass.php';
?>

<hr>

<?php 
echo 'Acct Number: '. $account->getAcc() . '<br>';
echo 'Balance: '. $account->getBal();
?>

<hr>
<?php 
echo $customer->getName(). '<br>';
echo $customer->getAge();

?>
</body>
</html>