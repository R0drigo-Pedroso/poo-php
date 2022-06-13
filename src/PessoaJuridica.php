<?php

require_once 'Cliente.php';

    /* Final class
    Indica que a classe não permite herança */
/*final*/ class PessoaJuridica extends Cliente {
    private string $cnpj;
    private int $anoFundacao;
    private string $nome;

    public function __construct() {
        $this->setSituacao("verificar");
    }

    public function exibirDados() {
        echo "<p>CNPJ: " .$this->cnpj. "</p>";
        echo "<p>Ano de Fundação: " .$this->anoFundacao. "</p>";
        echo "<p>Situação: " .$this->getSituacao(). "</p>";
    }

    // Inicio CNPJ
    public function getCnpj(): string {
        return $this->cnpj;
    }

    public function setCnpj(string $cnpj): self {
        $this->cnpj = $cnpj;

        return $this;
    }
    // Final CNPJ

    // Inicio AnoFundacao
    public function getAnoFundacao(): int {
        return $this->anoFundacao;
    }

    public function setAnoFundacao(int $anoFundacao): self {
        $this->anoFundacao = $anoFundacao;

        return $this;
    }
    // Final AnoFundacao

    // Inicio NomeFantasia
    public function getNome(): string {
        return $this->nome;
    }

    public function setNome(string $nome) {
        $this->nome = "Empresa: ". $nome;
    }
    // Final NomeFantasia
}