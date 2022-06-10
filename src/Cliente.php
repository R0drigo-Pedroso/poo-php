<?php
/*Abstract - Classes abstratas NÃO PODEM SER INSTANCIADAS. 
ou seja, não é possivel criar um objeto/variavel a partir desta classe*/
abstract class Cliente {
    // Propriedade (ou atributos)
    private string $nome; //string
    private string $email; //string
    private string $senha; //string


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
        $this->nome = $nome;
    }
    public function setEmail(string $email):void{
        $this->email = $email;
    }
    public function setSenha(string $senha):void{
        $this->senha = password_hash($senha, PASSWORD_DEFAULT);;
    }

}

