<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
    <script src="javascript/menu.js" defer></script>
    <title>Magasin guitare</title>
</head>
<body>

<div class="navbar">
    <a href="index.php">
    <p>Base de donnée guitare</p>
    </a>
    <div class="add_something">
        <p>Ajouter</p>
        <div class="bouton_ajout">

            <form action="add_guitare.php">        
            <button>Ajouter une guitare</button>
            </form>
            <form action="add_category.php">        
                <button>Ajouter une categorie</button>
            </form>
            <form action="add_fabricant.php">        
                <button>Ajouter un fabricant</button>
            </form>
        </div>
    </div>
        <div class="edit_something">
            <p>Editer</p>
            <div class="edit_ajout">

                <form action="edit.php">        
                <button>Editer une guitare</button>
                </form>
                <form action="edit_category.php">        
                    <button>Editer une categorie</button>
                </form>
                <form action="edit_fabricant.php">        
                    <button>Editer un fabricant</button>
                </form>
            </div>
        </div>

       


    </div>
     
   
</div>
