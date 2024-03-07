<?php
$sql = "SELECT id, nome, email FROM usuarios";
$result = $conn->query($sql);
->fetch_assoc()) {
    echo "ID: " . $row["id"]. " - Nome: " . $row["nome"]. " - Email: " . $row["email"]. "<br>";
  }
if ($result->num_rows > 0) {
  // Exibe cada linha de resultado
  while($row = $result->fetch_assoc()) {
    echo "ID: " . $row["id"]. " - Nome: " . $row["nome"]. " - Email: " . $row["email"]. "<br>";
  }
} else {
  echo "0 resultados";
}
?>
