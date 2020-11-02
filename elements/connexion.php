<?php 
    $server = 'localhost';
    $login = 'root';
    $pass = '';
    $mois_actuel = date('m');

    try {
        $connexion = new PDO("mysql::host=$server;dbname=gestion",$login,$pass);
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        
    }
    catch(PDOException $e){
        echo "Echec" .$e->getMessage();
    }
    

    //calcul de la somme de chaque id
    function somme_par_mois($mois){
        $server = 'localhost';
        $login = 'root';
        $pass = '';
       

        $connexion = new PDO("mysql::host=$server;dbname=gestion",$login,$pass);
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $requete = $connexion->prepare("
                SELECT id_biens_services,
                SUM(montant) AS somme
                FROM depenses WHERE MONTH(date_depenses) = $mois
                GROUP BY id_biens_services");
        $requete->execute();
        $somme = $requete->fetchAll(2); 

        foreach($somme as $m){
            echo $m['somme'] . "</br>";
        }
    }

    //Calcul de la somme total de la colonne montant
    function somme_total($mois){
        $server = 'localhost';
        $login = 'root';
        $pass = '';
       

        $connexion = new PDO("mysql::host=$server;dbname=gestion",$login,$pass);
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $requete = $connexion->prepare("
            SELECT SUM(montant) AS somme_total 
            FROM depenses  WHERE MONTH(date_depenses) = $mois");

        $requete->execute();
        $somme_total = $requete->fetchAll(2); 

        foreach($somme_total as $m){
            echo $m['somme_total'];
        }
    }

    
    /*
    -Calculer la somme pour chacun des mois
    -mettre toutes les valeurs dans un tableau somme_par_mois
    -afficher la somme pour chaque mois...
    */
?>