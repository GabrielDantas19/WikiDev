<?php
  $host = "localhost";
  $database = "wikidev_bd";
  $user = "postgres";
  $password = "postgres";
  
  // Inicia conexão com o banco de dados
  $conexao = pg_connect("host=$host dbname=$database user=$user password=$password") 
      or die("Falha ao criar conexão com banco de dados: " . pg_last_error());
      

    //RECUPERA MENSAGENS DO BANCO DE DADOS:
    $query = "SELECT * FROM mensagem";
    $result = pg_query($conexao, $query);
    if (!$result) {
        die("Erro ao executar a consulta: " . pg_last_error());
    }


    $pesquisar = $_POST['pesquisar'];
    $procurar = "SELECT * FROM mensagem WHERE mensagens LIKE '%$pesquisar%'";
    $result = pg_query($conexao,$procurar);
    if (!$result) {
        die("ERRO NA PROCURA: " . pg_last_error());
    }




?>