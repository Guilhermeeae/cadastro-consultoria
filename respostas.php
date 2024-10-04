<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Respostas das Solicitações</title>
    <link rel="stylesheet" href="style_respostas.css">
</head>
<body>
    <div class="container">
        <h1>Respostas das Solicitações</h1>
        <table>
            <thead>
                <tr>
                    <th>Nome do Solicitante</th>
                    <th>Cargo</th>
                    <th>Empresa</th>
                    <th>CNPJ</th>
                    <th>Setor</th>
                    <th>Telefone</th>
                    <th>E-mail</th>
                    <th>Data</th>
                    <th>Urgência</th>
                    <th>Problema Principal</th>
                    <th>Impacto</th>
                    <th>Outros Problemas</th>
                    <th>Arquivo</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Lê os dados do arquivo respostas.json
                $arquivo = 'respostas.json';
                if (file_exists($arquivo)) {
                    $respostas = json_decode(file_get_contents($arquivo), true);
                    
                    foreach ($respostas as $resposta) {
                        echo "<tr>";
                        foreach ($resposta as $chave => $valor) {
                            echo "<td>" . htmlspecialchars($valor) . "</td>";
                        }
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='13'>Nenhuma solicitação encontrada.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
