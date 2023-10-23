<!DOCTYPE html>
<html lang="Pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/administrador.css">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Administrador</title>
    

</head>
<body>
  
<header>
        <div class="logo">
        <a href="#"><img src="../Img/Logotipo/Grupo 11.png" alt="Logo"></a>  
        </div>
        <nav>
          <ul class="menu">
           
            <li class="menu-bar"><a href="#">contactos recebidos</a></li>
            <li class="menu-bar"><a href="solicitacoes.php">Solicitações de passaporte</a></li>
            <li class="menu-bar"><a href="../administrador.html">Sair</a></li>

          </ul>
        </nav>
       
</header>

 <?php
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "sme_base_de_dados";

   $conn = new mysqli($servername, $username, $password, $dbname);
   if ($conn->connect_error) {
     die("Falha na conexão com o banco de dados: " . $conn->connect_error);
   }

   if (isset($_GET['action']) && isset($_GET['id'])) {
     $action = $_GET['action'];
     $id = $_GET['id'];

     if ($action == 'eliminar') {
       // Excluir registro da tabela
       $sql = "DELETE FROM enviar_contactos WHERE id = '$id'";
       if ($conn->query($sql) === TRUE) {
         echo "<p>Contato eliminado com sucesso.</p>";
       } else {
         echo "<p>Erro ao eliminar contato: " . $conn->error . "</p>";
       }
     } elseif ($action == 'aprovar') {
       // Atualizar registro na tabela
       $sql = "UPDATE enviar_contactos SET aprovado = 1 WHERE id = '$id'";
       
     }
   }

   // Consulta SQL para recuperar os dados da tabela "enviar_contactos"
   $sql = "SELECT * FROM enviar_contactos";
   $result = $conn->query($sql);

   if ($result->num_rows > 0) {
     // Exibe os dados em uma tabela
     echo "<table>";
     echo "<tr><th>Nome</th><th>Email</th><th>Assunto</th><th>Ações</th></tr>";
     while ($row = $result->fetch_assoc()) {
       echo "<tr>";
       echo "<td>" . $row["nome"] . "</td>";
       echo "<td>" . $row["email"] . "</td>";
       echo "<td>" . $row["assunto"] . "</td>";
       echo "<td>";
       echo "<a href='?action=eliminar&id=" . $row["id"] . "' onclick='return confirm(\"Tem certeza que deseja excluir este contato?\")'>Eliminar</a>";
       
       echo "</td>";
       echo "</tr>";
     }
     echo "</table>";
   } else {
     echo "<p>Nenhum contato encontrado.</p>";
   }

   $conn->close();
 
?>



 
    


</body>

</html>