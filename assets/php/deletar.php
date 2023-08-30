<?php

try{

    $ID = $_SERVER["REQUEST_URI"];
    $patern = "/(\?\w*)/m";
    $ID = preg_match_all($patern, $ID, $matches);
    $ID = str_replace("?", "", $matches[0][0]);
    $ID = filter_var($ID);
    
    include('conexao.php');
    $query = "DELETE FROM cadastro WHERE ID = '$ID';";
    $response = mysqli_query($conexao, $query);

    mysqli_close($conexao);
}catch(Exception $e){
    $_SESSION['Error'] = "Algo deu errado";
}

header('Location: ./../../listar.php');

?>