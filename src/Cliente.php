<?php

class Cliente {
    // Propriedade (ou atributos)
    public string $nome; //string
    public string $email; //string
    public string $senha; //string
    public array $telefones; //array

    // Método (ou métodos)
    public function exibirDados(){
        echo "<h3> $this->nome </h3>";
        echo "<ul>";
        echo "<li>$this->email</li>";
        echo "<li>". implode (',', $this->telefones)."</li>";
        echo "</ul>";

    }
}

