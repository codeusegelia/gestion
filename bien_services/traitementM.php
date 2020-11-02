<?php
    require_once "../elements/connexion.php";
      $id = isset($_POST["id_biens_services"]) ? $_POST["id_biens_services"] : ' ';
      $desi = isset($_POST['designation_biens_services']) ? $_POST['designation_biens_services'] : ' ';
      $desc = isset($_POST['description_biens_services']) ? $_POST['description_biens_services'] : '';
    
       //on modifie
        $modifier = $connexion->prepare(" UPDATE bienetservice SET designation_biens_services=:designation_biens_services,description_biens_services=:description_biens_services
                                          WHERE id_biens_services=:id_biens_services");
        $modifier->bindParam(':designation_biens_services',$desi);
        $modifier->bindParam(':description_biens_services',$desc);
        $modifier->bindParam(':id_biens_services',$id);
        $modifier->execute();

        header('Location:../index.php');
?>