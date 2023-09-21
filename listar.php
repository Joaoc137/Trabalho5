<?php
// Chamando os arquivos necessários para as operações
require "conexao.php";
require "RepositorioComputador.php";

$repositorio = new RepositorioComputador();

//Lista dos valores em uma array, a partir do repositório pessoa
$valores = $repositorio->listar($banco);

foreach($valores as $valor){
    echo "Marca: ".$valor['marca'].PHP_EOL;
}