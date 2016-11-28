<?php 
trait Notification {
    public function afficher(){
        echo "alerte";
    }
}

/**
* 
*/
class MyClass
{
    use Notification;
    
}
$objet = new MyClass();
$objet->afficher();


// instead of pour etiliser deux trait avec une method qui a le meme nom
// http://stackoverflow.com/questions/23595665/php-dealing-with-traits-with-methods-of-same-name



 ?>