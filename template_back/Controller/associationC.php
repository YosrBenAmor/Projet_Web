<?php
include '../config.php';
include '../Model/association.php';

class associationC
{
    public function listassociation()
    {
        $sql = "SELECT * FROM association";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function deleteassociation($id_ass)
    {
        $sql = "DELETE FROM  association WHERE id_ass=:id_ass";
		$db = config::getConnexion();
		$req = $db->prepare($sql);
		$req->bindValue(':id_ass', $id_ass);
		
		try {
			$req->execute();
		} catch (Exception $e) {
			die('Erreur:' . $e->getMeesage());
		}
    }

    function addassociation($association)
    {
        $sql = "INSERT INTO association  (id_ass, nom_ass, img_ass,datefondation,objectif_ass,adresse_ass,num_ass,nbpt_ass,email_ass)
        VALUES (:id_ass,:nom_ass,:img_ass,:datefondation,:objectif_ass,:adresse_ass,:num_ass,:nbpt_ass,:email_ass)";
        $db = config::getConnexion();
        try {
            
            $query = $db->prepare($sql);
            $query->execute([
                'id_ass' => $association->getId_ass(),
                'nom_ass' => $association->getNom_ass(),
				'img_ass' => $association->getImg_ass(),
               'datefondation' =>$association->getDatefondation(),
                'objectif_ass'=>$association->getObjectif_ass(),
                'adresse_ass'=>$association->getAdresse_ass(),
                'num_ass'=>$association->getNum_ass(),
                'nbpt_ass'=>$association->getNbpt_ass(),
                'email_ass'=>$association->getEmail_ass()

				
                
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    function updateassociation($association, $id)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE association SET 
                    nom_ass = :nom_ass,
					img_ass= :img_ass, 
					datefondation=:datefondation,
                    objectif_ass=:objectif_ass,	
                    adresse_ass=:adresse_ass,
                    num_ass=:num_ass,
                    nbpt_ass=:nbpt_ass,
                    email_ass=:email_ass

                WHERE id_ass= :id_ass'
            );
            $query->execute([
                'id_ass' => $id,
                'nom_ass' => $association->getNom_ass(),
				'img_ass' => $association->getImg_ass(),
               'datefondation' =>$association->getDatefondation(),
                'objectif_ass'=>$association->getObjectif_ass(),
                'adresse_ass'=>$association->getAdresse_ass(),
                'num_ass'=>$association->getNum_ass(),
                'nbpt_ass'=>$association->getNbpt_ass(),
                'email_ass'=>$association->getEmail_ass()

				
                
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    function showassociation($id_ass)
    {
        $sql = "SELECT * from association where id_ass = $id_ass";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $association = $query->fetch();
            return $association;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }

    function showa($nom_ass)
    {
        $sql = "SELECT * FROM association WHERE nom_ass LIKE '%" . $nom_ass . "%'";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $association = $query->fetchAll();
            return $association;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }

    function sourire()
    {
        $sql = "SELECT count(*) AS nb FROM association WHERE objectif_ass = 'SOURIRE'";
        

        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $association = $query->fetch();
            return $association['nb'];

        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
       
    }
    function vivre()
    {
        $sql = "SELECT count(*) AS nb FROM association WHERE objectif_ass = 'VIVRE'";
        

        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $association = $query->fetch();
            return $association['nb'];

        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
       
    }
    function reussir()
    {
        $sql = "SELECT count(*) AS nb FROM association WHERE objectif_ass = 'RÉUSSIR'";
        

        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $association = $query->fetch();
            return $association['nb'];

        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
       
    }
    

   


}
