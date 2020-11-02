<link rel="stylesheet" href="./elements/style.css">
<link rel="stylesheet" href="./elements/bootstrap.min.css">

<?php  require_once "./depenses/traitement.php" ?>
<section id="bien" class="bien">
    <article class="col-xs-12 col-xm-12  col-md-12 col-lg-12">
        <h1 class="bien-info-heading">Dépense par bien et service</h1>
        <table style="width: 1325px;">
            <thead>
                <tr>
                    <th></th>
                    <th>Janv.</th>
                    <th>Fevr.</th>
                    <th>Mars</th>
                    <th>Avril</th>
                    <th>Mai</th>
                    <th>Juin</th>
                    <th>Juill.</th>
                    <th>Aout</th>
                    <th>Sept.</th>
                    <th>Oct.</th>
                    <th>Nov.</th>
                    <th>Dec.</th>
                </tr>

                <tr>
                    <td>
                        <?php foreach($jointures as $jointure): ?>
                            <?= $jointure['designation_biens_services'] ?>
                        <?php endforeach ?>
                    </td>
                    <td><?= somme_par_mois(1)?></td>
                    <td><?= somme_par_mois(2)?></td>
                    <td><?= somme_par_mois(3)?></td>
                    <td><?= somme_par_mois(4)?></td>
                    <td><?= somme_par_mois(5)?></td>
                    <td><?= somme_par_mois(6)?></td>
                    <td><?= somme_par_mois(7)?></td>
                    <td><?= somme_par_mois(8)?></td>
                    <td><?= somme_par_mois(9)?></td>
                    <td><?= somme_par_mois(10)?></td>
                    <td><?= somme_par_mois(11)?></td>
                    <td><?= somme_par_mois(12)?></td>
                </tr>
        </table>
    </article> <br>
    
    <!-- SOMME TOTALE -->
    <article class="col-xs-12 col-xm-12  col-md-12 col-lg-12">
        <h1 class="bien-info-heading">Total Dépenses</h1>
        <table style="width: 1325px;">
            <thead>
                <tr>
                    <th></th>
                    <th>Janv.</th>
                    <th>Fevr.</th>
                    <th>Mars</th>
                    <th>Avril</th>
                    <th>Mai</th>
                    <th>Juin</th>
                    <th>Juill.</th>
                    <th>Aout.</th>
                    <th>Sept.</th>
                    <th>Oct.</th>
                    <th>Nov.</th>
                    <th>Dec.</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Biens/<br>Services</td>
                        <td><?= somme_total(1) ?></td>
                        <td><?= somme_total(2) ?></td> 
                        <td><?= somme_total(3) ?></td> 
                        <td><?= somme_total(4) ?></td> 
                        <td><?= somme_total(5) ?></td> 
                        <td><?= somme_total(6) ?></td> 
                        <td><?= somme_total(7) ?></td> 
                        <td><?= somme_total(8) ?></td> 
                        <td><?= somme_total(9) ?></td> 
                        <td><?= somme_total(10) ?></td> 
                        <td><?= somme_total(11) ?></td> 
                        <td><?= somme_total(12) ?></td>  
                    </tr>
            </tbody>
        </table>
    </article> <br>
</section> <br>





