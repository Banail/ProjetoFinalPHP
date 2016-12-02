<?php session_start();
if(isset($_SESSION['endereco'])){
    include 'modelo/endereco.class.php';
    $endereco = unserialize($_SESSION['endereco']);
    //somente para teste
    //var_dump($paciente);
}else{
    header("location:cadastro-endereco.html");
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Alterar</title>
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
                          method="POST" 
                          action="controle/endereco-controle.php?op=confirmar-alteracao">
                        <fieldset><legend>Formulário para Alterar</legend>

                            <div class="form-group">
                                <input type="text" name="idEndereco"  
                                       placeholder="Código" class="form-control"
                                       readonly="readonly"
                                       value="<?php 
                                        echo $endereco[0]->idEndereco;
                                        ?>" />
                            <div class="form-group">
                                <input type="text" name="rua"  placeholder="Rua" 
                                       pattern="^[A-zÁ-úã-õç ]{2,30}$"
                                       class="form-control"
                                       value="<?php
                                       echo $endereco[0]->rua;
                                       ?>"/>
                            </div>
                            <div class="form-group">
                                <input type="text" name="bairro" 
                                       pattern="^[A-zÁ-úã-õç ]{2,30}$"
                                       placeholder="Bairro" class="form-control" 
                                       value="<?php
                                       echo $endereco[0]->bairro;
                                       ?>"/>  
                            </div>
                            <div class="form-group">
                                <input type="text" 
                                       name="cidade"  
                                       pattern="^[A-zÁ-úã-õç ]{2,30}$"
                                       placeholder="Cidade" class="form-control" 
                                       value="<?php
                                       echo $endereco[0]->cidade;
                                       ?>"/>  
                            </div>
                            <div class="form-group">
                                <input type="number" name="numero"  placeholder="Número" class="form-control"
                                       value="<?php
                                       echo $endereco[0]->numero;
                                       ?>"/> 
                            </div>
                       
                            <div class="form-group">
                                <select name="uf" class="form-control">
                                    <option value="selecione">selecione</option>
                                    <option value="rs" 
                                            <?php 
                                                if($endereco[0]->uf == 'rs'){
                                                    echo "selected='selected'";
                                                } 
                                                ?>>rs</option>
                                    <option value="sc" 
                                            <?php 
                                                if($endereco[0]->uf == 'sc'){
                                                    echo "selected='selected'";
                                                } 
                                                ?>>sc</option> 
                                    <option value="pr" 
                                            <?php 
                                                if($endereco[0]->uf == 'pr'){
                                                    echo "selected='selected'";
                                                } 
                                                ?>>pr</option>
                                    <option value="sp" 
                                            <?php 
                                                if($endereco[0]->uf == 'sp'){
                                                    echo "selected='selected'";
                                                } 
                                                ?>>sp</option>
                                    <option value="rj" 
                                            <?php 
                                                if($endereco[0]->uf == 'rj'){
                                                    echo "selected='selected'";
                                                } 
                                                ?>>rj</option> 
                                    <option value="mg" 
                                            <?php 
                                                if($endereco[0]->uf == 'mg'){
                                                    echo "selected='selected'";
                                                } 
                                                ?>>mg</option>
                                    <option value="es" 
                                            <?php 
                                                if($endereco[0]->uf == 'es'){
                                                    echo "selected='selected'";
                                                } 
                                                ?>>es</option>
                                    <option value="mt" 
                                            <?php 
                                                if($endereco[0]->uf == 'mt'){
                                                    echo "selected='selected'";
                                                } 
                                                ?>>mt</option> 
                                    <option value="ms" 
                                            <?php 
                                                if($endereco[0]->uf == 'ms'){
                                                    echo "selected='selected'";
                                                } 
                                                ?>>ms</option>
                                    <option value="go" 
                                            <?php 
                                                if($endereco[0]->uf == 'go'){
                                                    echo "selected='selected'";
                                                } 
                                                ?>>go</option>
                                    <option value="ba" 
                                            <?php 
                                                if($endereco[0]->uf == 'ba'){
                                                    echo "selected='selected'";
                                                } 
                                                ?>>ba</option> 
                                    <option value="to" 
                                            <?php 
                                                if($endereco[0]->uf == 'to'){
                                                    echo "selected='selected'";
                                                } 
                                                ?>>to</option>
                                    <option value="se" 
                                            <?php 
                                                if($endereco[0]->uf == 'se'){
                                                    echo "selected='selected'";
                                                } 
                                                ?>>se</option>
                                    <option value="al" 
                                            <?php 
                                                if($endereco[0]->uf == 'al'){
                                                    echo "selected='selected'";
                                                } 
                                                ?>>al</option> 
                                    <option value="pe" 
                                            <?php 
                                                if($endereco[0]->uf == 'pe'){
                                                    echo "selected='selected'";
                                                } 
                                                ?>>pe</option>
                                    <option value="ce" 
                                            <?php 
                                                if($endereco[0]->uf == 'ce'){
                                                    echo "selected='selected'";
                                                } 
                                                ?>>ce</option>
                                    <option value="pi" 
                                            <?php 
                                                if($endereco[0]->uf == 'pi'){
                                                    echo "selected='selected'";
                                                } 
                                                ?>>sc</option> 
                                    <option value="rn" 
                                            <?php 
                                                if($endereco[0]->uf == 'rn'){
                                                    echo "selected='selected'";
                                                } 
                                                ?>>rn</option>
                                    <option value="rd" 
                                            <?php 
                                                if($endereco[0]->uf == 'rd'){
                                                    echo "selected='selected'";
                                                } 
                                                ?>>rd</option>
                                    <option value="ap" 
                                            <?php 
                                                if($endereco[0]->uf == 'ap'){
                                                    echo "selected='selected'";
                                                } 
                                                ?>>ap</option> 
                                    <option value="rr" 
                                            <?php 
                                                if($endereco[0]->uf == 'rr'){
                                                    echo "selected='selected'";
                                                } 
                                                ?>>rr</option>
                                    <option value="am" 
                                            <?php 
                                                if($endereco[0]->uf == 'am'){
                                                    echo "selected='selected'";
                                                } 
                                                ?>>am</option>
                                    <option value="ma" 
                                            <?php 
                                                if($endereco[0]->uf == 'ma'){
                                                    echo "selected='selected'";
                                                } 
                                                ?>>ma</option> 
                                    <option value="pa" 
                                            <?php 
                                                if($endereco[0]->uf == 'pa'){
                                                    echo "selected='selected'";
                                                } 
                                                ?>>pa</option>
                                    <option value="pb" 
                                            <?php 
                                                if($endereco[0]->uf == 'pb'){
                                                    echo "selected='selected'";
                                                } 
                                                ?>>pb</option>
                                    <option value="df" 
                                            <?php 
                                                if($endereco[0]->uf == 'df'){
                                                    echo "selected='selected'";
                                                } 
                                                ?>>df</option> 
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <input type="hidden" name="id" value="<?php echo $endereco[0]->idEndereco; ?>" >
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



