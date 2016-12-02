<?php 
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Cadastro</title>
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
					<h1>Cadastro Dados</h1>
                                        <form name="cad-paciente"
                                              id="cad-paciente"
                                              method="post" action="controle/paciente-controle.php?op=cadastrar">
                                            <div class="form-group">
                                                <input type="text" 
                                                   name="nome" 
                                                   placeholder="Digite seu Nome"
                                                   class="form-control"
                                                   pattern="^[A-zÁ-úã-õç ]{2,30}$"
                                                   autofocus
                                                   required="required">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" 
                                                   name="sobrenome" 
                                                   placeholder="Digite seu Sobrenome"
                                                   pattern="^[A-zÁ-úã-õç ]{2,30}$"
                                                   class="form-control"
                                                   required="required">
                                            </div>
                                            <div class="form-group">
                                                <input type="number" 
                                                   name="anoNasc" 
                                                   placeholder="Digite seu Ano de Nascimento"
                                                   class="form-control"
                                                   required="required">
                                            </div>
                                            <div class="form-group">
                                                <input type="number" 
                                                   name="telefone1" 
                                                   placeholder="Digite seu Telefone 1"
                                                   class="form-control"
                                                   required="required">
                                            </div>
                                            <div class="form-group">
                                                <input type="number" 
                                                   name="telefone2" 
                                                   placeholder="Digite seu Telefone 2"
                                                   class="form-control"
                                                   required="required">
                                            </div>
                                            <div class="form-group">
                                                <input type="email" 
                                                   name="email" 
                                                   placeholder="Digite seu Email"
                                                   class="form-control"
                                                   required="required">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" 
                                                   name="altura" 
                                                   placeholder="Digite sua Altura"
                                                   pattern="^[0-9.]{3,4}$"
                                                   class="form-control"
                                                   required="required">
                                            </div>
                                            <div class="form-group">
                                                <input type="number" 
                                                   name="peso" 
                                                   placeholder="Digite seu Peso"
                                                   class="form-control"
                                                   required="required">
                                            </div>
                                            <div class="form-group">
                                                <select name="meta" class="form-control">
                                                    <option value="perdaPeso">Perda de Peso</option>
                                                    <option value="hipertrofia">Hipertrofia</option>
                                                    <option value="outra">Outra</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <textarea name="obs" 
                                                          id="obs"
                                                          placeholder="Observações..."
                                                          class="form-control"
                                                          ></textarea>
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