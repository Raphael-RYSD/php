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
        
        /*Funções Comuns para Tratar Pesquisa Dentro de Arrays
            in_array() -> true ou false para a existencia do que está sendo procurado
            array_search() -> Retorna o índice do valor pesquisado, caso ele exixsta
        */

        $lista_frutas = [1 => 'Banana', 2 => 'Maça', 3 => 'Morango', 4 => 'Uva'];

        echo '<pre>';
        print_r($lista_frutas);
        echo '</pre>';
        echo "<br><br><br>";

        $existe = array_search('Uva', $lista_frutas);
        print_r($existe);
        // true = 1
        //false = void

        // true / false -> lembrando variaveis booleanas não precisa ser testada, devido já retornar um  valor do tipo logico
        if($existe) { 
            echo " Sim, O valor pesquisado existe no Array"; 

        } else {
            echo " Não, O valor pesquisado não existe no Array"; 
        }
            
    ?>
    </body>

</html>