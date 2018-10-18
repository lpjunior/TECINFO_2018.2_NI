<?php

  // include e require - são utilizados para compor, agregar, reutilizar um código em outro arquivo no arquivo corrente.
  require 'conexao.php';

  # CRUD - Create Retrieve Update Delete
  /*
    Arquivo responsável por conter todas as transações com o banco de dados
  */

  # Create (insert)
  function create($nome, $email) {
    $link = getConnection();

    // definindo a query SQL para ser disparada para banco
    $query = "insert into tb_clientes(nome, email) values ('{$nome}', '{$email}')";

    // dispara a query para o banco
    // sua sintaxe: bool mysqli_query($link, $query)
    mysqli_query($link, $query);

    if(!$link) {
      mysqli_close($link);
    }
  }

  // callbackfunction
  #create('Luis', 'luis@gmail.com');
