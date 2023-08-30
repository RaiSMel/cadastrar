<?php 
try{
include('conexao.php');

$query = "Select * from cadastro";
$cadastros = mysqli_query($conexao, $query);
$valores = [];
while($row = mysqli_fetch_array($cadastros)){
    $valores[] = $row;
}
}
catch(Exception $e){
    $_SESSION['Error'] = 'Algo deu errado';
}
mysqli_close($conexao);

?>