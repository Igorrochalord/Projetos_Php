<?php
// Define um cookie com o nome 'usuario' e valor 'Joao' com validade de 1 hora
setcookie("usuario", "Joao", time() + 3600, "/");
// Recupera e exibe o valor do cookie 'usuario'
echo "O usuário é: " . $_COOKIE['usuario'];
?>
