<?php session_start();
if(isset($_SESSION['paciente'])){
    include 'modelo/paciente.class.php';
    $paciente = unserialize($_SESSION['paciente']);
    //somente para teste
    //var_dump($paciente);
}else{
    header("location:cadastro-paciente.html");
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Início</title>
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
					<h1>Alterar</h1>

                    <form name="alterar" 
                          method="post" 
                          action="controle/paciente-controle.php?op=confirmar-alteracao">
                        <fieldset><legend>Formulário para Alterar</legend>

                            
                            <div class="form-group">
                                <input type="text" name="nome" 
                                       pattern="^[A-zÁ-úã-õç ]{2,30}$" 
                                       placeholder="Nome" class="form-control"
                                       value="<?php
                                       echo $paciente[0]->nome;
                                       ?>"/>
                            </div>
                            <div class="form-group">
                                <input type="number" name="anoNasc"  placeholder="Ano de Nascimento" class="form-control" 
                                       value="<?php
                                       echo $paciente[0]->anoNasc;
                                       ?>"/>  
                            </div>
                            <div class="form-group">
                                <input type="number" name="telefone1"  placeholder="Telefone 1" class="form-control" 
                                       value="<?php
                                       echo $paciente[0]->telefone1;
                                       ?>"/>  
                            </div>
                            <div class="form-group">
                                <input type="number" name="telefone2"  placeholder="Telefone 2" class="form-control"
                                       value="<?php
                                       echo $paciente[0]->telefone2;
                                       ?>"/> 
                            </div>
                            <div class="form-group">
                                <input type="email" name="email"  placeholder="Email" class="form-control" 
                                       value="<?php
                                       echo $paciente[0]->email;
                                       ?>"/>  
                            </div>
                            <div class="form-group">
                                <input type="text" name="altura"  
                                        pattern="^[0-9.]{3,4}$"
                                       placeholder="Altura" class="form-control"
                                       value="<?php
                                       echo $paciente[0]->altura;
                                       ?>"/>   
                            </div>
                            <div class="form-group">
                                <input type="number" name="peso"  placeholder="Peso" class="form-control"
                                       value="<?php
                                       echo $paciente[0]->peso;
                                       ?>"/>  
                            </div>
                            <div class="form-group">
                                <select name="meta" class="form-control">
                                    <option value="selecione">selecione</option>
                                    <option value="perdaPeso" 
                                            <?php 
                                                if($paciente[0]->meta == 'perdaPeso'){
                                                    echo "selected='selected'";
                                                } 
                                                ?>>perdaPeso</option>
                                    <option value="hipertrofia" 
                                            <?php 
                                                if($paciente[0]->meta == 'hipertrofia'){
                                                    echo "selected='selected'";
                                                } 
                                                ?>>hipertrofia</option> 
                                    <option value="outra" 
                                            <?php 
                                                if($paciente[0]->meta == 'outra'){
                                                    echo "selected='selected'";
                                                } 
                                                ?>>outra</option> 
                                </select>
                            </div>
                            <div class="form-group">
                                <textarea name="obs" 
                                          id="obs"
                                          placeholder="Observações"
                                          class="form-control"
                                          value="<?php
                                          echo $paciente[0]->obs;
                                          ?>"/></textarea>
                                    
                            </div>
                            <div class="form-group">
                                <input type="hidden" name="id" value="<?php echo $paciente[0]->idPaciente; ?>" >
                                <input type="submit" name="btnalterar" value="alterar" class="btn btn-primary"/>
                            </div>
                        </fieldset>
                    </form>

					
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

