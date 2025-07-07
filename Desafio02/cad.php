<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do cálculo</title>
     <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado da análise</h1>
    </header>
    <main>
        <?php 
        $numero = $_GET["idnumero"] ?? "você esqueceu de informar o número para ser analisado"; //nome do php e nome do html
        echo "Analisando o número <strong>$numero</strong> informado pelo usuário<br>";
        echo "A parte inteira é: <strong>" . floor($numero) . "</strong><br>";
        echo "A parte fracionária é: <strong>" . ($numero - floor($numero)) . "</strong><br>";
        ?>       
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>
</body>
</html>