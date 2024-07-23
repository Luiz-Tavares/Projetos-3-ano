<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprendendo php</title>
    <style>::afterp{
        color: red;
    }
    </style>

</head>
<body>
    <h1>Aprendendo php</h1>


    <?php
    echo "Aqui aparece um texto na tela do usuario";
    //podemos colocar uma tag HTML dentro do app
    echo "<h1>Esse é um titulo</h1>";
    echo"<p> Texto dentro do print</p>";
    
    print "<p> Texto dentro do print</p>";

    $nome = "luizada";
    $altura = 1.77;
    $idade = 17;
    echo "$nome tem $altura e tem $idade anos";

    ?>
</body>
</html>