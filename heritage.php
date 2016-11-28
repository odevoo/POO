<?php 

/**
*
*
* 
*/

class User {
    
    protected $firstName = 'Jhon';
    protected $lastName = 'Doe';

    
    public function getDisplayName() {
        return $this->firstName. " ". $this->lastName;
    }

    public function printDisplayName() {
        echo "<p>".$this->getDisplayName()."</p>";
    }

}

/**
*
*
* 
*/

class Admin extends User
{
    protected $password;

    public function getDisplayName() {
        return $this->firstName. " (admin)";
        return parent::getDisplayName() . "(admin)";
    }

}

/****************************************************/

$my_user = new User;
$my_admin = new Admin;

$my_user->printDisplayName();
$my_admin->printDisplayName();

 ?>