<?php
// Chamando os arquivos necessários para as operações
require "conexao.php";
require "Computador.php";
require "RepositorioComputador.php";

//Instanciar o objeto
$computador1 = new Computador("DELL","Asus","IntelCore","32GB","10TB");

//Instancio o repositório para cadastrar
$repositorioComputador = new RepositorioComputador();

$repositorioComputador->cadastrar($computador1,$banco);
