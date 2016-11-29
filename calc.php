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
                $value = (float)$value;
                $result += $value;
            }
        }
        return $result; 
    }
    public function subtract($val){
        
        $result = 0;
        $key = 0;
        foreach ($val as $value) {
            if ($value != 'subtract') {
                if ($result === 0 && $key === 0) {
                    $result = (float)$value;
                    $key = 1;
                    //echo $result;
                    
                } else {
                $value = (float)$value;
                $result -= $value; 
            }
            }
        }
        $key = 0;
        return $result;
    }
    public function multiply($val){
         $result = 1;
        foreach ($val as $value) {
            if ($value != 'multiply') {
                $value = (float)$value;
                $result = $result * $value;
            }
        }
        return $result;
    }
    public function divide($val){
         $result = 0;
        foreach ($val as $value) {
            if ($value != 'divide') {
                if ($result === 0) {
                    $result = (float)$value;
                } else {
                $value = (float)$value;
                $result = $result / $value;
            }
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
        //header('Content-Type: application/json');
        //return $stmt;
        break;
    
    case 'multiply':
        $result = $calcul->multiply($operation);
        $stmt = json_encode($result);
        echo $stmt;
        
        break;

    case 'subtract':
        $result = $calcul->subtract($operation);
        $stmt = json_encode($result);
        echo $stmt;
        
        break;

    case 'divide':
        $result = $calcul->divide($operation);
        $stmt = json_encode($result);
        echo $stmt;
        
        break;
}