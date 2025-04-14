<?php
session_start();

if (!isset($_SESSION['itens'])) {
    $_SESSION['itens'] = [
        [
            'id' => 1,
            'titulo' => 'A Biblioteca de Alexandria',
            'imagem' =>'img/alexandre.jpeg', 
            'categoria'=> 'Antiguidade',
            'descricao'=> 'Uma das bibliotecas mais famosas da antiguidade.'
        ],
        [
            'id' => 2,
            'titulo'=>'O mistério do Manuscrito Voynich',
            'categoria'=> 'Mistério',
            'imagem'=>'img/Manuscrito.jpg',
            'descricao'=> 'Um livro ilustrado, escrito em um idioma desconhecido, datado do século XV.'
        ]
    ];
}
