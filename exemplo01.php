<?php
  # conexão com o banco
  /*
    é o meio (a interface), 'o recurso' que faz com que sua aplicação se comunique(integração) com o banco de dados

    Iremos utilizar a função mysqli_*.
    Anteriormente até a versão do PHP 5.5.0 era utilizado o recurso mysql_*, porém entrou em depreciação na versão 5.5.0 e na versão 7.0 do PHP foi removido.
    Atualmente é utilizado o mysqli_*, desde a versão do PHP 4.1.
    O * das funções, representa os recursos que podemos trabalhar.
    Ex.:
      mysqli_connect, mysqli_query, mysqli_fetch_assoc e etc..
      http://php.net/manual/en/book.mysqli.php

      Com a implementação do PHP 7, é comum a utilização da classe Mysqli para desenvolvimento de aplicativos POO (Programação Orientada a Objetos)
  */

  // criando nossa conexão
  // sua sintaxe: $statement mysqli_connect($server, $user, $pass, $bd, $port, $socket)
  // iremos utilizar a função mysqli_connect somente com 4 parametros
  $link = mysqli_connect('127.0.0.1', 'root', '', 'projeto_aula07');

  // definir o conjunto de caracteres (encode) http://php.net/manual/en/mysqli.set-charset.php
  mysqli_set_charset($link, 'utf8');

  if(!empty($link)) {
    echo 'Conexão aberta';
    mysqli_close($link);
  } else {
    echo mysqli_errno() . '<br>'; // msqli_errno, informa o número do erro. http://php.net/manual/en/mysqli.connect-errno.php
    echo mysqli_error(); // mysqli_error, lança a mensagem de erro. http://php.net/manual/en/mysqli.connect-error.php
  }
