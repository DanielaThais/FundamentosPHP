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
        <h1>Resultado</h1>
    </header>
    <main>
        <?php 
        $numero = $_GET["idnumero"] ?? 0;
        echo "O número escolhido foi: <strong>$numero</strong><br>";
        echo "O seu <em>antecessor</em> é: <strong>" . ($numero - 1) . "</strong><br>";
        echo "O seu <em>sucessor</em> é: <strong>" . ($numero + 1) . "</strong><br>";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>
</body>
</html>