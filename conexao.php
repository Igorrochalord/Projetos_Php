<?php
$hostname = "localhost"; // Endereço do servidor MySQL/MariaDB
$username = "root"; // Nome de usuário do MySQL/MariaDB
$password = ""; // Senha do MySQL/MariaDB
$dbname = "clientes"; // Nome do banco de dados

// Cria a conexão
$conn = new mysqli($hostname, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
echo "Conexão bem-sucedida";
?>
