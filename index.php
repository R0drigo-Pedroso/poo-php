<!DOCTYPE html>
<html lang="pt-bt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exemplo 01 - PHP - POO</title>
</head>
<body>
    <h1>PHP POO - Exemplo 01</h1>
    <hr>

    <ul>
        <li>
            Criação da Classe
        </li>

        <li>
            Importação do arquivo de Classe
        </li>

        <li>
            Criação dos Objetos
        </li>
    </ul>

<?php
    // Importando a Classe
    require_once 'src/Cliente.php';

    //Criação dos Objetos
    $clienteA = new Cliente;
    $clienteB = new Cliente;
?>

<pre><?=var_dump($clienteA, $clienteB)?></pre>

</body>
</html>