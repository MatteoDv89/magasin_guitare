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
                            
                         $sql0 = $conn -> query("SELECT image_name FROM guitare_v2 WHERE guitare_v2.unique_id = '{$uid}'");
                         $row = $sql0->fetch(PDO::FETCH_ASSOC);
                         $img = $row['image_name'];

                          
                      

                          if(isset($_FILES['image']) && $_FILES['image']['name'] !== ""){
                               
                              
                           
                          
                            $img = !empty($_FILES['image']) ? ($_FILES['image']['name']) : $row['image_name'];

                            if($img !== "No available img."){

                                if($img !== $row['image_name']){

                                      if(move_uploaded_file($_FILES['image']['tmp_name'], "./images/".$_FILES['image']['name'])){
                                      
                                    }else{
                                        echo " <div class='error-txt'>Une erreur est survenue!</div>";
                                        die();
                                    }


                                }
                                    
                                  

                            }else{

                                  if(move_uploaded_file($_FILES['image']['tmp_name'], "./images/".$_FILES['image']['name'])){
                                      
                                    }else{
                                        echo " <div class='error-txt'>Une erreur est survenue!</div>";
                                        die();
                                    }

                            }
                        }
    
                        //let's insert data in users table
                        $sql2 = $conn -> query( "UPDATE `guitare_v2` SET `fabricant_id`='{$fabricant}',`modele`='{$modele}',`annee`='{$annee}',`prix`='{$prix}',`category_id`='{$type}',`nombre_corde`='{$nbCorde}', `image_name`='{$img}' WHERE unique_id = '{$uid}' ");

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

                    

            
        
   


