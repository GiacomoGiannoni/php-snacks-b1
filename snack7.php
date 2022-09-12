<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 7</title>
</head>
<body>
<?php
    $classe = [
        $alunno1 = [
            "nome" => "Giacomo",
            "cognome" => "Giannoni",
            "voti" => [
                8,
                7,
                7,
                6,
                9,
                6,
                9,
                10,
                7,
                8
            ], 
        ],
        $alunno2 = [
            "nome" => "Amerigo",
            "cognome" => "Vespucci",
            "voti" => [
                7,
                2,
                5,
                8,
                9,
                6,
                4,
                8,
                7,
                2
            ], 
        ],
        $alunno3 = [
            "nome" => "Pippa",
            "cognome" => "Bauda",
            "voti" => [
                5,
                4,
                10,
                10,
                10,
                7,
                7,
                9,
                4,
                6
            ], 
        ],
    ]
    ?>
    <ul>
        <?php
            for($i=0; $i<count($classe); $i++){
                $alunno = $classe[$i];
                echo "<li><strong>Nome:</strong> ". $alunno["nome"]. " <strong>Cognome:</strong> ". $alunno["cognome"]. "</li>";
                $mediavoti = ceil(array_sum($alunno["voti"]) / count($alunno["voti"]) * 10) / 10;
                echo "<li><strong>Voto in Pagella:</strong> ". $mediavoti ."</li>";
            }
        ?>
    </ul>
</body>
</html>