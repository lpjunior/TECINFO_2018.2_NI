<?php

  // compõe nosso atual com o crud.php
  require 'crud.php';

  if($_POST) {
    // resgata os valores da requisição post
    $nome = $_POST['txtNome'];
    $email = $_POST['txtEmail'];

    // callbackfunction
    create($nome, $email);

    // redireciona para a página index.html
    header('Location: index.html');
    // encerra a execução da página corrente (insert.php)
    die();
  }
