<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "clientes";

$conn = new mysqli($hostname, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Inicia a transação
$conn->begin_transaction();

try {
    $sql1 = "INSERT INTO clientes (nome, email, telefone) VALUES ('Maria', 'maria@example.com', '111111111')";
    $conn->query($sql1);

    $sql2 = "INSERT INTO clientes (nome, email, telefone) VALUES ('Pedro', 'pedro@example.com', '222222222')";
    $conn->query($sql2);

    // Confirma a transação
    $conn->commit();
    echo "Transação concluída com sucesso";
} catch (Exception $e) {
    // Reverte a transação em caso de erro
    $conn->rollback();
    echo "Erro na transação: " . $e->getMessage();
}

$conn->close();
?>
