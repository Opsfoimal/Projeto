<?php
function filtrarPorCategoria($itens, $categoria) {
    return array_filter($itens, function($item) use ($categoria) {
        return $item['categoria'] === $categoria;
    });
}

function buscarItemPorId($id) {
    foreach ($_SESSION['itens'] as $item) {
        if ($item['id'] == $id) return $item;
    }
    return null;
}
