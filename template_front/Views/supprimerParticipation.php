<?php
	require_once('../Controller/ParticipationC.php');
	$participationC=new participationC();
	$participationC->supprimerParticipation($_GET["id_part"]);
	header('Location:afficherListeParticipation.php');
	
?>