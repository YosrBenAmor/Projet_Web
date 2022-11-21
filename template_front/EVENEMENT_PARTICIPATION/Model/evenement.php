<?php
class evenement
{
    private ?int $id_eve = null;
    private ?string $nom_eve = null;
    private  $date_eve=null;
	private ?string $lieu_eve=null;
	private  $duree_eve=null;
	private ?string $association_ga=null;
	private ?int $somme=null;
	private ?int $nb_pt_eve=null;
	private ?string $maladie=null;
   

    public function __construct( $nom_eve ,$date_eve, $lieu_eve, $duree_eve, $association_ga ,$somme , $nb_pt_eve , $maladie  )
    {
       
            $this->nom_eve=$nom_eve;
			$this->date_eve=$date_eve;
			$this->lieu_eve=$lieu_eve;
			$this->duree_eve=$duree_eve;
			$this->association_ga=$association_ga;
			$this->somme=$somme;
			$this->nb_pt_eve=$nb_pt_eve;
			$this->maladie=$maladie;

        
    }
   
    public function getId_eve()
    {
        return $this->id_eve;
    }
    public function getNom_eve()
    {
        return $this->nom_eve;
    }
    public function getLieu_eve()
    {
        return $this->lieu_eve;
    }
    public function getDate_eve()
    {
        return $this->date_eve;
    }
    public function getDuree_eve()
    {
        return $this->duree_eve;
    }
    public function getAssociation_ga()
    {
        return $this->association_ga;
    }
    public function getSomme()
    {
        return $this->somme;
    }
    function getNb_pt_eve(){
        return $this->nb_pt_eve;
    }
    function getMaladie(){
        return $this->maladie;
    }


    /**
     * Set the value of lastName
     *
     * @return  self
     */
    public function setNom_eve($nom_eve)
    {
        $this->nom_eve = $nom_eve;

        return $this;
    }
/**
     * Set the value of lastName
     *
     * @return  self
     */
    public function setDate_eve($date_eve)
    {
        $this->date_eve = $date_eve;

        return $this;
    }

    /**
     * Set the value of lastName
     *
     * @return  self
     */
    public function setLieu_eve($lieu_eve)
    {
        $this->lieu_eve = $lieu_eve;

        return $this;
    }

    /**
     * Set the value of lastName
     *
     * @return  self
     */
    public function setDuree_eve($duree_eve)
    {
        $this->duree_eve = $duree_eve;

        return $this;
    }

    /**
     * Set the value of lastName
     *
     * @return  self
     */
    public function setAssociation_ga($association_ga)
    {
        $this->association_ga = $association_ga;

        return $this;
    }

    /**
     * Set the value of lastName
     *
     * @return  self
     */
    public function setSomme($somme)
    {
        $this->somme = $somme;

        return $this;
    }

    /**
     * Set the value of lastName
     *
     * @return  self
     */
    public function setNb_pt_eve($nb_pt_eve)
    {
        $this->nb_pt_eve = $nb_pt_eve;

        return $this;
    }

    /**
     * Set the value of lastName
     *
     * @return  self
     */
    public function setMaladie($maladie)
    {
        $this->maladie = $maladie;

        return $this;
    }
}