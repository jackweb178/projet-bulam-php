<?php
	require_once('../modele/Bdd.php') ;
	if (session_status()==PHP_SESSION_NONE) 
	{
  	session_start();
	} 

	if (!empty($_POST['new_email']) AND !empty($_POST['email']))
	{
		$new_email=htmlspecialchars($_POST['new_email']);
	}
	if (!empty($_POST['mdp']) AND !empty($_POST['new_mdp']) AND !empty($_POST['new_mdp_confirm'])) 
	{
		if ($_POST['new_mdp']==$_POST['new_mdp_confirm']) {
			// $new_mdp=password_hash(htmlspecialchars($_POST['new_mdp']), PASSWORD_DEFAULT);
			$new_mdp=htmlspecialchars($_POST['new_mdp']);
			$mdp=htmlspecialchars($_POST['mdp']);
		}	
	}
	if ( (isset($mdp) AND isset($_SESSION['id_user']) AND isset($new_mdp)) || isset($new_email)) 
	{
		$req = $bdd->prepare('SELECT * FROM utilisateur WHERE id=:id');
		$req->execute(array( 'id'=>$_SESSION['id_user']));		
		$resultat = $req->fetch(PDO::FETCH_BOTH);
		if($req->rowCount()>0)
		//$resultat = $req->fetch(); cette methode marche aussi
		//if($resultat) 
		{	
			if (isset($new_email)) {
				$change = $bdd->prepare('UPDATE utilisateur SET email=:new_email WHERE id=:id_user');
				$change->execute(array(
					'new_email' => $new_email,
					'id_user' =>$_SESSION['id_user'],
					));
				header('location: ../vue/menbre_connecte.php');
				$change->closeCursor();
			}
			if (isset($mdp) AND isset($_SESSION['id_user']) AND isset($new_mdp)) 
			{
				//if (password_verify($mdp,$resultat['mdp'])) 
				if ($mdp==$resultat['mdp']) 
				{	
					$change = $bdd->prepare('UPDATE utilisateur SET mdp=:new_mdp WHERE id=:id_user');
					$change->execute(array(
						'new_mdp' => $new_mdp,
						'id_user' =>$_SESSION['id_user'],
						));
					header('location: ../vue/menbre_connecte.php');
					$change->closeCursor();
				}else{
					header('location: ../vue/parametre.php');
				}
			}	
		}
		$req->closeCursor();
	}else{
		header('location: ../vue/parametre.php');
	}
?>