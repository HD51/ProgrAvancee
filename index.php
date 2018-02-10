<?php
require_once("class/connexion.class.php");




if (isset($_GET['ref'])) {
  $idbd=$_GET['ref'];
  $test=new Pdo_Connexion("$idbd");
  $test->listeTab ($idbd);
  if (isset($_GET['tab'])) {
    $table= $_GET['tab'];
    $test->structab ("$table");
  }
}
else {
  $test=new Pdo_Connexion("");
  $test->Databases ();
}




 ?>
