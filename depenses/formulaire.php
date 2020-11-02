<?php 
    require_once "./elements/connexion.php";

    $id = isset($_POST['id_biens_services']) ? $_POST['id_biens_services'] : '';
    $montant = isset($_POST['montant']) ? $_POST['montant'] : '';
    $date = date('Y-m-d');
 
    if(!empty($montant) && !empty($id)) {
         $insertion = $connexion->prepare(" INSERT INTO depenses(montant, date_depenses, id_biens_services)
                                            VALUES(:montant, :date_depenses, :id_biens_services)");
 
         $insertion->bindParam(':montant', $montant);
         $insertion->bindParam(':date_depenses',$date);
         $insertion->bindParam(':id_biens_services',$id);
         $insertion->execute();
     }
     
     //POUR LE FORMULAIRE
     $str_query_depense = " SELECT * FROM bienetservice";
     $query_depense = $connexion->prepare($str_query_depense);
     $query_depense->execute();
     $list_depenses = $query_depense->fetchAll(2);
?>

<h1 class="bien-info-heading">Formulaire</h1>
<form action="" method="post">
    <div class="form-group">
        <input class="form-control" type="number" min="0" name="montant" id="montant" value="<?= $montant ?>" placeholder="Entrez le montant" size="100" style="height:100px;"/>
    </div>
    <div class="form-group">
        <select class="form-control" name="id_biens_services" >
            <?php foreach($list_depenses as $depense): ?>
                <option  value="<?= $depense['id_biens_services'] ?>"><?= $depense['designation_biens_services'] ?></option>
            <?php endforeach ?>
        </select>
    </div>
    <button class="btn btn-primary"  type="submit">Envoyez</button><br>
</form>
