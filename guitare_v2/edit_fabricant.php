<?php include_once "php/header.php"  ?>


<div class="wrapper">
    <section class="form signup">
        <header>Modifier Fabricant</header>
        <form action='' method="post">

                <?php include "php/update_fabricant_error.php";
                     include "delete_fabricant.php";
                if(isset($_POST['product_unique_id'])){
                $sql = $conn -> query ("SELECT * FROM fabricant");
                $results = $sql-> fetchAll(PDO::FETCH_ASSOC);
            
                }
                
                ?> 
                 <div class="field input">
                    <label>Fabricant</label>
                    <?php if(isset($_POST['fabricant_name'])){ ?>
                        <select name="nom">
                            <?php foreach($results as $result){
                                if($result == $_POST['fabricant_name']){
                                    echo "<option value='".$_POST['id_fabricant']."' >".$result['nom']."</option>";
                                }else{
                                    echo "<option value='".$result['id_fabricant']."' >".$result['nom']."</option>";
                                }     
                            }
                            echo "</select>";                       
                      
                       
                    }else{
                        ?>
                        <select name="nom" >
                          <?php
                           $sq2 = $conn -> query ("SELECT * FROM fabricant");
                            $results = $sq2-> fetchAll(PDO::FETCH_ASSOC);
                            foreach($results as $result){
                                echo "<option name='nom' value='".$result['id_fabricant']."'>".$result['nom']."</option>";
                                
                            }
                          
                          ?>
                        </select>

                        <?php
                    }
                    ?>
                   
                </div>
            
             <div class="field input">
                    <label>Nationalité</label>
                     <?php if(isset($_POST['fabricant_name'])){
                        
                        echo "<input type='text' name='nationality' value=".$result['nationality']." >";
                    }else{
                        echo " <input type='text' name='nationality' >";
                    }
                    ?>
                </div>
                 <div class="field input">
                    <label>Date de creation</label>
                   
                     <?php if(isset($_POST['product_unique_id'])){
                        
                        echo "<input type='text' name='created_at' value=".$result['created_at']." >";
                    }else{
                        echo " <input type='text' name='created_at' >";
                    }
                    ?>
            
                </div>                
                                 
               
                 <div class="field button">                   
                    <input type="submit" value="Enregistrer">
                    <input type="submit" name='delete_value' value="Supprimer">
                </div>
           
        </form>
        <div class="link">Retourner a l'accueil <a href="index.php"><i class="fas fa-arrow-right"></i></a></div>
        
    </section>
</div>



    
</body>
</html>