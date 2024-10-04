<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Captura os dados do formulário
    $dados = [
        'nome_solicitante' => $_POST['nome_solicitante'],
        'cargo_solicitante' => $_POST['cargo_solicitante'],
        'nome_empresa' => $_POST['nome_empresa'],
        'cnpj' => $_POST['cnpj'],
        'setor' => $_POST['setor'],
        'telefone' => $_POST['telefone'],
        'email' => $_POST['email'],
        'data_solicitacao' => $_POST['data_solicitacao'],
        'urgencia' => $_POST['urgencia'],
        'problema_principal' => $_POST['problema_principal'],
        'descricao_detalhada' => $_POST['descricao_detalhada'],
        'impacto' => $_POST['impacto'],
        'outros_problemas' => $_POST['outros_problemas'],
        'arquivo' => isset($_FILES['arquivo']) && $_FILES['arquivo']['error'] == 0 ? $_FILES['arquivo']['name'] : "Nenhum arquivo enviado",
        'pergunta' => $_POST['pergunta']
    ];

    // Processa o arquivo se enviado
    if (isset($_FILES['arquivo']) && $_FILES['arquivo']['error'] == 0) {
        move_uploaded_file($_FILES['arquivo']['tmp_name'], "uploads/" . $_FILES['arquivo']['name']);
    }

    // Verifica se o arquivo respostas.json já existe
    $arquivo = 'respostas.json';
    if (file_exists($arquivo)) {
        $conteudo = json_decode(file_get_contents($arquivo), true);
    } else {
        $conteudo = [];
    }

    // Adiciona a nova solicitação
    $conteudo[] = $dados;

    // Salva o arquivo JSON atualizado
    file_put_contents($arquivo, json_encode($conteudo, JSON_PRETTY_PRINT));

    echo "Solicitação enviada com sucesso!";
} else {
    echo "Método de requisição inválido.";
}
?>
