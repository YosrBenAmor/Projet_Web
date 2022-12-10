<?php
require '../config.php';
require '../Model/Participation.php';
require '../Model/evenement.php';

class participationC
{
	function afficherParticipation()
	{
		$sql = "SELECT * FROM participation";
		$db = config::getConnexion();
		try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur:' . $e->getMeesage());
		}
	}
	
	function supprimerParticipation($id_part)
	{
		$sql = "DELETE FROM  participation WHERE id_part=:id_part";
		$db = config::getConnexion();
		$req = $db->prepare($sql);
		$req->bindValue(':id_part', $id_part);
		
		try {
			$req->execute();
		} catch (Exception $e) {
			die('Erreur:' . $e->getMeesage());
		}
	}
	function ajouterParticipation($participation)
	{
		$sql = "INSERT INTO participation ( nom_part , prenom_part, age_part, mail_part, num_part ,id_eve ) 
			VALUES ( :nom_part, :prenom_part, :age_part, :mail_part, :num_part , :id_eve )";
		$db = config::getConnexion();
		try {
			$query = $db->prepare($sql);
			$query->execute([
				
				'nom_part' => $participation->getNom_part(),
				'prenom_part' => $participation->getPrenom_part(),
				'age_part' => $participation->getAge_part(),
				'mail_part' => $participation->getMail_part(),
				'num_part' => $participation->getNum_part(),
				'id_eve' => $participation->getId_eve()
				

				

			]);
		} catch (Exception $e) {
			echo 'Erreur: ' . $e->getMessage();
		}
	}
   
	


	function recupererParticipation($id_part)
	{
		$sql = "SELECT * from participation where id_part = $id_part";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $participation = $query->fetch();
            return $participation;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
	}

	function modifierParticipation($participation, $id)
	{ 
		try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE participation SET 
                        nom_part= :nom_part, 
						prenom_part= :prenom_part,
						age_part= :age_part,
						mail_part= :mail_part,
						num_part= :num_part
						
                    
                WHERE id_part= :id_part'
            );
            $query->execute([
                'id_part' => $id,
                'nom_part' => $participation->getNom_part(),
				'prenom_part' => $participation->getPrenom_part(),
				'age_part' => $participation->getAge_part(),
				'mail_part' => $participation->getMail_part(),
				'num_part' => $participation->getNum_part()
				
                
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
}

	function recupererNom_eve($id_eve)
	{
		$sql = "SELECT nom_eve as 'nom_eve' from evenement join participation on (evenement.id_eve)=(participation.id_eve);";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $participation = $query->fetch();
            return $participation['nom_eve'];
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
	}

	function recupererPt_eve($id_eve)
	{
		$sql = "SELECT nb_pt_eve as 'nb_pt_eve' from evenement join participation on (evenement.id_eve)=(participation.id_eve);";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $participation = $query->fetch();
            return $participation['nb_pt_eve'];
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
	}
	
}