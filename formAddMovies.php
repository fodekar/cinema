<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <?php
        //Fichier de connexion
        include 'data/ConnectDb.php';

        //service pour le formulaire
        include 'service/formServices.php';
    ?>
    
    <form method="POST">

        <h4>enregistrement d'un nouveau film</h4>

        <div>
            Titre<span>*</span> :</br>
            <input type="text" name="titre" value="<?php echo getValue('titre'); ?>">
            <p class="error"><?php echo getError($errors, 'titre'); ?></p>
        </div>

        <div>
            Année<span>*</span> :</br>
            <input type="text" name="annee" value="<?php echo getValue('annee'); ?>">
            <p class="error"><?php echo getError($errors, 'annee'); ?></p>
        </div>

        <p>
            Genre </br>
            <select name="genre">
                <?php

                    foreach (getResult($pdoDb, 'select * from Genre') as $ligne) {
                        $id = $ligne[0];
                        $libelle = $ligne[1];

                        echo "<option value=$id>$libelle</option>";
                    }
                ?>
            </select>
        </p>
        
        <div>
            Résumé<span>*</span> :</br>
            <textarea name="resume"  cols="40" rows="6" placeholder='Veuillez saisir votre résumé ici'></textarea>
            <p class="error"><?php echo getError($errors, 'resume'); ?></p>
        </div>

        <div>
            photo :</br>
            <input type="file" name="photo" value="Parcourir">
            <p class="error"><?php echo getError($errors, 'annee'); ?></p>
        </div>

        <p>
            <input type="submit" name="add_movie"  value="Ajouter">
            <input type="reset"  value="Annuler">
        </p>
    </form>
</body>
</html>