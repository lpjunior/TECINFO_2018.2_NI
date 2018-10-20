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

  # retrieve - single result
  function findByEmail($email) {
    $link = getConnection();

    // definindo a query SQL para ser disparada para banco
    $query = "select * from tb_clientes where email = '{$email}'";
    /*
       no contexto de create a função mysqli_query retorna um booleano
       mas quando está no contexto de retrieve ele retorna o resultado vindo do banco
    */
    $result = mysqli_query($link, $query);

    // mysqli_fetch_* - a forma de modelar ou organizar o resultado

    /*if($cliente = mysqli_fetch_assoc($result)) {
      print_r($cliente);
    } else {
      echo 'Email não localizado';
    }*/

    if(!$link) {
      mysqli_close($link);
    }

    return mysqli_fetch_assoc($result);
  }

  # retrieve - single result
  function findById($id) {
    $link = getConnection();

    // definindo a query SQL para ser disparada para banco
    $query = "select * from tb_clientes where id = '{$id}'";

    $result = mysqli_query($link, $query);

    if(!$link) {
      mysqli_close($link);
    }

    return mysqli_fetch_assoc($result);
  }

  # delete
  function deleteClient($id) {
    $link = getConnection();

    // definindo a query SQL para ser disparada para banco
    $query = "delete from tb_clientes where id = '{$id}'";

    mysqli_query($link, $query);

    if(!$link) {
      mysqli_close($link);
    }
  }

  # update
  function update($id, $nome, $email) {
    $link = getConnection();

    // definindo a query SQL para ser disparada para banco
    $query = "update tb_clientes set nome = '{$nome}', email = '{$email}' where id = {$id}";

    mysqli_query($link, $query);

    if(!$link) {
      mysqli_close($link);
    }
  }

  # retrieve - many results
  function listClient() {
    $link = getConnection();

    // definindo a query SQL para ser disparada para banco
    $query = "select * from tb_clientes";

    // agora é retornado um "possível" array
    $result = mysqli_query($link, $query);

    // define a variavel $clients como array
    $clients = array();

    /*
      while "enquanto" - Precisamos efetuar o teste "enquanto" existir registro na variável $result.
      $client = mysqli_fetch_assoc($result) - carrega dentro da variável $client o resultado encontrado na interação corrente.
      array_push($clients, $client) - carrega o array ($clients) o valor da variável $client a cada interação do while.
    */
    while($client = mysqli_fetch_assoc($result)) {
      array_push($clients, $client);
    }

    if(!$link) {
      mysqli_close($link);
    }

    return $clients;
  }
