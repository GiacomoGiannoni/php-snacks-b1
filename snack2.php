<?php
    $nome = $_GET['nome'];
    $email = $_GET['email'];
    $age = $_GET['age'];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>
</head>
<body>
    <p>
        <?php
        if (strlen($nome) > 3 && strops($email, '@') && strops($email, '.') && is_numeric($age)) {
            echo 'Accesso riuscito';
        } else {
            echo 'Accesso negato';
        }
        ?>
    </p>   
</body>
</html>