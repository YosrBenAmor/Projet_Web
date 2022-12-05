<?php
class user
{
    private ?int $id_us = null;
    private ?string $nom_us = null;
    private ?string $prenom_us = null;
    private ?string $mail_us = null;
    private ?string $mdp_us = null;
    
   

    public function __construct( $nom_us ,$prenom_us, $mail_us, $mdp_us )
    {
       
            $this->nom_us=$nom_us;
			$this->prenom_us=$prenom_us;
			$this->mail_us=$mail_us;
			$this->mdp_us=$mdp_us;
			
        
    }
   
    public function getId_us()
    {
        return $this->id_us;
    }
    public function getNom_us()
    {
        return $this->nom_us;
    }
    public function getMail_us()
    {
        return $this->mail_us;
    }
    public function getPrenom_us()
    {
        return $this->prenom_us;
    }
    public function getMdp_us()
    {
        return $this->mdp_us;
    }
    


    /**
     * Set the value of lastName
     *
     * @return  self
     */
    public function setNom_us($nom_us)
    {
        $this->nom_us = $nom_us;

        return $this;
    }
/**
     * Set the value of lastName
     *
     * @return  self
     */
    public function setPrenom_us($prenom_us)
    {
        $this->prenom_us = $prenom_us;

        return $this;
    }

    /**
     * Set the value of lastName
     *
     * @return  self
     */
    public function setMail_us($mail_us)
    {
        $this->mail_us = $mail_us;

        return $this;
    }

    /**
     * Set the value of lastName
     *
     * @return  self
     */
    public function setMdp_us($mdp_us)
    {
        $this->mdp_us = $mdp_us;

        return $this;
    }

   
}