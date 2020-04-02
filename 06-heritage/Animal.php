<?php
class Animal {
    //protected : signifie que la méthode est protégé et n'est utlisable que dans la classe et dans les classes héritères
    protected function deplacement(){
        return 'Je me déplace sur 4 pattes';

    }
    protected function manger(){
        return 'Je mange 1 fois par jour';

    }
}

class Chien extends Animal{
    protected function quiSuisJe(){
        return 'Je suis un chien et '. $this->deplacement() ' et ' . $this->manger(). '<br>';
        //étant dans une classe héritière de Animal,j'ailedroit d'utiliser une méthode protected

    }
}
class Elephant extends Animal{
    protected function manger(){ //redéfinition d'une méthode
        return 'Je mange 2 fois par jour';

    }
    protected function quiSuisJe(){
        return 'Je suis un éléphant et '. $this->deplacement() ' et ' . $this->manger(). '<br>';
        

    }

}

$rex = new chien;
echo $rex->quiSuisJe();
echo$rex->manger();
//echo $rex->deplacement(); impossible car la méthode est protected
echo '<hr>';
$dumbo= new Elephan;
echo $dumbo->quiSuisJe();

/*
L'orsqu'on appelle uneméthode d'une classe quia un héritage, l'interpreteur cherche d'abord dans la classe dont l'objet est issu avant d'aller voir la classe parent.
*/