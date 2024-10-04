<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro da Solicitação</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Cadastro da Solicitação</h1>
        <form action="enviar.php" method="POST" enctype="multipart/form-data">
            <!-- Dados do Solicitante -->
            <h2>Dados do Solicitante</h2>
            <label for="nome_solicitante">Nome do Solicitante:</label>
            <input type="text" id="nome_solicitante" name="nome_solicitante" required><br>

            <label for="cargo_solicitante">Cargo do Solicitante:</label>
            <input type="text" id="cargo_solicitante" name="cargo_solicitante" required><br>

            <label for="nome_empresa">Nome da Empresa:</label>
            <input type="text" id="nome_empresa" name="nome_empresa" required><br>

            <label for="cnpj">CNPJ:</label>
            <input type="text" id="cnpj" name="cnpj" required><br>

            <label for="setor">Setor/Área de Solicitação:</label>
            <input type="text" id="setor" name="setor" required><br>

            <label for="telefone">Telefone de Contato:</label>
            <input type="tel" id="telefone" name="telefone" required><br>

            <label for="email">E-mail do Solicitante:</label>
            <input type="email" id="email" name="email" required><br>

            <label for="data_solicitacao">Data da Solicitação:</label>
            <input type="date" id="data_solicitacao" name="data_solicitacao" required><br>

            <label for="urgencia">Urgência da Solicitação:</label>
            <select id="urgencia" name="urgencia" required>
                <option value="Baixa">Baixa</option>
                <option value="Média">Média</option>
                <option value="Alta">Alta</option>
            </select><br>

            <!-- Informações sobre a Queixa -->
            <h2>Informações sobre a Queixa</h2>
            <label for="problema_principal">Problema Principal:</label>
            <input type="text" id="problema_principal" name="problema_principal" required><br>

            <label for="descricao_detalhada">Descrição Detalhada:</label>
            <textarea id="descricao_detalhada" name="descricao_detalhada" required></textarea><br>

            <label for="impacto">Impacto do Problema:</label>
            <textarea id="impacto" name="impacto" required></textarea><br>

            <label for="outros_problemas">Outros Problemas Relacionados:</label>
            <textarea id="outros_problemas" name="outros_problemas"></textarea><br>

            <label for="arquivo">Arquivos para Análise:</label>
            <input type="file" id="arquivo" name="arquivo"><br>

            <label for="pergunta">Pergunta Opcional:</label>
            <textarea id="pergunta" name="pergunta"></textarea><br>

            <button type="submit" class="botao-enviar">Enviar Solicitação</button>
        </form>

        <!-- Botão para acessar a página de respostas -->
        <a href="respostas.php" class="botao-respostas">Ver Respostas</a>
    </div>
</body>
                </html>
