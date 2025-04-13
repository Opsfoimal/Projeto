<?php
include 'auth.php';
include 'dados.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $novoItem = [
        'id' => count($_SESSION['itens']) + 1,
        'titulo' => $_POST['titulo'],
        'categoria' => $_POST['categoria'],
        'imagem' => $_POST['imagem'],
        'descricao' => $_POST['descricao']
    ];
    $_SESSION['itens'][] = $novoItem;
    echo "<p>Item cadastrado com sucesso!</p>";
}
?>

<form method="POST">
    <input name="titulo" placeholder="Título" required><br>
    <input name="categoria" placeholder="Categoria" required><br>
    <input name="imagem" placeholder="URL da Imagem" required><br>
    <textarea name="descricao" placeholder="Descrição" required></textarea><br>
    <button type="submit">Cadastrar Curiosidade</button>
</form>

<a href="index.php">Voltar ao catálogo</a>
