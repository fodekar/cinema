<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="medias/css/bootstrap.min.css">
    <link rel="stylesheet" href="medias/css/design.css">
    <title>Catégorie</title>
</head>
<body>
    <?php
        //Fichier de connexion
        include 'data/ConnectDb.php';

        //Requete Sql
        $sql = 'select * from Genre order';
        $genre = isset($_GET['genre']) ? $_GET['genre'] : 5;

        //Exécute une requete SQL
        $resultat = $pdoDb->query($sql);
    ?>
    <?php
        include 'container/header.php';
    ?>
    <div id="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-3">
                    <?php
                        include 'container/menu.php';
                    ?> 
                </div>
                <div class="col-9">
                    <div class="row">
                    <?php
                        //$idg = $_POST['categ'];
                        $sql = "select * from Film where idGenre = $genre order by idfilm desc";
                        $resultat = $pdoDb->query($sql);

                        foreach ($resultat as $ligne) {
                            echo "<div class='col-xs-12 col-sm-3 col-md-3 col-lg-2'>";
                            echo "<div class='card'>";
                            echo "<div class='card-body'>";
                            echo "<h5 class='card-title'>".$ligne['titre'].'</h5>';
                            echo "<img class='card-img-top' src='medias/images/".$ligne['photo']."'>";
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
                        }
                    ?>
                    </div>
                </div> 
            </div>
            </form>
            <br />
        </div>
    </div>
    <?php
        include 'container/footer.php';
    ?>
</body>
</html>