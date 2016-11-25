<?php 
/**
* 
*/
class user
{
    private $firstname;
    private $lastname;
    private $email;
    private $password;
    private $address;
    private $postalCode;
    private $city;

    function __construct($firstname, $lastname,$email,$password,$address, $postalCode, $city)
    {
       $this->firstname = $firstname;
       $this->lastname = $lastname;
       $this->email = $email;
       $this->password = $password;
       $this->address = $address;
       $this->postalCode = $postalCode;
       $this->city = $city;
    }

    public function subscribe(){
        $req = $pdo->prepare('INSERT INTO clients SET nomClient = ?, prenomClient = ?, PassClient = ?, adresseClient = ?, cpClient = ?, villeClient = ?, emailClient= ?');
        $password = password_hash($this->password, PASSWORD_BCRYPT);
        $req->execute([$this->lastname, $this->firstname, $password, $this->address, $this->postalCode, $this->city, $this->email]);
        $_SESSION['flash']['success'] = 'Vous êtes inscrit';
            header('location: index.php');
    }
    public function connect(){

        $req = $pdo->prepare('SELECT * FROM clients WHERE emailClient = :email');
        $req->execute(['email' => $_POST['email']]);
        $user = $req->fetch();
        if (password_verify($_POST['password'], $user['PassClient'])) {

            session_start();
            $_SESSION['auth'] = $user;
            $_SESSION['flash']['success'] = 'Vous êtes connectés';
            header('location: index.php');

        }
    }
    public function disconnect() {

        session_start();
        unset($_SESSION['auth']);
        $_SESSION['flash']['success'] = 'Vous êtes maintenant déconnecté';
        header('location: index.php');

    }
}

 /****

 public function __set($property, $value) {
    if (property_exists($this, $property)) {
        $this->$proprety = $value;
    }
 }



 public function __get($property) {
    return $this->$property;
 }


 *////