<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="medias/css/bootstrap.min.css">
    <link rel="stylesheet" href="medias/css/design.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Film</title>
</head>
<body>
    <?php
        //Fichier de connexion
        include 'data/ConnectDb.php';

        //Requete Sql
        $sql = 'select * from Genre';

        //Exécute une requete SQL
        $resultat = $pdoDb->query($sql);
    ?>
    <?php
        include 'container/header.php';
    ?>
    <div id="wrapper">
        <?php
            include 'container/menu.php';
        ?>
    </div>
    <?php
        include 'container/footer.php';
    ?>
    
</body>
</html>