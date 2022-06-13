<?php 

require_once 'Cliente.php';

class PessoaFisica extends Cliente {
    private string $cpf;
    private int $idade;

    public function __construct() {
        $this->setSituacao("normal");
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