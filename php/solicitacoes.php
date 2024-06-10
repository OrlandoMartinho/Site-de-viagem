
<!DOCTYPE html>
<html lang="Pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
   
<link rel="stylesheet" href="../css/estilo.css">
    <link rel="stylesheet" href="../css/solicitacoes.css">

</head>
<body>
  
<header>
        <div class="logo">
        <a href="#"><img src="../Img/Logotipo/Grupo 11.png" alt="Logo"></a>  
        </div>
        <nav>
          <ul class="menu">
           
            <li class="menu-bar"><a href="administrador.php">contactos recebidos</a></li>
            <li class="menu-bar"><a href="solicitar.php">Solicitações de passaport</a></li>
            <li class="menu-bar"><a href="../administrador.html">Sair</a></li>
          </ul>
        </nav>
       
      </header>
<div class="search-container">
  <input type="text" id="search-input" placeholder="Digite o nome...">
  <button onclick="searchTable()">Pesquisar</button>
</div>

  <div class="tabela">


  <?php
// Conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sme_base_de_dados";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

// Consulta SQL para recuperar os dados da tabela
$sql = "SELECT * FROM solicitacao_passaporte";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<input type='text' id='search-input' onkeyup='searchTable()' placeholder='Digite o termo de pesquisa...'>";

  echo "<table>";
  echo "<tr><th>Nome</th><th>Data de Nascimento</th><th>Nacionalidade</th><th>RG</th><th>CPF</th><th>Sexo</th><th>Endereço</th><th>Telefone</th><th>Email</th><th>País de Destino</th><th>Datas de Viagem</th><th>Motivo da Viagem</th><th>Ações</th></tr>";
  while ($row = $result->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $row["nome_completo"] . "</td>";
      echo "<td>" . $row["data_nascimento"] . "</td>";
      echo "<td>" . $row["nacionalidade"] . "</td>";
      echo "<td>" . $row["numero_rg"] . "</td>";
      echo "<td>" . $row["cpf"] . "</td>";
      echo "<td>" . $row["sexo"] . "</td>";
      echo "<td>" . $row["endereco"] . "</td>";
      echo "<td>" . $row["telefone"] . "</td>";
      echo "<td>" . $row["email"] . "</td>";
      echo "<td>" . $row["pais_destino"] . "</td>";
      echo "<td>" . $row["datas_viagem"] . "</td>";
      echo "<td>" . $row["motivo_viagem"] . "</td>";
      echo "<td>";
      echo "<button class='btn-excluir' data-id='" . $row["id"] . "' onclick='excluirRegistro(" . $row["id"] . ")'>Excluir</button>";
      echo "<button class='btn-aprovar' data-id='" . $row["id"] . "' onclick='aprovarRegistro(" . $row["id"] . ")'>Aprovar</button>";
      echo "</td>";
      echo "</tr>";
  }
  echo "</table>";
} else {
    echo "Nenhum resultado encontrado na tabela.";
}

// Fechar a conexão com o banco de dados
$conn->close();
?>

  </div>    
    


</body>
<script src="../js/solicitacoes.js">





</script>
</html>
















