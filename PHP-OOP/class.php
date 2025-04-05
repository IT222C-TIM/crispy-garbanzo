<?php
class Bank{
    private $customers = [];
    public function __construct(){
        $this->customers = [];
    }

    public function getCustomer(){
        return $this->customers;
    }

    public function addCustomer($customer){
        $this->customers[] = $customer;
    }

    public function verifyCustomer($customer){
        return in_array($customer, $this->customers);
    }

    public function removeCustomer($customer){
        $index = array_search($customer, $this->customers);
        if($index !== false){
            unset($this->customers[$index]);
            return true;
        }
        return false;
    }

    public function processTransaction($account, $amount){
        if($amount >0){
            $account->transaction('deposit',$amount);
        } else {
            $account->transaction('withdraw',abs($amount));
        }
    }
}

class Account{
    private $accountNumber;

    public function __construct($accountNumber){
        $this->accountNumber = $accountNumber;
    }

    public function getAccountNumber(){
        return $this->accountNumber;
    }
}

class BankAccount{

    public $balance;

    public function __construct($balance){
        $this->balance = $balance;
    }

    public function getBal(){
        return $this->balance;
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

    private $id;

    private $accounts = [];

    public function __construct($name,$age,$id){
        $this->name = $name;
        $this->age = $age;
        $this->id = $id;
        $this->accounts = [];
    }

    public function openAccount($account, $bankAccount){
        $this->accounts[] = ['account' => $account, 'bankAccount' => $bankAccount];
    }

    public function closeAccount($accountToClose){
        foreach($this->accounts as $index => $accountData){
            if($accountData['account']->getAccountNumber() == $accountToClose->getAccountNumber()){
                unset($this->accounts[$index]);
                return true;
            }
        }
        return false;
    }


    public function getName(){
        return $this->name;
    }

    public function getAge(){
        return $this->age;
    }

    public function getID(){
        return $this->id;
    }
    public function getAccounts(){
        return $this->accounts ?? [];
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

class SavingAccount extends BankAccount{
    private $interestRate;

    public function __construct($balance, $interestRate){
        parent::__construct($balance);
        $this->interestRate = $interestRate;
    }
    public function setinterestRate($interestRate){
        $this->interestRate = $interestRate;
    }

    public function getInterest(){
        return $this->interestRate;
    }

    public function addInterest(){
        $interest = $this->getBal() * $this->interestRate;

        $this->transaction('deposit',$interest);
    }
}

class CheckingAccount extends BankAccount{
    private $minBalance;

    public function __construct($balance, $minBalance){
        parent::__construct($balance);
        $this->minBalance = $minBalance;
    }

    public function withdraw($amount){
        if($amount > 0 && ($this->minBalance + $this->getBal()) >= $amount ){
            $this->balance -= $amount;
        }
    }
}


?>