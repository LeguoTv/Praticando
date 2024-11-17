<?php
session_start();
// Conexão com o banco de dados (substitua pelos seus próprios detalhes)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mineprojeto";

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Obter dados do formulário
$nome = $_POST['nome'];
$senha = $_POST['senha'];

// Preparar e ligar
$stmt = $conn->prepare("INSERT INTO login (nome, senha) VALUES (?, ?)");
$stmt->bind_param("ss", $nome, $senha);

// Executar e definir mensagem
if ($stmt->execute() === TRUE) {
    $_SESSION['mensagem'] = "Novo usuário cadastrado com sucesso!";
} else {
    $_SESSION['mensagem'] = "Erro: " . $stmt->error;
}

// Fechar declaração e conexão
$stmt->close();
$conn->close();

// Redirecionar de volta para a página do formulário
header("Location: ../Público/index.php");
exit();
?>
