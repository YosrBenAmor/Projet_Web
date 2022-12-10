function verif() {

    var letters = /^[A-Za-z]+$/;
    
    const indiaRegex =  /^\+216\d{8}$/;


    var email = document.forms["amin"]["email"].value;
    var password = document.forms["amin"]["password"].value;

   


    var mailER = document.getElementById('emailER');
    var passER = document.getElementById('passER');

    

  if (email == "") 
   {
    emailER.innerHTML = "Veuillez entrer votr mail!";
   }
   else if (password == "") 
   {
    passER.innerHTML = "Veuillez enter une password!";
   }


 
else{

  
if  (!email.match('@gmail.com') ) 
{
    mailER.innerHTML = "Votre mail doit être finir avec @gmail.com  !";
}
else if(!password.length >= 8)
{
    telER.innerHTML = "Votre numéro doit être commencer par +216";
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
