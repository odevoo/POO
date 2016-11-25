<?php 

/**
* 
*/
class Calcul
{

    
    public function add($val){
        $result = 0;
        foreach ($val as $value) {
            if ($value != 'add') {
                $value = (int)$value;
                $result += $value;
            }
        }
        return $result; 
    }
    public function substract($val){
        
        $result = 0;
        foreach ($val as $value) {
            if ($value != 'subtract') {
                if ($result === 0) {
                    $result = (int)$value;
                    //echo $result;
                    
                } else {
                $value = (int)$value;
                $result -= $value; 
            }
            }
        }
        return $result;
    }
    public function multiply($val){
         $result = 1;
        foreach ($val as $value) {
            if ($value != 'multiply') {
                $value = (int)$value;
                $result = $result * $value;
            }
        }
        return $result;
    }
    public function divide($val){
         $result = 1;
        foreach ($val as $value) {
            if ($value != 'divide') {
                $value = (int)$value;
                $result = $result * $value;
            }
        }
        return $result;
    }
}


$operation = json_decode($_POST['data']);

//json_decode();

$calcul = new Calcul;

switch ($operation[1]) {
    case 'add':
        $result = $calcul->add($operation);
        $stmt = json_encode($result);
        echo $stmt;
        header('Content-Type: application/json');
        return $stmt;
        break;
    
    case 'multiply':
        $result = $calcul->multiply($operation);
        $stmt = json_encode($result);
        echo $stmt;
        header('Content-Type: application/json');
        return $stmt;
        break;

    case 'subtract':
        $result = $calcul->substract($operation);
        $stmt = json_encode($result);
        echo 'result soustrouction: '.$stmt;
        header('Content-Type: application/json');
        return $stmt;
        break;
}