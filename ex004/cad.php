<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php 
           // var_dump($_REQUEST); =>junção de $_GET e $_POST e $_COOKIES
           $nome = $_GET["nome"] ?? "sem nome"; //nome do php e nome do html
           $sobrenome = $_GET["sobrenome"] ?? "desconhecido"; 
           echo "<p>É um prazer te conhecer, $nome $sobrenome! Esse é o meu site! </p>"
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>
</body>
</html>