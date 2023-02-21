<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>
    <h1>Exemplo PHP</h1>
    <!-- O PHP PRECESSA TUDO E ENVIA PARA O CLIENTE SÓ O HTML -->
    <?php  
        date_default_timezone_set("America/Sao_Paulo"); // GMT-03
        // d -> Dia
        // D -> semana
        // M -> Mês
        // Y -> Ano
        echo "Hoje é dia " . date("d/M/Y"); 

        // G -> HORA
        // i -> MINUTO
        // s -> SEGUNDO
        echo " e a hora atual " . date("G:i:s T");
    ?>
</body>

</html>