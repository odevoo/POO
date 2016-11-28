<?php 


abstract class User {
    
    protected $firstName = 'Jhon';
    protected $lastName = 'Doe';

    
    abstract public function getDisplayName();

    public function printDisplayName() {
        echo "<p>".$this->getDisplayName()."</p>";
    }

}

/**
*
*
* 
**/

class Admin extends User
{
    protected $password;

    public function getDisplayName() {
        //return $this->firstName. " (admin)";
        return parent::getDisplayName() . "(admin)";
    }

}

/****************************************************/

$my_user = new User();
$my_admin = new Admin();

$my_user->printDisplayName();
$my_admin->printDisplayName();


echo ($my_admin instanceof user);
echo ($my_user instanceof admin);
echo class_exists('user');

 ?>


