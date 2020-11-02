<?php 
    require_once "./elements/connexion.php";
      //On insert les éléments dans la table bienetservices
  $desi = isset($_POST['designation_biens_services']) ? $_POST['designation_biens_services'] : '';
  $desc = isset($_POST['description_biens_services']) ? $_POST['description_biens_services']  : '';

  if(!empty($desi) && !empty($desc)) {
    if($desi!='' and $desc!=''){

      $insertion = $connexion->prepare("INSERT INTO bienetservice(designation_biens_services,description_biens_services)
                                      VALUES (:designation_biens_services, :description_biens_services)");
      $insertion->bindParam(':designation_biens_services',$desi);
      $insertion->bindParam(':description_biens_services',$desc);
      $insertion->execute();
    }
  }
?>

<h1 class="bien-info-heading">Formulaire</h1>
<form action="" method="POST">
    <div class="form-group">
        <input type="text" name="designation_biens_services" id="designation_biens_services" class="form-control" placeholder="Designation ben et service" size="100" style="height:100px;"/>
    </div>
    <div class="form-group">
        <textarea cols="45" rows="20" name="description_biens_services" id="description_biens_services" class="form-control" placeholder="Description bien et service"></textarea>
    </div> 
    <button class="btn btn-primary" type="submit">Soumettre</button>
</form>
