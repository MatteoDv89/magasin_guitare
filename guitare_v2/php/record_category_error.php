<?php


session_start();

include_once "config.php";



if(isset($_POST['type'])){



$type = htmlspecialchars($_POST['type']);


        if(!empty($type)){
           
                        //let's insert data in users table
                        
                        $sql2 = $conn -> query( "INSERT INTO `categorie`(categorie.genre) VALUES ('{$type}') ");

                        if($sql2){ //check if data inserted
                            $sql3 = $conn ->query( "SELECT * FROM categorie WHERE categorie.genre = '{$type}' ");
                            if($sql3->rowCount() > 0){
                                $row = $sql3->fetch(PDO::FETCH_ASSOC);
                                                           
                                echo " <div class='success-txt'>Enregistrement effectué avec succès!</div>";                              

                            }

                        }else{
                            echo "<p class='error-txt'>Quelque chose cloche!</p>";
                        } 
                }else{  echo "<p class='error-txt'>Veuillez remplir tous les champs</p>"; }

}

                    

            
        
   


