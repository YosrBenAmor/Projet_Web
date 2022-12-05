<?php
include '../config.php';
include '../Model/user.php';
class userC
{  
    function adduser($user)
    {
        $sql = "INSERT INTO user  (id_us, nom_us, prenom_us,mail_us,mdp_us)
        VALUES (:id_us,:nom_us,:prenom_us,:mail_us,:mdp_us)";
        $db = config::getConnexion();
        try {
            
            $query = $db->prepare($sql);
            $query->execute([
                'id_us' => $user->getId_us(),
                'nom_us' => $user->getNom_us(),
				'prenom_us' => $user->getPrenom_us(),
                'mail_us'=>$user->getMail_us(),
                'mdp_us'=>$user->getMdp_us()

            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }
    function connect($mail_us)
	{
        $sql = "SELECT * FROM user WHERE mail_us='$mail_us'";
        $db = config::getConnexion();
        try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
        
        }
     
         
  




   


}
