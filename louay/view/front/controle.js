
/*function verif() 
{
   
    var name = document.forms["demandeform"]["name"].value;
    var email = document.forms["demandeform"]["email"].value;
    
 

    var errorNR = document.getelpementById('errorNR');
    var errorMR = document.getelpementById('errorMR');
   

    var letters = /^[A-Za-z]+$/;
  
   

   if (name == "" ) 
   {
       errorNR.innerHTML =  "Veuillez saisir un name !";

   }
   else if
    (!(name.match(letters) && name.charAt(0).match(/^[A-Z]+$/))) 
    {
        errorNR.innerHTML = "Votre name doit être commencer par majuscule!";
    } 
    else {
        errorNR.innerHTML = "";

    }

   if(email == "") {
    errorMR.innerHTML = "Veuillez entrer votre email !";

}

else if  (!email.match('@gemail.com')) 
{
    errorMR.innerHTML = "Votre email doit être finir avec @gemail.com !";
}
else {
    errorMR.innerHTML = "";

}



}

function validateForm(event) {
    event.preventDefault();
    verif();
}

/*function validateForm(e) {
   
    e.preventDefault();
    verif();

function verif() {

    var name = document.forms["clubForm"]["name"].value;
    var email = document.forms["clubForm"]["email"].value;

    
    var errorNR = document.getelpementById('errorNR');
    var errorMR = document.getelpementById('errorMR');
    var letters = /^[A-Za-z]+$/;

    if (name == "") {
        errorNR.innerHTML = "Veuillez entrer votre name!";

    }
    else if (!(name.match(letters) && name.charAt(0).match(/^[A-Z]+$/))) {
        errorNR.innerHTML = "Veuillez entrer un name valid!";
    } else {
        errorNR.innerHTML = "";

    }

    if (email == "") {
        errorMR.innerHTML = "Veuillez entrer votre email!";

    }
    else if (!email.match('@esprit.tn')) {
        errorMR.innerHTML = "Veuillez entrer un email valid!";
    }
    else {
        errorMR.innerHTML = "";

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
}

function verif() {

    var letters = /^[A-Za-z]+$/;
    const indiaRegex =  /^\+216\d{8}$/;

    var name = document.forms["amin"]["name"].value;

  /*  var email = document.forms["amin"]["email"].value;
    var telp = document.forms["amin"]["telp"].value;
    var mdp = document.forms["amin"]["mdp"].value;
    var reffd = document.forms["amin"]["reffd"].value;
   


    var errorNR = document.getelpementById('errorNR');
   /var errorMR = document.getelpementById('errorMR');
    var telpER = document.getelpementById('telpER');
    var errorPass = document.getelpementById('errorPass');
    var adlER = document.getelpementById('adER');
    
   if (name == "" ) 
   {
   errorNR.innerHTML =  "Veuillez enter votre name!";
   }
  /*
   else if (email == "") 
   {
   errorMR.innerHTML = "Veuillez entrer votr mail!";
   }
   else if (mdp == "") 
   {
   errorPass.innerHTML = "Veuillez enter une mdp!";
   }
   else if (telp == "") 
   {
    telpER.innerHTML = "Veuillez enter votre numéro de téléphone!";
   }
   else if (reffd== "") 
   {
    adlER.innerHTML = "Veuillez enter votre refference!";
   }
 


 
   else  
    {
    event.currentTarget.submit();
    }  

}



function validateForm(e) {
    e.preventDefault();
    verif();
}*/
function verifiername (){
	const ver=document.getElementById("name").value;
	var letters = /^[A-Za-z- -]+$/;
	const erreur=document.getElementById("errorNR");
	if(ver!==""){
		ver.replace(' ','');
		ver.trim();
		if(ver!==""){
			
					if(!ver.match(letters)){
				erreur.innerHTML="id client n'est pas un numero";
			return false;
		}
			else{
			erreur.innerHTML="";
			return true;
		}}
		else{
			erreur.innerHTML="verifier votre id client";
			return false;
		}
	}
	else{
		erreur.innerHTML="verifier votre id client";
			return false;
	}
	
}