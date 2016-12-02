<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Resposta
        </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <meta name="author" content="Lara Ludwig e Thomas Martinez" />

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/estilo.css" rel="stylesheet">

        <script src="js/jquery-3.0.0.min.js"></script>

        <!-- Script utilizado para inserir o menu de forma dinâmica -->
        <script type="text/javascript">
            $(document).ready(function () {
                $("#menu-esquerda").load("menu/menu-esquerda.html");
                $("#menu-direita").load("menu/menu-direita.html");
            });
        </script>		
    </head>

    <body>
        <div class="container-fluid">
            <header class="fade">

            </header>

            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="#"></a>
                    </div>

                    <ul class="nav navbar-nav" id="menu-esquerda">
                        <!-- Inserido via função -->
                    </ul>

                    <ul class="nav navbar-nav navbar-right" id="menu-direita">
                        <!-- Inserido via função -->
                    </ul>
                </div>
            </nav>

            <div class="row">
                <nav class="col-md-2">
                    <a href="https://www.facebook.com/lara.ludwig.92?fref=ts">Contato Lara</a>
                </nav>

                <div role="main" class="col-md-8">
                    <h1>Resposta</h1>
                    <?php
                    if (isset($_SESSION['msg']) && isset($_SESSION['r'])) {
                        include 'modelo/endereco.class.php';
                        $r = unserialize($_SESSION['r']);
                        echo '<p>';
                            echo $_SESSION['msg'];
                            echo '<br>Endereço cadastrado:<br>';
                            echo $r->__toString();
                        echo '</p>';
                        unset($_SESSION['msg']);
                        unset($_SESSION['r']);
                    }
                    ?>

                </div>

                <aside role="complementary" class="col-md-2">
                    <a href="https://www.facebook.com/thomas.andre.37?fref=ts">Contato Thomas</a>
                </aside>
            </div>

            <footer class="sucess">
                Developed by Lara Ludwig e Thomas Martinez.
            </footer>		
        </div>
        <!-- jQuery (necessario para os plugins Javascript Bootstrap) -->
        <script src="js/jquery-3.0.0.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
