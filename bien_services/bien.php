<link rel="stylesheet" href="../elements/style.css">
<link rel="stylesheet" href="../elements/bootstrap.min.css">
<?php require_once "../bien_services/traitement.php" ?>

<!-- Bien et servvice section -->
<section id="bien" class="bien">
    <div class="container-fluid">
        <div class="container">
    <article class="col-xs-12 col-xm-12  col-md-12 col-lg-12"> 
    <?php require_once "../bien_services/formulaire.php" ?>
   
        <h1 class="bien-info-heading">Gestion Des Biens Et Services</h1>
        <table class="table table-striped"> 
            <thead>
                <tr class="text-white">
                    <th>ID</th>
                    <th>Designation</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($resultats as $resultat): ?>
                    <tr class="text-white">
                        <td><?= $resultat['id_biens_services'] ?></td>
                        <td><?= $resultat['designation_biens_services'] ?></td>
                        <td><?= $resultat['description_biens_services'] ?></td>
                        <td><a class="action" href="../bien_services/modifier.php?id_biens_services=<?= $resultat['id_biens_services'] ?>">Modifier</a> / <a class="action" href="../bien_services/supprimer.php?id_biens_services=<?= $resultat['id_biens_services']?>">Supprimer</a></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table> <br>
        <form action="../index.php" method="">
        <button class="btn btn-primary" type="submit" >Retour</button> <br> <br>
        </form>
    </article>
    </div> 
    </div> 
    
</section>


<!-- End Bien et servvice section -->