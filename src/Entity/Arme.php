<?php

namespace App\Entity;

class Arme
{

    public $nom;
    public $desc;
    public $degat;

    public static $armes = [];

    public function __construct($nom, $desc, $degat)
    {
        $this->nom = $nom;
        $this->desc = $desc;
        $this->degat = $degat;

        self::$armes[] = $this;
    }

    public function getNom()
    {
        return $this->nom;
    }
    public function setNom($nom)
    {
        $this->nom = $nom;
        return $this;
    }
    public function getDescription()
    {
        return $this->desc;
    }
    public function setDescription($desc)
    {
        $this->desc = $desc;
        return $this;
    }
    public function getDegat()
    {
        return $this->degat;
    }
    public function setDegat($degat)
    {
        $this->degat = $degat;
        return $this;
    }

    public static function creerArme()
    {
        $a1 = new Arme("épée", "Une superbe épée tranchante !", 10);
        $a2 = new Arme('hache', "Une superbe hache tranchante !", 20);
        $a3 = new Arme('arc', "Un superbe arc !", 30);
    }

    public static function getArmeByName($nom)
    {
        foreach (self::$armes as $arme) {
            if (strtolower(str_replace('é', 'e', $arme->nom)) === $nom) {
                return $arme;
            }
        }
    }
}
