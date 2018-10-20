<?php
  include 'crud.php';
  // inicia a sessão
  session_start();

  if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['txtEmail'];

    // atribui o resultado do banco para a variavel de sessão 'cliente'
    $_SESSION['cliente'] = findByEmail($email);

    // redicionar a página
    header('Location: dados.php');
    exit;
  }
