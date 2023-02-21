<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

    //    $nome = "Raphael";
    //    $snom = "Rychard";

       //echo "O meu nome é $nome \"SIRIUS\" $snom";
        // HERDPC -> não aceita espaço na frete, se tiver vai apontar erro

        $canal = "Curso em Vídeo";
        $ano = date ('Y');

        echo <<< 'FRASE'
            Olá Galera do $canal!
                Tudo Bém com VCS?

            Como está sendo esse ano $ano?

                    $canal 
            FRASE;


    ?>
</body>
</html>