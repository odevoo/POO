<?php 
/**
* 
*/
class Vehicle  
{
    protected $wheels;
    protected $brand;
    protected $fuel;


    function __construct($wheels = 4, $brand = null, $fuel = 60)
    {
        $this->wheels = $wheels;
        $this->brand = $brand;
        $this->fuel = $fuel;
    }

    public function start() {
        try {
            if ($this->fuel > 0) {
                echo "Le moteur tourne";
            } else {
                throw new Exception("Panne d'essence", 1);
                
            }
            echo 'je roule <br>';
        } 
        catch (Exception $e) {
            echo "<p>Message: " . $e->getMessage() . "</p>"; 
            echo "<p>Code: " . $e->getCode() . "</p>"; 
            echo "<p>Fichier: " . $e->getFile() . "</p>";
            echo "<p>Ligne: " . $e->getLine() . "</p>";
            echo "<p>Backtrace: ";
            var_dump($e->getTrace()); 
            echo "</p>";
            echo "<p>Chaine backtrace: " . $e->getTraceAsString() . "</p>";
        }
        finally {
            echo "Niveau d'essence: " . $this->fuel;
        }

    }
    public function drive ($km) {
        $consumption = 10  / 100;
        $this->fuel -=  $km * $consumption;
    }
}

/**
* 
*/
class Car extends Vehicle
{
    protected $color;

    
}

$myCar = new Car (4, 'porsche');
$myCar->start();
$myCar->drive(800);
$myCar->start();



/**
* 
*/
class MyException extends Exception
{
    
    function __construct($msg = null, $code = 0)
    {
        parent::__construct($msg, $code);
    }
    public function addLog () {

    }
    public function showError() {
        echo '<div style="color:red;">' . $this->getMessage() . '</div>';
    }
}

try {
    throw new MyException("Erreur", 12);
   }
   catch (MyException $e)
   {
    $e->showError();
   } 

 try {
       $pdo = new PDO('Parametre invalide');
   } catch (PDOException $e) {
       echo $e->getMessage();
   }  
 ?>
