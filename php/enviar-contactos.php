<?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Obtém os dados do formulário
  $nome = $_POST['name'];
  $email = $_POST['email'];
  $assunto = $_POST['assunto'];

  // Conexão com o banco de dados
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "sme_base_de_dados";

  $conn = new mysqli($servername, $username, $password, $dbname);

  // Verifica se a conexão foi estabelecida com sucesso
  if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
  }

  // Insere os dados na tabela
  $sql = "INSERT INTO enviar_contactos (nome, email, assunto)
          VALUES ('$nome', '$email', '$assunto')";

  if ($conn->query($sql) === TRUE) {
    echo "Obrigado por nos contactar ,será respondido os mais breve possível";
  } else {
    echo "Erro ao inserir dados: " . $conn->error;
  }

  // Fecha a conexão com o banco de dados
  $conn->close();
}
?>
