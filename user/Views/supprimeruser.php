<?php

	include '../Controller/UserC.php';
	$userC=new userC();
	$userC->supprimeruser($_GET["id"]);
	header('Location:afficherListeUsers.php');
?>