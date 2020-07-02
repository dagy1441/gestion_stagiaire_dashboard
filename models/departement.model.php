<?php 
    class Departement {
    private $id;
    private $nom;
    private $maitre;
    
    // construct

    
    public function __construct($nom, $maitre){
        $this->nom=$nom;
        $this->maitre=$maitre;
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
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of maitre
     */ 
    public function getMaitre()
    {
        return $this->maitre;
    }

    /**
     * Set the value of maitre
     *
     * @return  self
     */ 
    public function setMaitre($maitre)
    {
        $this->maitre = $maitre;

        return $this;
    }
}
