<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];

    $dados = "Nome: $nome\nE-mail: $email\nMensagem: $mensagem\n---\n";

    $arquivo = 'mensagens.txt';

    if (file_put_contents($arquivo, $dados, FILE_APPEND)) {
        echo "Mensagem salva com sucesso!";
    } else {
        echo "Erro ao salvar a mensagem.";
    }
}
?>
