<?php
include '../config.php';
include '../Model/dons.php';

class donC
{
    public function listdon()
    {
        $sql = "SELECT * FROM don";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function deletedon($id_don)
    {
        $sql = "DELETE FROM  don WHERE id_don=:id_don";
		$db = config::getConnexion();
		$req = $db->prepare($sql);
		$req->bindValue(':id_don', $id_don);
		
		try {
			$req->execute();
		} catch (Exception $e) {
			die('Erreur:' . $e->getMeesage());
		}
    }

    function adddon($don)
    {
        $sql = "INSERT INTO don  (id_don, nom_don, img_don,num_tel,email_don,id_ass)
        VALUES (:id_don,:nom_don,:img_don,:num_tel,:email_don,:id_ass)";
        $db = config::getConnexion();
        try {
            
            $query = $db->prepare($sql);
            $query->execute([
                'id_don' => $don->getId_don(),
                'nom_don' => $don->getNom_don(),
				'img_don' => $don->getImg_don(),
                'num_tel'=>$don->getNum_tel(),
                'email_don'=>$don->getEmail_don(),
				'id_ass' =>$don->getId_ass()

				
                
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

   function updatedon($don, $id)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE don SET 
                    nom_don = :nom_don,
					img_don= :img_don, 
                    num_tel=:num_tel,
                    email_don=:email_don

                WHERE id_don= :id_don'
            );
            $query->execute([
                'id_don' => $id,
                'nom_don' => $don->getNom_don(),
				'img_don' => $don->getImg_don(),
                'num_tel'=>$don->getNum_tel(),
                'email_don'=>$don->getEmail_don()

				
                
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    function showdon($id_don)
    {
        $sql = "SELECT * from don where id_don = $id_don";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $don = $query->fetch();
            return $don;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }




   


}
