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
        //cotação vinda da API do Banco Central do Brasil
        $inicio = date("m-d-Y", strtotime("-7 days"));
        $fim = date("m-d-Y");

        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial='. $inicio .'&@dataFinalCotacao='. $fim .'&$top=100&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

        $dados = json_decode(file_get_contents($url), true);
                
        $cotacao = $dados["value"][0]["cotacaoCompra"];
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