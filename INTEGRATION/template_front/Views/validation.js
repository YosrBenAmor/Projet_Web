function verif() {

    var letters = /^[A-Za-z]+$/;
    
    const indiaRegex =  /^\+216\d{8}$/;

    var nom = document.forms["amin"]["nom"].value;
    var prenom = document.forms["amin"]["prenom"].value;
    var email = document.forms["amin"]["email"].value;
    var tel = document.forms["amin"]["tel"].value;
    var password = document.forms["amin"]["password"].value;
    var adresse = document.forms["amin"]["adresse"].value;
   


    var nomER = document.getElementById('nomER');
   var prenomER = document.getElementById('prenomER');
    var mailER = document.getElementById('emailER');
    var telER = document.getElementById('telER');
    var passER = document.getElementById('passER');
    var adER = document.getElementById('adER');
    
   if (nom == "" ) 
   {
    nomER.innerHTML =  "Veuillez enter votre nom!";
   }
   else if(!(nom.match(letters) && nom.charAt(0).match(/^[A-Z]+$/))) 
    {
        nomER.innerHTML = "Veuillez entrer le premier lettre en majuscule!";
    } 
    
   else if(prenom == "") 
   {
    prenomER.innerHTML = "Veuillez enter votre prénom!";          
   }
   else if (email == "") 
   {
    emailER.innerHTML = "Veuillez entrer votr mail!";
   }
   else if  (!email.match('@gmail.com') ) 
   {
       emailER.innerHTML = "Votre mail doit être finir avec @gmail.com  !";
   }
   else if (password == "") 
   {
    passER.innerHTML = "Veuillez enter une password!";
   }
   else if (password.length < 6 ) 
   {
    passER.innerHTML = "password doit contenir 6 caracteres ou plus!";
   }
   else if (tel == "") 
   {
    telER.innerHTML = "Veuillez enter votre numéro de téléphone!";
   }
   else if(!tel.match(indiaRegex))
{
    telER.innerHTML = "Votre numéro doit commencer par +216";
}
   else if (adresse== "") 
   {
    adER.innerHTML = "Veuillez enter votre numéro de téléphone!";
   }
 


 
   else  
    {
    event.currentTarget.submit();
    }  

}



function validateForm(e) {
    e.preventDefault();
    verif();
}