<?php
require_once'../modele/Bdd.php';
	function test($data) 
	{
        $data = trim($data);
        $data = stripslashes($data);
        $data = strip_tags(htmlspecialchars($data));
        return $data;
    }
    if (isset($_POST['submit'])) 
    {
    	if (!empty($_POST['pseudo']) AND !empty($_POST['email']) AND !empty($_POST['mdp']) AND !empty($_POST['mdp_confirm'])) 
    	{	
    		if (preg_match("/^[a-zA-Z ]*$/",$_POST['pseudo'])) 
    		{
                $pseudo= test($_POST['pseudo']);
            }else{
            	// header('location:../vue/inscription.php?nom=le champ nom ne supporte que des caractere aphabetique');
            }
    		if (filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) 
    		{	
    			$req=$bdd->prepare('SELECT id FROM user WHERE email=:email');
    			$req->execute(array(
    				'email'=> htmlspecialchars($_POST['email'])
    			));
                $resultat=$req->fetch();
                if ($resultat) 
                {
                	header('location: ../vue/inscription.php?email=ce mail est deja pris');
                }else{
                	$email=test($_POST['email']);
                }
            }else{
            	//header('location :../vue/inscription.php?email=entrer un email valide');
            }
            if ($_POST['mdp']==$_POST['mdp_confirm']) 
            {
                // $mdp=password_hash(test_input($_POST['mdp']), PASSWORD_DEFAULT);
            	$mdp=test($_POST['mdp']);
            }
    	}else{
    		header('location: ../vue/inscription.php?erreur=remplire tous less');
    	}
    }

?>