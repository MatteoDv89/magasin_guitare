<?php include_once "php/header.php"  ?>


<div class="wrapper">
    <section class="form signup">
        <header>Categorie</header>
        <form action='' method="post">

                <?php include "php/record_category_error.php"; ?> 
                 <div class="field input">
                    <label>Type de guitare</label>
                    <input type="text" name="type" required>
                </div>
            
            
                   
                 <div class="field button">                   
                    <input type="submit" value="Enregistrer">
                </div>
           
        </form>
        <div class="link">Modifier une categorie<a href="edit_category.php"><i class="fas fa-edit"></i></a></div>
        <div class="link">Retourner a l'accueil <a href="index.php"><i class="fas fa-arrow-right"></i></a></div>
    </section>
</div>



    
</body>
</html>