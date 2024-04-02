<?php
    include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Carros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div class="list-group">
            <a href="registro.php" class="list-group-item list-group-item-action">Voltar</a>
            <a href="index.php" class="list-group-item list-group-item-action">Sair</a>
        </div>
    </div>

    <div class="container mt-3">
        <?php 
        if (file_exists("carros.txt")) {
            $lines = file("carros.txt");
            if ($lines !== false && count($lines) > 0) {
                echo "<ul class='list-group mt-3'>";
                foreach ($lines as $line) {
                    echo "<li class='list-group-item'>$line</li>";
                }
                echo "</ul>";
            } else {
                echo "<p class='mt-3'>Nenhum dado foi encontrado.</p>";
            }  
        }
        ?>
    </div>
</body>
</html>
