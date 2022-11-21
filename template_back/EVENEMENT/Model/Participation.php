<?php
	class participation{
		private ?int $id_part=null;
		private ?string $nom_part=null;
		private ?string $prenom_part=null;
		private ?int $age_part=null;
		private ?string $mail_part=null;
		private ?string $num_part=null;
		private ?int $id_eve=null;
		

		
		function __construct( $nom_part, $prenom_part, $age_part, $mail_part, $num_part ,$id_eve){
			
			$this->nom_part=$nom_part;
			$this->prenom_part=$prenom_part;
			$this->age_part=$age_part;
			$this->mail_part=$mail_part;
			$this->num_part=$num_part;
			$this->id_eve=$id_eve;
			
		}
		
		function getId_part(){
			return $this->id_part;
		}
		function getNom_part(){
			return $this->nom_part;
		}
		function getPrenom_part(){
			return $this->prenom_part;
		}
		function getAge_part(){
			return $this->age_part;
		}
		function getMail_part(){
			return $this->mail_part;
		}
		function getNum_part(){
			return $this->num_part;
		}
		function getId_eve(){
			return $this->id_eve;
		}
		

		function setNom_part(string $nom_part){
			$this->nom_part=$nom_part;
			return $this;
		}
		function setPrenom_part(string $prenom_part){
			$this->prenom_part=$prenom_part;
			return $this;
		}
		function setAge_part(string $age_part){
			$this->age_part=$age_part;
			return $this;
		}
		function setMail_part(string $mail_part){
			$this->mail_part=$mail_part;
			return $this;
		}
		function setNum_part(string $num_part){
			$this->num_part=$num_part;
			return $this;
		}
		function setId_eve(string $id_eve){
			$this->id_eve=$id_eve;
			return $this;
		}
		
	}