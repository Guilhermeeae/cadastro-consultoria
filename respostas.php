<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Respostas das Solicitações</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Respostas das Solicitações</h1>
    <div>
        <?php
        // Lê os dados do arquivo respostas.johnson
        $arquivo = file("respostas.johnson");
        foreach ($arquivo as $linha) {
            echo "<p>" . htmlspecialchars($linha) . "</p>";
        }
        ?>
    </div>
</body>
</html>
