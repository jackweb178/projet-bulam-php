<?php
//inclusion de la fontion affichage
	require_once('../modele/compte_creer.modele.php');
	//$value=affichage(0,5);
	// require_once('../vue/compte_creer.php');
	/*==============================================*/
	//initiation du nombre de ligne quon veut par page
	$nb_ligneParPage=5; 
	//compter le nbre de ligne de la base de donnees
	$calcul=$bdd->query('SELECT COUNT(*) AS total_bdd FROM user');
	$resultat_calcul=$calcul->fetch();
	$total_bdd=$resultat_calcul['total_bdd'];
	//nombre de page quon peut avoir
	//la fonction 'ceil' permet d'arrondir le nombre decimal en entier (4.2=5)
	$nb_page=ceil($total_bdd/$nb_ligneParPage);
	//definir sur quelle page on se trouve
	if(isset($_GET['page']) AND !empty($_GET['page']) AND ctype_digit($_GET['page'])==1 )
	{	//j'initialise ma page courante ou initiale
		//$page_init = intval($_GET['page']);
		if ($_GET['page'] > $nb_page) 
		{
			$page_init = $nb_page;	
		}else{
			$page_init = $_GET['page'];	
		}

	}else{
		$page_init = 1;
	}
	//pour qua la page suivante je reprenne a n+1 de laa ou jetais arreter
	$page_suivante = ($page_init-1)*$nb_ligneParPage;
	//recuperer tous mes menbres
	$req=$bdd->query("SELECT * FROM user ORDER BY id DESC LIMIT $page_suivante,$nb_ligneParPage") ;

?>