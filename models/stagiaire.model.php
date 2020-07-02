<?php 
    class Stagiaire {
        
    private $id;
    private $nom;
    private $prenom;
    private $tel;
    private $email;
    private $datenais;
    private $cv;
    private $lettre;
    private $residence;
    private $diplome;
    
    // construct



    
    public function __construct($nom, $prenom,$tel, $email, $datenais, $cv, $lettre, $residence, $diplome){
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->tel=$tel;
        $this->email=$email;
        $this->datenais=$datenais;
        $this->cv=$cv;
        $this->lettre=$lettre;
        $this->residence=$residence;
        $this->diplome=$diplome;
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
     * Get the value of prenom
     */ 
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */ 
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of tel
     */ 
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set the value of tel
     *
     * @return  self
     */ 
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of datenais
     */ 
    public function getDatenais()
    {
        return $this->datenais;
    }

    /**
     * Set the value of datenais
     *
     * @return  self
     */ 
    public function setDatenais($datenais)
    {
        $this->datenais = $datenais;

        return $this;
    }

    /**
     * Get the value of cv
     */ 
    public function getCv()
    {
        return $this->cv;
    }

    /**
     * Set the value of cv
     *
     * @return  self
     */ 
    public function setCv($cv)
    {
        $this->cv = $cv;

        return $this;
    }

    /**
     * Get the value of lettre
     */ 
    public function getLettre()
    {
        return $this->lettre;
    }

    /**
     * Set the value of lettre
     *
     * @return  self
     */ 
    public function setLettre($lettre)
    {
        $this->lettre = $lettre;

        return $this;
    }

    /**
     * Get the value of residence
     */ 
    public function getResidence()
    {
        return $this->residence;
    }

    /**
     * Set the value of residence
     *
     * @return  self
     */ 
    public function setResidence($residence)
    {
        $this->residence = $residence;

        return $this;
    }

    /**
     * Get the value of diplome
     */ 
    public function getDiplome()
    {
        return $this->diplome;
    }

    /**
     * Set the value of diplome
     *
     * @return  self
     */ 
    public function setDiplome($diplome)
    {
        $this->diplome = $diplome;

        return $this;
    }

   
}


