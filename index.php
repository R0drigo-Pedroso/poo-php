<!DOCTYPE html>
<html lang="pt-bt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exemplo 02 - PHP - POO</title>
</head>
<body>
    <h1>PHP POO - Exemplo 02</h1>
    <hr>

    <ul>
        <li>
            Criação dos Objetos
        </li>

        <li>
            Uso do método construtor
        </li>

        <li>
            Uso do <code>$this</code> para acessar as propriedades
        </li>
    </ul>

<?php
    // Importando a Classe
    require_once 'src/Cliente.php';

    //Criação dos Objetos
    $clienteA = new Cliente('Rodrigo', 'rodrigo@email.com');
    $clienteB = new Cliente('Carla', 'carla@email.com');
?>

<pre><?=var_dump($clienteA, $clienteB)?></pre>

</body>
</html>