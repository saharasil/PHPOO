<?php
// une interface est une liste de méthode dont les noms sont imposées : il va fournir un plan général .
//Une interface ne peut contenir que les signatures des méthodes ainsi qu’éventuellement des constantes mais pas de propriétés.

interface Mouvement{ //on définie une interface de la même manière qu’une classe mais en utilisant cette fois-ci le mot clef interface à la place de class
    public function turnRight();
    public function turnLeft();
    public function trajet();
    public const TRAJET = 15;
}
// on réutilise les définitions de notre interface dans des classes. Pour cela, on va implémenter notre interface.
class Bateau implements Mouvement{ // on implémente notre interface 
    // toutes les méthodes déclarées dans une interface doivent obligatoirement être implémentées dans une classe qui implémente une interface
    public function turnRight(){ 
        // Code
    }
    public function turnLeft(){
        //Code
    }
    public function trajet(){
       return Mouvement::TRAJET * 2; // pour accéder à une constante d’interface, il va falloir préciser le nom de l’interface devant l’opérateur de résolution de portée.
    }


}

class Moto implements Mouvement{
    public function turnRight(){
        //Code
    }
    public function turnLeft(){
        //Code
    }

}

/* toutes les classes qui sont implémenter deveront redéfinir touts les méthodes imposées
*/

interface carburant{
    public function ravitailler();
}
// Une classe peut implémenter plusieurs interfaces (elle devra redéfinir toutes les méthodes imposées par les interface)

class Camion implements Mouvement,Carburant{
    public function turnRight(){
        //Code
    }
    public function turnLeft(){
        //Code
    }
    public function ravitailler(){
        //Code
    }
}

//--------------------------------
//héritage entre interfaces
interface iA{
    public function test1();
}

interface iB{
    public function test2();
}
//étendre une interface en utilisant le mot clef extends
interface iC extends iA, iB{
    public function test3();
}

class serieTests implements iC {
    public function test1(){} // imposé par l'héritage de iA
    public function test2(){}// imposé par l'héritage de iB
    public function test3(){} //implémentation de iC
}
//------------------------------------------------------------------------

class A{

}

// une classe peut à la fois hériter d'une autre classe , et implémenter une ou des interfaces
class B extends A implements iA{
    public function test1(){}
}