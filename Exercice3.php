<?php


class Guerrier{
    public $niveau;
    public $nom;
    public $age;
    public $force;
    public $arme;


    public function __construct($NI, $NO, $AG, $F, $AR)
    {
        $this->niveau = $NI;
        $this->nom = $NO;
        $this->age = $AG;
        $this->force = $F;
        $this->arme = $AR;
    }



    public function GetNiveau(){
        return $this->niveau;
    }

    public function SetNiveau($NewNiveau){
        $this->niveau = $NewNiveau;
    }





    public function GetNom(){
        return $this->nom;
    }

    public function SetNom($NewNom){
        $this->nom = $NewNom;
    }





    public function GetAge(){
        return $this->age;
    }

    public function SetAge($NewAge){
        $this->age = $NewAge;
    }




    public function GetForce(){
        return $this->force;
    }

    public function SetForce($NewForce){
        $this->force = $NewForce;
    }





    public function GetArme(){
        return $this->arme;
    }

    public function SetArme($NewArme){
        $this->arme = $NewArme;
    }


    public function GetInfo(){
        return $this->niveau.''.$this->nom.''.$this->age.''.$this->force.''.$this->arme;
    }


    public function LevelUp($niveau, $force){
        return $niveau + 1;
        return $force + 50;
    }



    public function AttaqueCoupDeHache($force){
        return $force * 1.5;
    }





    
}