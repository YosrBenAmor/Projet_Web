
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
}
function verifiername (){
	const ver=document.getElementById("name").value;
	var letters = /^[A-Za-z- -]+$/;
	const erreur=document.getElementById("errorNR");
	if(ver!==""){
		ver.replace(' ','');
		ver.trim();
		if(ver!==""){
			
					if(!ver.match(letters)){
				erreur.innerHTML="id client n'est pas un telpERo";
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

addEventListener

$error = "";
// create demande
$demande = null;

// create an instance of the controller
$demandeC = new demandeC();
if (
    !empty($_POST['name']) &&
    !empty($_POST["mdp"]) &&
    !empty($_POST["email"]) &&
    !empty($_POST["reffd"]) &&
    !empty($_POST["telp"])&&
    !empty($_POST["status"])
) {
    if (
        !empty($_POST['name']) &&
		!empty($_POST["mdp"]) &&
		!empty($_POST["email"]) &&
		!empty($_POST["reffd"]) &&
		!empty($_POST["telp"])&&
		!empty($_POST["status"])
    ) {
        $demande = new demande(
            $_POST['name'],
            $_POST['mdp'],
            $_POST['email'],
            $_POST['reffd'],
            $_POST['telp'],
			$_POST['status'],
			
        );
        $demandeC->adddemande($demande);
          header('Location:afficherListedemande.php');
    } else
        $error = "Missing information";
}
*/


function verif() {

    var letters = /^[A-Za-z]+$/;
    
    const indiaRegex =  /^\+216\d{8}$/;

    var name = document.forms["louay"]["name"].value;
   var mdp = document.forms["louay"]["mdp"].value;
   
    var email = document.forms["louay"]["email"].value;
    var telp = document.forms["louay"]["telp"].value;
   


    var nomER = document.getElementById('errorNR');
   var errorPass = document.getElementById('errorPass');
  
    var errorMR = document.getElementById('errorMR');
    var telpER = document.getElementById('telpER');
    
    
   if (name == "" || mdp == "" || email == "" || telp == "") 
   {
    nomER.innerHTML =  "Veuillez enter votre nom!";
     errorPass.innerHTML = "Veuillez enter votre mdp!";
     errorMR.innerHTML = "Veuillez entrer votr mail!";
     telpER.innerHTML = "Veuillez enter votre numéro de téléphone!";
   }
  
  /*else if() 
   {
    errorPass.innerHTML = "Veuillez enter votre mdp!";          
   }
  /*
   else if (email == "") 
   {
    errorMR.innerHTML = "Veuillez entrer votr mail!";
   }
   else if (telp == "") 
   {
    telpER.innerHTML = "Veuillez enter votre numéro de téléphone!";
   }
 */
else{

   if(!(name.match(letters) && name.charAt(0).match(/^[A-Z]+$/)) ) 
    {
        nomER.innerHTML = "Veuillez entrer le premier lettre en majuscule!";
        errorPass.innerHTML = "Veuillez entrer le premier lettre en majuscule!";
    } 
    
   /* if(!(mdp.match(letters) && mdp.charAt(0).match(/^[A-Z]+$/))) 
    {
        errorPass.innerHTML = "Veuillez entrer le premier lettre en majuscule!";
    } 
    
 
 
    else if  (!email.match('@gmail.com') ) 
{
    errorMR.innerHTML = "Votre mail doit être finir avec @gmail.com  !";
}
/*
else if(!telp.match(indiaRegex))
{
    telpER.innerHTML = "Votre numéro doit être commencer par +216";
}
*/
 
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
