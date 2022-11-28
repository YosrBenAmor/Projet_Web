<!-- ?php
		if(isset($_POST['submit'])){
			$to='louayabidi12356@gmail.com';
			$sujet='test mail en local';
			$texte=$_POST['texte'];
			$header='From : test@gmail.com';
			mail($to,$sujet,$texte,$header);
		}

?>
	>
<?php
include "../../view/addreservation.php";
include "../../controller/reservationC.php";

 
    ini_set('display_errors',1);
 
    /*error_reporting(E_ALL);*/
 
    $from = "louayabidi123456@gmail.com";
 
    $to = "louay.abidi@esprit.tn";
 
    $sujet = "reservation bien reçu  !";
 
    $message = " votre réclamation est en cours de traitement ! Merci pour votre fidélité !";
    
    
     
 
    $headers = "From:".$from;


if(mail($to,$sujet,$message,$headers))
{
        //echo "L'email a bien été envoyé.";
       header('Location: afficherListereservation.php');
}
else
{
        echo "Une erreur c'est produite lors de l'envois de l'email.";
}
        
?>