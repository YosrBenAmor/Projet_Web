function verif() {

    var letters = /^[A-Za-z]+$/;
    var dateNow = new Date();

    var nomE = document.forms["mayssa"]["nom_eve"].value;
    var date = document.forms["mayssa"]["date_eve"].value;
    var lieu = document.forms["mayssa"]["lieu_eve"].value;
    var duree = document.forms["mayssa"]["duree_eve"].value;
    var association = document.forms["mayssa"]["association_ga"].value;
    var somme = document.forms["mayssa"]["somme"].value;
    var pt = document.forms["mayssa"]["nb_pt_eve"].value;
    var maladie = document.forms["mayssa"]["maladie"].value;
  

    var errorNE = document.getElementById('nomER');
    var errorDate = document.getElementById('dateER');
    var errorL = document.getElementById('lieuER');
    var errorduree = document.getElementById('dureeER');
    var errorA = document.getElementById('associationER');
    var errorsomme = document.getElementById('sommeER');
    var errorpt = document.getElementById('pointER');
    var errormal = document.getElementById('maladieER');
  
    
   if (nomE == "" ) 
   {
    errorNE.innerHTML =  "Le nom d'évenement est obligatoire!";
   }
   else if(date == "") 
   {
    errorDate.innerHTML = "Veuillez choisir une date!";          
   }
   else if (lieu == "") 
   {
    errorL.innerHTML = "Veuillez entrer votre lieu!";
   }
   else if (duree == "") 
   {
    errorduree.innerHTML = "Veuillez entrer la durée!";
   }
   else if (association == "") 
   {
    errorA.innerHTML = "Veuillez entrer l'association à gagner!";
   }
   else if (somme == "") 
   {
    errorsomme.innerHTML = "Veuillez entrer la somme!";
   }
   else if (pt == "") 
   {
    errorpt.innerHTML = "Veuillez entrer le nombre de point!";
   }
  

else{

   if(!(nomE.match(letters) && nomE.charAt(0).match(/^[A-Z]+$/))) 
    {
        errorNE.innerHTML = "Veuillez entrer le  nom d'évenement valid!";
    } 
   else if  (new Date(date).toLocaleString() < dateNow.toLocaleString())
    {
        errorDate.innerHTML = "La date de l'évenement doit être supérieur à la date actuelle";
    }
    else if (duree.match('13:00')) 
    {
        errorduree.innerHTML = "La durée de l'évenement doit être inférieur ou égale à 12 heures";
    }
    else if (!(association .match(letters) && association .charAt(0).match(/^[A-Z]+$/))) {
        errorA.innerHTML = "Veuillez entrer un nom d'association valid!";
    } 
    else if (isNaN(somme) || somme < 0 ) 
    {
        errorsomme.innerHTML = "La somme doit être supérieur à 0!";
    }
    else if (isNaN(pt) || pt < 0 ) 
    {
        errorpt.innerHTML = "Le nombre de points doit être supérieur à 0!";
    }

    else  
    {
    event.currentTarget.submit();
    }

    }
  

}

function validateForm(e) {
    e.preventDefault();
    verif();
}