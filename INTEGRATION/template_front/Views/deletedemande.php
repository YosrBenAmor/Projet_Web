<?php
	include '../../Controller/demandeC.php';
	$demandeC=new demandeC();
	$demandeC->deletedemande($_GET["idDemande"]);
	header('Location:afficherListedemande.php');
?>