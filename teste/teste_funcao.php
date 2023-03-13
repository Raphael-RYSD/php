<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <?php

        // constante
        /*  define('DB_URL', '127.0.0.1');
            define('DB_USERARIO', 'ADMIN');
            define('DB_SENHA', "@431Raphg");
            
            
            echo DB_URL. '  <br>';
            echo DB_USERARIO . '  <br>';
            echo DB_SENHA . '<br>'; 

        */

        $user_cart_loja = true;
        $valor_compra = 250;
        $frete = 50;
        $desk_frete = true;


        // si a varivel já tiver um valor boleano não necessita fazer comparação do true ou false
        if ($user_cart_loja && $valor_compra >= 400) {
            $frete = 0;

        } else if ($user_cart_loja && $valor_compra >= 300) {
            $frete = 10;

        } else if ($user_cart_loja && $valor_compra >= 100)  {
            $frete = 25;

        } else {
            $desk_frete = false;
        }
        
        ?>
        
        <h1>DETALEHS DO PEDIDO</h1>

        <p> Possui cartão da loja? <?php echo $user_cart_loja ? 'SIM' : "NÃO"?> </p>

            <!--  

                if ($user_cart_loja) {
                    echo "SIM";
                } else {
                    echo "NÃO";
                }  

            -->

        <p> VALOR DA COMPRA: <?php echo $valor_compra ?></p>
            
        <p> Recebeu Desconto no frete?<?php echo $user_cart_loja ? "SIM" : "NÃO"?> </p>
       
        <!-- 
            if ($desk_frete) {
                echo "SIM";
            } else {
                echo "NÃO";
            }

        -->
        
        <p> Valor do Frete: <?php echo $frete?></p>


</body>

</html>