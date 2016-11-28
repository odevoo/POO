<?php 

interface Affichable {
    public function affiche();

}

interface Editable {
    const CTE="Bonjour";
    public function editer();
}

class Person implements Affichable, Editable {
    public $nom = 'Jojo';
    public function affiche() {
        echo $this->nom;
    }
    public function editer() {

    }
}

$person = new Person();
$person->editer();
echo $person::CTE;
 ?>

