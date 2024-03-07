<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "clientes";

$conn = new mysqli($hostname, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$sql = "UPDATE clientes SET telefone='987654321' WHERE nome='João'";
if ($conn->query($sql) === TRUE) {
    echo "Registro atualizado com sucesso";
} else {
    echo "Erro ao atualizar registro: " . $conn->error;
}

$conn->close();
?>
