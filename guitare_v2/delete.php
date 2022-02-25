<?php include_once "php/header.php"  ?>

   <?php 
                include "php/config.php";
                if(isset($_GET['id_guitare'])){
                   $sql0 = $conn -> query("SELECT image_name FROM guitare_v2 WHERE guitare_v2.unique_id = '{$_GET['id_guitare']}'");
                  $result = $sql0->fetch(PDO::FETCH_ASSOC);
                   unlink("./images/".$result['image_name']);
                $sql = $conn -> query ("DELETE FROM guitare_v2 WHERE guitare_v2.unique_id = '{$_GET['id_guitare']}'");
                header('location:index.php');
            
                } 
            