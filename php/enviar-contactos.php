<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $nome = $_POST['name'];
  $email = $_POST['email'];
  $assunto = $_POST['assunto'];

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "sme_base_de_dados";

  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
  }

  $sql = "INSERT INTO enviar_contactos (nome, email, assunto)
          VALUES ('$nome', '$email', '$assunto')";

  if ($conn->query($sql) === TRUE) {
    echo "Obrigado por nos contactar ,será respondido os mais breve possível";
  } else {
    echo "Erro ao inserir dados: " . $conn->error;
  }

  $conn->close();
}
?>
