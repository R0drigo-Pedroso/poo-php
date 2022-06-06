<?php

class Cliente {
    // Propriedade (ou atributos)
    public $nome; //string
    public $email; //string
    public $senha; //string
    public $telefones; //array

    //Método construtor
    public function __construct($nome, $email) {

        //$this é uma variável especial, sempre apontando para a referência da Classe atualmente manipulada.
        $this->nome = $nome;
        $this->email = $email;        
    }
}

