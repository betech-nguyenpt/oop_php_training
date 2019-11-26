<?php

/*
 * Each receipt have two parameters: Name and price
 * Program manage these receipts
 * 
 * @author DanhNC
 */

// Description of receipt
class Receipt {

    /**
     * Name of product
     * @var char
     */
    public $name;

    /**
     * Price of product
     * @var  Number
     */
    public $price;

    /**
     * Set value for product name and price
     * @param Char $name name of product
     * @param Number $price price of product
     */
    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }

    /**
     * Print the receipt of product
     * @return string
     * Example: [Meat : 40]
     */
    public function printReceipt() {
        echo '[' . $this->name . ' : ' . $this->price . ']    ';
    }

}

// Description of List receipt
class ListReceipt {

    /**
     * Receipt of product
     * @var Receipt[]
     */
    public $receipts = [];

    /**
     * Sum of money in all receipts
     * @var Number
     */
    private $sum;

    /**
     * Amount of all receipts
     * @var Number
     */
    public $amount;
    
    /**
     * Set Name and Price for product receipt
     */
    public function __construct() {
        $arrName = ['Milk', 'Fish', 'Meat', 'Chicken', 'Beef'];
        $arrPrice = [30, 20, 60, 40, 100];
        for ($ii = 0; $ii < count($arrName); $ii++) {
            $this->receipts[$arrName[$ii]] = new Receipt($arrName[$ii], 
                                                        $arrPrice[$ii]);
        }
    }

    /**
     * Print list of all receipt
     * Example: [Meat : 40] [Beef : 100]
     */
    public function printListReceipt() {
        foreach ($this->receipts as $value) {
            $value->printReceipt();
        }
    }

    /**
     * Edit price of a product in receipt
     * @param Char $name Name of product need edit
     * @param Number $price new Price of product 
     */
    public function editReceipt($name, $price) {
        $this->receipts[$name]->price = $price;
    }

    /**
     * Delete one multi product from receipt
     * @param Array $listNames name of product need delete
     */
    public function deleteReceipt(...$listNames) {        
        foreach ($listNames as $value) {
            unset($this->receipts[$value]);
        }
    }
    public function deleteReceiptArray($listNames) {        
        foreach ($listNames as $value) {
            unset($this->receipts[$value]);
        }
    }
    
    /**
     * Print the sum of price in all receipt
     * @return Number
     */
    public function printSum() {
        foreach ($this->receipts as $arrName => $value) {
            $this->sum += $this->receipts[$arrName]->price;
        }
        return $this->sum;
    }

}

$circle = new ListReceipt;
echo 'The receipt list: ';
$circle->printListReceipt();
echo '<br/>';
echo 'Delete Milk from receipt: ' . $circle->deleteReceipt('Milk');
$circle->printListReceipt();
echo '<br/>';
echo 'Edit price of Meat into 110: ' . $circle->editReceipt('Meat', 110);
$circle->printListReceipt();
echo "<br/>";
echo 'Sum of money in receipt:' . $circle->printSum() . '<br/>';
echo '<br/>';
echo 'Another Receipt <br/>';
$obj2 = new ListReceipt;
echo 'Delete Milk and Chicken from receipt:';
//$obj2->deleteReceipt('Milk', 'Chicken');
$obj2->deleteReceiptArray(['Milk', 'Beef']);
echo $obj2->printListReceipt();
echo $obj2->printSum();