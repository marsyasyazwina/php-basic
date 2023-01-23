<?php

class Customer
{
    private $firstName = "Lee";
    private $lastName = "Seokmin";

	public function __call($firstName, $lastName){
        $this->$firstName = $first;
        $this->$lastName = $last;
}

}
$obj = new Customer;
var_dump($obj);

?>