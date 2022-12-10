<?php
	include '../../Controller/demandeC.php';
	$demandeC=new demandeC();
	$demandeC->deletedemande($_GET["iddemande"]);
	header('Location:afficherListedemande.php');
?>