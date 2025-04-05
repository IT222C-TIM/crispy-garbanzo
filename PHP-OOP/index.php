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
// include 'fileClass.php';

//create accountnumber
$account1 = new Account("111111");
$account2 = new Account("222222");
$account3 = new Account("333333");
$account4 = new Account("444444");

//create bank account object

$savingAccount = new SavingAccount(0,0.5);
$checkingAccount = new CheckingAccount(0,200);
$savingAccount1 = new SavingAccount(100,0.5);
$checkingAccount1 = new CheckingAccount(100,500);

//create customer
$customer1 = new Customer("JOHN ROOSEVELT",26, '004');
$customer2 = new Customer("CHRIS DOE",28, '005');

$customer1->openAccount($account1, $savingAccount);
$customer1->openAccount($account2, $checkingAccount);

$customer2->openAccount($account3, $savingAccount1);
$customer2->openAccount($account4, $checkingAccount1);

// create bank
$bank = new Bank();

$bank->addCustomer($customer1);
$bank->addCustomer($customer2);

if($bank->verifyCustomer($customer1)){
    echo $customer1->getName()." is a customer <br>";
}

if($bank->verifyCustomer($customer2)){
    echo $customer2->getName()." is a customer <br>";
}

$savingAccount->addInterest();
$savingAccount1->addInterest();

//prcesss Transaction

$bank->processTransaction($customer1->getAccounts()[0]['bankAccount'], 2000);//deposit
$bank->processTransaction($customer1->getAccounts()[1]['bankAccount'], 1000);//deposit
$bank->processTransaction($customer1->getAccounts()[1]['bankAccount'], -200); //withdraw

$bank->processTransaction($customer2->getAccounts()[0]['bankAccount'], 500);//deposit
$bank->processTransaction($customer2->getAccounts()[1]['bankAccount'], 5000);//deposit
$bank->processTransaction($customer2->getAccounts()[1]['bankAccount'], -200); //withdraw

echo "Interest: ".$savingAccount->getInterest() . '<br>';
echo "<hr>";

echo "Closing Account". $account1->getAccountNumber(). "<br>";
$customer1->closeAccount($account1);


?>

<hr>

<?php 

//display
foreach ($bank->getCustomer() as $customer){
echo 
"CUSTOMER NAME: " . $customer->getName(). "<br>".
"CUSTOMER NAME: " . $customer->getID(). "<br>".
"CUSTOMER NAME: " . $customer->getAge(). "<br>";
 echo 'ACCOUNT'. '<br>';
    foreach($customer->getAccounts() as $account){
       
        echo 'Acct Number: '. $account['account']->getAccountNumber(). '<br>';
        echo 'Balance: '. $account['bankAccount']->getBal(). '<br>';
    }
    
    ?>
<hr>

<?php 
}
?>
</body>
</html>