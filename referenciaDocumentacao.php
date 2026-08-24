<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/estilo.css">
    <link rel="stylesheet" href="assets/css/referenciaDocumentacao.css">
    <title>Referência da Documentação</title>
</head>
<body class="exercicio">
    <header class="cabecalho">
        <h1>Aprendizado Completo de PHP</h1>
        <h2>Zero ao Avançado</h2>
    </header>
    <nav class="navegacao">
        <a href=<?= "C:\xampp\htdocs\CursoPHP\referenciaDocumentacao.php" ?>
            class="verde">Sem formatação</a>
        <a href="index.php" class="vermelho">Voltar</a>
    </nav>
    <main class="principal">
        <div class="conteudo">
           link da documentação: <a href="https://www.php.net/manual/pt_BR/" target="_blank">https://www.php.net/manual/pt_BR/</a>
        </div>
    </main>
    <footer class="rodape">
        Dev Matheus Romão © <?= date('Y'); ?>
    </footer>
</body>
</html>