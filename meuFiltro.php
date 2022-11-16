<?php
class meuFiltro extends php_user_filter
{
    public $steam;
    public function onCreate(): bool
    {
       $this->stream = fopen('php://temp', 'w+');
       return $this->stream !== false;
    }

    public function filter($in, $out, &$consumed, bool $closing)
    {
      $saida = '';
      while($bucket = stream_bucket_make_writeable($in)){
        $linhas = explode("\n", $bucket->data);

        foreach ($linhas as $linha){
            if (stripos($linha, '2h') !== false ){
                $saida .= "$linha \n"; 
                $consumed += strlen($linha);    
            }
        }
      }

      $out = $saida;
      $bucketSaida = stream_bucket_new($this->stream, $saida);
      stream_bucket_append($out, $bucketSaida);

      return PSFS_PASS_ON;
    }
}