<?php 
require_once 'E:\Estudos\Alura\Projeto Alura\meuFiltro.php';
$arquivosFilmes = fopen('filmes.txt', 'r');


stream_filter_register('2hs', meuFiltro::class);
stream_filter_append($arquivosFilmes, '2hs');

echo fread($arquivosFilmes, filesize('filmes.txt'));