<?php
	require_once'../controleur/creation_compte.php';
	if (isset($pseudo) AND isset($email) AND isset($mdp)) 
	{
		$req = $bdd->prepare("INSERT INTO `user`(`pseudo`,`email`,`mdp`,`date_enregistrement`) VALUES(:pseudo,:email,:mdp,now())");
	           $req->execute(
	                array(
	                     'pseudo' => $pseudo,
	                     'email' => $email,
	                     'mdp' => $mdp,
	    			)
	            );
	    $req = $bdd->prepare('SELECT * FROM user WHERE email=:email LIMIT 1');
		$req->execute(array( 'email'=>$email));	
		$resultat = $req->fetch(PDO::FETCH_BOTH);
	   			session_start();
	   			$_SESSION['id_user']=$resultat['id'];
				$_SESSION['pseudo']=$resultat['pseudo'];
				$_SESSION['email']=$resultat['email'];
	    $req->closeCursor();
	    header('location: ../vue/compte_creer.php');
     } 
     //else{
    //     header('location: ../vue/inscription.php?erreur=remplire correctement les champs!!');
    // }
?>