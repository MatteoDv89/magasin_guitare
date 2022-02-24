<?php


session_start();

include_once "config.php";

  

if( isset($_POST['genre']) && isset($_POST['new']) && isset($_POST['update'])){



$type = htmlspecialchars($_POST['genre']);
$new = htmlspecialchars($_POST['new']);






  







        if(!empty($type) && !empty($new) ){
 
    
               $sql = $conn ->query( "SELECT * FROM categorie WHERE categorie.id = '{$type}'"); // check is fabricant doesn't exist yet
                            if($sql->rowCount() > 0){

                                //let's insert data in users table
                                $sql2 = $conn -> query( "UPDATE `categorie` SET `genre`='{$new}' WHERE categorie.id = '{$type}' ");

                                if($sql2){ //check if data inserted
                                    $sql3 = $conn ->query( "SELECT * FROM categorie WHERE categorie.genre = '{$new}'");
                                    if($sql3->rowCount() > 0){                                                   
                                        echo " <div class='success-txt'>Modification effectué avec succès!</div>";
                                    }

                                }else{
                                    echo "<p class='error-txt'>Cette categorie n'existe pas, impossible de modifier</p>";
                                } 

                            }else{
                                     echo "<p class='error-txt'>Cette categorie n'existe pas, impossible de modifier</p>";
                            }
                        
                }else{  echo "<p class='error-txt'>Veuillez remplir tous les champs</p>"; }

}

                    

            
        
   


