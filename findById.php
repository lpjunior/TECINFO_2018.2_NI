<?php
  include 'crud.php';
  // inicia a sessão
  session_start();

  if($_SERVER['REQUEST_METHOD'] === 'GET') {
    $id = $_GET['txtId'];

    // atribui o resultado do banco para a variavel de sessão 'cliente'
    $_SESSION['cliente'] = findById($id);

    // redicionar a página
    header('Location: dados.php');
    exit;
  }
