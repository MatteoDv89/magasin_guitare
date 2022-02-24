<?php


session_start();

include_once "config.php";



if( isset($_POST['fabricant']) && isset($_POST['modele']) && isset($_POST['annee']) && isset($_POST['prix']) && isset($_POST['selector']) && isset($_POST['corde'])){



$fabricant = htmlspecialchars($_POST['fabricant']);
$modele = htmlspecialchars($_POST['modele']);
$annee = htmlspecialchars($_POST['annee']);
$prix = htmlspecialchars($_POST['prix']);
$type= htmlspecialchars($_POST['selector']);
 
$nbCorde = htmlspecialchars($_POST['corde']);








        if(!empty($fabricant) && !empty($modele) && !empty($annee) && !empty($prix) && !empty($type) && !empty($nbCorde)){
        
    
                        //let's insert data in users table
                        $time = time();
                        $sql2 = $conn -> query( "INSERT INTO guitare_v2 (unique_id,fabricant_id,category_id,modele,annee,prix,nombre_corde)
                                                     VALUES ({$time},'{$fabricant}','{$type}', '{$modele}', '{$annee}','{$prix}', '{$nbCorde}')");

                        if($sql2){ //check if data inserted
                            $sql3 = $conn ->query( "SELECT * FROM guitare_v2 WHERE guitare_v2.unique_id = '{$time}'");
                            if($sql3->rowCount() > 0){
                                $row = $sql3->fetch(PDO::FETCH_ASSOC);
                               
                                echo " <div class='success-txt'>Enregistrement effectué avec succès!</div>";
                                

                            }

                        }else{
                            echo "<p class='error-txt'>Quelque chose cloche!</p>";
                        } 
                }else{  echo "<p class='error-txt'>Veuillez remplir tous les champs</p>"; }

}

                    

            
        
   


