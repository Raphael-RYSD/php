<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

    <body>
    <h1>Tetando as <em>'Single'</em> <em><q>Double</q></em> Quoud</h1>
    <?php 

        $nome = "Raphael";

        // single coude -> não identifica nenhum tipo de interpretação
        echo 'Single Quoud -> meu nome é $nome'; 

        /* 
            Double Quoud -> Identifica AS interpretação pedica como:
                    Caractere UNICOD, 
                    Varivale Costante, 
                    Objetos 
                    Conteudos da HTML. */
        echo "<br>Duble Quoud -> meu nome é $nome ";
            
        // A INTERPRETAÇÃO NAS CONSTANTES:
        //  não funciona nem em ASPAS SIMPLES e nem ASPAS DUPLAS.
        const CANAL = "Curso em Vídeo \r\n \u{1F499}";
        echo "<br><br>Moro no ESTADO";
        echo "<br><br>Melhor CANAL de CURSO é do -> " . CANAL;

        echo "Estamos no ANO de: " . date("Y");
    ?>

    </body>

</html>