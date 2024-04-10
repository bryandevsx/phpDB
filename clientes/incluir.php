<?php

include ("conexao.php");

if (isset($_POST["nome"], $_POST["endereco"], $_POST["email"])){
    
    $nome = $_POST["nome"];
    $endereco = $_POST["endereco"];
    $email = $_POST["email"];
    
    $sql = "INSERT INTO CLIENTE (nome, endereco, email) VALUES ('$nome', '$endereco', '$email')";

    if ($conexao->query($sql)){
        echo 'Registro criado com sucesso';
    }else{
        echo 'Problema na inserção dos dados';
    }

}