<?php
//Comando que vai conectar o banco de dados
try{
    $banco = new PDO("sqlite:dado.sqlite");
}catch(PDOException $e){
    echo "Erro no momento de acionar o banco!";
}
// Vai criar a tabela PESSOA caso ela não exista
$criarTabela = "CREATE TABLE IF NOT EXISTS COMPUTADOR(
    marca TEXT,
    modelo TEXT,
    processador TEXT,
    ram TEXT,
    armazenamento TEXT,
    primary key (marca))";

//Executará o comando de criação de tabela
$banco->query($criarTabela);