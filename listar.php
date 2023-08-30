<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Listar</title>
    <link rel="shortcut icon" href="./assets/images/titleImg.png" type="image/x-icon">
    <link rel="stylesheet" href="./assets/css/cabecalho.css">
    <link rel="stylesheet" href="./assets/css/principal.css">
    <link rel="stylesheet" href="./assets/css/modal.css">
    <link rel="stylesheet" href="./assets/css/rodape.css">
</head>

<body>

    <?php include('./assets/php/cabecalho.php');
    include('./assets/php/consultar.php');

    ?>

    <main class="principal">
        <div class="cadastros">
            <?php
            if (!empty($valores)) :

            ?>
                <div class="nomes atributo">
                    <p class="titulo">Nome</p>
                    <?php

                    foreach ($valores as $valor) {
                        echo "<p class='cadastro__itens'>" . $valor['Nome'] . "</p>";
                    }
                    ?>
                </div>
                <div class="emails atributo">
                    <p class="titulo">Email</p>
                    <?php
                    foreach ($valores as $valor) {
                        echo "<p class='cadastro__itens'>" . $valor['Email'] . "</p>";
                    }
                    ?>
                </div>
                <div class="dataCadast atributo">
                    <p class="titulo">Data</p>
                    <?php
                    foreach ($valores as $valor) {
                        $Nota = $valor['dataCadastro'];
                        $Resultado = explode('-', $Nota);
                        list($ano, $mes, $dia) = $Resultado;

                        echo "<p class='cadastro__itens'>" . "$dia/$mes/$ano" . "</p>";
                    }
                    ?>
                </div>
                <div class="cadastros--container">
                    <p class="titulo">Editar</p>
                    <div class="cadastros--editar">

                        <?php
                        foreach ($valores as $valor) {
                            echo "<a href='./assets/php/deletar.php?" . $valor["ID"] . "' class='cadastros--links'><svg class='cadastro--excluir__svg' xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='1.5' stroke='currentColor' class='w-6 h-6'>
                            <path stroke-linecap='round' stroke-linejoin='round' d='M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0' />
                            </svg>
                            </a>";
                        }

                        ?>
                    </div>
                    <div class="cadastros--editar">

                        <?php

                        foreach ($valores as $valor) {
                            echo "<a href='#' class='cadastros--excluir' data-number='" . $valor['ID'] . "|" . $valor['Nome'] . "|" . $valor['Email'] . "'><svg class='cadastro--editar__svg' xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='1.5' stroke='currentColor' class='w-6 h-6'>
                            <path stroke-linecap='round' stroke-linejoin='round' d='M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10' />
                            </svg>
                            </a>";
                        }

                        ?>


                    </div>


                </div>

            <?php else :
                echo "<h1 class=''>Nenhum cadastro no Banco de Dados</h1>";
            endif;

            ?>


        </div>

        <div class="modal">
            <form action="./assets/php/editar.php" method="post" class="editar">
                <input name="id" type="text" id="id" style="visibility: hidden;">
                <label for="nome" class="marcador">Nome</label>
                <input name="nome" id="modal__nome" type="text" class="entrada" data-tipo="nome">
                <label for="email" class="marcador">Email</label>
                <input name="email" id="modal__email" type="text" class="entrada" data-tipo="email">
                <div class="botoes">

                    <button type="submit" class="botao">Editar</button>
                    <a role="button" class="botao cancelar">Cancelar</a>
                </div>
            </form>
        </div>
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



    <script src="./assets/javascript/gerarPainel.js" type="module"></script>


</body>

</html>