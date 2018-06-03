<?php
	require_once'../modele/Bdd.php';
	function test($data) 
	{
        $data = trim($data);
        $data = stripslashes($data);
        $data = strip_tags(htmlspecialchars($data));
        return $data;
    }
	if (!empty($_POST['email']) AND !empty($_POST['mdp'])) {
		$email=test($_POST['email']);
		$mdp=test($_POST['mdp']);
	}
	if (isset($email) AND isset($mdp)) {
		$req = $bdd->prepare('SELECT * FROM user WHERE email=:email');
		$req->execute(array(
			'email'=>$email
		));
		$resultat = $req->fetch(PDO::FETCH_BOTH);
		if($req->rowCount()>0) 
		{	// if (password_verify($mdp,$resultat['mdp'])) 
			if ($mdp==$resultat['mdp']) 
			{
				// header('location: ../vue/menbre_connecte.php?menbre_true=connect');
				session_start();
				$_SESSION['id_user']=$resultat['id'];
				$_SESSION['pseudo']=$resultat['pseudo'];
				$_SESSION['email']=$resultat['email'];
				if (isset($_POST['checkboxe']))
				{
					setcookie('email',$email,time()+365*24*3600,null,null,false,true);
					setcookie('mdp',$mdp,time()+365*24*3600,null,null,false,true);
				}
			}
		}else{
			header('location: ../vue/connection.php?mail=mail ou mot de pass invalide');
		}
		$req->closeCursor();
	}else{
		header('location: ../vue/connection.php?menbre=remplire tous les champs');
	}
	if (isset($_SESSION['id_user'])) {
		header('location: ../vue/compte_creer.php?menbre_true=connect');			
	}else{
		header('location: ../vue/connection.php?compte=ce compte n\'existe pas');
	}
?>