<!DOCTYPE html>
<html lang="pt-bt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exemplo 05 - PHP - POO</title>
</head>
<body>
    <h1>PHP POO - Exemplo 05</h1>
    <hr>

    <h2>Assundo Abordados: </h2>
    <ul>
        <li>
            Herança
        </li>
        <li>
            Classe Abstract
        </li>

        <li>
            Classe Final
        </li>

        <li>
            Métodos protected (Acessíveis apenas pela subclasses)
        </li>

        <li>
            Polimorfismo
        </li>
    </ul>

<?php
    // Importando a Classe
    require_once 'src/PessoaFisica.php';
    require_once 'src/PessoaJuridica.php';

    // Instanciando a Classe
    $clientePF = new PessoaFisica;
    $clientePJ = new PessoaJuridica;

    // Atribuindo valores aos atributos
    $clientePF->setNome('João');
    $clientePF->setEmail('contato@contato.com.br');
    $clientePF->setCpf('123.456.789-00');
    $clientePF->setIdade(20);
    $clientePF->setSenha('123456');

    // Atribuindo valores aos atributos
    $clientePJ->setNome('Maria');
    $clientePJ->setEmail('maria@maria.com.br');
    $clientePJ->setCnpj('123.456.789/0001-00');
    $clientePJ->setAnoFundacao(2020);

?>

    <hr>
    
    <section>
        <h3>Dados do Ciente PJ: </h3>
            <p>
                <?=$clientePJ->getNome()?>
            </p>
        
            <?=$clientePJ->exibirDados()?>    
        </section>
   
    <hr>

        <section>
            <h3>Dados do Cliente PF: </h3>
               <p>
                    <?=$clientePF->getNome()?>
                </p>
            
           <?=$clientePF->exibirDados()?>
        </section>

    <hr>

<pre><?=var_dump($clientePJ, $clientePF)?></pre>

</body>
</html>