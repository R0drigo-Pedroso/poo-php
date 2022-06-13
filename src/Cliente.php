<?php
/*Abstract - Classes abstratas NÃO PODEM SER INSTANCIADAS. 
ou seja, não é possivel criar um objeto/variavel a partir desta classe*/
abstract class Cliente {
    // Propriedade (ou atributos)
    private string $nome; //string
    private string $email; //string
    private string $senha; //string

    private string $situacao = "a definir"; //string


    // Método (ou métodos - funções getters e setters)
    public function getNome():string{
        return $this->nome;
    }
    public function getEmail():string{
        return $this->email;
    }
    public function getSenha():string{
        return $this->senha;
    }


    public function setNome(string $nome):void{
        $this->nome = "Cliente: ". $nome;
    }
    public function setEmail(string $email):void{
        $this->email = $email;
    }
    public function setSenha(string $senha):void{
        $this->senha = password_hash($senha, PASSWORD_DEFAULT);;
    }

    // Situação
    protected function getSituacao(): string{
        return $this->situacao;
    }

    protected function setSituacao(string $situacao): self {
        $this->situacao = $situacao;

        return $this;
    }
}

/* 
PROTECDET - "SUPER CLASSES"  Classes protegidas NÃO PODEM SER INSTANCIADAS. Recursos acessíveis pela própria classe e por herdeiros.
PUBLIC - Acesso livre a todos os métodos e atributos.
PRIVATE - Acesso apenas aos métodos e atributos da classe que está sendo extendida.

*/