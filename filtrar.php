<?php include 'cabecalho.php'; include 'dados.php'; include 'funcoes.php'; ?>

<form method="GET">
    <label>Filtrar por categoria:
        <input type="text" name="categoria">
    </label>
    <button type="submit">Filtrar</button>
</form>

<?php
if (isset($_GET['categoria'])) {
    $filtro = $_GET['categoria'];
    $itensFiltrados = filtrarPorCategoria($_SESSION['itens'], $filtro);

    foreach ($itensFiltrados as $item): ?>
        <div>
            <h2><?= $item['titulo'] ?></h2>
            <img src="<?= $item['imagem'] ?>" width="200">
            <a href="detalhes.php?id=<?= $item['id'] ?>">Ver mais</a>
        </div>
    <?php endforeach;

    if (empty($itensFiltrados)) echo "<p>Nenhum item encontrado.</p>";
}

include 'rodape.php';
?>
