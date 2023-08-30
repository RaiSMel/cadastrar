<?php

try{
    
    include('conexao.php');
    
    $nome = filter_var($_POST['nome'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $data = date("Y/m/d");
    
    $cadastro = "INSERT INTO `cadastro` (`nome`,`email`, `dataCadastro` ) VALUES ('$nome', '$email', '$data');";
    
    $response = mysqli_query($conexao, $cadastro);
    
    if($response){
        $_SESSION['Error'] = "Salvou";
    }
    else{   
    $_SESSION['Error'] = "Algo deu errado";
}

mysqli_close($conexao);
}catch(exception $e){
    $_SESSION['Error'] = "Algo deu errado";
}

header("Location: ./../../index.php");

?>