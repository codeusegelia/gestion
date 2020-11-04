<link rel="stylesheet" href="./elements/bootstrap.min.css"/>
<link rel="stylesheet" href="./elements/style.css">

<?php  

    require_once "./elements/connexion.php";

    $str_query_depense = " SELECT * FROM bienetservice";
    $query_depense = $connexion->prepare($str_query_depense);
    $query_depense->execute();
    $list_depenses = $query_depense->fetchAll(2);

    $mois = [' ','Janv.', 'Fevr.', 'Mars', 'Avril', 'Mai', 'Juin', 'Juill.', 'Aout', 'Sept.', 'Oct.', 'Nov.', 'Dec.']
?>
<section id="bien" class="bien">
    <div class="container-fluid">
        <div class="contatiner">
    <article class="col-xs-12 col-xm-12  col-md-12 col-lg-12">
        <h1 class="bien-info-heading">Dépense par bien et service</h1>
        <table  class="table table-striped">
            <thead>
                <tr class="text-white">
                    <?php foreach($mois as $month): ?>
                        <th> <?= $month ?></th>
                    <?php endforeach ?>
                </tr>

                <tr>
                    <td>
                        <?php foreach($list_depenses as  $value): ?>
                            <div class="text-white"> 
                               <?= $value['designation_biens_services']  ?> 
                            </div>
                        <?php endforeach ?>
                    </td>
                    
                    <?php for($i=1; $i<=12; $i++): ?>
                        <td> 
                            <div class="text-white">
                                <?= somme_par_mois($i) ?> 
                            </div>
                        </td>
                    <?php endfor ?>
                </tr>
        </table>
    </article> <br>
    
    <!-- SOMME TOTALE -->
        <h1 class="bien-info-heading">Total Dépenses</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <?php foreach($mois as $month): ?>
                        <th class="text-white"> <?= $month ?></th>
                    <?php endforeach ?>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-white">Biens/<br>Services</td>
                        <?php for ($i=1; $i <=12 ; $i++): ?>
                            <td class="text-white"><?= somme_total($i) ?></td>
                        <?php endfor ?>
                    </tr>
            </tbody>
        </table> <br> <br>
        <form action="./index.php" method="">
        <button class="btn btn-primary" type="submit" >Retour</button> <br> <br>
        </form>
    </article>
</section> 
</div>
</div> 






