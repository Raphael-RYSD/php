<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Result</title>
        <link rel="stylesheet" href="./css/style.css">
    </head>

    <body>
        <header>
            
            <h1>Resultados Processados</h1>

        </header>
        
        <main>
            <?php            
                /* 

                    $_REQUEST -> é uma Junção das $_GET | $_POST | $_COOKIES

                */
               

                // A EXPREÇÃO DENTRO DO $_GET É O NAME DO MEU FORMULAIRO

                // OPERADOR DE QUALECENCIA NULA
                $nome= $_GET["nome"] ?? "Sem Nome";
                $sobrenome = $_GET["sobrenome"] ?? "Sem Sobrenome";

                echo "É um praser te conhecer, <strong>$nome $sobrenome</strong>. Este é o meu site! ";

                $nomes = ["RAPHAEL", "BIANCA", "BRUNA", "ANA"];
               
            ?>      
            <p style="text-align: center;"><a href="javascript:history.go(-1)">Voltar Ultima Pagina</a></p>
        </main>
    </body>

</html>