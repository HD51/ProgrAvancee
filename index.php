<?php

	require_once("class/connexion.class.php");
	require_once("view/view.class.php");

	$CONNEXION = new Connexion("localhost","root","");
	$FORM = new View();
	$CONNEXION->List_DB();


?>