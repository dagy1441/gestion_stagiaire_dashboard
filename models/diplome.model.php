<?php 
    class Diplome {
    private $id;
    private $nomDiplome;
    private $anneObtention;
    private $ecole;
    
    // construct

    
    public function __construct($nomDiplome, $anneObtention, $ecole){
        $this->nomDiplome=$nomDiplome;
        $this->anneObtention=$anneObtention;
        $this->ecole=$ecole;
    }
    
    

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of nomDiplome
     */ 
    public function getNomDiplome()
    {
        return $this->nomDiplome;
    }

    /**
     * Set the value of nomDiplome
     *
     * @return  self
     */ 
    public function setNomDiplome($nomDiplome)
    {
        $this->nomDiplome = $nomDiplome;

        return $this;
    }

    /**
     * Get the value of anneObtention
     */ 
    public function getAnneObtention()
    {
        return $this->anneObtention;
    }

    /**
     * Set the value of anneObtention
     *
     * @return  self
     */ 
    public function setAnneObtention($anneObtention)
    {
        $this->anneObtention = $anneObtention;

        return $this;
    }

    /**
     * Get the value of ecole
     */ 
    public function getEcole()
    {
        return $this->ecole;
    }

    /**
     * Set the value of ecole
     *
     * @return  self
     */ 
    public function setEcole($ecole)
    {
        $this->ecole = $ecole;

        return $this;
    }
}


