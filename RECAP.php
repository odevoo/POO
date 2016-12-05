<?php 

//focntion autoload
//


function __autoload($class) {
    require_once $class.'.php';
}
/**************/
spl_autoload_register('basic_autoload');
function basic_autoload($class){
    $file = $class.'.php';
    if (file_exists($file)) {
        require_once $file;
    }
}
function dotted_autoload($class){
    $file = str_replace('_','.',$class).'php';
    if (file_exists($file)) {
        require_once $file;
    }
}
/*************/
namespace 
/**
* 
*/
class Voiture
{
    public $nbRoues = 4;

}
use voiture as V;

$mycar = new V;
echo $mycar->nbRoues;


 ?>

