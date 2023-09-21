<?php

class Computador{
    // Primeiro defina as variáveis.
    private $marca;
    private $modelo;
    private $processador;
    private $ram;
    private $armazenamento;

//Função que vai executar ao ser instanciado o objeto
    public function __construct(string $marca, string $modelo, string $processador, string $ram, string $armazenamento){
        $this->definirMarca($marca);
        $this->definirModelo($modelo);
        $this->definirProcessador($processador);
        $this->definirRam($ram);
        $this->definirArmazenamento($armazenamento);
    }
    //Funções de operações dos objetos
    public function definirMarca(string $marca){
        $this->marca = $marca;
    }

    public function definirModelo(string $modelo){
        $this->modelo = $modelo;
    }

    public function definirProcessador(string $processador){
        $this->processador = $processador;
    }

    public function definirRam(string $ram){
        $this->ram = $ram;
    }
    public function definirArmazenamento(string $armazenamento){
        $this->armazenamento = $armazenamento;
    }

    public function exibirMarca(){
        return $this->marca;
    }

    public function exibirModelo(){
        return $this->modelo;
    }

    public function exibirProcessador(){
        return $this->processador;
    }
    public function exibirRam(){
        return $this->ram;
    }
    public function exibirArmazenamento(){
        return $this->armazenamento;
    }
}