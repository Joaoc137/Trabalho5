<?php

class RepositorioComputador{
    
    public function cadastrar(Computador $computador, PDO $pdo){
        //Preparando a instrução SQL para criar o registro na tabela
        $codigoSql = "INSERT INTO COMPUTADOR(marca,modelo,processador,ram,armazenamento) VALUES (:ma,:mo,:p,:r,:a)";
    
        $marca = $computador->exibirMarca();
        $modelo = $computador->exibirModelo();
        $processador = $computador->exibirProcessador();
        $ram = $computador->exibirRam();
        $armazenamento = $computador->exibirArmazenamento();

        //Vou preparar as instruções
        $inserir = $pdo->prepare($codigoSql);
        //Definindo o valor dos parâmetros
        $inserir->bindParam(":ma",$marca);
        $inserir->bindParam(":mo",$modelo);
        $inserir->bindParam(":p",$processador);
        $inserir->bindParam(":r",$ram);
        $inserir->bindParam(":a",$armazenamento);
        //Executa o comando de inserir no banco
        $inserir->execute();
    }

    public function listar(PDO $banco) {
        $sql = "SELECT * FROM COMPUTADOR";

        //Executa o sql do banco 
        $select = $banco->query($sql);

        //Estrutura os valores como obtidos pelo $select como um vetor indexado 
        return $select->fetchAll(PDO::FETCH_ASSOC); 
    }
}