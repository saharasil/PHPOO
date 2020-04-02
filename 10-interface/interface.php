<?php
// une interface est une liste de méthode dont les noms sont imposées
interface Mouvement{
    public function turnRight();
    public function turnLeft();
}

class Bateau implements Mouvement{
    public function turnRight(){
        // Code
    }
    public function turnLeft(){
        //Code
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
interface iC extends iA,iB{
    public function test3();
}

class serieTests implements iC{
    public function test1(){};// imposé par l'héritage de iA
    public function tes2(){};// imposé par l'héritage de iB
    public function test3(){}; //implémentation de iC
}
//------------------------------------------------------------------------

class A{

}

// une classe peut à la fois hériter d'une autre classe , et implémenter une ou des interfaces
class B extends A implements iA{
    public function test1(){}
}