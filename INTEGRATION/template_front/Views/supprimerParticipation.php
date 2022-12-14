<?php
	require_once('../Controller/ParticipationC.php');
	require_once ('../../vendor/twilio/sdk/src/Twilio/autoload.php');
use Twilio\Rest\Client;
	
	$participationC=new participationC();
	$participationC->supprimerParticipation($_GET["id_part"]);
	
	header('Location:afficherListeParticipation.php?id='.$_SESSION['id'] );
	

	 
	$sid    = "AC6b2316ab038b93972d30b2342f18eff1"; 
	$token  = "6486e1023090cbb1597d7e59e7a78d93"; 
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