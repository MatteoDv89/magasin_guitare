<?php include_once "php/header.php"  ?>

   <?php 
                include "php/config.php";
                if(isset($_GET['id_guitare'])){
                $sql = $conn -> query ("DELETE FROM guitare_v2 WHERE guitare_v2.unique_id = '{$_GET['id_guitare']}'");
                header('location:index.php');
            
                } 
            