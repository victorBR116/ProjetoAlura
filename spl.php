<?php 

$arquivoFilmes =  new SplFileObject('Filmes.csv');

while(! $arquivoFilmes->eof()){
    $linha = $arquivoFilmes->fgetcsv(';'); 
    
    echo($linha[0]) . PHP_EOL;
}

$date = new dateTime();
$date->setTimestamp($arquivoFilmes->getCTime());

echo $date->format('d/m/Y');