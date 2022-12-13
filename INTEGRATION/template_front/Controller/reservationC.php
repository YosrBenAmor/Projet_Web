<?php
include __DIR__.'/../config.php';
include_once __DIR__.'/../model/reservation.php';

class reservationC
{ 
	function afficherListereservations()
	{
		$sql = "SELECT * FROM reservation";
		$db = config::getConnexion();
		try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur:' . $e->getMessage());
		}
	}

	function afficherreservation($libelle)
    {
        $sql = "SELECT * FROM reservation WHERE (idReservation LIKE '%" . $libelle . "%')||(lastName LIKE '%" . $libelle . "%')||(firstName LIKE '%" . $libelle . "%')||(phonenumber LIKE '%" . $libelle . "%')  ";
		/*$sql = "SELECT * FROM reservation WHERE lastName LIKE '%" . $libelle . "%'";
		$sql = "SELECT * FROM reservation WHERE firstName LIKE '%" . $libelle . "%'";
		$sql = "SELECT * FROM reservation WHERE phonenumber LIKE '%" . $libelle . "%'";
		$sql = "SELECT * FROM reservation WHERE reff LIKE '%" . $libelle . "%'";*/
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $reservation = $query->fetchAll();
            return $reservation;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
         
	function deletereservation($idReservation)
	{
		$sql = "DELETE FROM reservation WHERE idReservation=:idReservation";
		$db = config::getConnexion();
		$req = $db->prepare($sql);
		$req->bindValue(':idReservation', $idReservation);
		try {
			$req->execute();
		} catch (Exception $e) {
			die('Erreur:' . $e->getMessage());
		}
	}
	function addreservation($reservation)
	{
		$sql = "INSERT INTO reservation (idReservation,firstName, lastName,  address, phonenumber, reff,id) 
			VALUES (:idReservation,:lastName,:firstName, :address,:phonenumber, :reff ,:id)";
		$db = config::getConnexion();
		try {
			$query = $db->prepare($sql);
			$query->execute([
				'idReservation' => $reservation->getIdReservation(),
				'lastName' => $reservation->getLastName(),
				'firstName' => $reservation->getFirstName(),
				'address' => $reservation->getAddress(),
				'phonenumber' => $reservation->getPhonenumber(),
				'reff' => $reservation->getReff(),
				'id' => $reservation->getId()

			]);
		} catch (Exception $e) {
			echo 'Erreur: ' . $e->getMessage();
		}
	}
	function recuperer_demande($iddemande)
	{
		$sql = "SELECT status as 'status' from demande join reservation on (demande.iddemande)=(reservation.idreservation);";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $demande = $query->fetch();
            return $demande['status'];
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
	}

	

	
}