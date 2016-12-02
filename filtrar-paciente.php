<!DOCTYPE html>
<html>
	<head>
		<title>Filtrar</title>
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
					<h1>Filtrar</h1>
					<form name="filtrar" method="POST" action="controle/paciente-controle.php?op=filtrar">
						<div class="form-group">
							<input type="text" 
							name="filtro" 
							placeholder="Digite" 
							class="form-control">

						</div>
						<div class="form-group">
						<label><input type="radio" name="rdfiltro" value="idPaciente" class="radio-inline">Código</label>
                                                <label><input type="radio" name="rdfiltro" value="nome" class="radio-inline">Nome</label>
						<label><input type="radio" name="rdfiltro" value="AnoNasc" class="radio-inline">Ano Nascimento</label>
						<label><input type="radio" name="rdfiltro" value="telefone1" class="radio-inline">Telefone 1</label>
						<label><input type="radio" name="rdfiltro" value="telefone2" class="radio-inline">Telefone 2</label>
						<label><input type="radio" name="rdfiltro" value="email" class="radio-inline">Email</label>
						<label><input type="radio" name="rdfiltro" value="altura" class="radio-inline">Altura</label>
						<label><input type="radio" name="rdfiltro" value="peso" class="radio-inline">Peso</label>
						<label><input type="radio" name="rdfiltro" value="meta" class="radio-inline">Meta</label>
						<label><input type="radio" name="rdfiltro" value="obs" class="radio-inline">Observação</label>
						</div>
						<div class="form-group">
							<input type="submit" value="Filtrar" class="btn btn-primary">
							<input type="reset" value="Deletar" class="btn btn-danger">
						</div> 
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