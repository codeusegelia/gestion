<link rel="stylesheet" href="../elements/style.css">
<link rel="stylesheet" href="./elements/bootstrap.min.css">

<?php require_once "./depenses/traitement.php" ?>

<!-- depense section -->
<section id="bien" class="bien">
    <div class="row">
    <article class="col-xs-12 col-xm-12  col-md-4 col-lg-4"> 
    <?php require_once "./depenses/formulaire.php" ?>
    </article>

    <article class="col-xs-12 col-xm-12  col-md-8 col-lg-8">
        <h1 class="bien-info-heading">Gestion Des Biens Et Services</h1>
        <table>
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
        </table>
    </article>
    </div>
</section> <br>
<!-- End depense section -->