<?php
session_start();
$usuarios = ['admin' => password_hash('senha123', PASSWORD_DEFAULT)];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = $_POST['usuario'];
    $pass = $_POST['senha'];

    if (isset($usuarios[$user]) && password_verify($pass, $usuarios[$user])) {
        $_SESSION['logado'] = true;
        header('Location: protegido.php');
        exit;
    } else {
        $erro = "Usuário ou senha inválidos.";
    }
}
?>

<form method="POST">
    <label>Usuário: <input type="text" name="usuario"></label><br>
    <label>Senha: <input type="password" name="senha"></label><br>
    <button type="submit">Entrar</button>
</form>

<?php if (!empty($erro)) echo "<p>$erro</p>"; ?>
