<?php

class produit
{
    private $id_produit;
    private $idC;
    private $nom_produit;
    private $categorie;
    private $pt;
    private $quantite;
	private $image;

    // Le Constructeur
    function __construct($idC,$nom,$cat,$pt,$quat,$img)
    {
      $this->idC= $idC;
      $this->nom_produit= $nom;
      $this->categorie= $cat;
      $this->pt= $pt;
      $this->quantite= $quat;
	  $this->image= $img;
    }

    // Les Getters
    function getID(){
        return $this->id_produit;
    } 
    function getID_C(){
        return $this->idC;
    } 
    function getNom(){
        return $this->nom_produit;
    } 
    function getCategorie(){
        return $this->categorie;
    }
    function getPt(){
        return $this->pt;
    } 
    function getQuantite(){
        return $this->quantite;
    } 
	function getImage(){
        return $this->image;
    } 
    
     // Les Setters
    function setIDC($idc){
        $this->idC= $idc;
    }
    function setNom($nom){
        $this->nom_produit= $nom;
    }
    function setCategorie($cat){
        $this->categorie= $cat;
    }
    function setPt($pt){
        $this->pt= $pt;
    }
    function setQuantite($quant){
        $this->quantite= $quant;
    }
	function setImage($img){
        $this->image= $img;
    }
}





?> 