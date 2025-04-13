<?php include 'cabecalho.php'; include 'dados.php'; ?>

<h1>Acervo de Curiosidades Históricas</h1>

<?php foreach ($_SESSION['itens'] as $item): ?>
    <div>
        <h2><?= $item['titulo'] ?></h2>
        <img src="<?= $item['imagem'] ?>" width="200">
        <p><strong>Categoria:</strong> <?= $item['categoria'] ?></p>
        <a href="detalhes.php?id=<?= $item['id'] ?>">Ver mais</a>
    </div>
<?php endforeach; ?>

<?php include 'rodape.php'; ?>
