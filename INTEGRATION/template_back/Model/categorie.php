<?php
class categorie
{
  private $id_categ;
  private $nom_categ;
  private $descriptionc;
  private $image;
  // Le Constructeur
  function __construct($nom,$description,$img)
  {
    //$this->id_categ= $id;
    $this->nom_categ= $nom;
    $this->descriptionc= $description;
    $this->image= $img;
  }

  // Les Getters
  function getIDC(){
    return $this->id_categ;
} 
function getNomC(){
    return $this->nom_categ;
} 
function getDescription(){
    return $this->descriptionc;
} 
function getImage(){
    return $this->image;
} 
// Les Setters
function setNomC($nom){
    $this->nom_categ= $nom;
}
function setDescription($Desc){
    $this->descriptionc= $Desc;
}
function setImage($img){
    $this->image= $img;
}

}




?>