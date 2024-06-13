<?php 
    $_nome = "Curso PHP Fundamental";
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        
        <?php 
            // strlen - Retorna primeira ocorrencia
            //echo strlen($_nome);
            
            // stripos  - Retorna primeira ocorrência 
            //echo stripos($_nome, "s")

            // strripos - Retorna última ocorrência
            //echo strripos($_nome, "P")
            
            // strtolower - converte para letras minusculas.
            //echo strtolower($_nome)

            // strtoupper - converte para letras maiusculas.
            //echo strtoupper($_nome)

            // SUBSTR_COUNT - Conta quantas ocorreram de um texto ou string
            //Faz diferença Maiusculas e minusculas
            echo SUBSTR_COUNT($_nome, "P")
            
        ?>
            
    </body>
</html>


