<?php
  require_once "../elements/connexion.php";
 

  //On sélectionne les éléments pour les afficher
  $requete = $connexion->prepare(" SELECT id_biens_services, designation_biens_services, description_biens_services
      FROM bienetservice");
  $requete->execute();
  $resultats = $requete->fetchAll(2);
  ?>
