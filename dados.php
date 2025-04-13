<?php
session_start();

if (!isset($_SESSION['itens'])) {
    $_SESSION['itens'] = [
        [
            'id' => 1,
            'titulo' => 'A Biblioteca de Alexandria',
            'categoria' => 'Antiguidade',
            'imagem' => 'img/grupo.jpg',
            'descricao' => 'Uma das maiores e mais significativas bibliotecas do mundo antigo.'
        ],
        [
            'id' => 2,
            'titulo' => 'O mistério do Manuscrito Voynich',
            'categoria' => 'Mistério',
            'imagem' => 'img/Sonic.jpg',
            'descricao' => 'Um livro ilustrado, escrito em um idioma desconhecido, datado do século XV.'
        ]
        // Adicione mais curiosidades...
    ];
}
