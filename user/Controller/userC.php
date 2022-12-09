<?php
include '../config.php';
include_once '../Model/user.php';

class userC
{
	function afficherusers()
	{
		$sql = "SELECT * FROM user";
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
		$sql = "DELETE FROM user WHERE id=:id";
		$db = config::getConnexion();
		$req = $db->prepare($sql);
		$req->bindValue(':id', $id);
		try {
			$req->execute();
		} catch (Exception $e) {
			die('Erreur:' . $e->getMessage());
		}
	}   
	function ajouteruser($user)
	{  // $sql = "INSERT INTO user ( nom,prenom, pts, password, adresse, email,tel, usad) 
		$sql = "INSERT INTO `user`( `nom` , `prenom` , `password`, `adresse`, `email`, `tel` ) 
			VALUES ( :nom , :prenom  , :password , :adresse , :email , :tel  )";
		$db = config::getConnexion();
		try {
			$query = $db->prepare($sql);
			$query->execute([
			
				'nom' => $user->getNom(),
				'prenom' => $user->getPrenom(),
				'password' => $user->getPassword(),
				'adresse' => $user->getAdresse(),
				'email' => $user->getEmail(),
				'tel' => $user->getTel()
				
			]);
		} catch (Exception $e) {
			echo 'Erreur: ' . $e->getMessage();
		}
	}
	function recupereruser($id)
	{
		$sql = "SELECT * from user where id=$id";
		$db = config::getConnexion();
		try {
			$query = $db->prepare($sql);
			$query->execute();

			$user = $query->fetch();
			return $user;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}

	function recupereruserByemail($email, $password)
	{
		$sql = "SELECT * from user where email = '".$email."' and password = '".$password."' limit 1 ";
		$db = config::getConnexion();
		try {
			$query = $db->prepare($sql);
			$query->execute();

			$user = $query->fetch();
			return $user;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}
	function recupereruserByemailonly($email)
	{
		$sql = "SELECT password from user where email = '".$email."'  limit 1 ";
		$db = config::getConnexion();
		try {
			$query = $db->prepare($sql);
			$query->execute();

			$password = $query->fetch();
			
			return $password;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}
	function count_by_month($month)
	{
		$sql = "select MONTH(date) , count(*) from user where  MONTH(date)  = '".$month."'  group by MONTH(date)  ";
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
	function count_user()
	{
		$sql = "SELECT COUNT(*)  from user where usad != '1' ";
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

	function count_admin()
	{
		$sql = "SELECT COUNT(*)  from user where usad = '1' ";
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

	function afficherUser($libelle)
    {
        $sql = "SELECT * FROM user WHERE id LIKE '%" . $libelle . "%'";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $user = $query->fetchAll();
            return $user;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }

	function modifieruser($user, $id)
	{
		try {
			$db = config::getConnexion();
			$query = $db->prepare(
				'UPDATE user SET 
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
				'username' => $user->getNom(),
				'pts' => $user->getPrenom(),
				'password' => $user->getPassword(),
				'adresse' => $user->getAdresse(),
				'email' => $user->getEmail(),
				'tel' => $user->getTel(),
				'usad' => $user->getUsad(),
				'id' => $id
			]);
			echo $query->rowCount() . " records UPDATED successfully <br>";
		} catch (PDOException $e) {
			$e->getMessage();
		}
	}
}