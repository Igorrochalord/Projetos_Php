<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "clientes";

$conn = new mysqli($hostname, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$sql = "DELETE FROM clientes WHERE nome='João'";
if ($conn->query($sql) === TRUE) {
    echo "Registro excluído com sucesso";
} else {
    echo "Erro ao excluir registro: " . $conn->error;
}

$conn->close();
?>
