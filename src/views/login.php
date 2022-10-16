<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Festahub</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/login.css">
</head>
<body>
    <div id="login-container">
        <?php include(VIEW_PATH . '/template/erros.php') ?>
        <h1>FestaHub</h1>
        <form action="#" method="POST">
            <label for="apartamento">Apartamento</label>
            <input type="text" name="apartamento" id="apartamento" placeholder="Digite seu apartamento" autocomplete="off" value="<?= $apartamento ?? null ?>">
            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha" placeholder="Digite a sua senha">
            <a href="#" id="forgot-pass">Esqueceu a senha?</a>
            <input type="submit" value="Login" class="btn-login">
        </form>
        <div id="register-container">
            <p> Ainda não tem uma conta?</p>
            <a href="#">Registrar</a>
        </div>
    </div>
</body>
</html>