<!DOCTYPE html>
<html lang="pt-bt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exemplo 02 - PHP - POO</title>
</head>
<body>
    <h1>PHP POO - Exemplo 03</h1>
    <hr>

    <ul>
        <li>
            Acesso direto à propriedade
        </li>

        <li>
            Atribuição de dados e leitura
        </li>
    </ul>

<?php
    // Importando a Classe
    require_once 'src/Cliente.php';

    //Criação dos Objetos
    $clienteA = new Cliente;
    $clienteB = new Cliente;

    // Atribuido dados às propriedades do objetos

    $clienteA->nome = 'João';
    $clienteA->email = "joao@contato.com";
    $clienteA->telefones = ["11-98989-8989", "11-2345-1234"];

    $clienteB->nome = 'Maria';
    $clienteB->email = "maria@ver.com.br";
    $clienteB->telefones = array("11-98495-8495");
?>

    <h2>Dados dos Objetos (leitura)</h2>
        <hr>
    
    <h3><?=$clienteA->nome?></h3>
        <p>Email: <?=$clienteA->email?></p>
        <p>Telefones: <?=implode(", ", $clienteA->telefones)?></p>

    <h3><?=$clienteB->nome?></h3>
        <p>Email: <?=$clienteB->email?></p>
        <p>Telefones: <?=implode(", ", $clienteB->telefones)?></p>
    
    <h2>Chamado método exibirDados</h2>
    <?=$clienteA->exibirDados()?>
    <?=$clienteB->exibirDados()?>

</body>
</html>