<?php


session_start();

include_once "config.php";

  

if( isset($_POST['nom']) && isset($_POST['nationality']) && isset($_POST['created_at']) && !empty($_POST['nom']) && !empty($_POST['nationality']) && !empty($_POST['created_at'])){



$name = htmlspecialchars($_POST['nom']);
$nationality = htmlspecialchars($_POST['nationality']);
$date = htmlspecialchars($_POST['created_at']);





  







        if(!empty($name) && !empty($nationality) && !empty($date) ){
 
    
               $sql = $conn ->query( "SELECT * FROM fabricant WHERE id_fabricant = '{$name}'"); // check is fabricant doesn't exist yet
                            if($sql->rowCount() > 0){

                                //let's insert data in users table
                                $sql2 = $conn -> query( "UPDATE `fabricant` SET `nationality`='{$nationality}',`created_at`='{$date}' WHERE id_fabricant = '{$name}' ");

                                if($sql2){ //check if data inserted
                                    $sql3 = $conn ->query( "SELECT * FROM fabricant WHERE id_fabricant = '{$name}'");
                                    if($sql3->rowCount() > 0){                                                   
                                        echo " <div class='success-txt'>Modification effectué avec succès!</div>";
                                    }

                                }else{
                                    echo "<p class='error-txt'>Aucun Fabricant dans le stock ne correspond a votre recherche</p>";
                                } 

                            }else{
                                     echo "<p class='error-txt'>Aucun Fabricant dans le stock ne correspond a votre recherche</p>";
                            }
                        
                }else{  echo "<p class='error-txt'>Veuillez remplir tous les champs</p>"; }

}

                    

            
        
   


