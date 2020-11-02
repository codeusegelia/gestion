<link rel="stylesheet" href="../elements/style.css">
<link rel="stylesheet" href="../elements/bootstrap.min.css">

<?php 
    require_once "../elements/connexion.php";

    $id = $_GET["id_biens_services"];

    $requete = $connexion->prepare("SELECT * FROM bienetservice WHERE id_biens_services=:id_biens_services");
    $requete->bindParam(':id_biens_services',$id,PDO::PARAM_INT);
    $requete->execute();
    $resultat = $requete->fetch(2);  

?> 
<section id="bien" class="bien">
<h1 class="bien-info-heading">Modifier</h1>
        <form action="traitementM.php" method="post">
        <div class="container-fluid">
            <div class="form-group">
                <input  class="form-control" type="hidden" name="id_biens_services" id="id_biens_services" value="<?= $resultat['id_biens_services'] ?>"/>
                <input  class="form-control" type="text" name="designation_biens_services" id="designation_biens_services" value="<?= $resultat['designation_biens_services'] ?>"/>
            </div>
            <div class="form-group">
                <textarea cols="45" rows="8" class="form-control" name="description_biens_services" id="description_biens_services" ><?= $resultat['description_biens_services'] ?></textarea>
            </div>
            <button class="btn btn-primary" type="submit">Modifier</button>
            
        </form>
    </div>
</section>

