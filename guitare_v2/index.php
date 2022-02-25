<?php include_once "php/header.php"?>


<table>
    <thead>
        <tr>
            <td>Apercu</td>
            <td>Fabricant</td>
            <td>Modele</td>
            <td>Annee</td>
            <td>Prix</td>
            <td>Categorie</td>
            <td>nb corde</td>
            <td>Modifier</td>
            <td>Supprimer</td>

        </tr>
    </thead>
    <tbody>

    <?php include "php/config.php"; 

    $sql = $conn-> query("SELECT *, fabricant.nom as nom_fabricant, categorie.genre as genre FROM guitare_v2
                            INNER JOIN categorie ON categorie.id = guitare_v2.category_id
                            INNER JOIN fabricant ON fabricant.id_fabricant = guitare_v2.fabricant_id ");
    $results = $sql->fetchAll(PDO::FETCH_ASSOC);

   foreach($results as $result){

    ?>
    <tr>
        
    <tr>
        <td>
            <?php if($result['image_name'] !== "No available img."){
                echo "<img class='img_accueil' src='./images/".$result['image_name']."' alt='apercu guitare'/>";
                }else{
                    echo  $result['image_name'];
                }
            ?>
        </td>
        <td>
            <?php echo $result['nom_fabricant']; ?>
        </td>
         <td>
           <?php echo $result['modele']; ?>
        </td>
         <td>
            <?php echo $result['annee']; ?>
        </td>
         <td>
            <?php echo $result['prix']; ?>
        </td>
         <td>
            <?php echo $result['genre']; ?>
        </td>
         <td>
            <?php echo $result['nombre_corde']; ?>
        </td>
        

        <td><form action="edit.php" method='post' class='edit'>
                <input type="text" name="product_unique_id" value=<?php echo $result['unique_id']; ?> hidden>            
                <input type="text" name="fabricant" value=<?php echo $result['nom_fabricant']; ?> hidden>            
                
                
                <button><i class="fas fa-edit"></i></button>
            </form></td>
           
            <td>
                <a href="delete.php?id_guitare=<?php echo $result['unique_id'];?>" class="link_delete"><i class="fas fa-trash"></i></a>
            </td>

          
            
    </tr>

    <?php
       
   }
    ?>
    





    


    

<script src="javascript/delete.js"></script>

    </tbody>
</table>

