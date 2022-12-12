function verif() 
{
   
    var nomR = document.forms["mayssa"]["nom_ass"].value;
    var mail = document.forms["mayssa"]["email_ass"].value;
    var DateFond = document.forms["mayssa"]["datefondation"].value;
    var object =document.forms["mayssa"]["objectif_ass"].value;
    var adresse =document.forms["mayssa"]["adresse_ass"].value;
    var inputText = document.forms["mayssa"]["num_ass"].value;
   var NbM = document.forms["mayssa"]["nbpt_ass"].value;
    

    var errorN = document.getElementById('errorN');
    var errorEmail = document.getElementById('errorEmail');
    var errorDate = document.getElementById('errorDF');
    var errorobject = document.getElementById('errorOB');
    var erroradress = document.getElementById('errorAD');
    var errornum = document.getElementById('errorNu');    
   var errorNA = document.getElementById('errorNP');
    

    var letters = /^[A-Za-z]+$/;
   var dateNow = new Date();
   const indiaRegex =  /^\+216\d{8}$/;

   if (nomR == "" ) 
   {
       errorN.innerHTML =  "Veuillez saisir nom de l'association !";

   }
   else if(mail == "") {
    errorEmail.innerHTML = "Veuillez entrer l'émail  de l'association!";

}
else if(DateFond == "") {
    errerrorDate.innerHTML = "Veuillez la date de fondation de l'association";

}
else if(object== "") {
    errorobject.innerHTML = "Veuillez saisir l'objectif de l'association";

}
else if(adresse== "") {
    erroradress.innerHTML = "Veuillez saisir l'adresse de l'association";

}
else if(inputText=="")
{
    errornum.innerHTML = "Veuillez saisir le numéro de l'association !";
}
else if(NbM == "") {
    errorNA.innerHTML = "Veuillez entrer le nombre des points !";
}



else{
    if(!(nomR.match(letters) && nomR.charAt(0).match(/^[A-Z]+$/))) 
    {
        errorN.innerHTML = "Le nom de l'association  doit être commencer par majuscule!";
    } 
else if  (!mail.match('@gmail.com')) 
{
    errorEmail.innerHTML = "Le mail doit être finir avec @gmail.com !";
}
  else if (new Date(DateFond).toLocaleString() > dateNow.toLocaleString()) 
{  

    errorDate.innerHTML = "La date de fondation doit être inférieur à la date actuelle";
}
else if(!inputText.match(indiaRegex))
{
    errornum.innerHTML = "Le numéro doit être commencer par +216"
}
else if (isNaN(NbM) || NbM < 5|| NbM > 100) {
    errorNA.innerHTML = "Le nombre des points doit être supérieur à 10 et inférieur à 100 !";

}
else  
{
    event.currentTarget.submit();
}

}


if (NbM == "") {
        errorNA.innerHTML = "Veuillez entrer le nombre des memebres !";
    }
    else if (isNaN(NbM) || NbM < 10 || NbM > 100) {
        errorNA.innerHTML = "Le nombre des adhérents doit être supérieur à 10 et inférieur à 100 !";

    }
    else {
        errorNA.innerHTML = "";

    }

   
}

function validateForm(e) {
   
    e.preventDefault();
    verif();
}