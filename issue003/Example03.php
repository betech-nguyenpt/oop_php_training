<?php

/*
 * Description of Encapsulation
 * Visibility: public, private, protected
 * @author Danhnc
 */

// Description of customer
class Customer {

    /**
     * Description of username
     * @var char
     */
    public $username;

    /**
     * Description of password
     * @var Number
     */
    public $password;

    /**
     * Description of account balance
     * @var Number
     */
    private $_balance;

    /**
     * Description of account id
     * @var Number
     */
    protected $__id;

    /**
     * Description of list of account
     * @var array 
     */
    public $listAccount = [
        [
            'userName' => 'abc@gmail.com',
            'password' => '123',
        ],
        [
            'userName' => 'xyz@yahoo.com',
            'password' => '456',
        ]
    ];

    /**
     * Set balance of account
     * @param Number $deposit account deposit 
     */
    public function setBalance($deposit) {
        $this->_balance = $deposit;
    }
    
    /**
     * Get balance of account
     * @return Number
     */
    public function getBalance() {
        return $this->_balance;
    }

}

$customer = new Customer();
$customer->username = 'AnNguyen';
echo $customer->username;       // AnNguyen

$customer->_balance = 1000000;  // error
echo $customer->_balance;       // error

$customer->setBalance(10000);
$customer->getBalance;
