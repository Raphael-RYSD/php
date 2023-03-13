<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <pre>
            <br>
            <?php
                // SEGUÊNCIA (NÚMERICOS)


                $lista_frutas = ['BANANA', 'MAÇA', 'MORANGO', 'UVA', 'MELANCIA'];
                $lista_frutas[] = 'ABACAXI';


                echo "<hr>";
                var_dump($lista_frutas);
                
                echo "<br><hr>";
                print_r($lista_frutas);
            
            ?>
        </pre>

</body>

</html>