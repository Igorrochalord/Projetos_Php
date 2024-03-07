<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "clientes";

$conn = new mysqli($hostname, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$stmt = $conn->prepare("INSERT INTO clientes (nome, email, telefone) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $nome, $email, $telefone);

$nome = "Ana";
$email = "ana@example.com";
$telefone = "333333333";
$stmt->execute();

echo "Novo registro inserido com sucesso";

$stmt->close();
$conn->close();
?>
