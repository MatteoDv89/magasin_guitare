<?php include_once "php/header.php"  ?>

   <?php 
                include "php/config.php";
                if(isset($_POST['delete_value'])){
                   $id = $_POST['nom'];

                  try{
                     
                     $sql = $conn -> query ("DELETE  FROM fabricant WHERE id_fabricant  = '{$id}'");
                     if($sql){
                        echo "<p class='success-txt'> Suppression effectué avec succes! </p>";

                     }

                  }catch(PDOException $e){

                     
                     
                     if($e->getCode() == 23000){
                        $sql2 = $conn -> query("SELECT * FROM guitare_v2 WHERE fabricant_id = {$id} ");
                        $row = $sql2 ->fetchAll(PDO::FETCH_ASSOC);

                        echo "<p class='error-txt'>Impossible de supprimer la categorie: Cette action entrainerait la suppression irréversible de ". $sql2->rowCount()." articles </p>";

                     }
                  }

                  
            
                } 
                
            