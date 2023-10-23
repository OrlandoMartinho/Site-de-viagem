<?php
// Obtém os dados do formulário
$nome = $_POST['nome'];
$dataNascimento = $_POST['data-nascimento'];
$nacionalidade = $_POST['nacionalidade'];
$numeroRG = $_POST['rg'];
$cpf = $_POST['cpf'];
$sexo = $_POST['sexo'];
$endereco = $_POST['endereco'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$paisDestino = $_POST['pais-destino'];
$datasViagem = $_POST['datas-viagem'];
$motivoViagem = $_POST['motivo-viagem'];

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
$sql = "INSERT INTO solicitacao_passaporte (nome_completo, data_nascimento, nacionalidade, numero_rg, cpf, sexo, endereco, telefone, email, pais_destino, datas_viagem, motivo_viagem)
        VALUES ('$nome', '$dataNascimento', '$nacionalidade', '$numeroRG', '$cpf', '$sexo', '$endereco', '$telefone', '$email', '$paisDestino', '$datasViagem', '$motivoViagem')";

if ($conn->query($sql) === TRUE) {
    echo "O seu pedido está ser processado";
} else {
    echo "Erro ao inserir dados: " . $conn->error;
}

// Fecha a conexão com o banco de dados
$conn->close();
?>
