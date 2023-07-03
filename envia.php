<?php

// Variáveis de conexão com o banco de dados
$host = "localhost";
$database = "wikidev_bd";
$user = "postgres";
$password = "postgres";

// Inicia conexão com o banco de dados
$conexao = pg_connect("host=$host dbname=$database user=$user password=$password") 
    or die("Falha ao criar conexão com banco de dados: " . pg_last_error());

// Adiciona as mensagens ao banco de dados usando a variável $texto
$texto = pg_escape_string($_POST['messageInput']); // Evita problemas de segurança com injeção de SQL
$query = "INSERT INTO mensagem (mensagens) VALUES ('$texto')";
pg_query($conexao, $query) 
    or die("Erro encontrado ao executar a query: " . pg_last_error());

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <title>Wiki-Dev</title>
</head>

<body>
  <header>
    <!-- Barra de navegação -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">Wiki-Dev</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="wiki/teste.php">Inicio</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <main>
    <!-- Conteúdo principal -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <h1>Wiki-Dev - Crase Sigma</h1>
          <h4>Sua mensagem foi gravada com sucesso. Para enviar mais uma resolução ou visualizar a gravação volte para o inicio clicando no botão abaixo:</h4>
          <button type="button" class="btn btn-outline-primary btn-lg"><a href="teste.php">Volte Por Aqui!</a></button>
        </div>
        <div class="col-lg-4">
          <h3>Acesse o Site Oficial</h3>
          <ul>
            <li><a href="https://crasesigma.com.br">Crase Sigma</a></li>
          </ul>
        </div>
      </div>
  </main>

  <footer>
    <!-- Rodapé -->
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>&copy; 2023 Wiki-Dev. Todos os direitos reservados.</p>
        </div>
      </div>
    </div>
  </footer>
</body>

</html>



