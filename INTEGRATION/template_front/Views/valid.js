function verif() 
{
   
    var nomR = document.forms["yosr"]["nom_don"].value;
    var mail = document.forms["yosr"]["email_don"].value;
    var inputText = document.forms["yosr"]["num_tel"].value;
 

    var errorNA = document.getElementById('errorNA');
    var errormail = document.getElementById('errormail');
    var errorNU= document.getElementById('errorNU'); 
    

    var letters = /^[A-Za-z]+$/;
   var dateNow = new Date();
   const indiaRegex =  /^\+216\d{8}$/;

   if (nomR == "" ) 
   {
       errorNA.innerHTML =  "Veuillez saisir un nom !";

   }
   else if(mail == "") {
    errormail.innerHTML = "Veuillez entrer votre émail !";

}
else if(inputText=="")
{
    errorNU.innerHTML = "Veuillez votre numéro  !";
}



else{
    if(!(nomR.match(letters) && nomR.charAt(0).match(/^[A-Z]+$/))) 
    {
        errorNA.innerHTML = "Votre nom doit être commencer par majuscule!";
    } 
else if  (!mail.match('@gmail.com')) 
{
    errormail.innerHTML = "Votre mail doit être finir avec @gmail.com !";
}
else if(!inputText.match(indiaRegex))
{
    errorNU.innerHTML = "Votre numéro doit être commencer par +216"
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