<?php 

$arquivosFilmes = fopen('filmes.txt', 'r');

stream_filter_append($arquivosFilmes, 'string.toupper');

echo fread($arquivosFilmes, filesize('filmes.txt'));