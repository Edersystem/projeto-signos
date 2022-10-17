<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signos</title>
    <style>
        div {
            margin: 10%;
            background-color:whitesmoke ;
            padding:10px;
            color:purple;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            
        }
        
        h4 {
            padding-left:50%;
            font-size: 25px;
            font-style: italic;
        }

        #d {
            font-size: 20px;
        }

        p {
            font-size:19px;
        }
        
    </style>
</head>

<body>

   <div>
   <?php
    $nameP = $_POST['namePerson'];
    $dateB = $_POST['birthday'];

    $date = new DateTime($dateB);

    $dateSign = $date->format('m-d');

    // Abrindo o XML e armazenando como Objeto

    $xml = simplexml_load_file('signos.xml');
    echo '<h4>' . $xml->titulo . '</h4>';
    echo '<p id="d"> Seu horoscopo de ' . $hoje = date('d/m/Y') . '.</p>';
    echo '<h1>' . $nameP . ' seu signo é '. "";
    
    //Iterando sobre o XML exibindo as informações
    foreach ($xml->signo as $registro) :
        
        if ($dateSign >= $registro->dataInicio and $dateSign <= $registro->dataFim) {        
            echo $registro->signoNome . '</h1>';
            echo '<p>' . $registro->descricao . '<p>';
            
        }
    endforeach;
    ?>
    </div>

</body>

</html>