<?php
	class users{
		private $id=null;
		private $username=null;
		private $pts=null;
		private $password=null;
		private $adresse=null;
		private $email=null;
		private $tel=null;
		private $usad;
		
		function __construct($username, $pts, $password, $adresse, $email, $usad, $tel ){
			//$this->id=$id;
			$this->username=$username;
			$this->pts=$pts;
			$this->password=$password;
			$this->adresse=$adresse;
			$this->email=$email;
			$this->tel=$tel;
			$this->usad=$usad;
		}
		function getId(){
			return $this->id;
		}
		function getUsername(){	
			return $this->username;
		}
		function getPrenom(){
			return $this->pts;
		}
		
		function getPassword(){
			return $this->password;
		}

		function getAdresse(){
			return $this->adresse;
		}
		function getEmail(){
			return $this->email;
		}
		function getDateinscription(){
			return $this->usad;
		}
		function setNom(string $username){
			$this->username=$username;
		}
		function setPrenom(string $pts){
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
		function setdateinscription(string $usad){
			$this->usad=$usad;
		}
		
	}