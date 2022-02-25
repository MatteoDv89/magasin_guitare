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
        

                        
                        if(isset($_FILES['image'])){
                          
                            $img = !empty($_FILES['image']) ? ($_FILES['image']['name']) : "No available img.";

                            if($img !== "No available img."){
                                    
                                    if(move_uploaded_file($_FILES['image']['tmp_name'], "./images/".$_FILES['image']['name'])){
                                      
                                    }else{
                                        echo " <div class='error-txt'>Une erreur est survenue!</div>";
                                        die();
                                    }

                            }
                        }


    
                        //let's insert data in users table
                        $time = time();
                        $sql2 = $conn -> query( "INSERT INTO guitare_v2 (unique_id,fabricant_id,category_id,modele,annee,prix,nombre_corde,image_name)
                                                     VALUES ({$time},'{$fabricant}','{$type}', '{$modele}', '{$annee}','{$prix}', '{$nbCorde}', '{$img}')");

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

                    

            
        
   


