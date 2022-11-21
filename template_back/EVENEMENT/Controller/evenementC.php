<?php
include '../config.php';
include '../Model/evenement.php';

class evenementC
{
    public function listevenements()
    {
        $sql = "SELECT * FROM evenement";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function deleteevenement($id_eve)
    {
        $sql = "DELETE FROM  evenement WHERE id_eve=:id_eve";
		$db = config::getConnexion();
		$req = $db->prepare($sql);
		$req->bindValue(':id_eve', $id_eve);
		
		try {
			$req->execute();
		} catch (Exception $e) {
			die('Erreur:' . $e->getMeesage());
		}
    }

    function addevenement($evenement)
    {
        $sql = "INSERT INTO evenement  (id_eve, nom_eve, date_eve, lieu_eve, duree_eve, association_ga ,somme ,nb_pt_eve,maladie)
        VALUES (:id_eve, :nom_eve, :date_eve, :lieu_eve, :duree_eve, :association_ga ,:somme ,:nb_pt_eve,:maladie)";
        $db = config::getConnexion();
        try {
            
            $query = $db->prepare($sql);
            $query->execute([
                'id_eve' => $evenement->getId_eve(),
				'nom_eve' => $evenement->getNom_eve(),
				'date_eve' => $evenement->getDate_eve(),
				'lieu_eve' => $evenement->getLieu_eve(),
				'duree_eve' => $evenement->getDuree_eve(),
				'association_ga' => $evenement->getAssociation_ga(),
				'somme' => $evenement->getSomme(),
				'nb_pt_eve' => $evenement->getNb_pt_eve(),
				'maladie' => $evenement->getMaladie(),
				
                
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    function updateevenement($evenement, $id)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE evenement SET 
                        nom_eve= :nom_eve, 
						date_eve= :date_eve, 
						lieu_eve= :lieu_eve, 
						duree_eve= :duree_eve, 
						association_ga= :association_ga,
						somme= :somme, 
						nb_pt_eve= :nb_pt_eve, 
						maladie= :maladie
                    
                WHERE id_eve= :id_eve'
            );
            $query->execute([
                'id_eve' => $id,
                'nom_eve' => $evenement->getNom_eve(),
				'date_eve' => $evenement->getDate_eve(),
				'lieu_eve' => $evenement->getLieu_eve(),
				'duree_eve' => $evenement->getDuree_eve(),
				'association_ga' => $evenement->getAssociation_ga(),
				'somme' => $evenement->getSomme(),
				'nb_pt_eve' => $evenement->getNb_pt_eve(),
				'maladie' => $evenement->getMaladie()
				
                
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    function showevenement($id_eve)
    {
        $sql = "SELECT * from evenement where id_eve = $id_eve";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $evenement = $query->fetch();
            return $evenement;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }




   


}
