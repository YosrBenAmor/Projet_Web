<?php
	include '../Controller/ParticipationC.php';
	$participationC=new participationC();
	$participationC->supprimerParticipation($_GET["id_part"]);
	header('Location:Listparticipants.php');
	
?>