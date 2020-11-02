<?php 
require_once "./elements/connexion.php";
        $uuu= ["janvier" =>["produit" => 200000,"produt" => 200000,"prodt" => 200000],
        "fevrier" =>["prot" => 200000,"prduit" => 200000,"produ" => 200000],
        "mars" =>["prodt" => 200000,"roduit" => 200000,"oduit" => 200000]
    
        ];
        
        function table($tab){
            echo "<table>";
                echo "<thead>";
                    /*foreach($tab as $key => $value){
                        echo "<td>".$key."</td>";
                    }*/
                    foreach($jointures as $jointure){
                        echo "<td>".$jointure['designation_biens_services']."</td>";
                    }
                echo "</thead>";
                echo "<tr>";
                    foreach($tab as $key => $value){
                        echo "<td>"; 
                             
                            foreach($value as $clee => $val){
                                echo "<div>";
                                echo $val;
                                echo"</div>";
                            }
                            
                        echo"</td>";
                    }
                echo "</tr>";
            echo "</table>";
        }

        
    echo "<table>";
    //$i = $mois_actuel;
    for ($i=0; $i < ($mois_actuel-1); $i++) { 
        
        echo "<td>0</td>";

    }
    echo "<td>".$montant['somme_total']."</td>";
    echo "</table>";

       
?>
<h1><?php var_dump($jointures) ?></h1>

<?php foreach($jointures as $value): ?>
    <table>
        <thead>
            <tr>
                <th></th>
                <th> Janvier</th>
            </tr>
        </thead>
            <tbody>
        <td>
            <?= $value['designation_biens_services'] ?> </td>
            <td>
                <?= $value['montant'] ?>
            </td> 
        
            </tbody>
        
    </table>
<?php endforeach ?>