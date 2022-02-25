<?php include_once "php/header.php"  ?>


<div class="wrapper">
    <section class="form signup">
        <header>Ajouter guitare</header>
        <form action='' enctype='multipart/form-data' method="post">

                <?php include "php/record_error.php"; ?> 
                 <div class="field input">
                    <label>Fabricant</label>
                    <select name="fabricant" id="fabricant">
                    <?php include "php/config.php";
                    $sql = $conn -> query ("SELECT * FROM fabricant");
                    $results = $sql -> fetchAll(PDO::FETCH_ASSOC);

                    foreach($results as $result){
                        ?>
                        <option value="<?php echo $result['id_fabricant']; ?>"><?php echo $result['nom'];?></option>
                        <?php
                    }
                    ?>
                 </select>
                    
                </div>
            
             <div class="field input">
                    <label>Modèle</label>
                    <input type="text" name="modele"  required>
                </div>
                 <div class="field input">
                    <label>Annee de fabrication</label>
                    <input type="text" name="annee" required>               
                    
            
                </div>
                 <div class="field input">
                    <label>Prix</label>
                    <input type="number" name="prix" required>
                </div>
                <div class="field input ">
                 <label for="selector">Type</label>
                <select name="selector" id="selector">
                 <?php include "php/config.php";
                 
                    $sql = $conn -> query ("SELECT * FROM categorie");
                    $results = $sql -> fetchAll(PDO::FETCH_ASSOC);

                    foreach($results as $result){
                        ?>
                        <option value="<?php echo $result['id']; ?>"><?php echo $result['genre'];?></option>
                        <?php
                    }
                    ?>
                 </select>
                </div>
                <div class="field input">
                    <label>Nombre de corde</label>
                    <input type="number" name="corde" required>
                </div>
                 <div class="field input">
                    <label>Choissisez une image</label>
                    <input type="file" name="image">
                </div>

                   
                 <div class="field button">                   
                    <input type="submit" value="Enregistrer">
                </div>
           
        </form>
        <div class="link">Modifier une guitare <a href="edit.php"><i class="fas fa-edit"></i></a></div>
        <div class="link">Retourner a l'accueil <a href="index.php"><i class="fas fa-arrow-right"></i></a></div>
    </section>
</div>



    
</body>
</html>