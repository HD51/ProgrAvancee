<?php
require_once("Classes/pdo.class.php");



if (isset($_GET['ref'])) {
  $idbd=$_GET['ref'];

  $test=new Pdo_Connexion("$idbd");


  $test->listeTab ($idbd);
}
else {
  $test=new Pdo_Connexion("");
  $test->Databases ();
}




 ?>
