<?php
class don
{
    private ?int $id_don = null;
    private ?string $nom_don = null;
    private ?string $img_don = null;
    private ?string $num_tel =null;
    private ?string $email_don =null;
	private ?string $id_ass=null;

   

    public function __construct( $nom_don,$img_don,$num_tel,$email_don,$id_ass)
    {
        $this->nom_don = $nom_don;
        $this->img_don = $img_don;
        $this->num_tel = $num_tel;
        $this->email_don = $email_don; 
		$this->id_ass = $id_ass;  
    }
    
    public function getId_don()
    {
        return $this->id_don;
    }
    
    public function getNom_don()
    {
        return $this->nom_don;
    }
    public function getImg_don()
    {
        return $this->img_don;
    }
    
    public function getNum_tel()
    {
        return $this->num_tel;
    }
    
    public function getEmail_don()
    {
        return $this->email_don;
    }
	public function getId_ass()
    {
        return $this->id_ass;
    }
    
    public function setNom_don($nom_don)
    {
        $this->nom_don = $nom_don;

        return $this;
    }
    public function setImg_don($img_don)
    {
        $this->img_don = $img_don;

        return $this;
    }
    
    public function setINum_tel($num_tel)
    {
        $this->num_tel = $num_tel;

        return $this;
    }
    public function setEmail_don($email_don)
    {
        $this->email_don = $email_don;

        return $this;
    }
	public function setId_ass($id_ass)
	{
		$this->id_ass = $id_ass;

        return $this;
	}

}