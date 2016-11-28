<?php 

final class A
{
     public function methode() {
        echo "bonjour";
     }
}

class B extends A {
    //cela ne fonctionne pas car A est declaré en "final" aucune classes nepeut donc hérité d'elle
    
}



class C {
    final public function methodeC() {
        echo "methode C";
    }
}

class D extends C {
    public function methodeC() {
        echo "methode D";
    }
}

$objetD = new D();
$objectD->methodeC(); // ne marchera pas
 
$pdo = new PDO;
$pdo->fetchAll

 ?>