<?php
    include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Veículos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<div class="container mt-5">
    <div class="list-group">
        <a href="registro.php" class="list-group-item list-group-item-action active" aria-current="true">Todos</a>
        <a href="Motos.php" class="list-group-item list-group-item-action">Motos</a>
        <a href="Carros.php" class="list-group-item list-group-item-action">Carros</a>
        <a href="index.php" class="list-group-item list-group-item-action">Voltar</a>
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
            echo "<p class='mt-3'>Nenhum dado de carros foi encontrado.</p>";
        }
    } else {
        echo "<p class='mt-3'>O arquivo de dados de carros não existe.</p>";
    }
    ?>
</div>

<div class="container mt-3">
    <?php 
    if (file_exists("motos.txt")) {
        $lines = file("motos.txt");
        if ($lines !== false && count($lines) > 0) {
            echo "<ul class='list-group mt-3'>";
            foreach ($lines as $line) {
                echo "<li class='list-group-item'>$line</li>";
            }
            echo "</ul>";
        } else {
            echo "<p class='mt-3'>Nenhum dado de motos foi encontrado.</p>";
        }
    } else {
        echo "<p class='mt-3'>O arquivo de dados de motos não existe.</p>";
    }
    ?>
</div>

</body>
</html>
