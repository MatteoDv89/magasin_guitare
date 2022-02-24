<?php


session_start();

include_once "config.php";



if( isset($_POST['nom']) && isset($_POST['nationality']) && isset($_POST['created_at']) ){



$name = htmlspecialchars($_POST['nom']);
$nationality = htmlspecialchars($_POST['nationality']);
$date = htmlspecialchars($_POST['created_at']);









        if(!empty($name) && !empty($nationality) && !empty($date) ){
        
    
                         $sql = $conn ->query( "SELECT * FROM fabricant WHERE fabricant.nom = '{$name}'"); // check is fabricant doesn't exist yet
                            if($sql->rowCount() < 1){

                                        //let's insert data in users table                        
                                $sql2 = $conn -> query( "INSERT INTO fabricant (nom,nationality,created_at)
                                                            VALUES ( '{$name}','{$nationality}', '{$date}')");

                                if($sql2){ //check if data inserted
                                    $sql3 = $conn ->query( "SELECT * FROM fabricant WHERE fabricant.nom = '{$name}'");
                                    if($sql3->rowCount() > 0){
                                        $row = $sql3->fetch(PDO::FETCH_ASSOC);                                    
                                        echo " <div class='success-txt'>Enregistrement effectué avec succès!</div>";                              

                                    }

                        }else{
                            echo "<p class='error-txt'>Quelque chose cloche!</p>";
                        } 

                            }else{
                                 echo "<p class='error-txt'>Ce fabricant existe déjà</p>";
                            }

                      
                }else{  echo "<p class='error-txt'>Veuillez remplir tous les champs</p>"; }

}

                    

            
        
   


