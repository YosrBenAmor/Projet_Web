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
		$sql = "INSERT INTO reservation (idReservation,firstName, lastName,  address, phonenumber, reff) 
			VALUES (:idReservation,:lastName,:firstName, :address,:phonenumber, :reff)";
		$db = config::getConnexion();
		try {
			$query = $db->prepare($sql);
			$query->execute([
				'idReservation' => $reservation->getIdReservation(),
				'lastName' => $reservation->getLastName(),
				'firstName' => $reservation->getFirstName(),
				'address' => $reservation->getAddress(),
				'phonenumber' => $reservation->getPhonenumber(),
				'reff' => $reservation->getReff()
			]);
		} catch (Exception $e) {
			echo 'Erreur: ' . $e->getMessage();
		}
	}

	

	
}