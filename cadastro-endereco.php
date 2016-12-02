<?php 
session_start();
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
           		  <a href="https://www.facebook.com/lara.ludwig.92?fref=ts">Contato Lara</a>
		        </nav>
		   	
				<div role="main" class="col-md-8">
					<h1>Cadastro Endereço</h1>
					<form name="cad-endereco" method="post" action="controle/endereco-controle.php?op=cadastrar">
						<div class="form-group">
							<input type="text"
                                                        name="rua" 
                                                        class="form-control"
							required="required" 
							autofocus
							pattern="^[A-zÁ-úã-õç ]{2,30}$"
                                                        placeholder="Digite o nome da Rua:">
						</div>
						<div class="form-group">
							<input type="text"
							name="bairro"
							class="form-control" 
							pattern="^[A-zÁ-úã-õç ]{2,30}$"
                                                        required="required" 
							placeholder="Digite o nome do Bairro:">
						</div>
						<div class="form-group">
							<input type="text"
							name="cidade"
                                                        placeholder="Digite a cidade:"
                                                        pattern="^[A-zÁ-úã-õç ]{2,30}$"
                                                        class="form-control" 
							required="required" 
							>
						</div>
						<div class="form-group">
							<input type="number"
							name="numero"
                                                        placeholder="Digite o Número:"
                                                        class="form-control" 
							required="required" 
							>
						</div>
						<div class="form-group">
							<select name="uf" class="form-control">
								<option value="rs">Rio Grande do Sul</option>
								<option value="sc">Santa Catarina</option>
								<option value="pr">Paraná</option>
								<option value="sp">São Paulo</option>
								<option value="rj">Rio de Janeiro</option>
								<option value="mg">Minas Gerais</option>
								<option value="es">Espírito Santo</option>
								<option value="mt">Mato Grosso</option>
								<option value="ms">Mato Grosso do Sul</option>
								<option value="go">Goiás</option>
								<option value="ba">Bahia</option>
								<option value="to">Tocantins</option>
								<option value="se">Sergipe</option>
								<option value="al">Alagoas</option>
								<option value="pe">Pernambuco</option>
								<option value="ce">Ceará</option>
								<option value="pi">Piauí</option>
								<option value="rn">Rio Grande do Norte</option>
								<option value="rd">Rondônia</option>
								<option value="ap">Amapá</option>
								<option value="rr">Roraima</option>
								<option value="am">Amazonas</option>
								<option value="ac">Acre</option>
								<option value="ma">Maranhão</option>
								<option value="pa">Pará</option>
								<option value="pb">Paraíba</option>
								<option value="df">Brasília</option>
							</select>
						</div>
						<div class="form-group">
                                                    <input type="submit" class="btn-primary" value="Cadastrar">
                                                    <input type="reset" class="btn-danger" value="Limpar">	
						</div>
					</form>

					
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