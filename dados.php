<?php
  session_start();

  if(!$cliente = $_SESSION['cliente']) {
    header('Location: consulta.php');
    exit;
  }
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Aula PHP</title>
  </head>
  <body>
    <div class="col-6 offset-3" style="padding-top: 5%">
      <fieldset>
        <legend>Cadastro de Cliente</legend>
        <form action="atualiza.php" method="post">
          <div class="form-group">
            <label for="inputNome" class="src-only">Nome</label>
            <input type="text" id="inputNome" name="txtNome" class="form-control" value='<?= $cliente['nome'] ?>' placeholder="Informe o nome" required>
          </div>
          <div class="form-group">
            <label for="inputEmail" class="src-only">Email</label>
            <input type="email" id="inputNome" name="txtEmail" class="form-control" value='<?= $cliente['email'] ?>' placeholder="Informe o email" required>
          </div>
          <button type="submit" name='txtId' value='<?= $cliente['id'] ?>' class="btn btn-warning">Enviar</button>
        </form>
    </fieldset>
    <br><p><strong>Copyright (c) 2018 Copyright Senac Rio All Rights Reserved.</strong></p>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
