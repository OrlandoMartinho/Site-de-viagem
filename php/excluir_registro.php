<?php
// Verificar se o ID do registro foi recebido
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Conexão com o banco de dados
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "sme_base_de_dados";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Falha na conexão com o banco de dados: " . $conn->connect_error);
    }

    // Excluir o registro da tabela
    $sql = "DELETE FROM solicitacao_passaporte WHERE id = $id";
    if ($conn->query($sql) === TRUE) {
        echo "Registro excluído com sucesso.";
    } else {
        echo "Erro ao excluir o registro: " . $conn->error;
    }

    // Fechar a conexão com o banco de dados
    $conn->close();
} else {
    echo "ID do registro não foi fornecido.";
}
?>
