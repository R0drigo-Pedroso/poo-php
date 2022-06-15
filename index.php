<!DOCTYPE html>
<html lang="pt-bt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exemplo 07 - PHP - POO</title>
</head>
<body>
    <h1>PHP POO - Exemplo 07</h1>
    <hr>

    <h2>Assundo Abordados: </h2>
    <ul>
       <li>Propriedades e métodos Estáticos</li>
    </ul>

<?php
    // Importando a Classe
    require_once 'src/PessoaFisica.php';
    require_once 'src/PessoaJuridica.php';

    // Instanciando a Classe
    $clientePF = new PessoaFisica;

    // Atribuindo valores aos atributos
    $clientePF->setIdade(20);
    $clientePF->setNome("João");
    
    // Acessando uma propriedade estática
    PessoaFisica :: $cidade = "São Paulo";

    // Acessando e lendo o valor de uma propriedade estática
    echo PessoaFisica::$cidade;
    
?>
    <hr>
        <section>
            <h3>Dados do Cliente PF: </h3>
                <p>
                <?=$clientePF->getNome()?>
                </p>

                <p>
                    <?=$clientePF->getIdade()?>
                </p>

                <!-- fazendo veficação atraves do estatico -->
                <p>
                    Tipo de atendimento: <?=PessoaFisica::verificaIdade(90)?>
                </p>

                <p>
                    tipo de atendimento: <?=PessoaFisica::verificaIdade(20)?>
                </p>
            
        </section>


</body>
</html>