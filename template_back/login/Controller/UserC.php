<?php
include '../config.php';
include_once '../Model/user.php';
class userC
{
	function afficherusers()
	{
		$sql = "SELECT * FROM users";
		$db = config::getConnexion();
		try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur:' . $e->getMeesage());
		}
	}
	function supprimeruser($id)
	{
		$sql = "DELETE FROM users WHERE id=:id";
		$db = config::getConnexion();
		$req = $db->prepare($sql);
		$req->bindValue(':id', $id);
		try {
			$req->execute();
		} catch (Exception $e) {
			die('Erreur:' . $e->getMessage());
		}
	}   
	function ajouteruser($users)
	{
		$sql = "INSERT INTO users (id, username, pts, password, adresse, email,tel, usad) 
			VALUES (:id,:username,:pts, :password, :adresse,:email, :tel, :usad)";
		$db = config::getConnexion();
		try {
			$query = $db->prepare($sql);
			$query->execute([
				'id' => $users->getNumuser(),
				'username' => $users->getNom(),
				'pts' => $users->getPrenom(),
				'password' => $users->getPassword(),
				'adresse' => $users->getAdresse(),
				'email' => $users->getEmail(),
				'tel' => $users->getTel(),
				'usad' => $users->getDateinscription()
			]);
		} catch (Exception $e) {
			echo 'Erreur: ' . $e->getMessage();
		}
	}
	function recupereruser($id)
	{
		$sql = "SELECT * from users where id=$id";
		$db = config::getConnexion();
		try {
			$query = $db->prepare($sql);
			$query->execute();

			$users = $query->fetch();
			return $users;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}

	function afficherUser($libelle)
    {
        $sql = "SELECT * FROM users WHERE id LIKE '%" . $libelle . "%'";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $users = $query->fetchAll();
            return $users;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }

	function modifieruser($users, $id)
	{
		try {
			$db = config::getConnexion();
			$query = $db->prepare(
				'UPDATE users SET 
						username= :username, 
						pts= :pts, 
						password= :password, 
						adresse= :adresse, 
						email= :email, 
						tel= :tel, 
						usad= :usad
					WHERE id= :id'
			);
			$query->execute([
				'username' => $users->getNom(),
				'pts' => $users->getPrenom(),
				'password' => $users->getPassword(),
				'adresse' => $users->getAdresse(),
				'email' => $users->getEmail(),
				'tel' => $users->getTel(),
				'usad' => $users->getDateinscription(),
				'id' => $id
			]);
			echo $query->rowCount() . " records UPDATED successfully <br>";
		} catch (PDOException $e) {
			$e->getMessage();
		}
	}
}