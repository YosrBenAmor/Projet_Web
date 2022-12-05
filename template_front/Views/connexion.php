<?php
include_once '../Controller/userC.php';
session_start();



$userC = new userC();
if (isset($_POST['login-submit'])) {
   

   $email = $_POST["mail_us"];
   $psw = $_POST["mdp_us"];
  

   if (empty($email) || empty($psw) ) {
       header("Location:connecter.php?error=emtyfields&email=".$email);
       exit();
   }
   else{
      
      $liste = $userC->connect($email);
      foreach ($liste as $row) {
          

        if ($psw !== $row['mdp']) {//if the password is wrong
            header("Location:connecter.php?error=wrongpassword");
            exit();
        }else if($psw == $row['mdp']){
           
            $_SESSION['unserId'] = $row['id_us'];
            $_SESSION['unserLastname'] = $row['nom_us'];
            $_SESSION['unserFirstname'] = $row['prenom_us'];
            $_SESSION['unserMail'] = $row['mail_us'];
            


            header("Location:index.php?login=success");
            exit();

        }else{//if the password is wrong
            header("Location:connecter.php?error=wrongpassword");
            exit();
        }
    }
   
   
    
   
        
      }
  }else {
    header("Location: connecter.php");
    exit();
}

?>