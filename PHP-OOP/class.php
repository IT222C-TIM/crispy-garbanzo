<?php
class BankAccount{

    private $accountNumber;
    private $balance;

    public function __construct($accountNumber, $balance){
        $this->accountNumber = $accountNumber;
        $this->balance = $balance;
    }

    public function getAcc(){
        return $this->accountNumber;
    }
    public function getBal(){
        return $this->balance;
    }
    public function setAcc($accountNumber){
        return $this->accountNumber = $accountNumber;
    }

    private function deposit($amount){
        if($amount > 0){
            $this->balance += $amount;
        }
        return $this;
    }

    private function withdraw($amount){
        if($amount <= $this->balance){
            $this->balance -= $amount;
            return true;
        }
        return false;
    }

    public function transaction($action, $amount){
        if($action == 'deposit'){
            $this->deposit($amount);
        }elseif($action == 'withdraw'){
            $this->withdraw($amount);
        }
    }

}
Class Customer{

    private $name;

    private $age;

    public function __construct($name,$age){
        $this->name = $name;
        $this->age = $age;
    }
    public function getName(){
        return $this->name;
    }

    public function getAge(){
        return $this->age;
    }

    public function setName($name){
        $name = trim($name);

        if($name == ''){
            return false;
        }

        $this->name = $name;

        return true;

    }

    public function setAge($age){
        return $this->age = $age;
    }

}
$account = new BankAccount(3,600);
// $account->setAcc(1);
// $account->balance = 100;

// $account->deposit(100)->deposit(300)->withdraw(200);

$account->transaction('deposit',1000);
$account->transaction('withdraw',400);

$customer = new Customer("CHRISTIAN","28");
// $customer->setName("john");
// $customer->setAge(26);

?>