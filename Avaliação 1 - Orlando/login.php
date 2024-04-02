<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    session_start();

    $username = filter_input(INPUT_POST, 'Username');
    $password = filter_input(INPUT_POST, 'Password');

    if (isset($_POST['Entrar']) && $_POST['Entrar'] == 'Entrar') {
        if ($username === 'portaria' && $password === '123') {
            $_SESSION['loggedin'] = TRUE;
            header("location: index.php");
            exit;
        } else {
            echo "Usuário ou senha inválidos!";
        }
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conectar-se</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css.css">
</head>

<body>
    <section>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <label class="form-label">Login</label>
            <input name="Username" class="form-control" aria-describedby="passwordHelpBlock">
            <label class="form-label">Password</label>
            <input name="Password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock">
            <br>
            <button name="Entrar" value="Entrar">
                Login
            </button>
        </form>
    </section>
</body>

</html>

