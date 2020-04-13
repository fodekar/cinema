<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Base de données</title>
</head>
<body>
    <?php

    include 'env.php';
    //Connexion à la base de données PDO

    $dsn = 'mysql:dbname='.DB_NAME.';host='.DB_HOST;
    $user = DB_USER;
    $pwd = DB_PWD;

    try {
        $pdoDb = new PDO($dsn, $user, $pwd, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
        //echo 'Connexion OK !';
    } catch (PDOException $e) {
        echo 'Connexion échouée :'.$e->getMessage();
    }

    function getResult($pdo, $request)
    {
        $sth = $pdo->prepare($request);
        $sth->execute();

        $result = $sth->fetchAll();

        return $result;
    }

    function insertData($pdo, $sql)
    {
        $output = true;

        try {
            $resultat = $pdo->exec($sql);

            var_dump($result, 'ROW');
        } catch (Exception $e) {
            $output = false;
        }

        return $output;
    }
    ?>
</body>
</html>
