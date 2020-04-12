<?php

class Fighter
{
    public $nom;
    public $vie;

    public function __construct($n, $v)
    {
        $this->nom = $n;
        $this->vie = $v;
    }

    public function frappe(Fighter $cible)
    {
        // Coup alétoire
        $coup = rand(1, 2);
        switch ($coup) {
            case 1:
                $nomcoup = 'poing';
                $degats = 1;
                $chance = 9;
                break;
            case 2:
                $nomcoup = 'pied';
                $degats = 2;
                $chance = 6;
                break;
        }
        // chances de réussite sur 10
        $chancereussite = rand(1, 10);
        // S'il réussit
        if ($chancereussite <= $chance) {
            // on déduit les points de dégats de la cible
            $cible->vie -= $degats;
            return $this->nom . " donne un coup de $nomcoup et inflige $degats point(s) de dégâts à " . $cible->nom;
        } else {
            // sinon la cible esquive le coup
            return $cible->nom . " esquive le coup de $nomcoup de " . $this->nom;
        }
    }

    public function bilan(Fighter $cible)
    {
        if ($this->vie > $cible->vie) {
            return $this->nom . " remporte le combat !";
        } elseif ($this->vie < $cible->vie) {
            return $cible->nom . " remporte le combat !";
        } else {
            return "C'est un match nul !";
        }
    }
}