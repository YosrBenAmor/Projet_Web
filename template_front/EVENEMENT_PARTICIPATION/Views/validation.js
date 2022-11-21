function verif() {

    var letters = /^[A-Za-z]+$/;
    
    const indiaRegex =  /^\+216\d{8}$/;

    var nom_part = document.forms["mayssa"]["nom_part"].value;
    var prenom_part = document.forms["mayssa"]["prenom_part"].value;
    var age_part = document.forms["mayssa"]["age_part"].value;
    var mail_part = document.forms["mayssa"]["mail_part"].value;
    var num_part = document.forms["mayssa"]["num_part"].value;
   


    var nomER = document.getElementById('nomER');
   var prenomER = document.getElementById('prenomER');
   var ageER = document.getElementById('ageER');
    var mailER = document.getElementById('mailER');
    var numER = document.getElementById('numER');
    
    
   if (nom_part == "" ) 
   {
    nomER.innerHTML =  "Veuillez enter votre nom!";
   }
   else if(prenom_part == "") 
   {
    prenomER.innerHTML = "Veuillez enter votre prénom!";          
   }
   else if (age_part == "") 
   {
    ageER.innerHTML = "Veuillez enter votre age!";
   }
   else if (mail_part == "") 
   {
    mailER.innerHTML = "Veuillez entrer votr mail!";
   }
   else if (num_part == "") 
   {
    numER.innerHTML = "Veuillez enter votre numéro de téléphone!";
   }
 
else{

   if(!(nom_part.match(letters) && nom_part.charAt(0).match(/^[A-Z]+$/))) 
    {
        nomER.innerHTML = "Veuillez entrer le premier lettre en majuscule!";
    } 
    
    if(!(prenom_part.match(letters) && prenom_part.charAt(0).match(/^[A-Z]+$/))) 
    {
        prenomER.innerHTML = "Veuillez entrer le premier lettre en majuscule!";
    } 
    else if (isNaN(age_part) || age_part < 18 ) 
    {
        ageER.innerHTML = "votre age doit être supérieur à 18 ans !";
    }
 
 
    else if  (!mail_part.match('@gmail.com') ) 
{
    mailER.innerHTML = "Votre mail doit être finir avec @gmail.com  !";
}
else if(!num_part.match(indiaRegex))
{
    numER.innerHTML = "Votre numéro doit être commencer par +216";
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
