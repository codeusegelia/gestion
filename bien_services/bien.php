<link rel="stylesheet" href="../elements/style.css">
<link rel="stylesheet" href="./elements/bootstrap.min.css">
<?php require_once "./bien_services/traitement.php" ?>

<!-- Bien et servvice section -->
<section id="bien" class="bien">
    <div class="row">
    <article class="col-xs-12 col-xm-12  col-md-4 col-lg-4"> 
    <?php require_once "./bien_services/formulaire.php" ?>
    </article>

    <article class="col-xs-12 col-xm-12  col-md-8 col-lg-8">
        <h1 class="bien-info-heading">Gestion Des Biens Et Services</h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Designation</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($resultats as $resultat): ?>
                    <tr>
                        <td><?= $resultat['id_biens_services'] ?></td>
                        <td><?= $resultat['designation_biens_services'] ?></td>
                        <td><?= $resultat['description_biens_services'] ?></td>
                        <td><a class="action" href="./bien_services/modifier.php?id_biens_services=<?= $resultat['id_biens_services'] ?>">Modifier</a> / <a class="action" href="./bien_services/supprimer.php?id_biens_services=<?= $resultat['id_biens_services']?>">Supprimer</a></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </article>
    </div>
</section> <br>
<!-- End Bien et servvice section -->