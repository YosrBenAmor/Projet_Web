<?php
class demande
{
    private ?int $iddemande = null;
    private ?string $name = null;
    private ?string $mdp = null;
    private ?string $email = null;
    private ?string $reffd = null;
    private ?string $telp = null;
    private ?string $status = null;
    
   

    function __construct($name,$mdp,$email, $reffd ,$telp,$status)
    {
        $this->name = $name;
        $this->mdp = $mdp;
        $this->email = $email;
        $this->reffd = $reffd;
        $this->telp = $telp;
        $this->status = $status;
       
    }


    function getIddemande()
    {
        return $this->iddemande;
    }


    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of mdp
     */
    public function getMdp()
    {
        return $this->mdp;
    }

    /**
     * Set the value of mdp
     *
     * @return  self
     */
    public function setMdp($mdp)
    {
        $this->mdp = $mdp;

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




    public function getReffd(){
        return $this->reffd;
    }

    public function setReffd($reffd)
    {
        $this->reffd = $reffd;

        return $this;
    }
    /**
     * Get the value of telp
     */
    public function getTelp()
    {

        return $this->telp ;
    }

    /**
     * Set the value of telp
     *
     * @return  self
     */
    public function setTelp($telp)
    {
        $this->telp = $telp;

        return $this;
    }

    /**
     * Get the value of satus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the value of status
     *
     * @return  self
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }
}
