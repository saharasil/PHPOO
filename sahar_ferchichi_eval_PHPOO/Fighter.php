<?php



    // Création de la classe
class Fighter{

    public $nom;
    public $vie;
   
    
    

    public function __construct($n, $v){
        $this->nom = $n;
        $this->vie = $v;
    }

    public function frapper(Fighter $cible ){
        
        $lance = rand(0,1);
        // echo $lance . '<br>';

        $coupDePied = array(
            'coup'  =>'Pied',
            'degat' => 2,
            'chnaces' => 6
        );

        $coupDePoing = array(
            'coup'  =>'Poing',
            'degat' => 1,
            'chnaces' => 9
        );

        $chances = rand(1,10);
        // echo $chances . '<br>';
        
        
        if($lance == 0){
            $coup = $coupDePied['coup'];

            if($chances <= 6){
                
                return  $cible->nom .' esquive le coup de ' . $coupDePied['coup']. ' de ' . $this->nom . '<br>' .$cible->nom . ' donne un coup de ' . $coupDePoing['coup'] . ' et inflige ' . $coupDePoing['degat']  . ' point(s) de dégâts à ' . $this->nom; 
                  
            }

            if($chances > 6){
                
                $cible->vie = $cible->vie - $coupDePied['degat'];
     
                return  $this->nom .' esquive le coup de ' . $coupDePoing['coup']. ' de ' . $cible->nom . '<br>' .  $this->nom . ' donne un coup de ' . $coupDePied['coup'] . ' et inflige ' . $coupDePied['degat']  . ' point(s) de dégâts à ' . $cible->nom; 
                
            }

        }
        if($lance == 1){

            if($chances >= 9){

                $cible->vie = $cible->vie - $coupDePoing['degat'];
                
                return  $this->nom .' esquive le coup de ' . $coupDePied['coup']. ' de ' . $cible->nom . '<br>' .$this->nom . ' donne un coup de ' . $coupDePoing['coup'] . ' et inflige ' . $coupDePoing['degat']  . ' point(s) de dégâts à ' . $cible->nom; 
                  
            }
            if($chances < 9){
              
                return  $cible->nom .' esquive le coup de ' . $coupDePoing['coup']. ' de ' . $this->nom . '<br>' .$cible->nom . ' donne un coup de ' . $coupDePied['coup'] . ' et inflige ' . $coupDePied['degat']  . ' point(s) de dégâts à ' . $this->nom; 
                  
            }
        }
    }

    public function bilan(Fighter $cible){

        if ($this->vie > $cible->vie){
            return  $this->nom . ' remporte le combat !';
        }

        if($this->vie < $cible->vie){
            return  $cible->nom . ' remporte le combat !';

        }

        if($this->vie == $cible->vie){
            return ' c\'est un match null';

        }
    }
    
}








