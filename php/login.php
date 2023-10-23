<?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Obtém os dados do formulário
  $nome = $_POST['nome'];
  $senha = $_POST['senha'];

  // Verifica as credenciais de login
  if ($nome === 'Jonilson' && $senha === 'Jonilson') {
    // Login bem-sucedido
    header("Location: administrador.php");
    exit();
    echo "Login bem-sucedido. Bem-vindo, $nome!";
  } else {
    // Login inválido
    echo "Nome de usuário ou senha incorretos.";
  }
}
?>
