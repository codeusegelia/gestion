<?php
  require_once "./elements/connexion.php";
 

  //On sélectionne les éléments de la table depenses pour les afficher
  $requete = $connexion->prepare(" SELECT id_depenses,montant,date_depenses,id_biens_services FROM depenses");
  $requete->execute();
  $resultats = $requete->fetchAll(2);

  //on fait une jointure
  $jointure = " SELECT bienetservice.designation_biens_services, depenses.id_depenses, depenses.montant, depenses.date_depenses
                FROM bienetservice
                INNER JOIN depenses ON bienetservice.id_biens_services = depenses.id_biens_services";

    $requete = $connexion->prepare($jointure);
    $requete->execute();
    $jointures = $requete->fetchAll(2);

    
  ?>
