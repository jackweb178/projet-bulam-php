<?php
	//inclusion de la baae de donnees
	require_once'../modele/edit-sup.modele.php';
	//suppression de l'utilisateur correspondant a ce l'id 
	if (isset($_GET['sup'])) 
	{
		$supprimer = $bdd->prepare('DELETE FROM user WHERE id=:id LIMIT 1');
		$supprimer->execute(array( 'id'=>$_GET['sup']));
		if ($supprimer) 
		{
			header('location: ../vue/compte_creer.php?delete');	
		}
		$change->closeCursor();
	}
	//la modification
	if (isset($_GET['edit'])) 
	{	//je recupere les donnees de la table
		$editer = $bdd->prepare('SELECT * FROM user WHERE id=:id LIMIT 1');
		$editer->execute(array( 'id'=>$_GET['edit']));		
		$resultat = $editer->fetch(PDO::FETCH_BOTH);
		if ($editer->rowCount()>0) 
		{   //je recupere et je modifie les donnees
			if (!empty($_POST['pseudo']) AND !empty($_POST['email'])) 
			{
				$new_pseudo=test($_POST['pseudo']);
				$new_email=test($_POST['email']);
			}
			if (isset($new_email) AND isset($new_pseudo)) 
			{
				$change = $bdd->prepare('UPDATE user SET pseudo=:new_pseudo , email=:new_email WHERE id=:id LIMIT 1');
				$change->execute(array(
					'new_pseudo'=> $new_pseudo,
					'new_email' => $new_email,
					'id' =>$_GET['edit']
					));
				header('location: ../vue/compte_creer.php?edite');
				$change->closeCursor();
			}
		}
		require_once('../vue/editer_user.php');
	} 
?>