<?php
	include '../../Controller/reservationC.php';
	$reservationC=new reservationC();
	$reservationC->deletereservation($_GET["idReservation"]);
	header('Location:afficherListereservation.php');
?>