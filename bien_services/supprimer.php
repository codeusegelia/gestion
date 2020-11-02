<?php
    
    require_once "../elements/connexion.php";

    $supprimer = "DELETE FROM bienetservice WHERE id_biens_services = ?";
    $requete = $connexion->prepare($supprimer);
    $requete->execute([$_GET['id_biens_services']]);
    
    header('location:../index.php');
?>