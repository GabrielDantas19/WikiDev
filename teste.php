<?php
include("conexao.php")
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
            <a class="nav-link" href="/wiki/teste.php">Inicio</a>
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
          <form method="POST" action="envia.php" id="form-mensagem">
            <div class="form-group">
              <label for="messageInput" name="messageInput" >Escreva seu problema e resolução:</label>
              <textarea class="form-control" id="messageInput" name="messageInput" rows="4" placeholder="Digite sobre seu problema/resolução"></textarea>
            </div>
            <button type="submit" class="btn btn-success">Salvar Mensagem</button>
              <label for="fotos">Imagem</label>
              <input type="file" class="form-control" rows="1" name="fotos">

          </form>

          <form method="POST" action="teste.php">
            <div class="form-group">
              <label for="pesquisar">Palavra-chave:</label>
              <textarea class="form-control" id="pesquisar" name="pesquisar" rows="1" placeholder="Digite uma palavra-chave"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Procurar</button>
            <button type="submit" class="btn btn-outline-light"><a href="teste.php">Voltar</a></button>
          </form>
        </div>
        <div class="col-lg-4">
          <h3>Acesse o Site Oficial</h3>
          <ul>
            <li><a href="https://crasesigma.com.br">Crase Sigma</a></li>
          </ul>
          <h4>Objetivo:</h4>
          <ul>
            <li>Criado no intuito de ajudar e facilitar na resolução de problemas que apareçam ao longo do projeto. 
              Caso resolva um problema novo coloque-o aqui para a possivel resolução futura do mesmo.</br>
              </br>As mensagens salvas aparecem ao longo da tela, para facilitar a procura de uma resolução especifica procure pela palavra chave!
            
            </li>
          </ul>
        </div>
      </div>
      
      <div class="row mt-4">
        <div class="col-lg-12">
          <h4>Mensagens Salvas:</h4>
          <table class="table">
            <thead class="thead-light">
              <?php while($dado =  pg_fetch_assoc($result)) {?>
              <tr>
                <td>Mensagens:</td>
                <td ><?php 
                  echo $dado['mensagens'];
                ?></td>
              </tr>
              <?php }  ?>
            </thead>
            <tbody id="savedMessagesTable"></tbody>
          </table>
        </div>
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

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script>
   

  
  </script>
</body>

</html>
