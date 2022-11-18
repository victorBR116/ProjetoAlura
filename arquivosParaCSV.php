<?php 

$filmes = file('Filmes.txt');
$outrosFilmes = file('FilmesDeAcao.txt');

$arquivoCSV = fopen('Filmes.csv', 'w');

foreach($filmes as $filmees){
    $linha = [trim(utf8_decode($filmees)), 'Sim']; 
     
    fputcsv($arquivoCSV, $linha, ';');
}

foreach($outrosFilmes as $filmees){
    $linha = [trim(utf8_decode($filmees)), 'Não'];

    fputcsv($arquivoCSV, $linha, ';');
}

fclose($arquivoCSV);