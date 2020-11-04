<?php 
    require_once "../elements/connexion.php";
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


<form action="" method="POST">
    <h1 class="bien-info-heading">Formulaire</h1>
    <div class="card-body">
        <div class="list-group">
          <input type="text" name="designation_biens_services" id="designation_biens_services" class="form-control" placeholder="Designation bien et service"  style=" font-size:30px;font-family: Verdana;text-align:center;color:chartreuse"/> <br>
          <div class="div">
            <textarea cols="20" rows="10" name="description_biens_services" id="description_biens_services" class="form-control" placeholder="Description bien et service"  style="font-size:10px;font-family: Verdana;text-align:center;color:chartreuse"></textarea>
          </div>
        </div> 
    </div> <br>
    <button class="btn btn-primary" type="submit">Soumettre</button>
</form>
