
<link rel="stylesheet" href="../elements/bootstrap.min.css">
<link rel="stylesheet" href="../elements/style.css">

<?php require_once "../depenses/traitement.php" ?>

<!-- depense section -->
<section id="bien" class="bien">
    <div class="container fluid">
        <div class="container">
    <article class="col-xs-12 col-xm-12  col-md-12 col-lg-12"> 
    <?php require_once "../depenses/formulaire.php" ?>
        <h1 class="bien-info-heading">Gestion Des Biens Et Services</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Biens et services</th>
                    <th>Montant</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($jointures as $resultat): ?>
                    <tr>
                        <td><?= $resultat['designation_biens_services'] ?></td>
                        <td><?= number_format($resultat['montant'], 0 , ',', ' ') ; ?> FCFA </td>
                        <td><?= $resultat['date_depenses'] ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table> <br> <br>
        <form action="../index.php" method="">
        <button class="btn btn-primary" type="submit" >Retour</button> <br> <br>
        </form>
    </article>
    </div>
    </div>
</section> <br>
<!-- End depense section -->