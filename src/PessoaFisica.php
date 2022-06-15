<?php 

require_once 'Cliente.php';

class PessoaFisica extends Cliente {
    private string $cpf;
    private int $idade;

    // propriedades estáticas (não depende de um objeto para ser acessado)
    public static string $cidade;

    // Método estatico (não depende de um objeto para ser acessado)
    public static function verificaIdade (int $idade): string {
        return $idade >=60 ? 'Prioridade' : 'Normal';
    }

    public function __construct() {
        $this->setSituacao("normal");
    }

    public function exibirDados() {
        echo "<h3>" .$this->getNome(). "</h3>";
        echo "<p>Idade: " .$this->idade. "</p>";
        echo "<p>Situação: " .$this->getSituacao(). "</p>";        
    }
// cpf inicio
    public function getCpf(): string {
        return $this->cpf;
    }

    public function setCpf(string $cpf): self{
        $this->cpf = $cpf;

        return $this;
    }
// Final cpf

// idade inicio
    public function getIdade(): int {
        return $this->idade;
    }

    public function setIdade(int $idade): self {
        $this->idade = $idade;

        return $this;
    }
// Final idade
}