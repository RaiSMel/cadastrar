<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Cadastrar</title>
    <link rel="shortcut icon" href="./assets/images/titleImg.png" type="image/x-icon">
    <link rel="stylesheet" href="./assets/css/cabecalho.css">
    <link rel="stylesheet" href="./assets/css/principal.css">
    <link rel="stylesheet" href="./assets/css/rodape.css">
</head>

<body>

    <?php include('./assets/php/cabecalho.php'); ?>

    <main class="principal">

        <section class="novo">
            <h1 class="titulo">Cadastro de Cliente</h1>
            <h2 class="subtitulo">Novo Cliente</h2>
            <form action="./assets/php/cadastrar.php" method="post" class="formulario">



                <label for="nome" class="marcador">Nome: </label>
                <input name="nome" id="nome" type="text" minlength="3" maxlength="10" class="entrada" autocomplete="on" data-tipo="nome" pattern="[A-zÀ-ú\s]+" required>

                <label for="email" class="marcador">Email: </label>
                <input name="email" id="email" type="email" minlength="5" maxlength="20" class="entrada" autocomplete="on" data-tipo="email" required>
                <p class="validar" data-validar></p>
                <div class="botoes">
                    <a role="button" class="botao listar" href="./listar.php">Listar</a>
                    <button type="submit" class="botao incluir">Incluir</button>
                </div>
            </form>

        </section>

    </main>
    <?php include('./assets/php/rodape.php'); ?>

    <?php


    if (isset($_SESSION['cadastro'])) :
    ?>
        <script>
            alert("<?php echo $_SESSION['Error'] ?> ")
        </script>
    <?php
        unset($_SESSION['Error']);
    endif;

    ?>

    <script src="./assets/javascript/App.js" type="module"></script>
</body>

</html>