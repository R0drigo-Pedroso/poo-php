<!DOCTYPE html>
<html lang="pt-bt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exemplo 04 - PHP - POO</title>
</head>
<body>
    <h1>PHP POO - Exemplo 04</h1>
    <hr>

    <h2>Assundo Abordados: </h2>
    <ul>
        <li>
            Encapsulamento
        </li>

        <li>
            Monificadores de visibilidade
        </li>

        <li>
            Métodos getters e setters (Metodos de acesso)
        </li>
    </ul>

<?php
    // Importando a Classe
    require_once 'src/Cliente.php';

    //Criação dos Objetos
    $clienteA = new Cliente;
    $clienteB = new Cliente;

    // Atribuido dados às propriedades do objetos
    // Captura de dados setters
    
    $clienteA->setNome('João');
    $clienteA->setEmail('jaoa@contato.com');
    $clienteA->setSenha('');

    $clienteB->setNome('Maria');
    $clienteB->setEmail('maria@mariah.com.br');
    $clienteB->setSenha('');
    
?>

    <h2>Dados dos Objetos (leitura via getters)</h2>
        <hr>
    
    <h3><?=$clienteA->getNome()?></h3> 
    <h3><?=$clienteA->getEmail()?></h3>
    <h3><?=$clienteA->getSenha()?></h3>


    <h3><?=$clienteB->getNome()?></h3>
    <h3><?=$clienteB->getEmail()?></h3>
    <h3><?=$clienteB->getSenha()?></h3>
       
</body>
</html>