<?php include_once "php/header.php"  ?>


<div class="wrapper">
    <section class="form signup">
        <header>Fabricant</header>
        <form action='' method="post">

                <?php include "php/record_fabricant_error.php"; ?> 
                 <div class="field input">
                    <label>Nom du fabricant</label>
                    <input type="text" name="nom" required>
                </div>
            
             <div class="field input">
                    <label>Nationalité</label>
                    <input type="text" name="nationality"  required>
                </div>
                 <div class="field input">
                    <label>Date de creation</label>
                    <input type="number" name="created_at"  required>
            
                </div>               
                   
                 <div class="field button">                   
                    <input type="submit" value="Enregistrer">
                </div>
           
        </form>
        <div class="link">Modifier un fabricant <a href="edit_fabricant.php"><i class="fas fa-edit"></i></a></div>
        <div class="link">Retourner a l'accueil <a href="index.php"><i class="fas fa-arrow-right"></i></a></div>
    </section>
</div>



    
</body>
</html>