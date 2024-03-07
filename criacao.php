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

// Criação da tabela
$sql = "CREATE TABLE IF NOT EXISTS clientes (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    telefone VARCHAR(15)
)";

if ($conn->query($sql) === TRUE) {
    echo "Tabela 'clientes' criada com sucesso";
} else {
    echo "Erro ao criar tabela 'clientes': " . $conn->error;
}

// Fecha a conexão
$conn->close();
?>
