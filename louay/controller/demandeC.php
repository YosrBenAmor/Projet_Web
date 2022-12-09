<?php
include __DIR__.'/../config.php';
include_once __DIR__.'/../model/demande.php';
class demandeC
{ 
	function afficherListedemande()
	{
		$sql = "SELECT * FROM demande";
		$db = config::getConnexion();
		try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur:' . $e->getMessage());
		}
	}
	function deletedemande($iddemande)
	{
		$sql = "DELETE FROM demande WHERE iddemande=:iddemande";
		$db = config::getConnexion();
		$req = $db->prepare($sql);
		$req->bindValue(':iddemande', $iddemande);
		try {
			$req->execute();
		} catch (Exception $e) {
			die('Erreur:' . $e->getMessage());
		}
	}
	function adddemande($demande)
	{
		$sql = "INSERT INTO demande (iddemande,name, mdp,  email, reffd, telp,status) 
			VALUES (:iddemande,:name,:mdp, :email,:reffd, :telp,:status)";
		$db = config::getConnexion();
		try {
			$query = $db->prepare($sql);
			$query->execute([
				'iddemande' => $demande->getIddemande(),
				'name' => $demande->getName(),
				'mdp' => $demande->getMdp(),
				'email' => $demande->getEmail(),
				'reffd' => $demande->getReffd(),
				'telp' => $demande->getTelp(),
				'status' => $demande->getStatus()
			]);
		} catch (Exception $e) {
			echo 'Erreur: ' . $e->getMessage();
		}
	}
	
	function count_accepter()
    {
        $sql = "SELECT COUNT(*)  from demande where status != 'vous avez acceptez la reseration' ";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $nb = $query->fetch();
            
            return $nb;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

	function count_refuser()
    {
        $sql = "SELECT COUNT(*)  from demande where status != 'vous avez refusez la reseration' ";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $nb = $query->fetch();
            
            return $nb;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

	}

