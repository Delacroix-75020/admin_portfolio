<?php

  require "models/connexionModels.php";
 
if (isset($_POST['connect'])) {
   
    if (!empty($_POST['mail'])) {
      
        if (!empty($_POST['mdp'])) {
       
            $mail = $_POST['mail'];
            $mdp = $_POST['mdp'];
            $requete = getUtilisateur($mail, $mdp);
            if ($requete) { 
                    $_SESSION['id'] = $requete['id'];
                    $_SESSION['mail'] = $requete['mail'];
                    $_SESSION['mdp'] = $requete['mdp'];
                    header('Location: home');
                
            } else {
                Alerts::setFlash("Identifiants incorrects.", "danger");
            }
        } else {
            Alerts::setFlash("Veuillez saisir votre mot de passe", "warning");
        }
    } else {
        Alerts::setFlash("Veuillez saisir votre pseudo", "warning");
    }
}


  require "views/connexionView.php";
?>