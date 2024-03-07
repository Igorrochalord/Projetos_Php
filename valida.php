<?php
$nome = $email = "";
$nomeErr = $emailErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["nome"])) {
    $nomeErr = "O nome é obrigatório";
  } else {
    $nome = test_input($_POST["nome"]);
  }

  if (empty($_POST["email"])) {
    $emailErr = "O email é obrigatório";
  } else {
    $email = test_input($_POST["email"]);
    // Verifica se o email está no formato correto
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Formato de email inválido";
    }
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
