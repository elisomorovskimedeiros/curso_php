<?php
    //tipos de dados em php
    //strings
    echo(gettype("sadfafdsaf"));
    echo(' ');
    //numbers - integer ou floot ou double
    echo(gettype(23));
    echo(' ');
    echo(gettype(2.5));
    echo(' ');
    echo(gettype(4223.654645456464464646464646464));
    echo(' ');

    //booleans
    echo(gettype(true));
    echo(' ');

    //arrays
    echo(gettype(['sfasfas', 12, 'afjçskfljasç']));
    echo(' ');

    //object
    class Pessoa{};
    echo(gettype(new Pessoa));
    echo(' ');

    //null
    echo(gettype(null));
    echo(' ');
    

    $title = 'Home';
    $name = 'Eli';

    //referência de outra variável
    $referencia = &$name;
    echo($referencia);
    //constantes:
    define('NOME', 'João');
    echo NOME;
    if(defined('NOME')){
        echo('nome está definido');
    }

    
    //operadores
    //soma
    //echo(1+1);
    //subtração
    //echo(1-1);
    //multiplicação
    //echo(1*1);
    //divisão
    //echo(1/1);
    //resto
    //echo(5%3);

    //concatenação de strings é com .

    echo 'teste ' . ' de ' . 'concatenação';

    //pré incremento
    $number = 10;
    echo ++$number;
    //pós incremento
    echo $number++;
    echo $number;

    //comparações boleanas
    // <,>,>=, <=, !=, !==, ==, ===
    //!=  verifica se o valor é diferente    
    //!== verifica se o valor OU o tipo são diferentes
    //==  verifica se o valor é igual
    //=== verifica se o valor OU o tipo são iguais

    $boleana = 50 != 40;
    var_dump($boleana);

    //exibir valoreads truty ou falsy
    //se comportam como falsy:
    //null
    //0
    //0.0
    //0
    //""
    //array()

    //truty
    //todo o resto

    //para exibir como valor boleando use negação dupla !!
    var_dump(!!(''));

    //ver tipo de dado
    echo gettype($boleana);


    //STRINGS
    //tamanho da string
    echo strlen($name);

    echo substr($name, 0, 2); //corta a string na posição pedida

    echo str_contains($name, 'li'); //retorna 1 se verdadeiro e 0 se falso

    //NUMERAIS
    echo ('4' + 4); //vai entender o '4' como valor numérico e vai realizar a soma    

    echo ceil(34.45);  //arredonda para cima

    echo floor(34.45); //arredonda para baixo

    //ARRAYS

    $names = array("'Alexandre'", "'Maria'", "'João'", 34, true, false);
    $outro_names = ["'Alexandre'", "'Maria'", "'João'", 34, true, false];

    print_r($names); //vê todo o array
    print_r($names[2]); //vê apenas um elemento

    var_dump($names[5]); //vê o valor real dentro do elemento

    $length = count($outro_names); //conta o número de elementos do array
    $names[$length] = "'last'"; //acrescenta mail um no fim do array
    // ou 
    array_push($names, "'novo_last'");
    print_r($names);

    //adicionar elemento ao início do array:
    array_unshift($names, 'novo_first');

    //gerar array com índices específicas (quase como se fossem objetos)
    $person = [
                'name' => 'Alexandre' , 
                'age' => 38,
                'documents' => [
                    'cpf' => '4234234234234',
                    'rg' => '2234232423'
                ]
            ]

    




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
</head>
<body>
    <h1>
        <?php echo $name; ?>
    </h1>
</body>
</html>
