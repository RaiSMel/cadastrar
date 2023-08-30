<?php

$ID = filter_var($_POST["id"]);
$nome = filter_var($_POST["nome"]);
$email = filter_var($_POST["email"]);

include("conexao.php");
$query = "UPDATE cadastro SET Nome='$nome', Email='$email' WHERE ID=$ID; ";
mysqli_query($conexao, $query);
mysqli_close($conexao);

header("Location: ./../../listar.php")

?>
