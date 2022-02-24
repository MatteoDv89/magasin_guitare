<?php


session_start();

include_once "config.php";

  

if( isset($_POST['fabricant']) && isset($_POST['modele']) && isset($_POST['annee']) && isset($_POST['prix']) && isset($_POST['selector']) && isset($_POST['corde'])){



$fabricant = htmlspecialchars($_POST['fabricant']);
$modele = htmlspecialchars($_POST['modele']);
$annee = htmlspecialchars($_POST['annee']);
$prix = htmlspecialchars($_POST['prix']);
$type = htmlspecialchars($_POST['selector']);
$nbCorde = htmlspecialchars($_POST['corde']);
$uid = htmlspecialchars($_POST['uid']);




  







        if(!empty($fabricant) && !empty($modele) && !empty($annee) && !empty($prix) && !empty($type) && !empty($nbCorde)){
 
    
                        //let's insert data in users table
                        $sql2 = $conn -> query( "UPDATE `guitare_v2` SET `fabricant_id`='{$fabricant}',`modele`='{$modele}',`annee`='{$annee}',`prix`='{$prix}',`category_id`='{$type}',`nombre_corde`='{$nbCorde}' WHERE unique_id = '{$uid}' ");

                        if($sql2){ //check if data inserted
                            $sql3 = $conn ->query( "SELECT * FROM guitare_v2 WHERE unique_id = '{$uid}'");
                            if($sql3->rowCount() > 0){
                              
                               
                                echo " <div class='success-txt'>Modification effectué avec succès!</div>";
                                

                            }

                        }else{
                            echo "<p class='error-txt'>Aucun article dans le stock ne correspond a votre recherche</p>";
                        } 
                }else{  echo "<p class='error-txt'>Veuillez remplir tous les champs</p>"; }

}

                    

            
        
   


