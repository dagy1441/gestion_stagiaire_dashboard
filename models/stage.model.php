<?php 
    class Domaine {
    private $id;
    private $dateDebut;
    private $dateFin;
    private $stagiaire;
    private $departement;
    
    // construct

    
    public function __construct($dateDebut, $dateFin, $stagiaire, $departement){
        $this->dateDebut=$dateDebut;
        $this->dateFin=$dateFin;
        $this->stagiaire=$stagiaire;
        $this->departement=$departement;
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
     * Get the value of dateDebut
     */ 
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * Set the value of dateDebut
     *
     * @return  self
     */ 
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    /**
     * Get the value of dateFin
     */ 
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * Set the value of dateFin
     *
     * @return  self
     */ 
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    /**
     * Get the value of stagiaire
     */ 
    public function getStagiaire()
    {
        return $this->stagiaire;
    }

    /**
     * Set the value of stagiaire
     *
     * @return  self
     */ 
    public function setStagiaire($stagiaire)
    {
        $this->stagiaire = $stagiaire;

        return $this;
    }

    /**
     * Get the value of departement
     */ 
    public function getDepartement()
    {
        return $this->departement;
    }

    /**
     * Set the value of departement
     *
     * @return  self
     */ 
    public function setDepartement($departement)
    {
        $this->departement = $departement;

        return $this;
    }
}