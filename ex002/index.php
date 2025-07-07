<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>Exemplo de PHP</h1>
    <?php
        date_default_timezone_set("America/Sao_Paulo");
        echo "Hoje é dia " .date("d/M/Y");// o d minúsculo representa o dia do mês com dois dígitos, o D maiúsculo representa o dia da semana, M é o mês abreviado e Y é o ano com quatro dígitos.
        echo " e a hora atual é " .date("G:i:s"); // o G representa a hora no formato 24 horas, i os minutos e s os segundos.
    ?>       
</body>
</html>