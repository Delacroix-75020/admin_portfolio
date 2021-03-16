<?php

	require "models/insertProjetModels.php";

	if(isset($_POST['insertProjet'])) {
    $libelle = htmlspecialchars($_POST['libelle']);
    $description = htmlspecialchars($_POST['description']);
    $lien = htmlspecialchars($_POST['lien']);
    $github = htmlspecialchars($_POST['github']);
    $idc = ($_POST['idc']);
    $idi = ($_POST['idi']);
    if(!empty($_POST['libelle']) AND !empty($_POST['description']) AND !empty($_POST['lien']) AND !empty($_POST['github']) AND !empty($_POST['idc']) AND !empty($_POST['idi'])) {
       
    $insertpjt = $bdd->prepare("INSERT INTO projet(libelle, description, lien, github, idc, idi) VALUES(?, ?, ?, ?, ?, ?)");
    $insertpjt->execute(array($libelle, $description, $lien, $github, $idc, $idi));
                      $erreur = "Le projet a bien été enregistré !</a>";
                   } 
    }

    /*$lescategorie = selectAllcategorie();
      foreach ($lescategorie as $unecategorie) {
      echo "<option value ='".$unecategorie['id_categorie']."'>".$unecategorie['nom_categorie']."</option>";
      } */


require "views/insertprojetView.php";

?>