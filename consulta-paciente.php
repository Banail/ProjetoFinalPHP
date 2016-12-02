<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Consulta</title>
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
            <header class="modal">
               
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
                    <a href="https://www.facebook.com/lara.ludwig.92?fref=ts">Contato</a>
                </nav>

    <div role="main" class="col-md-8">
        <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover table-condensed">
		<thead>
			<tr>
                            <th>Excluir</th>
                            <th>Alterar</th>
                            <th>ID</th>
			    <th>Nome</th>
			    <th>Ano de Nascimento</th>
			    <th>Telefone 1</th>
			    <th>Telefone 2</th>
			    <th>Email</th>
			    <th>Altura</th>
			    <th>Peso</th>
			    <th>Meta</th>
			    <th>Observação</th>
			    <th>Idade</th>
			    <th>Imc</th>
			    <th>Verificar Imc</th>
			</tr>
		</thead>
		<tbody>
		<?php
		if(isset($_SESSION['pacientes'])){
		    include 'modelo/paciente.class.php';
		    $array = unserialize($_SESSION['pacientes']);
		    echo '<h1>Pacientes Cadastrados</h1>';
                   
		    foreach($array as $a){
		        echo '<tr>';
			    echo "<td><a href='controle/paciente-controle.php?op=deletar&id=$a->idPaciente'><img src='imagens/remove.jpg'   alt='excluir'></a></td>";
			    echo "<td><a href='controle/paciente-controle.php?op=alterar&id=$a->idPaciente'><img src='imagens/edit.png'   alt='alterar'></a></td>";
                            echo '<td>'.$a->idPaciente.'</td>';
                            echo '<td>'.$a->nome.'</td>';
                            echo '<td>'.$a->anoNasc.'</td>';
                            echo '<td>'.$a->telefone1.'</td>';
                            echo '<td>'.$a->telefone2.'</td>';
                            echo '<td>'.$a->email.'</td>';
                            echo '<td>'.$a->altura.'</td>';
                            echo '<td>'.$a->peso.'</td>';
                            echo '<td>'.$a->meta.'</td>';
                            echo '<td>'.$a->obs.'</td>';
                            echo '<td>'.$a->idade.'</td>';
                            echo '<td>'.$a->imc.'</td>';
                            echo '<td>'.$a->vImc.'</td>';
		        echo '</tr>';
		    }//fecha foreach
		    unset($_SESSION['pacientes']);
		}else{
		    header("location:controle/paciente-controle.php?op=consultar");
		}//fecha else 
		?>
		</tbody>
	</table>
	</div>
    </div>

                <aside role="complementary" class="col-md-2">
                    <a href="https://www.facebook.com/thomas.andre.37?fref=ts">Contato</a>
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


