<?php
class A{
    public function direBonjour(){
        return 'Bonjour';
    }

}
class B{
    public function direHello(){
        return 'Hello';
    }
    
}

class C{
    public $objA;
    public $objB;
    public function __construct(){
        $this->objA = new A;
        $this->objB = new B;
    }
    public function direBonjourFR(){ // raccourci vers la méthode de l'objet A
        return $this->objA->direBonjour();
    }
    public function direBonjourEN(){ // raccourci vers la méthode de l'objet B
        return $this->objB->direHello();
    }
}

$obj = new C();
var_dump($obj);

// Façon 1 : Pour atteindre les méthodes direBonjour() et direHello(), je peux passer par mespropriétés qui sont des objets
// l'enchainement des flévhes m'indique que j'ai bien un objet dans un objet 
echo $obj->objA->direBonjour();
echo '<hr>';
echo $obj->objB->direHello();
echo '<hr>';

//Façon 2 :utliliser des méthodes "raccourcis" pour atteindre direBonjour() et direHello().
echo $obj->direBonjourFR(); //équivalent de  $obj->objA->direBonjour();
echo '<hr>';
echo $obj->direBonjourEN();//équivalent de  $obj->objB->direHello();