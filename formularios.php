<!DOCTYPE html>
<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Nome: <input type="text" name="nome">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Processamento do formulário
  $nome = $_POST['nome'];
  echo "Olá, $nome!";
}
?>

</body>
</html>
