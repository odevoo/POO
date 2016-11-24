
<?php 
/**
* 
*/
class car 
{
    private $color = "red";
    private $power = 110;
    private $speed = 0;

    public function __construct($color, $power, $speed) {
        $this->color = $color; 
        $this->power = $power;
        $this->speed = $speed;  
    }
    public function accelerate() {
        $this->speed++;
    }
    public function slowDown() {
        if ($this->speed === 0) {
            $this->speed;
        } else
        {

            $this->speed--;        
        }
        
    }
    public function displaySpeed() {
        echo $this->speed;
    }
}

$ferrari = new car('black', 255, 160);

echo '<pre>';
echo var_dump($ferrari);
echo '</pre>';
echo '<pre>';
$ferrari->accelerate();
$ferrari->displaySpeed();
echo '</pre>';
echo '<pre>';
$ferrari->slowDown();
$ferrari->displaySpeed();
echo '</pre>';


