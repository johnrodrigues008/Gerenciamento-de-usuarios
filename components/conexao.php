<?php
/* Essa parte é responsavel para fazer a conexão com o banco phpmyadmin */
    $server = "127.0.0.1";
    $usuario = "root";
    $senha = "root";
    $banco = "gerenciamento-de-usuarios";

    /*  Vamos usar a biblioteca PDO pois é uma biblioteca atualizada 
        Esse "try catch verifica o banco e mostra os erros de conexão que podem aparecer"
    */
    try{
        $conexao = new PDO("mysql:host=$server;dbname=$banco", $usuario, $senha);
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $erro){
        echo "Ocorreu um erro de conexão: {$erro->getMessage()}";
        $conexao = null;
    }
?>