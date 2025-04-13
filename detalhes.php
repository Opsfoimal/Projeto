<?php
include 'cabecalho.php';
include 'dados.php';
include 'funcoes.php';

$id = $_GET['id'] ?? null;
$item = buscarItemPorId($id);

if ($item):
?>
    <h2><?= $item['titulo'] ?></h2>
    <img src="<?= $item['imagem'] ?>" width="300">
    <p><strong>Categoria:</strong> <?= $item['categoria'] ?></p>
    <p><?= $item['descricao'] ?></p>
<?php else: ?>
    <p>Item não encontrado.</p>
<?php endif;

include 'rodape.php';
