<?php
class reservation
{
    private ?int $idReservation = null;
    private ?string $lastName = null;
    private ?string $firstName = null;
    private ?string $address = null;
    private ?string $phonenumber = null;
    private ?string $reff = null;


    function __construct($firstName, $lastName,  $address, $phonenumber, $reff)
    {
        $this->lastName = $lastName;
        $this->firstName = $firstName;
        $this->address = $address;
        $this->phonenumber = $phonenumber;
        $this->reff = $reff;
    }


    function getIdReservation()
    {
        return $this->idReservation;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set the value of lastName
     *
     * @return  self
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get the value of firstName
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set the value of firstName
     *
     * @return  self
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get the value of address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set the value of address
     *
     * @return  self
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get the value of phonenumber
     */
    public function getPhonenumber()
    {

        return $this->phonenumber ;
    }

    /**
     * Set the value of phonenumber
     *
     * @return  self
     */
    public function setPhonenumber($phonenumber)
    {
        $this->phonenumber = $phonenumber;

        return $this;
    }


    public function getReff(){
        return $this->reff;
    }

    public function setReff($reff)
    {
        $this->reff = $reff;

        return $this;
    }
}
