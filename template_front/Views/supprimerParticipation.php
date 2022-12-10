<?php
	require_once('../Controller/ParticipationC.php');
	require_once ('../../../vendor/twilio/sdk/src/Twilio/autoload.php');
use Twilio\Rest\Client;
	
	$participationC=new participationC();
	$participationC->supprimerParticipation($_GET["id_part"]);
	header('Location:afficherListeParticipation.php');
	

	 
	$sid    = "AC6b2316ab038b93972d30b2342f18eff1"; 
	$token  = "deb891dcd60a44ec9cde1c39dd2f3755"; 
	$twilio = new Client($sid, $token); 
	 
	$message = $twilio->messages
				  ->create("+21697336009", // to
						   [
							   "body" => "Une participation a été supprimé avec succès",
							   "from" => "+15732843399"
						   ]
				  );
	
	print($message->sid);
	
	if (isset($_GET['nom_eve']) && !empty($_GET['nom_eve'])) {
		$list = $evenementC->search_nor($_GET['nom_eve']);
	} else {
		$list = $evenementC->listevenements();
	}
	



?>