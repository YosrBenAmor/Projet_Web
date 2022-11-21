function verif() {

    var username = document.forms["logForm"]["username"].value;
    /*var mail = document.forms["logForm"]["mail"].value;
    var password = document.forms["logForm"]["myInput"].value;
    var password2 = document.forms["logForm"]["myInput2"].value;*/

    var errorN = document.getElementById('errorNR');
    /*var errorEmail = document.getElementById('errorMR');
    var errorPass = document.getElementById('errorPass');*/
    var letters = /^[A-Za-z]+$/;

    if (username == "") {
        errorN.innerHTML = "pas de username :p ";

    }
    else if (!(username.match(letters) && username.charAt(0).match(/^[A-Z]+$/))) {
        errorN.innerHTML = "le nom doit seulement contenir des lettres et des espaces";
    } else {
        errorN.innerHTML = "";

    }

   
   if (mail == "") {
        errorEmail.innerHTML = "Veuillez entrer votre email!";

    }
    else if (!mail.match('@')) {
        errorEmail.innerHTML = "pas de email :p ";
    }
    else {
        errorEmail.innerHTML = "";

    }

   /* if (password == "") {
        errorPass.innerHTML = "pas de password :p ";

    }
    else 
    if (myinput != myInput2) {
        errorPass.innerHTML = "Les mots de passe ne correspondent pas :p"
      }

    else {
        errorPass.innerHTML = "";

    }
}
    function validateForm(e) {
        e.preventDefault();
        verif();*/
    }
