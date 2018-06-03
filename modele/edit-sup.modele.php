<?php
	require_once'../modele/Bdd.php';
	function test($data) 
	{
        $data = trim($data);
        $data = stripslashes($data);
        $data = strip_tags(htmlspecialchars($data));
        return $data;
    }
?>