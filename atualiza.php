<?php

  include 'crud.php';

  if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['txtNome'];
    $email = $_POST['txtEmail'];
    $id = $_POST['txtId'];

    update($id, $nome, $email);
    header('Location: lista.php');
    exit;
  }
