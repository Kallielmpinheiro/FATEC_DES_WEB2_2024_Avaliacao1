<?php include 'header.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = filter_input(INPUT_POST, 'Name');
    $ra = filter_input(INPUT_POST, 'RA');
    $placa = filter_input(INPUT_POST, 'Placa');
    $car = filter_input(INPUT_POST, 'Car');

    if ($name && $ra && $placa && $car) {
        $data = "$name|$ra|$placa|$car";
        $fileName = ($car === 'Carro') ? 'carros.txt' : (($car === 'Moto') ? 'motos.txt' : '');

        if (!empty($fileName)) {
            $formattedData = json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
            file_put_contents($fileName, $formattedData . PHP_EOL, FILE_APPEND);
            echo "Dados salvos em $fileName";
        } else {
            echo "Tipo de veículo inválido";
        }
    } else {
        echo "Campos vazios ou inválidos";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <section class="container mt-5">
        <h2>Formulário de Registro</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="mb-3">
                <label for="name" class="form-label">Nome Completo</label>
                <input type="text" class="form-control" id="name" name="Name" placeholder="Nome Completo" required>
            </div>
            <div class="mb-3">
                <label for="ra" class="form-label">RA</label>
                <input type="text" class="form-control" id="ra" name="RA" placeholder="RA" required>
            </div>
            <div class="mb-3">
                <label for="placa" class="form-label">Placa</label>
                <input type="text" class="form-control" id="placa" name="Placa" placeholder="Placa" required>
            </div>
            <div class="mb-3">
                <label for="car" class="form-label">Tipo de Veículo</label>
                <select class="form-select" id="car" name="Car" required>
                    <option selected disabled>Selecione o tipo de veículo</option>
                    <option value="Carro">Carro</option>
                    <option value="Moto">Moto</option>
                </select>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Enviar</button>
                <a href="login.php" class="btn btn-secondary">Sair</a>
                <a href="registro.php" class="btn btn-info">Registros</a>
            </div>
        </form>
    </section>
</body>
</html>
