<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "clientes";

$conn = new mysqli($hostname, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$sql = "INSERT INTO clientes (nome, email, telefone) VALUES ('João', 'joao@example.com', '123456789')";
if ($conn->query($sql) === TRUE) {
    echo "Novo registro inserido com sucesso";
} else {
    echo "Erro ao inserir registro: " . $conn->error;
}

$conn->close();
?>
