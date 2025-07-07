<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de moedas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php 
        //cotação do dólar consultada em 2025-06-29
        $cotacao = 5.48;
        $real = $_REQUEST["din"] ?? 0;

        $dólar = $real / $cotacao; //conversão de real para dólar
        //Mostrar resultados já com a formatação e internacioinalização!
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

        echo "Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a " . numfmt_format_currency($padrao, $dólar, "USD"); 

        ?>
        <button onclick="javascript:history.go(-1)">Voltar</a></button>
    </main>
</body>
</html>