<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Array Multidimensional</title>
    </head>

    <body>
        <?php 
                
            $listas_coisas = [];

            $listas_coisas['frutas'] = array(1 => 'Banana', 2 => 'Maça', 3 => 'Melancia', 4 => 'Abacate');

            $listas_coisas['pessoas'] = [1 => 'Raphael', 2 => 'Ana', 3 => 'Rychard'];

            echo "<pre>";
            // OPERADOR DE ASSOCIAÇÃO É O =>
            print_r($listas_coisas);
            print_r($listas_coisas['pessoas'][2]);
            echo "</pre>";
        ?>
    </body>

</html>