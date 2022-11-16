<?php

$filmes = fopen('zip://arquivos.zip', 'r');
stream_copy_to_stream($cursos, STDOUT);