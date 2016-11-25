<?php 

/**
* 
*/
class Users {
    
    protected $id_user;
    protected $lastName;
    protected $firstName;
    protected $age;
    protected $birthDate;



    function __construct($lastName, $firstName, $age, $birthDate, $id_user)
    {
        
        $this->lastName = $lastName;
        $this->firstName = $firstName;
        $this->age = $age;
        $this->birthDate = $birthDate;
        $this->id_user = $id_user;

    }

    public function displayLastName() {
        echo $this->lastName;
    }
    public function modifyLastName($param) {
        $this->lastName = $param;
    }
    public function displayFirstname() {
        echo $this->firstName;
    }
    public function modifyFirstname($param) {
        $this->lastName = $param;
    }
}



$bastien = new Users('TACLET', 'Bastien', 22, '22/10/2017', 1 );
/*echo "<pre>";
var_dump($bastien);
echo "</pre>";*/
$bastien->displayLastName();
$bastien->modifyLastName('LANDRY');
$bastien->displayLastName();