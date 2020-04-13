<menu>
    <h4><a href="index.php">Les films</a></h4>
    <ul name="categ">
            <?php
            //Affichage du résultat

            foreach (getResult($pdoDb, 'select * from Genre') as $ligne) {
                // echo "<option value='" . $ligne['id'] . "'>" . $ligne['nomGenre'] . "</option>";
                echo "<li><a href='movies.php?genre=".$ligne['id']."'>".$ligne['nomGenre'].'</a></li>';
            }
            ?>
    </ul>
</menu>
  