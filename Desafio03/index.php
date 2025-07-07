<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteador de número - resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Trabalhando com números aleatórios</h1>
        <?php             
            $min = 0;
            $max = 100;
            $num = mt_rand($min, $max); //rand é um método antigo e tem ficado para trás, se tornando obsoleto nos dias atuais.
            //também pode ser usado o méto mt_rand = que foi criado em 1997 e é mais confiável e mais rápido.
            // função random_int() gera números aleatórios criptagraficamente seguros, mas é mais lenta de todos.
            echo "Gerando um número aleatório entre $min e $max...<br> O número gerado foi: <strong>$num</strong>";            
        ?>
        <button onclick="javascript:document.location.reload()">&#x1F504; De novo</button>
    </main>
</body>
</html>