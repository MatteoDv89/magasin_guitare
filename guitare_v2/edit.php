<?php include_once "php/header.php"  ?>


<div class="wrapper">
    <section class="form signup">
        <header>Modifier guitare</header>
        <form action='' method="post">

                <?php include "php/update_error.php";
                if(isset($_POST['product_unique_id'])){              
                  $sql = $conn-> query("SELECT *, fabricant.nom as nom_fabricant, categorie.genre as genre FROM guitare_v2
                            INNER JOIN categorie ON categorie.id = guitare_v2.category_id
                            INNER JOIN fabricant ON fabricant.id_fabricant = guitare_v2.fabricant_id
                            AND  guitare_v2.unique_id = '{$_POST['product_unique_id']}' ");
                             
                 $row = $sql-> fetch(PDO::FETCH_ASSOC);
            
                }
                
                ?> 
                 <div class="field input">
                    <label>Fabricant</label>
                   

                    <?php if(isset($_POST['product_unique_id'])){
                        
                         echo "<select name='fabricant' id='fabricant'>";
                         include "php/config.php";
                        
                            $sql3 = $conn -> query ("SELECT * , fabricant.nom as nom_fabricant, categorie.genre as genre FROM guitare_v2
                            INNER JOIN categorie ON categorie.id = guitare_v2.category_id
                            INNER JOIN fabricant ON fabricant.id_fabricant = guitare_v2.fabricant_id
                            AND guitare_v2.unique_id = '{$_POST['product_unique_id']}' ");
                            $results = $sql3 -> fetchAll(PDO::FETCH_ASSOC);


                            foreach($results as $result){

                                if($_POST['fabricant'] == $result['nom_fabricant']){
                                    echo "<option value='".$result['id_fabricant']."' selected >".$result['nom_fabricant']."</option>";
                                }
                                else{
                                ?>
                                <option value="<?php echo $result['id_fabricant']; ?>"><?php echo $result['nom_fabricant'];?></option>
                                <?php

                                }
                            }
                            
                        echo "</select>";
                        echo "<input type='text' name='uid' value='".$_POST['product_unique_id']."' hidden>";
                
                        

                    }else{
                        
                        echo "<select name='fabricant' id='fabricant'>";
                         include "php/config.php";
                        
                            $sql4 = $conn -> query ("SELECT * FROM fabricant");
                            $results = $sql4 -> fetchAll(PDO::FETCH_ASSOC);

                            foreach($results as $result){
                                ?>
                                <option value="<?php echo $result['id_fabricant']; ?>"><?php echo $result['nom'];?></option>
                                <?php
                            };
                            
                        echo "</select>";
                
                    };
                    ?>
                   
                </div>
            
             <div class="field input">
                    <label>Modèle</label>
                     <?php if(isset($_POST['product_unique_id'])){
                        
                        echo "<input type='text' name='modele' value=".$row['modele']." >";
                    }else{
                        echo " <input type='text' name='modele' required>";
                    }
                    ?>
                </div>
                 <div class="field input">
                    <label>Annee de fabrication</label>
                   
                     <?php if(isset($_POST['product_unique_id'])){
                        
                        echo "<input type='text' name='annee' value=".$row['annee']." >";
                    }else{
                        echo " <input type='text' name='annee' required>";
                    }
                    ?>
    
                </div>
                 <div class="field input">
                    <label>Prix</label>
                     <?php if(isset($_POST['product_unique_id'])){
                        
                        echo "<input type='text' name='prix' value=".$row['prix']." >";
                    }else{
                        echo " <input type='text' name='prix' required>";
                    }
                    ?>
                </div>
                 <div class="field input">
                    <label>Nombre de corde</label>
                     <?php if(isset($_POST['product_unique_id'])){
                        
                        echo "<input type='text' name='corde' value=".$row['nombre_corde']." >";
                    }else{
                        echo " <input type='text' name='corde' required>";
                    }
                    ?>
                </div>
                <div class="field input ">
                 <label for="selector">Type</label>
                  <?php if(isset($_POST['product_unique_id'])){
                        
                         echo "<select name='selector' id='selector'>";
                         include "php/config.php";
                        
                            $sql1 = $conn -> query ("SELECT * FROM categorie");
                            $results = $sql1 -> fetchAll(PDO::FETCH_ASSOC);

                            foreach($results as $result){
                                if($_POST['genre'] == $result){
                                    echo "<option value='".$_POST['genre']."' selected >".$result."</option>";
                                }
                                ?>
                                <option value="<?php echo $result['id']; ?>"><?php echo $result['genre'];?></option>
                                <?php
                            }
                            
                        echo "</select>";
                
                        

                    }else{
                        
                        echo "<select name='selector' id='selector'>";
                         include "php/config.php";
                        
                            $sql2 = $conn -> query ("SELECT * FROM categorie");
                            $results = $sql2 -> fetchAll(PDO::FETCH_ASSOC);

                            foreach($results as $result){
                                ?>
                                <option value="<?php echo $result['id']; ?>"><?php echo $result['genre'];?></option>
                                <?php
                            };
                            
                        echo "</select>";
                
                    };
                    ?>
                    
                 
                </div>
               
                   
                 <div class="field button">                   
                    <input type="submit" value="Enregistrer">
                </div>
           
        </form>
        <div class="link">Retourner a l'accueil <a href="index.php"><i class="fas fa-arrow-right"></i></a></div>
        
    </section>
</div>



    
</body>
</html>