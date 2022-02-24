<?php include_once "php/header.php"  ?>


<div class="wrapper">
    <section class="form signup">
        <header>Modifier categorie</header>
        <form action='' method="post">

                <?php include "php/update_category_error.php";
                        include "delete_category.php";
               
                
                ?> 
                 <div class="field input">
                    <label>Type de guitare</label>
                   
                    
                        <select name="genre" >
                          <?php
                           $sq2 = $conn -> query ("SELECT categorie.genre,categorie.id as cat_id FROM categorie");
                            $results = $sq2-> fetchAll(PDO::FETCH_ASSOC);
                            foreach($results as $result){
                                echo "<option value='".$result['cat_id']."'>".$result['genre']."</option>";
                                
                            }
                          
                          ?>
                        </select>

                    
                   
                </div>
                <div class="field input">
                    <label>Nouveau type de guitare</label>                  
                    <input type='text' name='new' >   
                       
                   
                </div>
            
            
                                 
               
                 <div class="field button">                   
                    <input type="submit" name="update" value="Enregistrer">
                    <input type="submit" name='delete_value' value="Supprimer">
                    
                    
                    
                </div>
           
        </form>

        
        <div class="link">Retourner a l'accueil <a href="index.php"><i class="fas fa-arrow-right"></i></a></div>
        
    </section>
</div>



    
</body>
</html>