<?php
	class user{
		private ?int $id=null;
		private ?string $nom=null;
		private ?string $prenom=null;
		private ?int $pts=null;
		private ?string $password=null;
		private ?string $adresse=null;
		private ?string $email=null;
		private ?string $tel=null;
		private ?int $usad=null;

		
		function __construct($id, $nom, $prenom,$pts, $password, $adresse, $email,  $tel ,$usad){
			$this->id=$id;
			$this->nom=$nom;
			$this->prenom=$prenom;
			$this->pts=$pts;
			$this->password=$password;
			$this->adresse=$adresse;
			$this->email=$email;
			$this->tel=$tel;
			$this->usad=$usad;
		
		}
		function getNom(){
			return $this->nom;
		}
		function getPrenom(){	
			return $this->prenom;
		}
		function getPts(){
			return $this->pts;
		}
		
		function getPassword(){
			return $this-> password;
		}

		function getAdresse(){
			return $this->adresse;
		}
		function getEmail(){
			return $this->email;
		}
		function getTel(){
			return $this->tel;
		}
		function getUsad(){
			return $this->usad;
		}
		
		function setNom(string $nom){
			$this->nom=$nom;
		}
		function setPrenom(string $prenom){
			$this->prenom=$prenom;
		}
		function setPts(string $pts){
			$this->pts=$pts;
		}
		function setPassword(string $password){
			$this->password=$password;
		}
	
		function setAdresse(string $adresse){
			$this->adresse=$adresse;
		}
		function setEmail(string $email){
			$this->email=$email;
		}
		function setTel(string $tel){
			$this->tel=$tel;
		}
		function setUsad(string $usad){
			$this->usad=$usad;
		}
		
	}