<?php

$errors = [];

        $columns_require_movie = [
            'titre',
            'annee',
            'resume',
            'photo',
        ];

        function checkColumns($data, $require)
        {
            $error = [];

            foreach ($data as $column => $value) {
                if (in_array($column, $require) && empty($value)) {
                    $error[$column] = "Le champs $column est obligatoire";
                }
            }

            return $error;
        }

        function getValue($name, $repaint = false)
        {
            $output = isset($_POST[$name]) ? $_POST[$name] : null;

            if ($repaint) {
                $output = "'".$output."'";
            }

            return $output;
        }

        function getError($data, $name)
        {
            return isset($data[$name]) ? $data[$name] : null;
        }

        if (isset($_POST['add_movie'])) {
            $errors = checkColumns($_POST, $columns_require_movie);

            $insert_columns = [
                getValue('titre', true),
                getValue('annee'),
                getValue('genre'),
                getValue('resume', true),
                getValue('photo', true),
            ];

            $insert_columns = implode(',', $insert_columns);

            if (!$errors) {
                insertData(
                    $pdoDb,
                    'INSERT INTO Film (titre, annee, idGenre, resume, photo) VALUES ('.$insert_columns.')'
                );

                header('Location: movies.php?genre='.getValue('genre'));
            }
        }
