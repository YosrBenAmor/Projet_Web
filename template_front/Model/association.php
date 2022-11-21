<?php
class association
{
    private ?int $id_ass = null;
    private ?string $nom_ass = null;
    private ?string $img_ass = null;
    private $datefondation =null;
    private ?string $objectif_ass =null;
    private ?string $adresse_ass =null;
    private ?string $num_ass =null;
    private ?int $nbpt_ass =null;
    private ?string $email_ass =null;

   

    public function __construct( $nom_ass,$img_ass,$datefondation,$objectif_ass,$adresse_ass,$num_ass,$nbpt_ass,$email_ass)
    {
        $this->nom_ass = $nom_ass;
        $this->img_ass = $img_ass;
        $this->datefondation = $datefondation;
        $this->objectif_ass= $objectif_ass;
        $this->adresse_ass = $adresse_ass;
        $this->num_ass = $num_ass;
        $this->nbpt_ass= $nbpt_ass;
        $this->email_ass = $email_ass;   
    }
    
    public function getId_ass()
    {
        return $this->id_ass;
    }
    
    public function getNom_ass()
    {
        return $this->nom_ass;
    }
    public function getImg_ass()
    {
        return $this->img_ass;
    }
    public function getDatefondation()
    {
        return $this->datefondation;
    }
  
    public function getObjectif_ass()
    {
        return $this->objectif_ass;
    }
    public function getAdresse_ass()
    {
        return $this->adresse_ass;
    }
    public function getNum_ass()
    {
        return $this->num_ass;
    }
    public function getNbpt_ass()
    {
        return $this->nbpt_ass;
    }
    public function getemail_ass()
    {
        return $this->email_ass;
    }
    public function setNom_ass($nom_ass)
    {
        $this->nom_ass = $nom_ass;

        return $this;
    }
    public function setImg_ass($img_ass)
    {
        $this->img_ass = $img_ass;

        return $this;
    }
    public function setDatefondation($datefondation)
    {
        $this->datefondation = $datefondation;

        return $this;
    }
    public function setObjectif_ass($objectif_ass)
    {
        $this->objectif_ass = $objectif_ass;

        return $this;
    }
    public function setAdresse_ass($adresse_ass)
    {
        $this->adresse_ass =$adresse_ass;

        return $this;
    }
    public function setINum_ass($num_ass)
    {
        $this->num_ass = $num_ass;

        return $this;
    }
    public function setNbpt_ass($nbpt_ass)
    {
        $this->nbpt_ass= $nbpt_ass;

        return $this;
    }
    public function setEmail_ass($email_ass)
    {
        $this->email_ass = $email_ass;

        return $this;
    }

}