<?php
// Inicia a sessão
session_start();
// Define uma variável de sessão
$_SESSION['usuario'] = 'Ronaldo';
// Recupera e exibe o valor da variável de sessão
echo "O usuário é: " . $_SESSION['usuario'];
?>
